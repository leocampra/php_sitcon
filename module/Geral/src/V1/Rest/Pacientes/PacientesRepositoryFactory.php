<?php
namespace Geral\V1\Rest\Pacientes;
use Psr\Container\ContainerInterface;
class PacientesRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new PacientesRepository($container->get(PacientesTableGateway::class));
    }
}
