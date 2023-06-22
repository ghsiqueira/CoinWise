<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Extrato extends Model
{
    protected $table = 'transfers';

    protected $fillable = [
        'created_at',
        'description',
        'value',
        'isRecurrent',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
