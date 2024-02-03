<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoFundo;
use App\Models\InvestimentoFundoCompra;
use App\Services\AlterarValorCompra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class InvestimentoFundoCompraController extends Controller
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
                'data de compra' => $request->data_compra,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario)),
                'quantidade' => $request->quantidade
            ];
            $rules = [
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required|numeric|min:0.01',
                'quantidade' => 'required|integer|min:1'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $investimento = InvestimentoFundo::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id_investimento);

            if (!$investimento) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            $compra = new InvestimentoFundoCompra();
            $compra->data_compra = $request->data_compra;
            $compra->quantidade = $request->quantidade;
            $compra->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario));
            $compra->corretora = $request->corretora;
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
     * @param  \App\Models\InvestimentoFundoCompra  $investimentoFundoCompra
     * @return \Illuminate\Http\Response
     */
    public function show(InvestimentoFundoCompra $investimentoFundoCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestimentoFundoCompra  $investimentoFundoCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestimentoFundoCompra $investimentoFundoCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestimentoFundoCompra  $investimentoFundoCompra
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
                'valor unitário' => 'required|numeric|min:0.01',
                'quantidade' => 'required|integer|min:1'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $compra = InvestimentoFundoCompra::where('ativo', 1)->find($id);

            if (!$compra) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            if ($compra->investimento->id_user != auth()->user()->id) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            $investimento = InvestimentoFundo::find($compra->id_investimento);

            if (!AlterarValorCompra::validar($investimento->quantidadeAtual(), $request->quantidade, $compra->quantidade)) {
                return back()->with('erro', 'Após a alteração, a quantidade de unidades do investimento não pode se menor que 0 (zero).');
            }

            $compra->data_compra = $request->data_compra;
            $compra->quantidade = $request->quantidade;
            $compra->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario));
            $compra->corretora = $request->corretora;
            $compra->save();

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
     * @param  \App\Models\InvestimentoFundoCompra  $investimentoFundoCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $compra = InvestimentoFundoCompra::find($id);

            if ($compra->investimento->id_user != auth()->user()->id) {
                return back()->with('erro', 'Acesso negado.');
            }

            $compra->ativo = 0;
            $compra->save();

            return redirect()->route('carteira.home')->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
