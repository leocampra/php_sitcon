<?php
namespace Geral\V1\Rest\Profissionalatende;
use Psr\Container\ContainerInterface;
class ProfissionalatendeRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new ProfissionalatendeRepository($container->get(ProfissionalatendeTableGateway::class));
    }
}
