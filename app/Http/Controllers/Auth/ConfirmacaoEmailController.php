<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ConfirmacaoEmail;
use App\Models\Email;
use App\Models\ErrorLog;
use App\Models\User;
use App\Services\EmailService;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ConfirmacaoEmailController extends Controller
{
    public function encaminharLink()
    {
        try {
           return view('login.confirmacaoEmail');

        }catch (\Exception $ex) {
            // return back()->with('erro', $ex->getMessage())->withInput();
            return back()->with('erro', 'Erro contate o administrador.')->withInput();
        }
    }

    // metodo para enviar email de confirmacao de cadastro
    public function linkEncaminhado(Request $request)
    {
        try {
            //validação dos campos
            $input = [
                'email' => $request->email
            ];
            $rules = [
                'email' => 'required|email'
            ];
            $messages = [
                'email.required' => 'O email é obrigatório.',
                'email.email' => 'Deve ser um email.'
            ];

            $validacao = Validator::make($input, $rules, $messages);
            $validacao->validate();

            //realiza a busca no BD o email informado
            $user = User::where('email', '=', $request->email)
                ->where('ativo', '=', 1)
                ->first();

            // se existir usuario ativo
            if($user){

                //verificar se o e-mail está ativo, caso esteja redireciona para tela de login
                if($user->email_verified_at != null){
                    return back()->with('erro', 'Usuário já foi confirmado por e-mail e as credencias já estão válidas para acessar o sistema.');
                }

                $link = URL::temporarySignedRoute('confirmacao_email', now()->addMinutes(20), [Crypt::encrypt($user->id)]);

                $details = [
                    'cliente' => $user->pessoa->nomeCompleto,
                    'link' => $link,
                ];

                Mail::to($user->email)->send(new ConfirmacaoEmail($details));

                return redirect()->route('login')->with('success', 'Confirmação de email enviado. Cheque sua caixa de spam caso não encontre.');
            }
            else{
                return redirect()->route('login')->with('erro', 'E-mail não localizado no sistema.')->withInput();
            }

        } catch (ValidationException $e ) {
            $message = $e->errors();
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        }
        catch (\Exception $ex) {
            // return back()->with('erro', $ex->getMessage())->withInput();
            return back()->with('erro', 'Erro contate o administrador.')->withInput();
        }
    }

    public function confirmacaoEmail(Request $request, $id)
    {
        try {

            if (!$request->hasValidSignature()){
                return view('expired');
            }

            $user = User::find(Crypt::decrypt($id));
            $user->email_verified_at = Carbon::now();
            $user->save();

            return view('login.emailConfirmado');
        }
        catch (\Exception $ex) {
            // return back()->with('erro', $ex->getMessage())->withInput();
            return back()->with('erro', 'Erro contate o administrador.')->withInput();
        }

    }
}
