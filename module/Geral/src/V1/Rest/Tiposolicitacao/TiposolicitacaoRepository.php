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
}
