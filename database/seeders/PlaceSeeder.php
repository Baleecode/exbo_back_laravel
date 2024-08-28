<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    public function run(): void
    {
        $places = [
            [
                'image' => 'jungle.png',
                'name' => 'jungle',
                'description' => 'sebuah taman hiburan air dengan pemandangan yang indah',
                'location'=>'bogor kota',
                'categories' => 'taman hiburan',
                'rate'=> 4.6,
                'latitude'=> -5.587055,
                'longitude' =>106.5885,
                'created_at'=>'2024-08-23 10:27:49',
                'updated_at'=>'2024-08-23 10:27:49',
            ],
            [
                'image' => 'tugukujang.png',
                'name' => 'tugu kujang',
                'description' => 'sebuah tugu sejarah dari kota bogor yang terletak di tengah-tengah kota bogor',
                'location'=>'bogor kota',
                'categories' => 'budaya',
                'rate'=> 4.8,
                'latitude'=> -6.1258017,
                'longitude' =>106.8363249,
                'created_at'=>'2024-08-23 10:27:49',
                'updated_at'=>'2024-08-23 10:27:49',
            ],
        ];
        foreach ($places as $placeItem){
                Place::create($placeItem);
        }
    }
}
