<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function index(){
        $id = session()->get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');
        $role = explode('"',User::where('id','=',$id)->get('role'));
        $role = $role[3];
        if ($role == "Admin"){
            $data = User::all();
        }
        else{
            $data = User::where('id','=',$id);
        }
        return view('users.index',compact('data','role','id'));
    }

    public function create(){}

    public function store(Request $request){}

    public function show($id){
        $data = User::all()->where('id','=',$id);
        return view('users.show',compact('data'));
    }

    public function edit($id){
        $data = User::all()->where('id','=',$id);
        return view('users.edit',compact('data'));
    }

    public function update(Request $request, $id){}

    public function destroy($id){}
}
