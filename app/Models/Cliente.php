<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Venda;

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

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function vendas()
    {
      return $this->belongsToMany(Venda::class);
    }
}
