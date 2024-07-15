<?php

namespace Geral\V1\Rest\Solicitacaoprocedimento;

class SolicitacaoprocedimentoEntity
{
    protected $id;
    protected $data;
    protected $pacienteid;
    protected $tiposolicitacao;
    protected $procedimentos;

    function getId()
    {
        return $this->id;
    }

    function getData()
    {
        return $this->data;
    }

    function getPacienteid()
    {
        return $this->pacienteid;
    }

    function getTiposolicitacao()
    {
        return $this->tiposolicitacao;
    }

    function getProcedimentos()
    {
        return $this->procedimentos;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    function setPacienteid($pacienteid)
    {
        $this->pacienteid = $pacienteid;
        return $this;
    }

    function setTiposolicitacao($tiposolicitacao)
    {
        $this->tiposolicitacao = $tiposolicitacao;
        return $this;
    }

    function setProcedimentos($procedimentos)
    {
        $this->procedimentos = $procedimentos;
        return $this;
    }
}
