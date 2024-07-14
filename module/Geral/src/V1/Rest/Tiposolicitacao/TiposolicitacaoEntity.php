<?php
namespace Geral\V1\Rest\Tiposolicitacao;

class TiposolicitacaoEntity
{
    protected $id;
    protected $descricao;
    protected $status;

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
}
