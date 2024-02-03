<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoFundo;
use App\Models\InvestimentoFundoVenda;
use App\Services\AlterarValorVenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class InvestimentoFundoVendaController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_investimento)
    {
        try {
            $input = [
                'corretora' => $request->corretora,
                'data de venda' => $request->data_venda,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario)),
                'quantidade' => $request->quantidade
            ];
            $rules = [
                'corretora' => 'max:250',
                'data de venda' => 'required|date',
                'valor unitário' => 'required|numeric|min:0.01',
                'quantidade' => 'required|integer|min:1'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $investimento = InvestimentoFundo::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id_investimento);

            if (!$investimento) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            if ($investimento->quantidadeAtual() < $request->quantidade) {
                return back()->with('erro', 'A quantidade inserida na venda não pode ser maior que a quantidade atual do seu investimento.');
            }

            $venda = new InvestimentoFundoVenda();
            $venda->data_venda = $request->data_venda;
            $venda->quantidade = $request->quantidade;
            $venda->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario));
            $venda->corretora = $request->corretora;
            $venda->id_investimento = $investimento->id;
            $venda->ativo = 1;
            $venda->save();

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
     * @param  \App\Models\InvestimentoFundoVenda  $investimentoFundoVenda
     * @return \Illuminate\Http\Response
     */
    public function show(InvestimentoFundoVenda $investimentoFundoVenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestimentoFundoVenda  $investimentoFundoVenda
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestimentoFundoVenda $investimentoFundoVenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestimentoFundoVenda  $investimentoFundoVenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $input = [
                'corretora' => $request->corretora,
                'data de venda' => $request->data_venda,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario)),
                'quantidade' => $request->quantidade
            ];
            $rules = [
                'corretora' => 'max:250',
                'data de venda' => 'required|date',
                'valor unitário' => 'required|numeric|min:0.01',
                'quantidade' => 'required|integer|min:1'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $venda = InvestimentoFundoVenda::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id);

            if (!$venda) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            if ($venda->investimento->id_user != auth()->user()->id) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            if (!AlterarValorVenda::validar($venda->investimento->quantidadeAtual(), $request->quantidade, $venda->quantidade)) {
                return back()->with('erro', 'Após a alteração, a quantidade de unidades do investimento não pode se menor que 0 (zero).');
            }

            $venda->data_venda = $request->data_venda;
            $venda->quantidade = $request->quantidade;
            $venda->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario));
            $venda->corretora = $request->corretora;
            $venda->save();

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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestimentoFundoVenda  $investimentoFundoVenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $venda = InvestimentoFundoVenda::find($id);

            if ($venda->investimento->id_user != auth()->user()->id) {
                return back()->with('erro', 'Acesso negado.');
            }

            $venda->ativo = 0;
            $venda->save();

            return redirect()->route('carteira.home')->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
