<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomSample(){
        $sample = [
            '小型轎車',
            '中型轎車',
            '大型轎車',
            '掀背車',
            '小型休旅車',
            '中型休旅車',
            '大型休旅車',
            'MPV',
            '旅行車',
            '跑車',
            '敞篷車',
        ];
        return $sample[rand(0,count($sample)-1)];
    }
    public function generateRandomOrigin(){
        $origin = [
            '台灣',
            '日本',
            '韓國',
            '中國大陸',
            '歐洲',
            '美國',
        ];
        return $origin[rand(0,count($origin)-1)];
    }
    public function generateRandomString($length = 10){
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0;$i < $length; $i++){
            $randomString .= $characters[rand(0,$charactersLength - 1)];
        }
        return $randomString;
    }
    public function generateRandomModle(){
        $modle = $this->generateRandomString(rand(3,7));
        $modle = strtolower($modle);
        $modle = ucfirst($modle);
        return $modle;
    }
    public function generateRandomType(){
        $type = $this->generateRandomString(rand(3,7));
        $type = strtolower($type);
        $type = ucfirst($type);
        return $type;
    }
    public function generateRandomPower(){
        $power = ['汽油','柴油','油電','純電'];
        /*$cc = '';
        if($power != '純電'){
          $cc = rand(1000, 3000); 
        }*/
        return $power[rand(0,count($power)-1)];
    }
    
    public function run()
    {
        for($i=0;$i<200;$i++){
            $sample = $this->generateRandomSample();
            $power = $this->generateRandomPower();
            $modle = $this->generateRandomModle();
            $type = $this->generateRandomType();
            $origin = $this->generateRandomOrigin();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));
            DB::table('Types')->insert([
                'car_sample' => $sample,
                'bid' => rand(1,27),
                'car_modle' => $modle,
                'type' => $type,
                'power_type' => $power,
                'price' => rand(10,2100),
                'origin' => $origin, 
                'car_door' => rand(2,7),
                'exhaust_volume' => rand(100,2000),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
        

       
    }
}
