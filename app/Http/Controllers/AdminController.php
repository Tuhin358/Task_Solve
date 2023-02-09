<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function create(){
        return view('admin.create');
    }

    public function index(){
        $admindatas=Admin::latest()->paginate(5);
        return view('admin.index',compact('admindatas'));

    }

    public function store(Request $request)
    {
        $admin=new Admin();
        $admin->id=$request->admin;
        $admin->title=$request->title;
        $admin->short_desctiption=$request->short_desctiption;
        $admin->date=$request->date;


         if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move(public_path('/storage/admin/'),$filename);
            $admin->image= $filename;
        }
        $admin->save();
        return redirect()->back();

    }


    public function edit($id)

    {
        $category= Admin::findOrFail($id);
        return view('admin.edit',compact('category'));

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

        Admin::findOrFail($category_id)->update([
            'title'=>$request->title,
            'short_desctiption'=>$request->short_desctiption,
            'date'=>$request->date,
            'image'=>$img_url,
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $file = Admin::find($id);
        $file->delete();
        return redirect()->back();
    }


}
