<?php
namespace Geral\V1\Rest\Solicitacao;

class SolicitacaoResourceFactory
{
    public function __invoke($services)
    {
        return new SolicitacaoResource($services->get(SolicitacaoService::class));
    }
}
