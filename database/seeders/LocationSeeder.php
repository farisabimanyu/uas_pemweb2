<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            [
                'location_name' => 'Gelora Bung Karno',
                'address' => 'Jl. Pintu Satu Senayan, Jakarta 10270',
            ],
            [
                'location_name' => 'Hall A JIEXPO Kemayoran Jakarta',
                'address' => 'Jalan Benyamin Suaeb No. 1, Pademangan Timur, Pademangan, Pademangan Tim., Pademangan, Kota Jakarta Pusat',
            ],
            [
                'location_name' => 'Fakultas Ilmu Budaya Unsoed ',
                'address' => 'Jalan dr. Suparno Utara No. 1 Grendeng Purwokerto 53122',
            ],
        ]);
    }
}
