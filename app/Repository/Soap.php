<?php

namespace App\Repository;

use Artisaninweb\SoapWrapper\SoapWrapper;

class Soap
{
    protected $soapWrapper;

    public function __construct(SoapWrapper $soapWrapper)
    {
      $this->soapWrapper = $soapWrapper;

      $this->soapWrapper->add('call', function ($service) {
        $service
          ->wsdl( env('WSDL_URL', null) )
          ->trace(true);
        });
    }

    public function BuscaCadastroN($tipExame)
    {
        return $this->soapWrapper->call('call.BuscaCadastroN', [
            'user' => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption' => 1,
            'parameters'=> [
                'dataFinal'         => date('d/m/Y', strtotime('+25 day')),
                'dataInicio'        => date('d/m/Y', strtotime('-15 day')),
                'empSoc'            => 0,
                'flowInstanceID'    => null,
                'flowName'          => null,
                'tipExame'          => $tipExame
            ]
        ]);
    }

    public function AlteraStatus($data)
    {
        return $this->soapWrapper->call('call.AlteraStatus', [
            'user' => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption' => 1,
            'parameters'=> [
                'empSoc'            => $data->empSoc,
                'numColab'          => $data->numColab,
                'dataRet'           => date('d/m/Y'),
                'nomColaborador'    => $data->nomColaborador,
                'tipExe'            => $data->retTipExa,
                'datSol'            => $data->retTipExa == 1 ? $data->dataAdm : $data->datSol,
                'msgRet'            => 'Colaborador recebido.',
            ]
        ]);
    }

    public function RetornaCadastro($data)
    {
        return $this->soapWrapper->call('call.RetornaCadastro', [
            'user' => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption' => 1,
            'parameters'=> [
                'codEmpresa'        => $data->codEmpresa,
                'codFilial'         => $data->codFilial,
                'datSol'            => $data->retTipExa == 1 ? $data->dataAdm : $data->datSol,
                'dataRet'           => date('d/m/Y'),
                'empSoc'            => $data->empSoc,
                'nomColaborador'    => $data->nomColaborador,
                'numColab'          => $data->numColab,
                'tipExe'            => $data->retTipExa,
                'datExe'            => date("d/m/Y", strtotime($data->datExe))
            ]
        ]);
    }

    public function retornaStatusExa($data, $status)
    {
        return $this->soapWrapper->call('call.retornaStatusExa', [
            'user'     => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption'=> 1,
            'parameters' => [
                'codEmpresa'        => $data->codEmpresa,
                'codFilial'         => $data->codFilial,
                'datSol'            => $data->datSol,
                'dataRet'           => date('d/m/Y'),
                'empSoc'            => $data->empSoc,
                'nomColaborador'    => $data->nomColaborador,
                'numColab'          => $data->numColab,
                'tipExe'            => $data->retTipExa,
                'datSta'            => $status->datSta,
                'horSta'            => $status->horSta,
                'msgRet'            => $status->note,
            ]
        ]);
    }

    public function verificaDados($data)
    {
        return $this->soapWrapper->call('call.verificaDados', [
            'user' => 'cma.soc',
            'password' => 'UWBtX05rQUVaY2I=',
            'encryption' => 1,
            'parameters'=> [
                'empSoc'            => $data->empSoc,
                'numColab'          => $data->numColab,
            ]
        ]);
    }
}
