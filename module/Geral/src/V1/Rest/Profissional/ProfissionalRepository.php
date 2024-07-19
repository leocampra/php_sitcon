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

    public function fetchall($data){
        $sql = $this->tableGateway->getSql();
        $select = $sql->select()
        ->columns(['id' => new \Laminas\Db\Sql\Expression('DISTINCT(profissional.id)'), 'nome'])
        ->join('profissionalatende', 'profissionalatende.profissional_id=profissional.id',[], 'left')
        ->where('profissional.status="ativo"')
        ->where('profissionalatende.status="ativo"')
        ->order('profissional.nome asc');
        if (isset($data)) {
            $select->where(['profissionalatende.procedimentos_id'=>$data]);
        }
        //echo $sql->getSqlstringForSqlObject($select); die ;
        return $this->tableGateway->selectWith($select);
    }
}
