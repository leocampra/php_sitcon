<?php
namespace Geral\V1\Rest\Pacientes;
use Psr\Container\ContainerInterface;
class PacientesServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new PacientesService(
            $container->get(PacientesRepository::class)
        );
    }
}
