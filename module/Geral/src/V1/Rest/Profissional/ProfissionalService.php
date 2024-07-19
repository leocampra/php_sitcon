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

    public function fetchall($dump) {
        $explode = explode(',',$dump['procedimentos']);
        $array=[];
        foreach($explode as $e){
            $valores = $this->validar($array, $e);
        }
        return $valores;
    }

    public function validar($array, $e){
        $valores = $this->repository->fetchall($e);
        $list=[];
        foreach($valores as $v){
            $list=[
                'id'=>$v->getId(),
                'nome'=>$v->getNome()
            ];
            array_push($array, $list);
        }
        return $array;
    }
}
