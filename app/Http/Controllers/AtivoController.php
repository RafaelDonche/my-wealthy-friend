<?php

namespace App\Http\Controllers;

use App\Models\Ativo;
use Illuminate\Http\Request;

class AtivoController extends Controller
{
    /**
     * Listagem de ações.
     */
    public function listagemAcao()
    {
        try {

            $items = Ativo::where('id_tipo', 1)->get();

            return view('listagem.acoes.index', compact('items'));

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage());
            // return back()->with('erro', 'Erro contate o administrador.');
        }
    }

    /**
     * Listagem de fundos imobiliários.
     */
    public function listagemFundo()
    {
        try {

            $items = Ativo::where('id_tipo', 2)->get();

            return view('listagem.fundos.index', compact('items'));

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage());
            // return back()->with('erro', 'Erro contate o administrador.');
        }
    }

    /**
     * Listagem de criptomoedas.
     */
    public function listagemCripto()
    {
        try {

            $items = Ativo::where('id_tipo', 3)->get();

            return view('listagem.cripto.index', compact('items'));

        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage());
            // return back()->with('erro', 'Erro contate o administrador.');
        }
    }
}
