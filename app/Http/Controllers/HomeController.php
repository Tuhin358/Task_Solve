<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Frontend;
use App\Models\Usermodel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return view('welcome');
    // }

    public function index()
    {
        $admins=Admin::all();
         $users = Usermodel::all();
        //  $fronts = Frontend::latest()->limit(12)->get();

        return view('welcome',compact('admins' ,'users'));
    }

    public function search(Request $request)
    {
        $admins=Admin::where('title','like',"%{$request->search}%")->orWhere('short_desctiption','like',"%{$request->search}%")->get();
        $users = Usermodel::where('title','like',"%{$request->search}%")->orWhere('short_desctiption','like',"%{$request->search}%")->get();

        return view('search_output',compact('admins','users'));
    }


}
