<?php

session_start();

include './env.php';
include './Interfaces/InterfaceView.php';
include './Interfaces/InterfaceBDD.php';
include './AbstractClasses/AbstractController.php';
include './AbstractClasses/AbstractModel.php';
include './Controller/AccountController.php';
include './Controller/MyAccountController.php';
include './Controller/DecoController.php';
include './Model/ModelAccount.php';
include './Utils/MySQLBDD.php';
include './Utils/utils.php';
include './Vues/ViewHeader.php';
include './Vues/ViewFooter.php';
include './Vues/ViewAccount.php';
include './Vues/ViewMyAccount.php';

// Parse l'URL entrée
$url = parse_url($_SERVER['REQUEST_URI']);
$path = isset($url['path']) ? $url['path'] : '/taskPOO/';


switch($path){
    case '/taskPOO/' :
        $home = new AccountController(['accountModel'=>new ModelAccount(new MySQLBDD())],['header'=>new ViewHeader(),'footer'=> new ViewFooter(), 'accueil' => new ViewAccount()]);
        $home->render();
        break;
    
    case '/taskPOO/moncompte' :
        $moncompte = new MyAccountController(null,['header'=>new ViewHeader(),'footer'=> new ViewFooter(), 'moncompte' => new ViewMyAccount()]);
        $moncompte->render();
        break;

    case '/taskPOO/deconnexion' :
        $deconnexion = new DecoController(null,null);
        $deconnexion->deconnexion();
        break;
}