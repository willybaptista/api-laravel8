<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $response = [];

        $credencials = $request->only('email', 'password');

        $token = Auth::attempt($credencials);

        if($token) {

            $reponse['token'] = $token;

        } else {

            $response['error'] = 'Email e/ou senha incorretos.';

        }

        return $response;
    }
}
