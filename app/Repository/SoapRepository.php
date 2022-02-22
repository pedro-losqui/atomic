<?php

namespace App\Repository;

use App\Models\Exam;
use App\Models\Record;

class SoapRepository
{
    protected $soap;

    public function __construct(Soap $soap)
    {
      $this->soap = $soap;
    }


    public function getOne()
    {
        $response = $this->covertResults($this->soap->BuscaCadastroNOne());

        if ($response['totRegistros'] > 0) {
            for ($i=0; $i < $response['totRegistros']; $i++) {
                if ($response['totRegistros'] > 1) {
                    $record = Record::create($response['infoColaborador'][$i]);
                    if ($response['infoColaborador'][$i]['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $response['infoColaborador'][$i]['infoExame']['totExeCol'] ; $k++) {
                            Exam::create([
                                'record_id' => $record->id,
                                'description' => $response['infoColaborador'][$i]['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                        $this->soap->AlteraStatus($record);
                    } else {
                        Exam::create([
                            'record_id' => $record->id,
                            'description' => $response['infoColaborador'][$i]['infoExame']['exames']['nomExame'],
                        ]);
                        $this->soap->AlteraStatus($record);
                    }
                }else{
                    $record = Record::create($response['infoColaborador']);
                    if ($response['infoColaborador']['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $response['infoColaborador']['infoExame']['totExeCol'] ; $k++) {
                            Exam::create([
                                'record_id' => $record->id,
                                'description' => $response['infoColaborador']['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                        $this->soap->AlteraStatus($record);
                    }else {
                        Exam::create([
                            'record_id' => $record->id,
                            'description' => $response['infoColaborador']['infoExame']['exames']['nomExame'],
                        ]);
                        $this->soap->AlteraStatus($record);
                    }
                }
            }
        }else{
            return $response['msgRet'];
        }
    }

    public function getZero()
    {
        $response = $this->covertResults($this->soap->BuscaCadastroNZero());

        if ($response['totRegistros'] > 0) {
            for ($i=0; $i < $response['totRegistros']; $i++) {
                if ($response['totRegistros'] > 1) {
                    $record = Record::create($response['infoColaborador'][$i]);
                    if ($response['infoColaborador'][$i]['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $response['infoColaborador'][$i]['infoExame']['totExeCol'] ; $k++) {
                            Exam::create([
                                'record_id' => $record->id,
                                'description' => $response['infoColaborador'][$i]['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                        $this->soap->AlteraStatus($record);
                    } else {
                        Exam::create([
                            'record_id' => $record->id,
                            'description' => $response['infoColaborador'][$i]['infoExame']['exames']['nomExame'],
                        ]);
                        $this->soap->AlteraStatus($record);
                    }
                }else{
                    $record = Record::create($response['infoColaborador']);
                    if ($response['infoColaborador']['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $response['infoColaborador']['infoExame']['totExeCol'] ; $k++) {
                            Exam::create([
                                'record_id' => $record->id,
                                'description' => $response['infoColaborador']['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                        $this->soap->AlteraStatus($record);
                    }else {
                        Exam::create([
                            'record_id' => $record->id,
                            'description' => $response['infoColaborador']['infoExame']['exames']['nomExame'],
                        ]);
                        $this->soap->AlteraStatus($record);
                    }
                }
            }
        }else{
            return $response['msgRet'];
        }
    }

    public function getSix()
    {
        $response = $this->covertResults($this->soap->BuscaCadastroNSix());

        if ($response['totRegistros'] > 0) {
            for ($i=0; $i < $response['totRegistros']; $i++) {
                if ($response['totRegistros'] > 1) {
                    $record = Record::create($response['infoColaborador'][$i]);
                    if ($response['infoColaborador'][$i]['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $response['infoColaborador'][$i]['infoExame']['totExeCol'] ; $k++) {
                            Exam::create([
                                'record_id' => $record->id,
                                'description' => $response['infoColaborador'][$i]['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                        $this->soap->AlteraStatus($record);
                    } else {
                        Exam::create([
                            'record_id' => $record->id,
                            'description' => $response['infoColaborador'][$i]['infoExame']['exames']['nomExame'],
                        ]);
                        $this->soap->AlteraStatus($record);
                    }
                }else{
                    $record = Record::create($response['infoColaborador']);
                    if ($response['infoColaborador']['infoExame']['totExeCol'] > 1) {
                        for ($k=0; $k < $response['infoColaborador']['infoExame']['totExeCol'] ; $k++) {
                            Exam::create([
                                'record_id' => $record->id,
                                'description' => $response['infoColaborador']['infoExame']['exames'][$k]['nomExame'],
                            ]);
                        }
                        $this->soap->AlteraStatus($record);
                    }else {
                        Exam::create([
                            'record_id' => $record->id,
                            'description' => $response['infoColaborador']['infoExame']['exames']['nomExame'],
                        ]);
                        $this->soap->AlteraStatus($record);
                    }
                }
            }
        }else{
            return $response['msgRet'];
        }
    }

    public function covertResults($data)
    {
        return json_decode(json_encode($data), true);
    }

}
