<?php
namespace Geral\V1\Rest\Profissionalatende;

class ProfissionalatendeResourceFactory
{
    public function __invoke($services)
    {
        return new ProfissionalatendeResource($services->get(ProfissionalatendeService::class));
    }
}
