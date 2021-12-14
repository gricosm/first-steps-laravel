<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plates')->insert(
            [
                [
                'name'=> 'Tortilla',
                'comensales'=> 3,
                'gluten_free' => false
                ],
                [
                    'name'=> 'Cola Cao',
                    'comensales'=> 1,
                    'gluten_free' => true
                ],
            ]
        );
    }
}
