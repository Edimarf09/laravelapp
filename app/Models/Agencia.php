<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencia extends Model
{
    use HasFactory;

    protected $table = 'agencias';
    protected $primaryKey = 'id';
    protected $filllable = [
        'banco_id',
        'endereco',
        'fone1',
        'tipo1',
        'fone2',
        'tipo2',
        'agencia',
        'nome_agencia',
    ];
    protected $guarded = [];
}
