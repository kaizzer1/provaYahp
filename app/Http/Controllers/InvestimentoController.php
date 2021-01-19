<?php

namespace App\Http\Controllers;
use App\Models\Investimento;
use Illuminate\Http\Request;


class InvestimentoController extends Controller
{
    public function cadastro(){
        $investimento = new investimento();
        $investimento->idFuncionario = 1;
        $investimento->descricao = 'CDB';
        $investimento->rentabilidade = 1.0;
        $investimento->tipo = 'Moderado';
        $investimento->save();
    }
    public function atualizar(){
        
    }
    public function vizualizar(){
        return view('HomeInvestimento', [
            'investimento'=> $investimento
        ]);
    }
}
