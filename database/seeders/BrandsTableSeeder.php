<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            'brands' => '測試',
            'headquarter' => '台灣新北',
            'area' => '台灣新北',
            'year' => '2003',
            'html' => 'www.test.com',
        ]);
        //
    }
}
