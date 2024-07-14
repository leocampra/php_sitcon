<?php
namespace Geral\V1\Rest\Pacientes;

class PacientesEntity
{
    protected $id;
    protected $nome;
    protected $status;
    protected $datanasc;
    protected $cpf;

    function getId()
    {
        return $this->id;
    }

    function getNome()
    {
        return $this->nome;
    }

    function getStatus()
    {
        return $this->status;
    }

    function getDatanasc()
    {
        return $this->datanasc;
    }

    function getCpf()
    {
        return $this->cpf;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    function setDatanasc($datanasc)
    {
        $this->datanasc = $datanasc;
        return $this;
    }

    function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }
}
