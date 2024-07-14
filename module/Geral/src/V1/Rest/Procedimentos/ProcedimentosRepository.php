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
}
