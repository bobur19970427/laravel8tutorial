<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function loginSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'email',
            'password' => 'min:6|max:12',
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        return 'Email : '.$email.'Password : '.$password;
    }
}

