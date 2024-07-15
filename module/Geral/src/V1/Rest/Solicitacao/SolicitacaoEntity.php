<?php
namespace Geral\V1\Rest\Solicitacao;

class SolicitacaoEntity
{
    protected $id;
    protected $solicitacaoid;
    protected $procedimentosid;
    protected $nome;
    protected $datanasc;
    protected $cpf;
    protected $data;
    protected $procedimentos;
    protected $tiposolicitacao;
    protected $procedimento;

    function getId()
    {
        return $this->id;
    }

    function getSolicitacaoid()
    {
        return $this->solicitacaoid;
    }

    function getProcedimentosid()
    {
        return $this->procedimentosid;
    }
    
    function getNome()
    {
        return $this->nome;
    }
    
    function getDatanasc()
    {
        return $this->datanasc;
    }
    
    function getCpf()
    {
        return $this->cpf;
    }
    
    function getData()
    {
        return $this->data;
    }
    
    function getProcedimentos()
    {
        return $this->procedimentos;
    }
    
    function getTiposolicitacao()
    {
        return $this->tiposolicitacao;
    }

    function getProcedimento()
    {
        return $this->procedimento;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setSolicitacaoid($solicitacaoid)
    {
        $this->solicitacaoid = $solicitacaoid;
        return $this;
    }

    function setProcedimentosid($procedimentosid)
    {
        $this->procedimentosid = $procedimentosid;
        return $this;
    }
    
    function setNome($nome)
    {
        $this->nome = $nome;
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
    
    function setData($data)
    {
        $this->data = $data;
        return $this;
    }
    
    function setProcedimentos($procedimentos)
    {
        $this->procedimentos = $procedimentos;
        return $this;
    }
    
    function setTiposolicitacao($tiposolicitacao)
    {
        $this->tiposolicitacao = $tiposolicitacao;
        return $this;
    }

    function setProcedimento($procedimento)
    {
        $this->procedimento = $procedimento;
        return $this;
    }
}
