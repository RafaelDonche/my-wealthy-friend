<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoCripto;
use App\Models\InvestimentoCriptoVenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class InvestimentoCriptoVendaController extends Controller
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
                'quantidade' => str_replace(",", ".", str_replace(".", "", $request->quantidade))
            ];
            $rules = [
                'corretora' => 'max:250',
                'data de venda' => 'required|date',
                'valor unitário' => 'required',
                'quantidade' => 'required|integer'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $investimento = InvestimentoCripto::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id_investimento);

            if (!$investimento) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            if ($investimento->quantidadeAtual() < str_replace(",", ".", str_replace(".", "", $request->quantidade))) {
                return back()->with('erro', 'A quantidade inserida na venda não pode ser maior que a quantidade atual do seu investimento.');
            }

            $venda = new InvestimentoCriptoVenda();
            $venda->data_venda = $request->data_venda;
            $venda->quantidade = str_replace(",", ".", str_replace(".", "", $request->quantidade));
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
     * @param  \App\Models\InvestimentoCriptoVenda  $investimentoCriptoVenda
     * @return \Illuminate\Http\Response
     */
    public function show(InvestimentoCriptoVenda $investimentoCriptoVenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestimentoCriptoVenda  $investimentoCriptoVenda
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestimentoCriptoVenda $investimentoCriptoVenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestimentoCriptoVenda  $investimentoCriptoVenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $input = [
                'corretora' => $request->corretora,
                'data de venda' => $request->data_venda,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario)),
                'quantidade' => str_replace(",", ".", str_replace(".", "", $request->quantidade))
            ];
            $rules = [
                'corretora' => 'max:250',
                'data de venda' => 'required|date',
                'valor unitário' => 'required',
                'quantidade' => 'required|integer'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $venda = InvestimentoCriptoVenda::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id);

            if ($venda->investimento->id_user != auth()->user()->id) {
                return back()->with('error', 'O investimento não foi encontrado.');
            }

            $venda->data_venda = $request->data_venda;
            $venda->quantidade = str_replace(",", ".", str_replace(".", "", $request->quantidade));
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
     * @param  \App\Models\InvestimentoCriptoVenda  $investimentoCriptoVenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $venda = InvestimentoCriptoVenda::find($id);

            if ($venda->investimento->id_user != auth()->user()->id) {
                return back()->with('error', 'Acesso negado.');
            }

            $venda->ativo = 0;
            $venda->save();

            return back()->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
