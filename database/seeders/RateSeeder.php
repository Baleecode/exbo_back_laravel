<?php

namespace Database\Seeders;

use App\Models\Rate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rates = [
            [
                'place_id'=>1,
                'user_id'=>1,
                'rate_place'=>4.3,
            ],
            [
                'place_id'=>1,
                'user_id'=>2,
                'rate_place'=>4.8,
            ],
            [
                'place_id'=>1,
                'user_id'=>3,
                'rate_place'=>3,
            ],
            [
                'place_id'=>2,
                'user_id'=>1,
                'rate_place'=>4,
            ],
            [
                'place_id'=>2,
                'user_id'=>3,
                'rate_place'=>4.2,
            ],

        ];
        foreach ($rates as $rateItem){
                Rate::create($rateItem);
        }
    }
}
