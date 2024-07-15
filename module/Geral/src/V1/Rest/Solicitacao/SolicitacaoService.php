<?php
namespace Geral\V1\Rest\Solicitacao;
use Geral\V1\Rest\Solicitacaoprocedimento\SolicitacaoprocedimentoService;
use Geral\V1\Rest\Pacientes\PacientesService;

class SolicitacaoService
{

    /**
     * @var PacientesService
     */
    private $pacientesService;

     /**
     * @var SolicitacaoprocedimentoService
     */
    private $solicitacaoprocedimentoService;

    /**
     * @var SolicitacaoRepository
     */
    private $repository;

    public function __construct(
        SolicitacaoRepository $repository,
        SolicitacaoprocedimentoService $solicitacaoprocedimentoService,
        PacientesService $pacientesService
    ) {
        $this->repository = $repository;
        $this->solicitacaoprocedimentoService = $solicitacaoprocedimentoService;
        $this->pacientesService = $pacientesService;
    }

    public function save($datas) {
        $data = [
            'data' => date('Y-m-d H:i:s', strtotime($datas['data'])),
            'pacientes_id'=>$datas['paciente']
        ];
        $valueid = $this->repository->save($data);
        foreach($datas['procedimentos'] as $pro){
            $solpro = [
                'solicitacao_id'=>$valueid,
                'procedimentos_id'=>$pro
            ];
            $this->solicitacaoprocedimentoService->save($solpro);
        }
        return true;
    }


    public function fetchall($data){
        $paciente = $this->pacientesService->fetch($data['paciente']);
        $array = [
            'nome'=>$paciente->getNome(),
            'datanasc'=>$paciente->getDatanasc(),
            'cpf'=>$paciente->getCpf()
        ];
        
        $solicitacao = $this->repository->fetchall($data);
        $arraypro = [];
        foreach($solicitacao as $sol){
            $procedimento = $this->solicitacaoprocedimentoService->fetchall($sol->getId());
            $arraypro[]=[
                'data'=>$sol->getData(),
                'procedimento'=>$procedimento->getProcedimentos(),
                'tiposolicitacao'=>$procedimento->getTiposolicitacao()
            ];
        }
        $array['procedimentos']=$arraypro;
        $valor[]=$array;
        return $valor;
    }
}
