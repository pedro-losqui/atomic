<?php

namespace App\Presenters;

class UserPresenter
{
    public function tagStatus($value)
    {
        switch ($value) {
            case 0:
                return 'Inativo';
            break;
            case 1:
                return 'Ativo';
            break;
        }
    }
}
