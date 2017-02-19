<?php

use Illuminate\Database\Seeder;

class RoutinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('routines')->insert([ //sunday dsp theory
            'lab' => true,
            'start_time' => '8',
            'end_time' => '11',
            'day' => 'Sunday',
            'status' => 'regular',
            'year' => '2012',
            'semester' => '8',
            'dept' => 'CSE',
            'labassis_id' => '3',
            'user_id' => '3',
            'course_id' => '2',
            'teacher_id' => '1',
            'room_id' => '1',
        ]);
        DB::table('routines')->insert([ //sunday bio theory
            'lab' => false,
            'start_time' => '11',
            'end_time' => '12',
            'day' => 'Sunday',
            'status' => 'regular',
            'year' => '2012',
            'semester' => '8',
            'dept' => 'CSE',
            'labassis_id' => '3',
            'user_id' => '2',
            'course_id' => '3',
            'teacher_id' => '2',
            'room_id' => '3',
        ]);

        DB::table('routines')->insert([ //monday dsp theory
            'lab' => false,
            'start_time' => '10',
            'end_time' => '11',
            'day' => 'Monday',
            'status' => 'regular',
            'year' => '2012',
            'semester' => '8',
            'dept' => 'CSE',
            'labassis_id' => '3',
            'user_id' => '1',
            'course_id' => '1',
            'teacher_id' => '1',
            'room_id' => '2',
        ]);

        DB::table('routines')->insert([ //tuesday bio lab
            'lab' => true,
            'start_time' => '10',
            'end_time' => '13',
            'day' => 'Tuesday',
            'status' => 'regular',
            'year' => '2012',
            'semester' => '8',
            'dept' => 'CSE',
            'labassis_id' => '3',
            'user_id' => '2',
            'course_id' => '4',
            'teacher_id' => '2',
            'room_id' => '1',
        ]);

        DB::table('routines')->insert([ //wednesday bio theory
            'lab' => false,
            'start_time' => '11',
            'end_time' => '12',
            'day' => 'Wednesday',
            'status' => 'regular',
            'year' => '2012',
            'semester' => '8',
            'dept' => 'CSE',
            'labassis_id' => '3',
            'user_id' => '2',
            'course_id' => '3',
            'teacher_id' => '2',
            'room_id' => '3',
        ]);


        DB::table('routines')->insert([ //thursday dsp 8-10
            'lab' => false,
            'start_time' => '8',
            'end_time' => '10',
            'day' => 'Thursday',
            'status' => 'regular',
            'year' => '2012',
            'semester' => '8',
            'dept' => 'CSE',
            'labassis_id' => '3',
            'user_id' => '1',
            'course_id' => '1',
            'teacher_id' => '1',
            'room_id' => '2',
        ]);

        DB::table('routines')->insert([ //thursday bio theory
            'lab' => false,
            'start_time' => '11',
            'end_time' => '12',
            'day' => 'Thursday',
            'status' => 'regular',
            'year' => '2012',
            'semester' => '8',
            'dept' => 'CSE',
            'labassis_id' => '3',
            'user_id' => '2',
            'course_id' => '3',
            'teacher_id' => '2',
            'room_id' => '3',
        ]);
    }
}
