<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class FaturaProduto extends Model
{
    protected $table = 'faturaProduto';
    public static $snakeAttributes = false;
    protected $primaryKey = 'id';

    protected $fillable = [
        'idFatura',
        'idProduto',
        'nomeProduto',
        'precoProduto',
        'quantidadeProduto'
    ];
}
