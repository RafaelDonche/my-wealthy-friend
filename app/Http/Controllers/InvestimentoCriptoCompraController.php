<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoCripto;
use App\Models\InvestimentoCriptoCompra;
use App\Services\AlterarValorCompra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class InvestimentoCriptoCompraController extends Controller
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
                'quantidade' => str_replace(",", ".", str_replace(".", "", $request->quantidade))
            ];
            $rules = [
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required|numeric|min:0.01',
                'quantidade' => 'required|numeric|min:1|regex:/^\d{1,15}(\.\d{0,5})?$/'
            ];
            $messages = [
                'quantidade.regex' => "A 'quantidade' no cadastro da criptomoeda deve ter no máximo 15 dígitos a esquerda da vírgula e no máximo 5 a direita!"
            ];
            $validacao = Validator::make($input, $rules, $messages);
            $validacao->validate();

            $investimento = InvestimentoCripto::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id_investimento);

            if (!$investimento) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            $compra = new InvestimentoCriptoCompra();
            $compra->data_compra = $request->data_compra;
            $compra->quantidade = str_replace(",", ".", str_replace(".", "", $request->quantidade));
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
     * @param  \App\Models\InvestimentoCriptoCompra  $investimentoCriptoCompra
     * @return \Illuminate\Http\Response
     */
    public function show(InvestimentoCriptoCompra $investimentoCriptoCompra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestimentoCriptoCompra  $investimentoCriptoCompra
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestimentoCriptoCompra $investimentoCriptoCompra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestimentoCriptoCompra  $investimentoCriptoCompra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $input = [
                'corretora' => $request->corretora,
                'data de compra' => $request->data_compra,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario)),
                'quantidade' => str_replace(",", ".", str_replace(".", "", $request->quantidade))
            ];
            $rules = [
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required|numeric|min:0.01',
                'quantidade' => 'required|numeric|min:1|regex:/^\d{1,15}(\.\d{0,5})?$/'
            ];
            $messages = [
                'quantidade.regex' => "A 'quantidade' no cadastro da criptomoeda deve ter no máximo 15 dígitos a esquerda da vírgula e no máximo 5 a direita!"
            ];
            $validacao = Validator::make($input, $rules, $messages);
            $validacao->validate();

            $compra = InvestimentoCriptoCompra::where('ativo', 1)->find($id);

            if (!$compra) {
                return back()->with('erro', 'O investimento não foi encontrado.');
            }

            $investimento = InvestimentoCripto::find($compra->id_investimento);

            if ($investimento->id_user != auth()->user()->id) {
                return back()->with('erro', 'Acesso negado.');
            }

            if (!AlterarValorCompra::validar($investimento->quantidadeAtual(), $request->quantidade, $compra->quantidade)) {
                return back()->with('erro', 'Após a alteração, a quantidade de unidades do investimento não pode se menor que 0 (zero).');
            }

            $compra->data_compra = $request->data_compra;
            $compra->quantidade = str_replace(",", ".", str_replace(".", "", $request->quantidade));
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
     * @param  \App\Models\InvestimentoCriptoCompra  $investimentoCriptoCompra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $compra = InvestimentoCriptoCompra::find($id);

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
