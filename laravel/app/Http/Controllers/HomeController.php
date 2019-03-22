<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function xinchao($ten){
        echo "xin chao: " . $ten;
    }

    public function GetURL(Request $request){
        // return $request->path();
        if($request->is('my*'))
            echo "co my";
        else
            echo "khong co my";
    }

    public function postForm(Request $request){
        echo $request->name;
    }
}
