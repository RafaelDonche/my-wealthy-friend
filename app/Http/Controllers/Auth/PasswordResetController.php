<?php

namespace App\Http\Controllers\Auth;

use App\Models\Email;
use App\Models\ErrorLog;
use App\Http\Controllers\Controller;
use App\Mail\PasswordReset;
use App\Models\User;
use App\Services\EmailService;
use App\Traits\ApiResponser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PasswordResetController extends Controller
{
    public function passwordReset1(){

        try {
            return view('passwordReset.passwordReset1');
        }
        catch(\Exception $ex){
            // return back()->with('erro', $ex->getMessage());
            return back()->with('erro', 'Erro contate o administrador.');
        }
    }

    public function passwordReset2(Request $request){
        try {
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

            $user = User::where('email', '=', $request->email)
                ->where('ativo', '=', 1)
                ->first();

            if($user){

                $link = URL::temporarySignedRoute('passwordReset3', now()->addMinutes(20), [Crypt::encrypt($user->id)]);

                $details = [
                    'cliente' => $user->name,
                    'link' => $link,
                ];

                Mail::to($user->email)->send(new PasswordReset($details));

                return redirect()->route('login')->with('success', 'Email enviado. Cheque sua caixa de spam caso não encontre.');
            }
            else{
                return redirect()->back()->with('erro', 'Usuário não encontrado.')->withInput();
            }

        }
        catch (ValidationException $e ) {
            $message = $e->errors();
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        }
        catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage());
            // return back()->with('erro', 'Erro contate o administrador.');
        }

    }

    public function passwordReset3(Request $request, $id){
        try{

            if (!$request->hasValidSignature()) {
                return view('passwordReset.step2expired');
            }
            $user = User::find(Crypt::decrypt($id));
            return view('passwordReset.passwordReset2', compact('user'));

        }
        catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage());
            // return back()->with('erro', 'Erro contate o administrador.');
        }
    }

    public function passwordReset4(Request $request, $id){
        try{
            $input = [
                'password' => $request->password,
                'confirmacao' => $request->confirmacao
            ];
            $rules = [
                'password' => 'required|min:6|max:16',
                'confirmacao' => 'required|same:password'
            ];
            $messages = [
                'password.required' => 'A senha é obrigatório.',
                'password.min' => 'A senha deve ter no mínimo 6 caracteres.',
                'password.max' => 'A senha deve ter no máximo 16 caracteres.',

                'confirmacao.required' => 'A comfirmação é obrigatório.',
                'confirmacao.same' => 'A confirmação deve ser igual a senha.'
            ];

            $validacao = Validator::make($input, $rules, $messages);
            $validacao->validate();

            if($request->password != $request->confirmacao){
                return redirect()->back()->with('erro', 'Senhas não conferem!');
            }

            $user = User::find(Crypt::decrypt($id));

            if($user){
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->route('login')->with('success', 'Senha alterada com sucesso!');
            }
            else{
                return back()->with('erro', 'Usuário não encontrado.')->withInput();
            }

        }
        catch (ValidationException $e ) {
            $message = $e->errors();
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        }
        catch (\Exception $ex) {
            return back()->with('erro', $ex->getMessage());
            // return back()->with('erro', 'Erro contate o administrador.');
        }
    }

}

