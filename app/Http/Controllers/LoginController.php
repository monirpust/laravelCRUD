<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    return view('login');
    }

    public function loginSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:5 | max:10'
        ]);
        $email = $request->input('email');
        $password = $request->input('password');

        return 'Email: '.$email . '<br>' .'Password: '. $password;
    }
}
