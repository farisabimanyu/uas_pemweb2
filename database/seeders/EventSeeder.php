<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'event_name' => 'Konser Musik',
                'description' => 'Konser musik Bruno Mars',
                'start_date' => Carbon::parse('2024-07-10 19:00:00'),
                'end_date' => Carbon::parse('2024-07-10 22:00:00'),
                'location_id' => 1,
            ],
            [
                'event_name' => 'Lomba Masak',
                'description' => 'Lomba masak nusantara',
                'start_date' => Carbon::parse('2024-07-15 10:00:00'),
                'end_date' => Carbon::parse('2024-07-15 14:00:00'),
                'location_id' => 2,
            ],
            [
                'event_name' => 'Lomba Makan',
                'description' => 'Lomba makan sushi di FJU',
                'start_date' => Carbon::parse('2024-07-20 12:00:00'),
                'end_date' => Carbon::parse('2024-07-20 15:00:00'),
                'location_id' => 3,
            ],
        ]);
    }
}
