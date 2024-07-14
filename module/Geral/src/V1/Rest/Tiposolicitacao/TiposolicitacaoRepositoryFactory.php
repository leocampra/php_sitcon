<?php
namespace Geral\V1\Rest\Tiposolicitacao;
use Psr\Container\ContainerInterface;
class TiposolicitacaoRepositoryFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new TiposolicitacaoRepository($container->get(TiposolicitacaoTableGateway::class));
    }
}
