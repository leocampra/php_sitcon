<?php
namespace Geral\V1\Rest\Procedimentos;

class ProcedimentosResourceFactory
{
    public function __invoke($services)
    {
        return new ProcedimentosResource($services->get(ProcedimentosService::class));
    }
}
