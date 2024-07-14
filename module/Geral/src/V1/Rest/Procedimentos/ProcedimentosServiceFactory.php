<?php
namespace Geral\V1\Rest\Procedimentos;
use Psr\Container\ContainerInterface;
class ProcedimentosServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new ProcedimentosService(
            $container->get(ProcedimentosRepository::class)
        );
    }
}
