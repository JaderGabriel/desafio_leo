<?php

class matriculaDAO
{
    public $id_user;
    public $id_curso;
    public $datematricula;

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user): void
    {
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getIdCurso()
    {
        return $this->id_curso;
    }

    /**
     * @param mixed $id_curso
     */
    public function setIdCurso($id_curso): void
    {
        $this->id_curso = $id_curso;
    }

    /**
     * @return mixed
     */
    public function getDatematricula()
    {
        return $this->datematricula;
    }

    /**
     * @param mixed $datematricula
     */
    public function setDatematricula($datematricula): void
    {
        $this->datematricula = $datematricula;
    }




}