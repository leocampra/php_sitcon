<?php
namespace Geral\V1\Rest\Tiposolicitacao;
use Laminas\Db\TableGateway\AbstractTableGateway;
class TiposolicitacaoRepository
{
    /**
     * @var AbstractTableGateway
     */
    private $tableGateway;

    public function __construct(AbstractTableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchall() {
        $sql = $this->tableGateway->getSql();
        $select = $sql->select()
        ->where('status="ativo"');
        //echo $sql->getSqlstringForSqlObject($select); die ;
        return $this->tableGateway->selectWith($select);
    }
}
