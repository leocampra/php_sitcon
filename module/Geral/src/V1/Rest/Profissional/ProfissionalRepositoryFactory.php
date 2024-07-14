<?php
namespace Geral\V1\Rest\Profissional;
use Psr\Container\ContainerInterface;
class ProfissionalRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new ProfissionalRepository($container->get(ProfissionalTableGateway::class));
    }
}
