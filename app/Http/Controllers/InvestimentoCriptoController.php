<?php

namespace App\Http\Controllers;

use App\Models\InvestimentoCripto;
use App\Models\InvestimentoCriptoVenda;
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
                $result->valor = number_format(($c->valor_unitario*$c->quantidade), 2, ',', '.');
                $porcentagem = (($c->valor_unitario*$c->quantidade) / $somaTotal) * 100;
                $result->porcentagem = number_format($porcentagem, 2);

                array_push($arrayResult, $result);

                $criptosVendidas = $c->vendas;
                $somaTotalVendidas = 0;
                foreach ($criptosVendidas as $cv) {
                    $somaTotalVendidas = $somaTotalVendidas + ($cv->valor_unitario*$cv->quantidade);
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
                'quantidade' => 'required|numeric|regex:/^\d{1,15}(\.\d{0,5})?$/'
            ];
            $messages = [
                'quantidade.regex' => "A 'quantidade' no cadastro da criptomoeda deve ter no máximo 15 dígitos a esquerda da vírgula e no máximo 5 a direita!"
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
     * @param  \App\Models\InvestimentoCripto  $investimentoCripto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return view('carteira.investimento-cripto');
        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
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
                'quantidade' => 'required|numeric|regex:/^\d{1,15}(\.\d{0,5})?$/'
            ];
            $messages = [
                'quantidade.regex' => "A 'quantidade' no cadastro da criptomoeda deve ter no máximo 15 dígitos a esquerda da vírgula e no máximo 5 a direita!"
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
     * Cria uma venda para o investimento, subtrai a quantidade do investimento e marca como vendido se for o caso.
     */
    public function vender(Request $request, $id)
    {
        try {

            $input = [
                'data de venda' => $request->data_venda,
                'valor unitário na venda' => str_replace(",", ".", str_replace(".", "", $request->valor_venda)),
                'quantidade vendida' => str_replace(",", ".", str_replace(".", "", $request->quantidade_venda))
            ];
            $rules = [
                'data de venda' => 'required|date',
                'valor unitário na venda' => 'required',
                'quantidade vendida' => 'required|numeric|regex:/^\d{1,15}(\.\d{0,5})?$/'
            ];
            $messages = [
                'quantidade vendida.regex' => "A 'quantidade' no cadastro da criptomoeda deve ter no máximo 15 dígitos a esquerda da vírgula e no máximo 5 a direita!"
            ];
            $validacao = Validator::make($input, $rules, $messages);
            $validacao->validate();

            // acha o investimento
            $cripto = InvestimentoCripto::find($id);

            // data de venda não pode ser antes da data de compra
            if ($cripto->data_compra > $request->data_venda) {
                return back()->with('erro', 'A data de venda não pode ser antes da data de compra (' . date('d/m/Y', strtotime($cripto->data_compra)) . ')');
            }

            // quantidade de venda não pode ser maior que a quantidade do investimento
            if ($cripto->quantidade < str_replace(",", ".", str_replace(".", "", $request->quantidade_venda))) {
                return back()->with('erro', 'A quantidade vendida não pode ser maior que a quantidade do cadastrada no ativo
                (' . $cripto->quantidade . ')');
            }

            $quantidadeAtual = $cripto->quantidade - str_replace(",", ".", str_replace(".", "", $request->quantidade_venda));
            $cripto->quantidade = $quantidadeAtual;

            // se após subtrair a quantidade o resultado for 0, então o investimento foi vendido
            if ($quantidadeAtual == 0) {
                $cripto->vendido = true;
            }

            $cripto->save();

            // cadastra a venda do investimento
            $venda = new InvestimentoCriptoVenda();
            $venda->data_venda = $request->data_venda;
            $venda->valor_unitario = str_replace(",", ".", str_replace(".", "", $request->valor_venda));
            $venda->quantidade = str_replace(",", ".", str_replace(".", "", $request->quantidade_venda));
            $venda->id_investimento = $cripto->id;
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
     * @param  \App\Models\InvestimentoCripto  $investimentoCripto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $cripto = InvestimentoCripto::find($id);
            $cripto->ativo = 0;
            $cripto->save();

            return back()->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
