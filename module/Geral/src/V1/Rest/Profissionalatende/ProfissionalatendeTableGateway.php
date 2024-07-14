<?php
namespace Geral\V1\Rest\Profissionalatende;
use Psr\Container\ContainerInterface;
use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\Hydrator\ClassMethodsHydrator;
use Laminas\ServiceManager\Factory\FactoryInterface;
class ProfissionalatendeTableGateway implements FactoryInterface {
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $dbadapter = $container->get('adapter');
        $resultSetPrototype = new HydratingResultSet(new ClassMethodsHydrator(), new ProfissionalatendeEntity());
        return new TableGateway('profissionalatende', $dbadapter, null, $resultSetPrototype);
    }
}