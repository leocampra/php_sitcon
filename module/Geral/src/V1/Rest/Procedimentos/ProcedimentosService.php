<?php
namespace Geral\V1\Rest\Procedimentos;

class ProcedimentosService
{
    /**
     * @var ProcedimentosRepository
     */
    private $repository;

    public function __construct(
        ProcedimentosRepository $repository
    ) {
        $this->repository = $repository;
    }
}