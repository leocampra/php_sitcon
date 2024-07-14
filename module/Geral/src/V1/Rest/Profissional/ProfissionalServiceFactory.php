<?php
namespace Geral\V1\Rest\Profissional;
use Psr\Container\ContainerInterface;
class ProfissionalServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new ProfissionalService(
            $container->get(ProfissionalRepository::class)
        );
    }
}
