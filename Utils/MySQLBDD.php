<?php

class MySQLBDD implements InterfaceBDD {
    public function connexion(): PDO {
        return new PDO(
            'mysql:host=' . $_ENV['URL_BDD'] . ';dbname=' . $_ENV['NAME_BDD'] . ';port=' . $_ENV['PORT_BDD'],
            $_ENV['LOGIN_BDD'],
            $_ENV['PASSWORD_BDD'],
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }
}
