<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'physicist',
        'chemical',
        'biological',
        'ergonomic',
        'accident',
        'other'
    ];
}
