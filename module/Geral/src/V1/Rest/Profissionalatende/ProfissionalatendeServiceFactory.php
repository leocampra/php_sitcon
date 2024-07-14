<?php
namespace Geral\V1\Rest\Profissionalatende;
use Psr\Container\ContainerInterface;
class ProfissionalatendeServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new ProfissionalatendeService(
            $container->get(ProfissionalatendeRepository::class)
        );
    }
}