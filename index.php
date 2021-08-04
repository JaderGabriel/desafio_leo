<?php
/*
 * Desenvolvido por: Jader Gabriel
 * github: https://github.com/jadergabriel
 * bitbucket: https://bitbucket.org/jadergabriel/
 * TELEGRAM: https://t.me/JaderGabriel
 */
require_once 'pdoconfig.php';
session_start();
header("location: inicial.html");

if (isset($_SESSION['nome']) && $_SESSION['nome'] == true) {
    $_SESSION['mensagem'] = "Bem Vindo!";
    header("location: inicial.html");
} else {
    $_SESSION['mensagem'] = "O nome não pode ficar vazio";
    header("location: login.html");
   }
