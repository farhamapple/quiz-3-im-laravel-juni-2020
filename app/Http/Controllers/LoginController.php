<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login');
    }

    public function show(Request $request)
    {
        $session_login = array(
            'loggged' => 1,
            'name'    => 'Farham Harvianto',
            'user_id' => 0
        );
        $request->session()->put('key', 'value');

        $value = session('key');

        return $value;
        //
    }

    public function logout(Request $request){
        $request->session()->forget('key');

        $request->session()->flush();

        return redirect('/');
    }
}
