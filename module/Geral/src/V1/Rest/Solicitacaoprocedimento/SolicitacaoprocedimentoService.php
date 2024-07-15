<?php
namespace Geral\V1\Rest\Solicitacaoprocedimento;

class SolicitacaoprocedimentoService
{
    /**
     * @var SolicitacaoprocedimentoRepository
     */
    private $repository;

    public function __construct(
        SolicitacaoprocedimentoRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function save($data) {
        return $this->repository->save($data);
    }

    public function fetchall($data) {
        return $this->repository->fetchall($data);
    }
}
