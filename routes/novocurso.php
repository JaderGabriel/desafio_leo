<?php
/*
 * Desenvolvido por: Jader Gabriel
 * github: https://github.com/jadergabriel
 * bitbucket: https://bitbucket.org/jadergabriel/
 * TELEGRAM: https://t.me/JaderGabriel
 */

$curso = new courseDAO();
$curso ->setDescricao($_POST['descricao']);
$curso ->setImagem($_POST['imagem']);
$curso ->setNome($_POST['nome']);



