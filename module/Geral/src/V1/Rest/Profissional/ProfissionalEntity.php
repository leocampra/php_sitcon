<?php
namespace Geral\V1\Rest\Profissional;

class ProfissionalEntity
{
    protected $id;
    protected $nome;
    protected $status;

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
}
