<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoFundo;
use App\Models\InvestimentoFundoCompra;
use App\Models\InvestimentoFundoVenda;
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
                $somaTotal = $somaTotal + $f->valorAtual();
            }

            $result = [];
            foreach ($fundos as $f) {
                $result = new stdClass();
                $result->nome = $f->ativo_info->sigla;
                $result->valor = number_format($f->valorAtual(), 2, ',', '.');
                $porcentagem = ($f->valorAtual() / $somaTotal) * 100;
                $result->porcentagem = number_format($porcentagem, 2);

                array_push($arrayResult, $result);

                $fundosVendidas = $f->vendas;
                $somaTotalVendidas = 0;
                foreach ($fundosVendidas as $fv) {
                    $somaTotalVendidas = $somaTotalVendidas + ($fv->valor_unitario*$fv->quantidade);
                }
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
                'fii' => $request->fii,
                'corretora' => $request->corretora_fii,
                'data de compra' => $request->data_compra_fii,
                'valor unitário' => str_replace(",", ".", str_replace(".", "", $request->valor_unitario_fii)),
                'quantidade' => $request->quantidade_fii
            ];
            $rules = [
                'fii' => 'required|integer',
                'corretora' => 'max:250',
                'data de compra' => 'required|date',
                'valor unitário' => 'required',
                'quantidade' => 'required|integer'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $verifica = InvestimentoFundo::where('id_ativo', $request->fii)->where('id_user', auth()->user()->id)->where('ativo', 1)->first();

            if ($verifica) {
                return back()->with('erro', 'Você já possui um investimento com este ativo.');
            }

            $investimento = new InvestimentoFundo();
            $investimento->id_ativo = $request->fii;
            $investimento->id_user = auth()->user()->id;
            $investimento->ativo = 1;
            $investimento->save();

            $compra = new InvestimentoFundoCompra();
            $compra->data_compra = $request->data_compra_fii;
            $compra->quantidade = $request->quantidade_fii;
            $compra->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario_fii));
            $compra->corretora = $request->corretora_fii;
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
     * @param  \App\Models\InvestimentoFundo  $investimentoFundo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $item = InvestimentoFundo::where('ativo', 1)->find($id);

            if (!$item) {
                return back()->with('erro', 'Este cadastro não está mais ativo.');
            }

            if ($item->id_user != auth()->user()->id) {
                return back()->with('error', 'Acesso negado.');
            }

            $rota_consulta = route('api.obterDadosEmpresa', $item->ativo_info->sigla);

            return view('carteira.investimento-fundo', compact('item', 'rota_consulta'));

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InvestimentoFundo  $investimentoFundo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $investimento = InvestimentoFundo::find($id);

            if ($investimento->id_user != auth()->user()->id) {
                return back()->with('error', 'Acesso negado.');
            }

            $investimento->ativo = 0;
            $investimento->save();

            return back()->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
