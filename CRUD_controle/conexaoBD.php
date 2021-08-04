<?php
/*
 * Desenvolvido por: Jader Gabriel
 * github: https://github.com/jadergabriel
 * bitbucket: https://bitbucket.org/jadergabriel/
 * TELEGRAM: https://t.me/JaderGabriel
 */
/*
 * Classe para que conectar a Aplicação ao SGBD
 * Toda operação no MYSql depende desta conexão*/
class conexaoBD
{
    private $host = 'localhost1';
    private $dbname = 'desafio_leo';
    private $username = 'root';
    private $password = 'root';

    public function __construct(){
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;", $this->username, $this->password);
        return $conn;
    }

}