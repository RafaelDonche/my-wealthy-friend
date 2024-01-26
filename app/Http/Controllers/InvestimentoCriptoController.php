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
                'quantidade' => str_replace(",", ".", str_replace(".", "", $request->quantidade_cripto))
            ];
            $rules = [
                'cripto' => 'required|integer',
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required',
                'quantidade' => 'required|regex:/^\d{1,15}(\.\d{0,5})?$/'
            ];
            $messages = [
                'quantidade.regex' => "A 'quantidade' no cadastro da criptomoeda deve ter no máximo 15 casas a esquerda da vírgula e no máximo 5 a direita!"
            ];
            $validacao = Validator::make($input, $rules, $messages);
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
                'valor unitário' => 'required',
                'quantidade' => 'required|regex:/^\d{1,15}(\.\d{0,5})?$/'
            ];
            $messages = [
                'quantidade.regex' => "A 'quantidade' no cadastro da criptomoeda deve ter no máximo 15 casas a esquerda da vírgula e no máximo 5 a direita!"
            ];
            $validacao = Validator::make($input, $rules, $messages);
            $validacao->validate();

            $investimento = InvestimentoCripto::find($id);
            $investimento->data_compra = $request->data_compra;
            $investimento->quantidade = str_replace(",", ".", str_replace(".", "", $request->quantidade));
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestimentoCripto  $investimentoCripto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
