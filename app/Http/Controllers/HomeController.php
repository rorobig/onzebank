<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Auth;
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
        $user = Auth::user();

        // get saldo from saldo table where id =$id
        // return view('home',compact('user'));
        return view('home', ['user' => $user]);
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
