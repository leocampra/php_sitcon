<?php

namespace Geral\V1\Rest\Pacientes;

use Laminas\Db\TableGateway\AbstractTableGateway;

class PacientesRepository
{
    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchall($data)
    {
        $sql = $this->tableGateway->getSql();
        $select = $sql->select();
        if (isset($data['nome'])) {
            $select->where(['nome LIKE ?'=>'%'.$data['nome'].'%']);
        }
        if (isset($dados['cpf'])) {
            $select->where(['cpf' => $data['cpf']]);
        }
        $select->order('nome asc');
        //echo $sql->getSqlstringForSqlObject($select); die ;
        return $this->tableGateway->selectWith($select);
    }

    public function fetch($id)
    {
        $sql = $this->tableGateway->getSql();
        $select = $sql->select()
        ->where(['id'=>$id]);
        //echo $sql->getSqlstringForSqlObject($select); die ;
        return $this->tableGateway->selectWith($select)->current();
    }
}
