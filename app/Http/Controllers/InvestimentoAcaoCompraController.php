<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoAcao;
use App\Models\InvestimentoAcaoCompra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class InvestimentoAcaoCompraController extends Controller
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
                'valor unitário' => 'required',
                'quantidade' => 'required|integer'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $investimento = InvestimentoAcao::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id_investimento);

            if (!$investimento) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

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
     * @param  \App\Models\InvestimentoAcaoCompra  $investimentoAcaoCompra
     * @return \Illuminate\Http\Response
     */
    public function show(InvestimentoAcaoCompra $investimentoAcaoCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestimentoAcaoCompra  $investimentoAcaoCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestimentoAcaoCompra $investimentoAcaoCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestimentoAcaoCompra  $investimentoAcaoCompra
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

            $compra = InvestimentoAcaoCompra::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id);

            if (!$compra) {
                return back()->with('error', 'O investimento não foi encontrado.');
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
     * @param  \App\Models\InvestimentoAcaoCompra  $investimentoAcaoCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $compra = InvestimentoAcaoCompra::find($id);

            if ($compra->investimento->id_user != auth()->user()->id) {
                return back()->with('error', 'Acesso negado.');
            }

            $compra->ativo = 0;
            $compra->save();

            return back()->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
