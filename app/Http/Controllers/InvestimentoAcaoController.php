<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoAcao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use stdClass;

class InvestimentoAcaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Retorna os dados para preecher o grafico.
     */
    public function obterDados()
    {
        try {

            $acoes = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->whereNull('data_venda')->get();

            $arrayResult = [];

            $somaTotal = 0;
            foreach ($acoes as $a) {
                $somaTotal = $somaTotal + ($a->valor_unitario*$a->quantidade);
            }

            $result = [];
            foreach ($acoes as $a) {
                $result = new stdClass();
                $result->nome = $a->ativo_info->sigla;
                $result->valor = number_format(($a->valor_unitario*$a->quantidade), 2, ',', '.');
                $porcentagem = (($a->valor_unitario*$a->quantidade) / $somaTotal) * 100;
                $result->porcentagem = number_format($porcentagem, 2);

                array_push($arrayResult, $result);
            }

            $acoesVendidas = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->whereNotNull('data_venda')->get();

            $somaTotalVendidas = 0;
            foreach ($acoesVendidas as $av) {
                $somaTotalVendidas = $somaTotalVendidas + ($av->valor_venda*$av->quantidade_venda);
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
                'valor unitário' => 'required',
                'quantidade' => 'required|integer'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $investimento = new InvestimentoAcao();
            $investimento->id_ativo = $request->acao;
            $investimento->data_compra = $request->data_compra_acao;
            $investimento->quantidade = $request->quantidade_acao;
            $investimento->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario_acao));
            $investimento->corretora = $request->corretora_acao;
            $investimento->id_user = auth()->user()->id;
            $investimento->ativo = 1;
            $investimento->save();

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
    public function show(InvestimentoAcao $investimentoAcao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestimentoAcao  $investimentoAcao
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestimentoAcao $investimentoAcao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestimentoAcao  $investimentoAcao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $input = [
                'corretora' => $request->corretora,
                'data de compra' => $request->data_compra,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario)),
                'quantidade' => $request->quantidade
            ];
            $rules = [
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required',
                'quantidade' => 'required|integer'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $investimento = InvestimentoAcao::find($id);
            $investimento->data_compra = $request->data_compra;
            $investimento->quantidade = $request->quantidade;
            $investimento->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario));
            $investimento->corretora = $request->corretora;
            $investimento->save();

            return back()->with('success', 'Cadastro editado com sucesso.');

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
     * Marca o ativo como vendido.
     *
     * @param  \App\Models\InvestimentoAcao  $investimentoAcao
     * @return \Illuminate\Http\Response
     */
    public function vender(Request $request, $id)
    {
        try {

            $input = [
                'data de venda' => $request->data_venda,
                'valor unitário na venda' => str_replace(",", ".", str_replace(".", "", $request->valor_venda)),
                'quantidade vendida' => $request->quantidade_venda
            ];
            $rules = [
                'data de venda' => 'required|date',
                'valor unitário na venda' => 'required',
                'quantidade vendida' => 'required|integer'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $acao = InvestimentoAcao::find($id);

            if ($acao->data_compra > $request->data_venda) {
                return back()->with('erro', 'A data de venda não pode ser antes da data de compra (' . date('d/m/Y', strtotime($acao->data_compra)) . ')');
            }

            if ($acao->quantidade < $request->quantidade_venda) {
                return back()->with('erro', 'A quantidade vendida não pode ser maior que a quantidade do cadastrada no ativo
                (' . $acao->quantidade . ')');
            }

            $acao->data_venda = $request->data_venda;
            $acao->valor_venda = str_replace(",", ".", str_replace(".", "", $request->valor_venda));
            $acao->quantidade_venda = $request->quantidade_venda;
            $acao->quantidade = $acao->quantidade - $request->quantidade;
            $acao->save();

            return back()->with('success', 'Cadastro marcado como vendido!');

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

            $acao = InvestimentoAcao::find($id);
            $acao->ativo = 0;
            $acao->save();

            return back()->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
