<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routine;
use App\Record;

class AdaptController extends Controller
{
    public function adaptrequest(Request $request)
    {
        $id = $request->id;
        $newday = $request->day;
        $newtime = $request->time;
        $batch = $request->batch;
        $semester = $request->semester;
        $dif = $request->dif;

        $oldday = $request->oldday;
        $oldtime = $request->oldtime;
        $teacher_id = $request->teacher_id;
        $room_id = $request->room_id;


        $Record = new Record;
        $Record->start_time = $oldtime;
        $Record->end_time = $oldtime + $dif;
        $Record->day = $oldday;
        $Record->status = 'regular';
        $Record->user_id = (int)$teacher_id;
        $Record->room_id = $room_id;
        $Record->routine_id = $id;
        $Record->save();




        Routine::where('id', $id)
          ->update(['status' => 'pending']);

        Routine::where('id', $id)
          ->update(['day' => $newday]);

        Routine::where('id', $id)
          ->update(['start_time' => (int)$newtime]);

        Routine::where('id', $id)
            ->update(['end_time' => (int)$newtime + (int)$dif]);


        return $oldtime;


    }
}
