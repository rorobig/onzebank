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
    public function home($id)
    {
        $user = user::find($id)->saldo;
        return view('home',compact('user'));
    }

    public function index()
    {
        return view('index');
    }
}
