<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use App\Models\Todo;


class HomeController extends Controller
{
    public function registeruser(){
        return view('register');

    }

    public function login(){
        return view('login');
    }

    public function dashboard(){
        return view('dashboard',['todoitem'=>todo::all()]);
    }


    

    
}
