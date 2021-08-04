<?php

class DBCnne
{
    private $_dbHostname = "Endereço do Servidor de Banco de Dados";
    private $_dbName = "Nome do Banco de Dados";
    private $_dbUsername = "Nome do Usuário";
    private $_dbPassword = " Senha de Acesso";
    private $_con;

    public function __construct() {
        try {
            $this->_con = new PDO("mysql:host=$this->_dbHostname;
            					         dbname=$this->_dbName",
                $this->_dbUsername,
                $this->_dbPassword);
            $this->_con->setAttribute(PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }
    // return Connection
    public function returnConnection() {
        return $this->_con;
    }

}
?>