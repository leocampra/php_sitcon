<?php
namespace Geral\V1\Rest\Solicitacaoprocedimento;
use Psr\Container\ContainerInterface;
class SolicitacaoprocedimentoServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new SolicitacaoprocedimentoService(
            $container->get(SolicitacaoprocedimentoRepository::class)
        );
    }
}
