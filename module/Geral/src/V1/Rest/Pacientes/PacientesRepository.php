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
}
