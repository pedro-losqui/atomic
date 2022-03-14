<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appear extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'description'
    ];
}
