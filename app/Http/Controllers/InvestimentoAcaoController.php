<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoAcao;
use App\Models\InvestimentoAcaoCompra;
use App\Models\InvestimentoAcaoVenda;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use stdClass;

class InvestimentoAcaoController extends Controller
{
    /**
     * Retorna os dados para preecher o grafico.
     */
    public function obterDados()
    {
        try {

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->get();

            $arrayResult = [];

            $somaTotal = 0;
            $somaTotalVendidas = 0;

            $result = [];
            foreach ($acoes as $a) {

                $somaTotal = $somaTotal + $a->valorAtual();
                $somaTotalVendidas = $somaTotalVendidas + $a->saldoVendas();

                $result = new stdClass();
                $result->nome = $a->ativo_info->sigla;
                $result->valor = number_format($a->valorAtual(), 2, ',', '.');
                $porcentagem = ($a->valorAtual() / $somaTotal) * 100;
                $result->porcentagem = number_format($porcentagem, 2);

                array_push($arrayResult, $result);
            }

            return response()->json([
                'dados' => $arrayResult,
                'total' => number_format($somaTotal, 2, ',', '.'),
                'somaTotalVendidas' => number_format($somaTotalVendidas, 2, ',', '.')
            ]);

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 500);
        }
    }

    /**
     * Retorna os dados para preecher o grafico de rendimento.
     */
    public function obterDadosRendimento($id_investimento)
    {
        try {

            $investimento = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id_investimento);

            if (!$investimento) {
                return response()->json("Acesso negado.", 400);
            }

            $compras = $investimento->compras;
            $vendas = $investimento->vendas;

            $minData = null;
            $dataCompras = [];
            $valorCompras = [];
            foreach ($compras as $c) {

                if ($c == $compras[0]) {
                    $data = Carbon::create($c->data_compra)->subDay();
                    $minData = $data->isoFormat('DD/MM/YY');
                    array_push($dataCompras, $minData);
                    array_push($valorCompras, 0);
                }

                array_push($dataCompras, date('d/m/y', strtotime($c->data_compra)));
                array_push($valorCompras, $c->saldo());
            }

            $dataVendas = [];
            $valorVendas = [];
            foreach ($vendas as $v) {
                if ($v == $vendas[0]) {
                    $data = Carbon::create($v->data_venda)->subDay();
                    $minData = $data->isoFormat('DD/MM/YY');
                    array_push($dataVendas, $minData);
                    array_push($valorVendas, 0);
                }

                array_push($dataVendas, date('d/m/y', strtotime($v->data_venda)));
                array_push($valorVendas, $v->saldo());
            }

            return response()->json([
                'dataCompras' => $dataCompras,
                'valorCompras' => $valorCompras,
                'dataVendas' => $dataVendas,
                'valorVendas' => $valorVendas
            ]);

        } catch (\Exception $ex) {
            return response()->json($ex->getMessage(), 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $input = [
                'ação' => $request->acao,
                'corretora' => $request->corretora_acao,
                'data de compra' => $request->data_compra_acao,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario_acao)),
                'quantidade' => $request->quantidade_acao
            ];
            $rules = [
                'ação' => 'required|integer',
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required|numeric|min:0.01',
                'quantidade' => 'required|integer|min:1'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $verifica = InvestimentoAcao::where('id_ativo', $request->acao)->where('id_user', auth()->user()->id)->where('ativo', 1)->first();

            if ($verifica) {
                return back()->with('erro', 'Você já possui um investimento com este ativo.');
            }

            $investimento = new InvestimentoAcao();
            $investimento->id_ativo = $request->acao;
            $investimento->id_user = auth()->user()->id;
            $investimento->ativo = 1;
            $investimento->save();

            $compra = new InvestimentoAcaoCompra();
            $compra->data_compra = $request->data_compra_acao;
            $compra->quantidade = $request->quantidade_acao;
            $compra->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario_acao));
            $compra->corretora = $request->corretora_acao;
            $compra->id_investimento = $investimento->id;
            $compra->ativo = 1;
            $compra->save();

            return back()->with('success', 'Cadastro realizado com sucesso.');

        }catch (ValidationException $e ) {
            $message = $e->errors();
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InvestimentoAcao  $investimentoAcao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $item = InvestimentoAcao::where('ativo', 1)->find($id);

            if (!$item) {
                return back()->with('erro', 'Este cadastro não está mais ativo.');
            }

            if ($item->id_user != auth()->user()->id) {
                return back()->with('erro', 'Acesso negado.');
            }

            $consulta_empresa = route('api.obterDadosEmpresa', $item->ativo_info->sigla);
            $consulta_grafico_rendimento = route('carteira.acao.obterDadosRendimento', $item->id);

            return view('carteira.investimento-acao.home', compact('item', 'consulta_empresa', 'consulta_grafico_rendimento'));

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestimentoAcao  $investimentoAcao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $investimento = InvestimentoAcao::find($id);

            if ($investimento->id_user != auth()->user()->id) {
                return back()->with('erro', 'Acesso negado.');
            }

            $investimento->ativo = 0;
            $investimento->save();

            return redirect()->route('carteira.home')->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
