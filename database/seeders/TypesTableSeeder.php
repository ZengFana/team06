<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Types')->insert([
            'car_sample' => '大型房車',
            'bid' => '2',
            'car_modle' => 'Tid',
            'type' => 'X2',
            'power_type' => '汽油',
            'price' => '132',
            'origin' => '日本',

        ]);
    }
}
