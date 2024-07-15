<?php
namespace Geral\V1\Rest\Procedimentos;

class ProcedimentosEntity
{
    protected $id;
    protected $descricao;
    protected $status;
    protected $tipoid;

    function getId()
    {
        return $this->id;
    }

    function getDescricao()
    {
        return $this->descricao;
    }

    function getStatus()
    {
        return $this->status;
    }

    function getTipoid()
    {
        return $this->tipoid;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    function setTipoid($tipoid)
    {
        $this->tipoid = $tipoid;
        return $this;
    }
}
