<?php

class user
{

    //Cadastro de um novo USER
    public function create($userDAO){

        $conn = new conexaoBD();
        $stmt = $conn->prepare("INSERT INTO user (nome, type, status, password) VALUES (?, ?, ?, ?)");
        $serializedObject = serialize($userDAO);
        $stmt->execute(array($serializedObject));
        $result = $stmt->fetchAll();

    }
    //Deleção de um USER - Se e somente se, não houver matriculas deste
    public function delete($userDAO){


    }
    //Atualização de um USER - Sem validação de regras de contexto
    public function update($userDAO){


    }
}