<?php
namespace Geral\V1\Rest\Procedimentos;

class ProcedimentosEntity
{
    protected $id;
    protected $descricao;
    protected $status;
    protected $tipo_id;

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

    function getTipo_id()
    {
        return $this->tipo_id;
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

    function setTipo_id($tipo_id)
    {
        $this->tipo_id = $tipo_id;
        return $this;
    }
}
