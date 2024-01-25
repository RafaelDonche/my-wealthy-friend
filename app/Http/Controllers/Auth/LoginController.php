<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index() {
        return view('login.login');
    }

    public function autenticacao(Request $request) {

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->back()->with('erro', 'Dados incorretos, tente novamente.')->withInput(['email' => $request->email]);
        };

        return redirect()->route('home');

    }

    public function logout() {

        Auth::logout();

        return redirect()->route('login');
    }
}
