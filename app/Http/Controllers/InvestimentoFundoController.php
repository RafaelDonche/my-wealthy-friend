<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoFundo;
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
                $somaTotal = $somaTotal + ($f->valor_unitario*$f->quantidade);
            }

            $result = [];
            foreach ($fundos as $f) {
                $result = new stdClass();
                $result->nome = $f->ativo_info->sigla;
                $result->valor = number_format(($f->valor_unitario*$f->quantidade), 2, ',', '.');
                $porcentagem = (($f->valor_unitario*$f->quantidade) / $somaTotal) * 100;
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

            $investimento = new InvestimentoFundo();
            $investimento->id_ativo = $request->fii;
            $investimento->data_compra = $request->data_compra_fii;
            $investimento->quantidade = $request->quantidade_fii;
            $investimento->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_unitario_fii));
            $investimento->corretora = $request->corretora_fii;
            $investimento->id_user = auth()->user()->id;
            $investimento->vendido = 0;
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
    public function show($id)
    {
        try {
            return view('carteira.investimento-fundo');
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

            $investimento = InvestimentoFundo::find($id);
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
     * Cria uma venda para o investimento, subtrai a quantidade do investimento e marca como vendido se for o caso.
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

            // acha o investimento
            $fundo = InvestimentoFundo::find($id);

            // data de venda não pode ser antes da data de compra
            if ($fundo->data_compra > $request->data_venda) {
                return back()->with('erro', 'A data de venda não pode ser antes da data de compra (' . date('d/m/Y', strtotime($fundo->data_compra)) . ')');
            }

            // quantidade de venda não pode ser maior que a quantidade do investimento
            if ($fundo->quantidade < $request->quantidade_venda) {
                return back()->with('erro', 'A quantidade vendida não pode ser maior que a quantidade do cadastrada no ativo
                (' . $fundo->quantidade . ')');
            }

            $quantidadeAtual = $fundo->quantidade - $request->quantidade_venda;
            $fundo->quantidade = $quantidadeAtual;

            // se após subtrair a quantidade o resultado for 0, então o investimento foi vendido
            if ($quantidadeAtual == 0) {
                $fundo->vendido = true;
            }

            $fundo->save();

            // cadastra a venda do investimento
            $venda = new InvestimentoFundoVenda();
            $venda->data_venda = $request->data_venda;
            $venda->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_venda));
            $venda->quantidade = $request->quantidade_venda;
            $venda->id_investimento = $fundo->id;
            $venda->ativo = 1;
            $venda->save();

            return back()->with('success', 'Cadastro de venda realizado com sucesso!');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
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

            $fundo = InvestimentoFundo::find($id);
            $fundo->ativo = 0;
            $fundo->save();

            return back()->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
