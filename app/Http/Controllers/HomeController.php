<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $user = user::find(10)->saldo;
        // get saldo from saldo table where id =$id
        return view('home',compact('user'));
    }


    public function returnhome()
    {
         return view('index');
    }
    // public function index()
    // {
    //     return view('index');
    // }
}
