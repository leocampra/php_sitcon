<?php
namespace Geral\V1\Rest\Profissionalatende;
use Laminas\Db\TableGateway\AbstractTableGateway;
class ProfissionalatendeRepository
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
