<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extrato extends Model
{
    protected $table = 'transfers';

    protected $fillable = [
        'created_at',
        'description',
        'value',
        'isRecurrent',
    ];
}
