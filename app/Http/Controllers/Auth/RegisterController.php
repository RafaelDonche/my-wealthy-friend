<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ConfirmacaoEmail;
use App\Models\User;
use App\Services\ValidadorCPFService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function index() {
        return view('login.registrar');
    }

    public function register(Request $request) {
        try {

            $input = [
                'name' => $request->name,
                'cpf' => preg_replace('/[^0-9]/', '', $request->cpf),
                'email' => $request->email,
                'password' => $request->password,
                'confirmacao' => $request->confirmacao
            ];
            $rules = [
                'name' => 'required|max:250',
                'cpf' => 'required|size:11',
                'email' => 'required|email',
                'password' => 'required|min:6|max:16',
                'confirmacao' => 'required|same:password'
            ];
            $messages = [
                'name.required' => 'O nome é obrigatório.',
                'name.max' => 'O nome deve ter no máximo 250 caracteres.',

                'cpf.required' => 'O CPF é obrigatório.',
                'cpf.size' => 'O CPF deve ter 11 digitos.',

                'email.required' => 'O email é obrigatório.',
                'email.email' => 'Deve ser um email.',

                'password.required' => 'A senha é obrigatório.',
                'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
                'password.max' => 'A senha deve ter no máximo 16 caracteres.',

                'confirmacao.required' => 'A comfirmação é obrigatório.',
                'confirmacao.same' => 'A confirmação deve ser igual a senha.'
            ];
            $validacao = Validator::make($input, $rules, $messages);
            $validacao->validate();

            $verificaCpf = User::where('cpf', preg_replace('/[^0-9]/', '', $request->cpf))->first();

            if ($verificaCpf) {
                return back()->with('erro', 'Este CPF já está em uso.')->withInput();
            }

            $verificaEmail = User::where('email', $request->email)->first();

            if ($verificaEmail) {
                return back()->with('erro', 'Este e-mail já está em uso.')->withInput();
            }

            //verifica se a confirmação de senha estão ok
            if($request->password != $request->confirmacao){
                return back()->with('erro', 'Senhas não conferem.')->withInput();
            }

            if(!ValidadorCPFService::ehValido($request->cpf)){
                return back()->with('erro', 'CPF inválido.')->withInput();
            }

            $user = new User();
            $user->name = $request->name;
            $user->cpf = preg_replace('/[^0-9]/', '', $request->cpf);
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->ativo = 1;
            $user->save();

            // envio de email de confirmação
            $link = URL::temporarySignedRoute('confirmacao_email', now()->addMinutes(20), [Crypt::encrypt($user->id)]);

            $details = [
                'cliente' => $user->name,
                'link' => $link,
            ];

            Mail::to($user->email)->send(new ConfirmacaoEmail($details));

            return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!
                Encaminhado link de confirmação no seu email, cheque sua caixa de spam se necessário.');

        }
        catch (ValidationException $e ) {
            $message = $e->errors();
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        }catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage())->withInput();
            // return back()->with('erro', 'Erro contate o administrador.')->withInput();
        }
    }
}
