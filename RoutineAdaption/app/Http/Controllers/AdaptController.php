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

        return "Table Updated";
    }
}
