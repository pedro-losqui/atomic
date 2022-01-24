<?php

namespace App\Models;

use App\Presenters\RecordPresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'cnpjFilial',
        'cnpjPosto',
        'codCargo',
        'codEmpresa',
        'codFilial',
        'codLocal',
        'codRateio',
        'cpfColaborador',
        'datSol',
        'dataAdm',
        'emaSolicitante',
        'empSoc',
        'exaSolicitado',
        'fonSolicitante',
        'masLocal',
        'nasColaborador',
        'nomCargo',
        'nomColaborador',
        'nomEmpresa',
        'nomFilial',
        'nomLaboratorio',
        'nomPosto',
        'nomRateio',
        'nomSolicitante',
        'numColab',
        'retTipExa',
        'sexColaborador',
        'estAtual',
        'estNova',
        'obsSolicitacao',
        'status',
        'print',
        'visualization',
        'datExe',
    ];

    public function moviments()
    {
        return $this->hasMany(Moviment::class, 'record_id');
    }

    public function exams()
    {
        return $this->hasMany(Exam::class, 'record_id');
    }

    public function risk()
    {
        return $this->hasOne(Risk::class, 'record_id');
    }

    public function user()
    {
        return $this->hasOneThrough(User::class, Moviment::class);
    }

    public function presenter()
    {
        return new RecordPresenter();
    }
}
