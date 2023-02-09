<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Usermodel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }

    public function index(){
        $userdatas=Usermodel::latest()->paginate(5);
        return view('user.index',compact('userdatas'));

    }

    public function store(Request $request)
    {
        $user=new Usermodel();
        $user->id=$request->user;
        $user->title=$request->title;
        $user->short_desctiption=$request->short_desctiption;
        $user->date=$request->date;


         if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move(public_path('/storage/user/'),$filename);
            $user->image= $filename;
        }
        $user->save();
        return redirect()->back();

    }


    public function edit($id)

    {
        $category= Usermodel::findOrFail($id);
        return view('user.edit',compact('category'));

    }


    public function update(Request $request){
        $category_id=$request->category_id;

        $request->validate([
            'title' => 'required|unique:admins',
            'short_desctiption' => 'required',
            'date' =>'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',

        ]);
        {
            $category_id=$request->category_id;
            $cat_image=$request->file('image');
             $img_name=hexdec(uniqid()).'.'. $cat_image->getClientOriginalExtension();
             $request->image->move(public_path('/storage/admin/'),$img_name);
             $img_url='/storage/admin/'.$img_name;
        }

        Usermodel::findOrFail($category_id)->update([
            'title'=>$request->title,
            'short_description'=>$request->short_description,
            'date'=>$request->date,
            'image'=>$img_url,

        ]);
        return redirect()->back();

    }

    public function destroy($id)
    {
        $files = Usermodel::find($id);
        $files->delete();
        return redirect()->back();
    }




}
