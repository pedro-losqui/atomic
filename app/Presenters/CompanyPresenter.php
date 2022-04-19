<?php

namespace App\Presenters;

class CompanyPresenter
{
    public function import($value)
    {
        if ($value == '0') {
            echo '<i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i> Não';
        }else{
            echo '<i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Sim';
        }
    }

    public function pendency($value)
    {
        if ($value == '0') {
            echo '<i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Não';
        }else{
            echo '<i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i> Sim';
        }
    }

    public function esocial($value)
    {
        if ($value == '0') {
            echo '<i class="mdi mdi-checkbox-blank-circle text-danger me-1"></i> Não';
        }else{
            echo '<i class="mdi mdi-checkbox-blank-circle text-success me-1"></i> Sim';
        }
    }

}
