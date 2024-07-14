<?php
namespace Geral\V1\Rest\Profissionalatende;

class ProfissionalatendeService
{
    /**
     * @var ProfissionalatendeRepository
     */
    private $repository;

    public function __construct(
        ProfissionalatendeRepository $repository
    ) {
        $this->repository = $repository;
    }
}
