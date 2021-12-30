<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpjFilial', 'cnpjPosto', 'codCargo', 'codEmpresa', 'codFilial', 'codLocal', 'codRateio', 'cpfColaborador', 'datSol', 'dataAdm', 'emaSolicitante', 'empSoc', 'exaSolicitado',
        'fonSolicitante', 'masLocal', 'nasColaborador', 'nomCargo', 'nomColaborador', 'nomEmpresa', 'nomFilial', 'nomLaboratorio', 'nomPosto','nomRateio', 'nomSolicitante', 'numColab',
        'retTipExa', 'sexColaborador', 'estAtual', 'estNova', 'obsSolicitacao',
    ];

    public function moviments()
    {
        return $this->hasOne(Moviment::class, 'record_id');
    }

    public function presenter()
    {
    }
}
