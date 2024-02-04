<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use App\Models\InvestimentoAcao;
use App\Models\InvestimentoCripto;
use App\Models\InvestimentoFundo;
use App\Models\Meta;
use App\Models\TipoMeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class HomeController extends Controller
{
    public function index() {
        try {

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->orderByDesc('created_at')->get();
            $fiis = InvestimentoFundo::where('ativo', 1)->where('id_user', auth()->user()->id)->orderByDesc('created_at')->get();
            $criptos = InvestimentoCripto::where('ativo', 1)->where('id_user', auth()->user()->id)->orderByDesc('created_at')->get();
            $metas = Meta::where('ativo', 1)->where('id_user', auth()->user()->id)->orderBy('data_fim')->get();

            $ativosAcoes = Ativo::where('id_tipo', 1)->get();
            $ativosFiis = Ativo::where('id_tipo', 2)->get();
            $ativosCriptos = Ativo::where('id_tipo', 3)->get();
            $tipo_metas = TipoMeta::get();

            return view('carteira.home', compact(
                'acoes', 'fiis', 'criptos', 'metas', 'ativosAcoes', 'ativosFiis', 'ativosCriptos', 'tipo_metas'
            ));
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

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->get();
            $fiis = InvestimentoFundo::where('ativo', 1)->where('id_user', auth()->user()->id)->get();
            $criptos = InvestimentoCripto::where('ativo', 1)->where('id_user', auth()->user()->id)->get();

            $somaTotal = 0; // total dos valores atuais
            $somaTotalVendidas = 0; // total dos saldos de vendas

            $somaAcoes = 0; // total das ações
            foreach ($acoes as $a) {
                $somaTotal = $somaTotal + $a->valorAtual();
                $somaTotalVendidas = $somaTotalVendidas + $a->saldoVendas();

                $somaAcoes = $somaAcoes + $a->valorAtual();
            }

            $somaFiis = 0; // total dos fundos
            foreach ($fiis as $f) {
                $somaTotal = $somaTotal + $f->valorAtual();
                $somaTotalVendidas = $somaTotalVendidas + $f->saldoVendas();

                $somaFiis = $somaFiis + $f->valorAtual();
            }

            $somaCriptos = 0; // total das criptos
            foreach ($criptos as $c) {
                $somaTotal = $somaTotal + $c->valorAtual();
                $somaTotalVendidas = $somaTotalVendidas + $c->saldoVendas();

                $somaCriptos = $somaCriptos + $c->valorAtual();
            }

            $arrayResult = [];

            $result1 = new stdClass();
            $result1->nome = "Ações";
            $result1->soma = number_format($somaAcoes, 2, ',', '.');
            if ($somaTotal != 0) {
                $valor1 = ($somaAcoes / $somaTotal) * 100;
            }else {
                $valor1 = 0;
            }
            $result1->porcentagem = number_format($valor1, 2);

            array_push($arrayResult, $result1);

            $result2 = new stdClass();
            $result2->nome = "FII's";
            $result2->soma = number_format($somaFiis, 2, ',', '.');
            if ($somaTotal != 0) {
                $valor2 = ($somaFiis / $somaTotal) * 100;
            }else {
                $valor2 = 0;
            }
            $result2->porcentagem = number_format($valor2, 2);

            array_push($arrayResult, $result2);

            $result3 = new stdClass();
            $result3->nome = "Criptos";
            $result3->soma = number_format($somaCriptos, 2, ',', '.');
            if ($somaTotal != 0) {
                $valor3 = ($somaCriptos / $somaTotal) * 100;
            }else {
                $valor3 = 0;
            }
            $result3->porcentagem = number_format($valor3, 2);

            array_push($arrayResult, $result3);

            return response()->json([
                'dados' => $arrayResult,
                'total' => number_format($somaTotal, 2, ',', '.'),
                'somaTotalVendidas' => number_format($somaTotalVendidas, 2, ',', '.')
            ]);

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 500);
        }
    }
}
