<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function update(Request $request)
    {
        try {
            $input = [
                'name' => $request->name,
                'email' => $request->email,
                'cpf' => preg_replace('/[^0-9]/', '', $request->cpf)
            ];
            $rules = [
                'name' => 'required|max:250',
                'email' => 'required|email',
                'cpf' => 'required|size:11'
            ];
            $messages = [
                'name.required' => 'O nome é obrigatório.',
                'name.max' => 'O nome deve ter no máximo 250 caracteres.',

                'email.required' => 'O email é obrigatório.',
                'email.email' => 'Deve ser um email.',

                'cpf.required' => 'O CPF é obrigatório.',
                'cpf.size' => 'O CPF deve ter 11 digitos.'
            ];
            $validacao = Validator::make($input, $rules, $messages);
            $validacao->validate();

            $user = User::find(auth()->user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->cpf = preg_replace('/[^0-9]/', '', $request->cpf);
            $user->save();

            return back()->with('success', 'Usuário editado com suscesso.');

        } catch (ValidationException $e ) {
            $message = $e->errors();
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        } catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
        }
    }
}
