<?php

namespace App\Presenters;

class RecordPresenter
{
    public function alert($date, $created, $updated, $status)
    {
        switch ($status) {
            case '1':
                if ($date > 2) {
                  echo '<br><span class="badge bg-danger">Kit em atraso '. $created .'</span>';
                }
                break;
            case '2':
                if ($date > 2) {
                  echo '<br><span class="badge bg-primary">Kit enviado '. $updated .'</span>';
                }
                break;
        }
    }

    public function showStandby($value)
    {
        if ($value == 1) {
           echo 'style="opacity: 0.6;"';
        }
    }

    public function tagStatus($value, $standby)
    {
        if ($standby == '1') {
            echo '<span class="badge bg-danger">Em espera</span>';
        }else{
            switch ($value) {
                case 1:
                    return 'Solicitado';
                break;
                case 2:
                    return 'Kit Enviado';
                break;
                case 3:
                    return 'ASO Recebido';
                break;
                case 4:
                    return 'Concluído';
                break;
            }
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
            case 6:
                return 'Transferência de Entrada/Admissional';
            break;
        }
    }

    public function tagExamAso($value)
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
            case 6:
                return 'Admissional';
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
