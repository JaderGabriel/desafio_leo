<?php
/*
 * Desenvolvido por: Jader Gabriel
 * github: https://github.com/jadergabriel
 * bitbucket: https://bitbucket.org/jadergabriel/
 * TELEGRAM: https://t.me/JaderGabriel
 */
require_once 'pdoconfig.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $_SESSION['mensagem'] = "Bem Vindo!";
    header("location: inicial.html");
} else {
    $_SESSION['mensagem'] = "O nome não pode ficar vazio";
    header("location: login.html");
   }

