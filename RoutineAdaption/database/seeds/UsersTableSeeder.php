<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Mohammed Jahirul Islam',
            'email' => 'jahir75bd@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'Teacher',
            'dept' => 'CSE',
            'reg_no' => '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Md Eamin Rahman',
            'email' => 'eamin-cse@sust.edu',
            'password' => bcrypt('123456'),
            'role' => 'Teacher',
            'dept' => 'CSE',
            'reg_no' => '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Billal',
            'email' => 'billal@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'Lab Assistant',
            'dept' => 'CSE',
            'reg_no' => '',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
