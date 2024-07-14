<?php
namespace Geral\V1\Rest\Tiposolicitacao;
use Psr\Container\ContainerInterface;
class TiposolicitacaoServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new TiposolicitacaoService(
            $container->get(TiposolicitacaoRepository::class)
        );
    }
}
