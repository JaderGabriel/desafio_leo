<?php

class userDAO
{
    // Atributos do USUARIO dos sistema -> type será usado para definir ADMIN ou outros tipos de usuários, para fins de permissão.
    protected $id;
    public $nome;
    public $type;
    public $status;
    public $password;

    public function __construct($nm, $ty, $st, $ps){
        $this->nome = $nm;
        $this->type = $ty;
        $this->status = $st;
        $this->password = $ps;

    }


}