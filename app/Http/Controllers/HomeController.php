<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use App\Models\InvestimentoAcao;
use App\Models\InvestimentoCripto;
use App\Models\InvestimentoFundo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        try {

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('created_at', 'desc')->get();
            $fiis = InvestimentoFundo::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('created_at', 'desc')->get();
            $criptos = InvestimentoCripto::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('created_at', 'desc')->get();
            $todos = InvestimentoAcao::select('investimento_acaos.*')
                ->union(InvestimentoFundo::select('investimento_fundos.*'))
                ->union(InvestimentoCripto::select('investimento_criptos.*'))
                ->orderByDesc('data_compra')
                ->get();

            $ativosAcoes = Ativo::where('id_tipo', 1)->get();
            $ativosFiis = Ativo::where('id_tipo', 2)->get();
            $ativosCriptos = Ativo::where('id_tipo', 3)->get();

            return view('carteira.home', compact('acoes', 'fiis', 'criptos', 'todos', 'ativosAcoes', 'ativosFiis', 'ativosCriptos'));
        }catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage());
            // return back()->with('erro', 'Erro contate o administrador.');
        }
    }
}
