<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('rooms')->insert([
            'capacity' => '100',
        ]);
        DB::table('rooms')->insert([
            'capacity' => '90',
        ]);
        DB::table('rooms')->insert([
            'capacity' => '80',
        ]);
    }
}
