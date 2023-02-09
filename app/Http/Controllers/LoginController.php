<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function show_dashboard(){
        return view('admin');
    }

    public function login(Request $request)
    {

        $email = $request->email;
        $password =$request->password;
        $result = User::where('email',$email)->where('password',$password)->first();
        if($result){
            return redirect()->route('dashboard');
        }else{

            return redirect()->route('login.index');
        }
    }


}
