<?php
namespace Geral\V1\Rest\Procedimentos;
use Laminas\Db\TableGateway\AbstractTableGateway;
class ProcedimentosRepository
{
    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchall($data){
       
        $sql = $this->tableGateway->getSql();
        $select = $sql->select()
        ->where(['status'=>'ativo']);
        if (isset($data['tipo'])) {
            $select->where(['tipo_id in (?)'=>$data['tipo']]);
        }
        
        //echo $sql->getSqlstringForSqlObject($select); die ;
        return $this->tableGateway->selectWith($select);
    }

}
