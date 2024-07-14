<?php
namespace Geral\V1\Rest\Procedimentos;
use Psr\Container\ContainerInterface;
class ProcedimentosRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new ProcedimentosRepository($container->get(ProcedimentosTableGateway::class));
    }
}
