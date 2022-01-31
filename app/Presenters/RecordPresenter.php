<?php

namespace App\Presenters;

class RecordPresenter
{
    public function alert($date, $status, $print)
    {
        if ($status == 1 && $print == 0) {
           return $date;
        }
    }

    public function tagStatus($value)
    {
        switch ($value) {
            case 1:
                return 'Solicitado';
            break;
            case 2:
                return 'Agendado';
            break;
            case 3:
                return 'ASO Recebido';
            break;
            case 4:
                return 'Concluído';
            break;
        }

    }

    public function percentStatus($value)
    {
        switch ($value) {
            case 1:
                return '25%';
            break;
            case 2:
                return '50%';
            break;
            case 3:
                return '75%';
            break;
            case 4:
                return '100%';
            break;
        }
    }

    public function tagExam($value)
    {
        switch ($value) {
            case 1:
                return 'Admissional';
            break;
            case 2:
                return 'Periódico';
            break;
            case 3:
                return 'Mudança de Riscos Ocupacionais';
            break;
            case 4:
                return 'Retorno ao Trabalho';
            break;
            case 5:
                return 'Demissional';
            break;
        }
    }

    public function gender(string $value)
    {
        switch ($value) {
            case 'F':
                return 'Feminino';
            break;
            case 'M':
                return 'Masculino';
            break;
        }
    }

    public function age(string $value)
    {
       return date('Y') - intval(substr($value, 6, 4));
    }

    public function treeView($value)
    {
        return explode(";", $value);
    }

}
