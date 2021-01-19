<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{
    protected $fillable = [
        'idFuncionario',
        'descricao',
        'rentabilidade',
        'tipo',
    ];
    use HasFactory;
}
