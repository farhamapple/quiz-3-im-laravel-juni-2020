<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;

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

    public function loginuser(Request $request){
        $this->validate($request,[
            'email' => 'required|min:3',
            'passwd' => 'required'
        ]);

        //$user = LoginModel::get_users_by_email($request['email']);
        $user = LoginModel::get_users_by_email($request['email']);

    //    $question = QuestionsModel::save($data);
       if($user){
            $session_login = array(
                'loggged' => 1,
                'name'    => $user->name,
                'user_id' => $user->id
            );
            //dd($session_login);
            $request->session()->put($session_login);

            return redirect('/');
       }else{
            return redirect()->back()->with('success', 'Pertanyaan berhasil dibuat');
       }

    }

    public function logout(Request $request){
        $request->session()->forget('key');

        $request->session()->flush();

        return redirect('/');
    }
}
