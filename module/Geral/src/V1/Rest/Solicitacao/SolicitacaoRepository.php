<?php
namespace Geral\V1\Rest\Solicitacao;
use Laminas\Db\TableGateway\AbstractTableGateway;
class SolicitacaoRepository
{
    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function save($data) {
        $result = $this->tableGateway->insert($data);
        return $this->tableGateway->getLastInsertValue($result);
    }

    public function fetchall($data){
        $sql = $this->tableGateway->getSql();
        $select = $sql->select()
            ->where(['pacientes_id' => $data['paciente']])
            ->where('data between "' . date('Y-m-d H:i:s', strtotime($data['inicio'] . ' 00:00:00')) . '" and "' . date('Y-m-d H:i:s', strtotime($data['fim'] . ' 23:59:59')) . '"');

        //echo $sql->getSqlstringForSqlObject($select); die ;
        return $this->tableGateway->selectWith($select);
    }
}
