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
}
