<?php
/*
 * Desenvolvido por: Jader Gabriel
 * github: https://github.com/jadergabriel
 * bitbucket: https://bitbucket.org/jadergabriel/
 * TELEGRAM: https://t.me/JaderGabriel
 */

try {
    $conexao = new PDO("mysql:host=localhost; dbname=desafio_leo", "root", "root");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
    $senha = sha1($_POST['password']);
    $stmt = $conexao->prepare("SELECT * FROM user where nome=? AND password=?");
    $stmt->bindParam(1,$_POST['login']);
    $stmt->bindParam(2, $senha);
    $stmt->execute();
    if($stmt->rowCount()>0){
        $_SESSION['nome'] = $_POST['login'];
        return header('inicial.html');

    }
    else{
        unset ($_SESSION['nome']);
        unset ($_SESSION['password']);
        echo "Erro: Não foi possível recuperar os dados do banco de dados";
        header("location: login.html");
    }

}catch (PDOException $erro){
    echo "Erro na conexão:" . $erro->getMessage();
    header("location: login.html");
}



