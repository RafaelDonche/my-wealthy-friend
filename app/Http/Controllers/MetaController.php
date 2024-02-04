<?php

namespace App\Http\Controllers;

use App\Models\ConexaoTipoMeta;
use App\Models\Meta;
use App\Models\TipoMeta;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class MetaController extends Controller
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
    public function store(Request $request)
    {
        try {
            $input = [
                'nome' => $request->nome_meta,
                'valor' => str_replace(",", ".", str_replace(".", "", $request->valor_meta)),
                'data de fim' => $request->tipo_data_fim,
                'data' => $request->data_fim_meta,
                'referencia da meta' => $request->tipo_meta
            ];
            $rules = [
                'nome' => 'required|string',
                'valor' => 'required|numeric|min:0.01',
                'data de fim' => 'required|integer',
                'data' => [
                    Rule::requiredIf($request->tipo_data_fim == 5),
                    'date',
                    'nullable'
                ],
                'referencia da meta' => 'required|array'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $hoje = Carbon::today();

            $meta = new Meta();
            $meta->nome = $request->nome_meta;
            $meta->descricao = $request->descricao_meta;
            $meta->valor = str_replace(",", ".", str_replace(".", "", $request->valor_meta));

            if ($request->tipo_data_fim == 1) {
                $meta->data_fim = $hoje->addMonth();
            }
            if ($request->tipo_data_fim == 2) {
                $meta->data_fim = $hoje->addMonths(3);
            }
            if ($request->tipo_data_fim == 3) {
                $meta->data_fim = $hoje->addMonths(6);
            }
            if ($request->tipo_data_fim == 4) {
                $meta->data_fim = $hoje->addYear();
            }
            if ($request->tipo_data_fim == 5) {
                $meta->data_fim = $request->data_fim_meta;
            }

            $meta->id_user = auth()->user()->id;
            $meta->ativo = 1;
            $meta->save();

            foreach ($request->tipo_meta as $tm) {

                $tipo = TipoMeta::find($tm);

                if (!$tipo) {
                    return back()->with('erro', 'Houve um erro ao encontrar a referência desta meta.');
                }

                $conexao = new ConexaoTipoMeta();
                $conexao->id_meta = $meta->id;
                $conexao->id_tipo = $tm;
                $conexao->ativo = 1;
                $conexao->save();
            }

            return back()->with('success', 'Cadastro realizado com sucesso.');

        } catch (ValidationException $e ) {
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
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function show(Meta $meta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function edit(Meta $meta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $input = [
                'nome' => $request->nome_meta,
                'valor' => str_replace(",", ".", str_replace(".", "", $request->valor_meta)),
                'data' => $request->data_fim_meta,
                'referencia da meta' => $request->tipo_meta
            ];
            $rules = [
                'nome' => 'required|string',
                'valor' => 'required|numeric|min:0.01',
                'data' => 'required|date',
                'referencia da meta' => 'required|array'
            ];
            $validacao = Validator::make($input, $rules);
            $validacao->validate();

            $hoje = Carbon::today();

            $meta = Meta::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id);

            if (!$meta) {
                return back()->with('erro', 'O cadastro selecionado não foi encontrado.');
            }

            $meta->nome = $request->nome_meta;
            $meta->descricao = $request->descricao_meta;
            $meta->valor = str_replace(",", ".", str_replace(".", "", $request->valor_meta));
            $meta->data_fim = $request->data_fim_meta;
            $meta->save();

            // removendo conexoes existentes
            foreach ($meta->tipos as $t) {
                $t->ativo = 0;
                $t->save();
            }

            // adicionando conexoes novas
            foreach ($request->tipo_meta as $tm) {

                $tipo = TipoMeta::find($tm);

                if (!$tipo) {
                    return back()->with('erro', 'Houve um erro ao encontrar a referência desta meta.');
                }

                $conexao = new ConexaoTipoMeta();
                $conexao->id_meta = $meta->id;
                $conexao->id_tipo = $tm;
                $conexao->ativo = 1;
                $conexao->save();
            }

            return back()->with('success', 'Cadastro editado com sucesso.');

        } catch (ValidationException $e ) {
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
     * @param  \App\Models\Meta  $meta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {

            $meta = Meta::where('ativo', 1)->where('id_user', auth()->user()->id)->find($id);

            if (!$meta) {
                return back()->with('erro', 'O cadastro selecionado não foi encontrado.');
            }

            $meta->ativo = 0;
            $meta->save();

            return redirect()->route('carteira.home')->with('success', 'Cadastro excluído com sucesso.');

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
