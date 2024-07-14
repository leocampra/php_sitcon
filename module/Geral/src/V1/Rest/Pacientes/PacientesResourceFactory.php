<?php
namespace Geral\V1\Rest\Pacientes;

class PacientesResourceFactory
{
    public function __invoke($services)
    {
        return new PacientesResource($services->get(PacientesService::class));
    }
}
