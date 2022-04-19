<?php

namespace App\Models;

use App\Presenters\CompanyPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'code',
        'company_name',
        'import',
        'pendency',
        'esocial',
        'elis'
    ];

    public function presenter()
    {
        return new CompanyPresenter();
    }
}
