<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoFundo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use stdClass;

class InvestimentoFundoController extends Controller
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

            $fundos = InvestimentoFundo::where('ativo', 1)->where('id_user', auth()->user()->id)->get();

            $arrayResult = [];

            $somaTotal = 0;
            foreach ($fundos as $f) {
                $somaTotal = $somaTotal + ($f->valor_unitario*$f->quantidade);
            }

            $result = [];
            foreach ($fundos as $f) {
                $result = new stdClass();
                $result->nome = $f->ativo_info->sigla;
                $valor = (($f->valor_unitario*$f->quantidade) / $somaTotal) * 100;
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
                'fii' => $request->fii,
                'corretora' => $request->corretora_fii,
                'data de compra' => $request->data_compra_fii,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario_fii)),
                'quantidade' => $request->quantidade_fii
            ];
            $rules = [
                'fii' => 'required',
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required',
                'quantidade' => 'required'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $investimento = new InvestimentoFundo();
            $investimento->id_ativo = $request->fii;
            $investimento->data_compra = $request->data_compra_fii;
            $investimento->quantidade = $request->quantidade_fii;
            $investimento->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario_fii));
            $investimento->corretora = $request->corretora_fii;
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
     * @param  \App\Models\InvestimentoFundo  $investimentoFundo
     * @return \Illuminate\Http\Response
     */
    public function show(InvestimentoFundo $investimentoFundo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InvestimentoFundo  $investimentoFundo
     * @return \Illuminate\Http\Response
     */
    public function edit(InvestimentoFundo $investimentoFundo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InvestimentoFundo  $investimentoFundo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InvestimentoFundo $investimentoFundo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestimentoFundo  $investimentoFundo
     * @return \Illuminate\Http\Response
     */
    public function destroy(InvestimentoFundo $investimentoFundo)
    {
        //
    }
}
