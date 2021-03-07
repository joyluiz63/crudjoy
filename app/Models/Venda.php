<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Product;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'vendas';
    public $timestamps = true;

    protected $fillable =[
        'data',
        'quantidade',
        'product_id',
        'created_at'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
