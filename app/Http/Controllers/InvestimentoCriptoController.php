<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoCripto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use stdClass;

class InvestimentoCriptoController extends Controller
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

            $criptos = InvestimentoCripto::where('ativo', 1)->where('id_user', auth()->user()->id)->get();

            $arrayResult = [];

            $somaTotal = 0;
            foreach ($criptos as $c) {
                $somaTotal = $somaTotal + ($c->valor_unitario*$c->quantidade);
            }

            $result = [];
            foreach ($criptos as $c) {
                $result = new stdClass();
                $result->nome = $c->ativo_info->sigla;
                $valor = (($c->valor_unitario*$c->quantidade) / $somaTotal) * 100;
                $result->valor = number_format($valor, 2);

                array_push($arrayResult, $result);
            }

            return response()->json($arrayResult);

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
                'cripto' => $request->cripto,
                'corretora' => $request->corretora_cripto,
                'data de compra' => $request->data_compra_cripto,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario_cripto)),
                'quantidade' => $request->quantidade_cripto
            ];
            $rules = [
                'cripto' => 'required',
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required',
                'quantidade' => 'required'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $investimento = new InvestimentoCripto();
            $investimento->id_ativo = $request->cripto;
            $investimento->data_compra = $request->data_compra_cripto;
            $investimento->quantidade = str_replace(",", ".", str_replace(".", "", $request->quantidade_cripto));
            $investimento->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario_cripto));
            $investimento->corretora = $request->corretora_cripto;
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
     * @param  \App\Models\InvestimentoCripto  $investimentoCripto
     * @return \Illuminate\Http\Response
     */
    public function show(InvestimentoCripto $investimentoCripto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestimentoCripto  $investimentoCripto
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestimentoCripto $investimentoCripto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestimentoCripto  $investimentoCripto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvestimentoCripto $investimentoCripto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestimentoCripto  $investimentoCripto
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvestimentoCripto $investimentoCripto)
    {
        //
    }
}
