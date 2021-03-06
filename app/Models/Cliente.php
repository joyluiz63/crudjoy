<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';
    public $timestamps = true;

    protected $fillable =[
        'nome',
        'endereco',
        'created_at',
        'updated_at'
    ];
}
