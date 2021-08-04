<?php
/*
 * Desenvolvido por: Jader Gabriel
 * github: https://github.com/jadergabriel
 * bitbucket: https://bitbucket.org/jadergabriel/
 * TELEGRAM: https://t.me/JaderGabriel
 */
/*try {
    $conn = new conexaoBD();
    $stmt = $conn->prepare('SELECT * FROM minhaTabela WHERE id = :id');
    $stmt->execute(array('id' => '1'));
    $result = $stmt->fetchAll();
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados :" . $pe->getMessage());
}*/
var_dump($_POST['login']);
var_dump($_POST['password']);
echo $_POST['login']; "</br>";
echo $_POST['password'];


