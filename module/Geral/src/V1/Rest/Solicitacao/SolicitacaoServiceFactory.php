<?php
namespace Geral\V1\Rest\Solicitacao;
use Psr\Container\ContainerInterface;
use Geral\V1\Rest\Solicitacaoprocedimento\SolicitacaoprocedimentoService;
use Geral\V1\Rest\Pacientes\PacientesService;
class SolicitacaoServiceFactory
{
    public function __invoke(ContainerInterface $container)
    {
        return new SolicitacaoService(
            $container->get(SolicitacaoRepository::class),
            $container->get(SolicitacaoprocedimentoService::class),
            $container->get(PacientesService::class)
        );
    }
}
