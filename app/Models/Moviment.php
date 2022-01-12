<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moviment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'record_id',
        'datSta',
        'horSta',
        'note',
    ];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
