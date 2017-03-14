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
        //'12 batch

        DB::table('rooms')->insert([    //1
            'capacity' => '100',
        ]);
        DB::table('rooms')->insert([    //2
            'capacity' => '90',
        ]);
        DB::table('rooms')->insert([    //3
            'capacity' => '80',
        ]);

        //'13 batch
        DB::table('rooms')->insert([    //4
            'capacity' => '90',
        ]);
        DB::table('rooms')->insert([    //5
            'capacity' => '80',
        ]);

        //'14 batch
        DB::table('rooms')->insert([    //6
            'capacity' => '90',
        ]);
        DB::table('rooms')->insert([    //7
            'capacity' => '80',
        ]);

    }
}
