<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
//use Auth;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Auth;




class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',["only"=>[
            "getIndex",
        ]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        return view('home');
    }

    public function getPersona(){
        //recover an user
        //return Auth::user();
        //echo 'user name: ' . Auth::user()->name;
        
        if(Auth::guest()){
            return "No Estas logeado";
        }
        return "Hola soy una persona";
    }

}

