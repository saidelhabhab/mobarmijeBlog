<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index (){

        $users = User::all();

        return view('admin.user.index',compact('users'));

    }

    public function edit($id){

        $user =  User::find($id);
        return view('admin.user.edit',compact('user'));

    }
    public function update(Request $request,$id){

        try {

        $user =  User::find($id);

        if($user)
        {
            $user->role_as = $request->role_as;

            $user->update();
            return redirect('admin/users')->with('message','user update successfully');
        }

        return redirect('admin/users')->with('message','No user found');

        }
        catch
        (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
       }


}

