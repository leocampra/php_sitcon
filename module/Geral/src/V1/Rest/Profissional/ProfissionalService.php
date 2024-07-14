<?php
namespace Geral\V1\Rest\Profissional;

class ProfissionalService
{
    /**
     * @var ProfissionalRepository
     */
    private $repository;

    public function __construct(
        ProfissionalRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function fetchall(){
        return $this->repository->fetchall();
    }
}
