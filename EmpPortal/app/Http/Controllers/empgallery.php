<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class empgallery extends Controller
{
    public function index(){
        $id = session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $data = image::all()->where('id','=',$id);
        return view('gallery.index',compact('data'));

    }

    public function create(){
        return view('gallery.add');
    }
    public function store(Request $request){
        $img = new image;
        $img->id = session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        if ($request->hasFile('image')){
            $name = $request->file('image')->getClientOriginalName();
            $imagename = time().'_'.$name;
            $request->image->move(public_path('galleryimage'),$imagename);
        }
        $img->image = $imagename;
        $img->save();
        return redirect()->route('gallery.index');
    }

    public function show($id){

    }
    public function edit($id){

    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        
    }
}
