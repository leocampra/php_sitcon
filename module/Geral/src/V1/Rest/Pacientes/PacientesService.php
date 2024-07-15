<?php
namespace Geral\V1\Rest\Pacientes;

class PacientesSErvice
{
    /**
     * @var PacientesRepository
     */
    private $repository;

    public function __construct(
        PacientesRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function fetchall($data){
        return $this->repository->fetchall($data);
    }

    public function fetch($id){
        return $this->repository->fetch($id);
    }
}
