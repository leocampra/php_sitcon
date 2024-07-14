<?php
namespace Geral\V1\Rest\Profissional;
use Laminas\Db\TableGateway\AbstractTableGateway;
class ProfissionalRepository
{
    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchall(){
        $sql = $this->tableGateway->getSql();
        $select = $sql->select()
        ->where('status="ativo"')
        ->order('nome asc');
        //echo $sql->getSqlstringForSqlObject($select); die ;
        return $this->tableGateway->selectWith($select);
    }
}
