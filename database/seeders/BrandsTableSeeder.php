<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*public function generateRandomBrands(){
        $brands = [
            'NeoCycle',
            'EcoDrive',
            'SolarRing',
            'UrbanPower',
            'Vilox',
            'SmartDrive',
            'SpeedForce',
            'FutureWheels',
            'EcoSpeed',
            'PowerWings',
            'BMW',
            'Ford',
            'Kia',
            'Lexus',
            'Mazda',
            'Nissan',
            'Suzuki',
            'Toyota',
            'Volkswagen',
            'Volvo',
            'Audi',
            'Honda',
            'Škoda',
            'Subaru',
            'Peugeot',
            'Opel',
            'Jaguar',
        ];
        return $brands[rand(0,count($brands)-1)];
    }
    public function generateHeadquarter(){
        $headquarter = [
            '紐約市，美國',
            '加利福尼亞州，美國',
            '倫敦，英國',
            '東京，日本',
            '巴黎，法國',
            '上海，中國',
            '洛杉磯，美國',
            '柏林，德國',
            '悉尼，澳大利亞',
            '北京，中國',
            '德國',
            '美國',
            '韓國',
            '日本',
            '日本',
            '日本',
            '日本',
            '日本',
            '德國',
            '瑞典',
            '德國',
            '日本',
            '捷克',
            '日本',
            '法國',
            '德國',
            '英國',
        ];
        return $headquarter[rand(0,count($headquarter)-1)];
    }
    public function generateArea(){
        $area = [
            '紐約州',
            '環保谷',
            '英格蘭',
            '關東地區', 
            '伊爾-德-法蘭斯',
            '華東地區',
            '加利福尼亞州', 
            '柏林州',
            '新南威爾士州',
            '華北地區',
            '慕尼黑',
            '美國密西根迪爾伯恩',
            '南韓首爾',
            '愛知縣名古屋市',
            '日本廣島縣府中町',
            '日本神奈川縣橫濱市',
            '靜岡縣濱松市南區高塚町300',
            '愛知縣豐田市豐田町1番地',
            '德國下薩克森狼堡',
            '瑞典哥特堡',
            '巴伐利亞邦英戈爾施塔特',
            '東京都港區南青山',
            '中波希米亞州姆拉達-博萊斯拉夫',
            '東京都惠比壽',
            '杜省索紹',
            '呂塞爾斯海姆',
            '老文垂',
        ];
        return $area[rand(0,count($area)-1)];
    }
    public function generateHtml(){
        $html = [ 
            'https://www.neocycleauto.com',
            'https://www.ecodriveauto.com',
            'https://www.solarringauto.co.uk',
            'https://www.urbanpowerauto.jp',
            'https://www.vilox.fr',
            'https://www.smartdriveauto.cn',
            'https://www.speedforceauto.com',
            'https://www.futurewheels.de',
            'https://www.ecospeedauto.com.au',
            'https://www.powerwingsauto.cn',
            'https://www.bmw.com.tw/zh/index.html',
            'https://www.ford.com.tw/',
            'https://www.kia.com/tw/main.html',
            'https://www.lexus.com.tw/',
            'https://www.mazda.com.tw/',
            'https://new.nissan.com.tw/nissan',
            'https://www.taiwansuzuki.com.tw/',
            'https://www.toyota.com.tw/',
            'https://www.volkswagen.com.tw/zh.html',
            'https://www.volvocars.com/tw/',
            'https://www.audi.com.tw/tw/web/zh.html',
            'https://www.honda-taiwan.com.tw/Auto',
            'https://www.skoda.com.tw/',
            'https://www.subaru.asia/tw/zh/home/',
            'https://www.peugeot.com.tw/',
            'https://www.opel.tw/',
            'https://www.jaguar.tw/index.html',
        ];
        return $html[rand(0,count($html)-1)];
    }*/
    //public function generateRandomHeadquarter(){
        
    //}
    public function run()
    {
        $brands = ['NeoCycle','EcoDrive','SolarRing','UrbanPower','Vilox','SmartDrive','SpeedForce','FutureWheels','EcoSpeed','PowerWings','BMW','Ford','Kia','Lexus','Mazda','Nissan','Suzuki','Toyota','Volkswagen','Volvo','Audi','Honda','Škoda','Subaru','Peugeot','Opel','Jaguar'];
        $headquarter = [
            '紐約市，美國',
            '加利福尼亞州，美國',
            '倫敦，英國',
            '東京，日本',
            '巴黎，法國',
            '上海，中國',
            '洛杉磯，美國',
            '柏林，德國',
            '悉尼，澳大利亞',
            '北京，中國',
            '德國',
            '美國',
            '韓國',
            '日本',
            '日本',
            '日本',
            '日本',
            '日本',
            '德國',
            '瑞典',
            '德國',
            '日本',
            '捷克',
            '日本',
            '法國',
            '德國',
            '英國',
        ];
        $area = [
            '紐約州',
            '環保谷',
            '英格蘭',
            '關東地區', 
            '伊爾-德-法蘭斯',
            '華東地區',
            '加利福尼亞州', 
            '柏林州',
            '新南威爾士州',
            '華北地區',
            '慕尼黑',
            '美國密西根迪爾伯恩',
            '南韓首爾',
            '愛知縣名古屋市',
            '日本廣島縣府中町',
            '日本神奈川縣橫濱市',
            '靜岡縣濱松市南區高塚町300',
            '愛知縣豐田市豐田町1番地',
            '德國下薩克森狼堡',
            '瑞典哥特堡',
            '巴伐利亞邦英戈爾施塔特',
            '東京都港區南青山',
            '中波希米亞州姆拉達-博萊斯拉夫',
            '東京都惠比壽',
            '杜省索紹',
            '呂塞爾斯海姆',
            '老文垂',
        ];
        $html = [ 
            'https://www.neocycleauto.com',
            'https://www.ecodriveauto.com',
            'https://www.solarringauto.co.uk',
            'https://www.urbanpowerauto.jp',
            'https://www.vilox.fr',
            'https://www.smartdriveauto.cn',
            'https://www.speedforceauto.com',
            'https://www.futurewheels.de',
            'https://www.ecospeedauto.com.au',
            'https://www.powerwingsauto.cn',
            'https://www.bmw.com.tw/zh/index.html',
            'https://www.ford.com.tw/',
            'https://www.kia.com/tw/main.html',
            'https://www.lexus.com.tw/',
            'https://www.mazda.com.tw/',
            'https://new.nissan.com.tw/nissan',
            'https://www.taiwansuzuki.com.tw/',
            'https://www.toyota.com.tw/',
            'https://www.volkswagen.com.tw/zh.html',
            'https://www.volvocars.com/tw/',
            'https://www.audi.com.tw/tw/web/zh.html',
            'https://www.honda-taiwan.com.tw/Auto',
            'https://www.skoda.com.tw/',
            'https://www.subaru.asia/tw/zh/home/',
            'https://www.peugeot.com.tw/',
            'https://www.opel.tw/',
            'https://www.jaguar.tw/index.html',
        ];
        for($i=0;$i<count($brands);$i++){
            /*$headquarter = $this->generateHeadquarter();
            $area = $this->generateArea();*/
            $year = rand(1800,2023);
            //$html = $this->generateHtml();
            $random_datetime = Carbon::now()->subMinutes(rand(1,55));
            DB::table('Brands')->insert([
                'brands' => $brands[$i],
                'headquarter' => $headquarter[$i],
                'area' => $area[$i],
                'year' => $year,
                'html' => $html[$i],
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
        ]);
        }
        
        //
    }
}
