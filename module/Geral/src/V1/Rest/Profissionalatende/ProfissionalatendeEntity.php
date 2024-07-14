<?php
namespace Geral\V1\Rest\Profissionalatende;

class ProfissionalatendeEntity
{
    protected $id;
    protected $procedimentos_id;
    protected $status;
    protected $profissional_id;

    function getId()
    {
        return $this->id;
    }

    function getProcedimentos_id()
    {
        return $this->procedimentos_id;
    }

    function getStatus()
    {
        return $this->status;
    }

    function getProfissional_id()
    {
        return $this->profissional_id;
    }

    function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    function setProcedimentos_id($procedimentos_id)
    {
        $this->procedimentos_id = $procedimentos_id;
        return $this;
    }

    function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    function setProfissional_id($profissional_id)
    {
        $this->profissional_id = $profissional_id;
        return $this;
    }
}
