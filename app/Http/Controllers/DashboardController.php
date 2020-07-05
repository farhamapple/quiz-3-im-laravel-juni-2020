<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(Request $request){
        // Load Session

        // Cek Session
        if ($request->session()->exists('loggged')) {
            //
            $data['logged'] = 1;
            $data['session_data'] = $request->session()->all();
        }else{
            $data['logged'] = 0;
        }

        return view('dashboard', $data);
    }
}
