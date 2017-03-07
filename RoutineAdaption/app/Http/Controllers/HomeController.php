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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //return \Auth::user()->id;
        return view('home');
    }

    public function getclass($batch, $semester)
    {
      //return \Auth::user()->id;
        if(($batch == "All") && ($semester == "All")){
            return redirect('home');
        }else{
            return view('individualroutine')->with('param_batch', $batch)->with('param_semester', $semester);
        }

    }
}
