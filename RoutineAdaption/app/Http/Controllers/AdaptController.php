<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdaptController extends Controller
{
    public function adaptrequest(Request $request)
    {
        $id = $request->id;
        $newday = $request->day;
        $newtime = $request->time;
        $batch = $request->batch;
        $semester = $request->semester;


        return view('individualroutine')->with('param_batch', $batch)->with('param_semester', $semester);


    }
}
