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
    $stmt = $conexao->prepare("INSERT INTO curso (nome, imagem, descricao) VALUES (?,?,?)");
    $stmt->bindParam(1,$_POST['nome']);
    $stmt->bindParam(2,$_POST['imagem']);
    $stmt->bindParam(3,$_POST['descricao']);

    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            echo "Dados cadastrados com sucesso!";
            return header('inicial.html');

        } else {
            echo "Erro ao tentar efetivar cadastro";
            return header('inicial.html');
        }
    } else {
        throw new PDOException("Erro: Não foi possível executar a declaração sql");
    }
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}


