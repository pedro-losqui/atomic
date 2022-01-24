<?php

namespace App\Repository;

use App\Models\Exam;
use App\Models\Record;

class SoapRepository extends Soap
{
    public function covertResults($data)
    {
        return json_decode(json_encode($data), true);
    }

    public function getRecords($tipExame)
    {
        $response = $this->covertResults($this->BuscaCadastroN($tipExame));

        if ($response['totRegistros'] > 0) {
            for ($i=0; $i < $response['totRegistros']; $i++) {
                if ($response['totRegistros'] > 1) {
                    $record = Record::create($response['infoColaborador'][$i]);
                    if ($response['infoColaborador'][$i]['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $response['infoColaborador'][$i]['infoExame']['totExeCol'] ; $k++) {
                            Exam::create([
                                'employee_id' => $record->id,
                                'description' => $response['infoColaborador'][$i]['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                        $this->AlteraStatus($record);
                    } else {
                        Exam::create([
                            'employee_id' => $record->id,
                            'description' => $response['infoColaborador'][$i]['infoExame']['exames']['nomExame'],
                        ]);
                        $this->AlteraStatus($record);
                    }
                }else{
                    $record = Record::create($response['infoColaborador']);
                    if ($response['infoColaborador']['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $response['infoColaborador']['infoExame']['totExeCol'] ; $k++) {
                            Exam::create([
                                'employee_id' => $record->id,
                                'description' => $response['infoColaborador']['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                        $this->AlteraStatus($record);
                    }else {
                        Exam::create([
                            'employee_id' => $record->id,
                            'description' => $response['infoColaborador']['infoExame']['exames']['nomExame'],
                        ]);
                        $this->AlteraStatus($record);
                    }
                }
            }
        }else{
            return $response['msgRet'];
        }
    }
}
