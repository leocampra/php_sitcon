<?php
namespace Geral\V1\Rest\Solicitacaoprocedimento;

class SolicitacaoprocedimentoResourceFactory
{
    public function __invoke($services)
    {
        return new SolicitacaoprocedimentoResource($services->get(SolicitacaoprocedimentoService::class));
    }
}
