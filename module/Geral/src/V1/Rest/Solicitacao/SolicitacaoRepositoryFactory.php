<?php
namespace Geral\V1\Rest\Solicitacao;
use Psr\Container\ContainerInterface;
class SolicitacaoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new SolicitacaoRepository($container->get(SolicitacaoTableGateway::class));
    }
}
