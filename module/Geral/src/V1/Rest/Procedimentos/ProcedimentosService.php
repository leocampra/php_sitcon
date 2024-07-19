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

    public function fetchall($dump) {
        $explode = explode(',',$dump['tipo']);
        $array=[];
        foreach($explode as $e){
            $valores = $this->validar($array,$e);
        }
        return $valores;
    }

    public function validar($array, $e){
        $valores = $this->repository->fetchall($e);
        $list=[];
        foreach($valores as $v){
            $list=[
                'id'=>$v->getId(),
                'descricao'=>$v->getDescricao()
            ];
            array_push($array, $list);
        }
        return $array;
    }
}
