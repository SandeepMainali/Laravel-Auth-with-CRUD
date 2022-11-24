<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function register(Request $req){
        // dd($req->all());

        $req->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
        ]);

       


        User::create([
            'name' =>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make ($req->password),
        ]);

        return redirect()->route('login');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($req->only('email', 'password'))){
            return redirect()->route('dashboard');
        }else{
            return back()->with('fail','Login failed');
        }
 
   }

   public function logout(){
    auth()->logout();
    return redirect()-> route('login');
   }
}
