<?php
namespace Geral\V1\Rest\Solicitacaoprocedimento;
use Laminas\Db\TableGateway\AbstractTableGateway;
class SolicitacaoprocedimentoRepository
{
    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function save($data){
        return $this->tableGateway->insert($data);
    }

    public function fetchall($id){
        $sql = $this->tableGateway->getSql();
        $select = $sql->select()
            ->join('procedimentos','procedimentos.id=solicitacaoprocedimento.procedimentos_id',['procedimentos'=>'descricao'])
            ->join('tiposolicitacao','tiposolicitacao.id=procedimentos.tipo_id',['tiposolicitacao'=>'descricao'])
            ->where(['solicitacaoprocedimento.solicitacao_id'=>$id]);

        //echo $sql->getSqlstringForSqlObject($select); die ;
        return $this->tableGateway->selectWith($select)->current();
    }
}
