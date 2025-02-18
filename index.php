<?php

session_start();

include './env.php';
include './Interfaces/InterfaceView.php';
include './Interfaces/InterfaceBDD.php';
include './AbstractClasses/AbstractController.php';
include './AbstractClasses/AbstractModel.php';
include './Controller/AccountController.php';
include './Model/ModelAccount.php';
include './Utils/MySQLBDD.php';
include './Utils/utils.php';
include './Vues/ViewHeader.php';
include './Vues/ViewFooter.php';
include './Vues/ViewAccount.php';

$bdd = new MySQLBDD();

// Initialisation du modèle Account avec la BDD
$modelAccount = new ModelAccount($bdd);

// Création du contrôleur avec le modèle et les vues
$home = new AccountController([$modelAccount], ['header' => new ViewHeader(), 'footer' => new ViewFooter()]);
$home->render();