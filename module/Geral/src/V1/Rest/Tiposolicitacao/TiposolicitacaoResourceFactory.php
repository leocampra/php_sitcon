<?php
namespace Geral\V1\Rest\Tiposolicitacao;

class TiposolicitacaoResourceFactory
{
    public function __invoke($services)
    {
        return new TiposolicitacaoResource($services->get(TiposolicitacaoService::class));
    }
}
