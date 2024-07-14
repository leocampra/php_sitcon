<?php
namespace Geral\V1\Rest\Profissional;

class ProfissionalResourceFactory
{
    public function __invoke($services)
    {
        return new ProfissionalResource($services->get(ProfissionalService::class));
    }
}
