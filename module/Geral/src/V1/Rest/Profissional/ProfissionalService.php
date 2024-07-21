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
            $dado = $this->validar($e);
            $validar = 0;
            foreach($array as $d){
                if(in_array($dado['nome'], $d)){
                    $validar++;
                }
            }
            if($validar === 0){
                $array[] = $dado;
            }
        }
        return $array;
    }

    public function validar($e){
        $valores = $this->repository->fetchall($e);
        $list=[];
        foreach($valores as $v){
            $list=[
                'id'=>$v->getId(),
                'nome'=>$v->getNome()
            ];
            
        }
        return $list;
    }
}
