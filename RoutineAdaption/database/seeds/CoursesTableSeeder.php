<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
            'course_no' => '425',
            'title' => 'Digital Signal Processing',
            'credit' => '3',
            'num_of_students' => '60',
            't_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        DB::table('courses')->insert([
            'course_no' => '426',
            'title' => 'Digital Signal Processing',
            'credit' => '1.5',
            'num_of_students' => '60',
            't_id' => '1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        DB::table('courses')->insert([
            'course_no' => '469',
            'title' => 'Bio Informatics',
            'credit' => '3',
            'num_of_students' => '30',
            't_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
        DB::table('courses')->insert([
            'course_no' => '470',
            'title' => 'Bio Informatics',
            'credit' => '1.5',
            'num_of_students' => '30',
            't_id' => '2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),

        ]);
    }
}
