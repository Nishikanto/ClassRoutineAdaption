<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routine;
use App\Record;
use DB;

class ChangeController extends Controller
{
    //

    public function changeClass(Request $request)
    {

        $result = Routine::where('id', $request->id)
          ->update(['status' => 'regular']);

        if($result){
          $result = Record::where('routine_id', $request->id)
              ->update(['status' => 'done']);
        }


        return $result;
    }

    public function noChangeClass(Request $request)
    {
        return $request->id;
    }
}
