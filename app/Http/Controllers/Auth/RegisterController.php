<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function doRegister(Request $request)
    {
        $data = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|string|email',
            'password' => 'required|string|confirmed',
            'phone' => 'required|regex:/^0[1-79][0-9]{8}$/',
        ]);

       //todo: démerde toi pour le reste Nanou d'amour
    }
}
