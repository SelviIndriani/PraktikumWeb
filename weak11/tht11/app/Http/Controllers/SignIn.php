<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignIn extends Controller
{
    //
    public function signIn(Request $request){
        $email = $request->input("email");
        $pw = $request->input("pw");

        if ($email == 'selvindri1010@gmail.com' && $pw == '123') {
            return redirect()->route('foods.index');
        } else {
            return view('index', [
                'alert' => "Anda bukan admin",
            ]);
        }

    }
}
