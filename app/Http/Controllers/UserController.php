<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function show(){
        $user_id = Auth::id();
        $person = User::find($user_id);

        return view('user.show',['person'=>$person]);
    }
    public function edit(){
        $user_id = Auth::id();
        $person = User::find($user_id);

        return view('user.edit',['person'=>$person]);
    }
    public function update(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required|min:7'
        ]);

        $person = User::find($request->id);
        $person->name = $request->name;
        $person->email = $request->email;
        $person->password = Hash::make($request->password);
        $person->save();

        return redirect('/user/show');
    }

    public function delete(){

        return view('user.delete');
    }

    public function remove(){
        $user_id = Auth::id();
        User::find($user_id)->delete();
        Post::where('user_id',$user_id)->delete();
        Comment::where('user_id',$user_id)->delete();
        return redirect(route('login'));
    }
}
