<?php
namespace Geral\V1\Rest\Pacientes;
use Psr\Container\ContainerInterface;
use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\Hydrator\ClassMethodsHydrator;
use Laminas\ServiceManager\Factory\FactoryInterface;
class PacientesTableGateway implements FactoryInterface {
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $dbadapter = $container->get('adapter');
        $resultSetPrototype = new HydratingResultSet(new ClassMethodsHydrator(), new PacientesEntity());
        return new TableGateway('pacientes', $dbadapter, null, $resultSetPrototype);
    }
}