<?php
namespace Geral\V1\Rest\Solicitacao;
use Psr\Container\ContainerInterface;
use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Db\TableGateway\TableGateway;
use Laminas\Hydrator\ClassMethodsHydrator;
use Laminas\ServiceManager\Factory\FactoryInterface;
class SolicitacaoTableGateway implements FactoryInterface {
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null)
    {
        $dbadapter = $container->get('adapter');
        $resultSetPrototype = new HydratingResultSet(new ClassMethodsHydrator(), new SolicitacaoEntity());
        return new TableGateway('solicitacao', $dbadapter, null, $resultSetPrototype);
    }
}
