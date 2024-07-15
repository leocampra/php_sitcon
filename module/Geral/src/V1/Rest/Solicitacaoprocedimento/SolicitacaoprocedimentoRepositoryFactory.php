<?php
namespace Geral\V1\Rest\Solicitacaoprocedimento;
use Psr\Container\ContainerInterface;
class SolicitacaoprocedimentoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new SolicitacaoprocedimentoRepository($container->get(SolicitacaoprocedimentoTableGateway::class));
    }
}
