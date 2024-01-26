<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use App\Models\InvestimentoAcao;
use App\Models\InvestimentoCripto;
use App\Models\InvestimentoFundo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class HomeController extends Controller
{
    public function index() {
        try {

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('data_compra', 'desc')->get();
            $fiis = InvestimentoFundo::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('data_compra', 'desc')->get();
            $criptos = InvestimentoCripto::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('data_compra', 'desc')->get();
            $todos = InvestimentoAcao::select('investimento_acaos.*')
                ->where('ativo', 1)
                ->where('id_user', auth()->user()->id)
                ->union(InvestimentoFundo::select('investimento_fundos.*')->where('ativo', 1)->where('id_user', auth()->user()->id))
                ->union(InvestimentoCripto::select('investimento_criptos.*')->where('ativo', 1)->where('id_user', auth()->user()->id))
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

    /**
     * Retorna os dados para preecher o grafico.
     */
    public function obterDados()
    {
        try {

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('data_compra', 'desc')->get();
            $fiis = InvestimentoFundo::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('data_compra', 'desc')->get();
            $criptos = InvestimentoCripto::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('data_compra', 'desc')->get();

            $somaTotal = 0; // total dos ativos

            $somaAcoes = 0; // total das ações
            foreach ($acoes as $a) {
                $somaTotal = $somaTotal + ($a->valor_unitario*$a->quantidade);
                $somaAcoes = $somaAcoes + ($a->valor_unitario*$a->quantidade);
            }

            $somaFiis = 0; // total dos fundos
            foreach ($fiis as $f) {
                $somaTotal = $somaTotal + ($f->valor_unitario*$f->quantidade);
                $somaFiis = $somaFiis + ($f->valor_unitario*$f->quantidade);
            }

            $somaCriptos = 0; // total das criptos
            foreach ($criptos as $c) {
                $somaTotal = $somaTotal + ($c->valor_unitario*$c->quantidade);
                $somaCriptos = $somaCriptos + ($c->valor_unitario*$c->quantidade);
            }

            $arrayResult = [];

            $result1 = new stdClass();
            $result1->nome = "Ações";
            $result1->soma = number_format($somaAcoes, 2, ',', '.');
            $valor1 = ($somaAcoes / $somaTotal) * 100;
            $result1->porcentagem = number_format($valor1, 2);

            array_push($arrayResult, $result1);

            $result2 = new stdClass();
            $result2->nome = "FII's";
            $result2->soma = number_format($somaFiis, 2, ',', '.');
            $valor2 = ($somaFiis / $somaTotal) * 100;
            $result2->porcentagem = number_format($valor2, 2);

            array_push($arrayResult, $result2);

            $result3 = new stdClass();
            $result3->nome = "Criptos";
            $result3->soma = number_format($somaCriptos, 2, ',', '.');
            $valor3 = ($somaCriptos / $somaTotal) * 100;
            $result3->porcentagem = number_format($valor3, 2);

            array_push($arrayResult, $result3);

            return response()->json(['dados' => $arrayResult, 'total' => number_format($somaTotal, 2, ',', '.')]);

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 500);
        }
    }
}
