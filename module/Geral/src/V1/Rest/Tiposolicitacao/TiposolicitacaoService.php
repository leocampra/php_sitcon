<?php
namespace Geral\V1\Rest\Tiposolicitacao;

class TiposolicitacaoService
{
    /**
     * @var TiposolicitacaoRepository
     */
    private $repository;

    public function __construct(
        TiposolicitacaoRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function fetchall(){
        return $this->repository->fetchall();
    }
}
