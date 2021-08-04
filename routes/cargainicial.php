<?php
use userDAO;
/*
 * Desenvolvido por: Jader Gabriel
 * github: https://github.com/jadergabriel
 * bitbucket: https://bitbucket.org/jadergabriel/
 * TELEGRAM: https://t.me/JaderGabriel
 */

try {
    $datetime = date_create()->format('Y-m-d H:i:s');
    $conexao = new PDO("mysql:host=localhost; dbname=desafio_leo", "root", "root");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
    $senha = sha1('admin');
    $stmt = $conexao->prepare("INSERT INTO user (nome, type, password) VALUES ('admin', 'admin',?)");
    $stmt->bindParam(1,$senha);
    $stmt1 = $conexao->prepare("INSERT INTO curso (nome, descricao, imagem) VALUES ('CURSO TESTE', 'TESTANDO O CADASTRO','https://cursosnovos.com.br/wp-content/uploads/2020/12/cursos-1-.png')");
    $stmt2 = $conexao->prepare("INSERT INTO curso (nome, descricao, imagem) VALUES ('CURSO TESTE', 'TESTANDO O CADASTRO','https://cursosnovos.com.br/wp-content/uploads/2020/12/cursos-1-.png')");
    $stmt3 = $conexao->prepare("INSERT INTO curso (nome, descricao, imagem) VALUES ('CURSO TESTE', 'TESTANDO O CADASTRO','https://cursosnovos.com.br/wp-content/uploads/2020/12/cursos-1-.png')");
    $stmt4 = $conexao->prepare("INSERT INTO curso (nome, descricao, imagem) VALUES ('CURSO TESTE', 'TESTANDO O CADASTRO','https://cursosnovos.com.br/wp-content/uploads/2020/12/cursos-1-.png')");
    $stmt5 = $conexao->prepare("INSERT INTO curso (nome, descricao, imagem) VALUES ('CURSO TESTE', 'TESTANDO O CADASTRO','https://cursosnovos.com.br/wp-content/uploads/2020/12/cursos-1-.png')");
    $stmt6 = $conexao->prepare("INSERT INTO curso (nome, descricao, imagem) VALUES ('CURSO TESTE', 'TESTANDO O CADASTRO','https://cursosnovos.com.br/wp-content/uploads/2020/12/cursos-1-.png')");
    $stmt7 = $conexao->prepare("INSERT INTO curso (nome, descricao, imagem) VALUES ('CURSO TESTE', 'TESTANDO O CADASTRO','https://cursosnovos.com.br/wp-content/uploads/2020/12/cursos-1-.png')");
   $stmt1->execute();
    $stmt2->execute();
    $stmt3->execute();
    $stmt4->execute();
    $stmt5->execute();
    $stmt6->execute();
    $stmt7->execute();




    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            echo "Dados cadastrados com sucesso!";

        } else {
            echo "Erro ao tentar efetivar cadastro";
        }
    } else {
        throw new PDOException("Erro: Não foi possível executar a declaração sql");
    }
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}



