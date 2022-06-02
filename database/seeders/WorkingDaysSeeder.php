<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingDaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_working_days')->insert([
            'day' => 'Pazartesi',
            'start_time' => "09:00:00",
            'end_time' => "16:00:00",
            'is_open' => 1
        ]);

        DB::table('home_working_days')->insert([
            'day' => 'Salı',
            'start_time' => "09:00:00",
            'end_time' => "16:00:00",
            'is_open' => 1
        ]);

        DB::table('home_working_days')->insert([
            'day' => 'Çarşamba',
            'start_time' => "09:00:00",
            'end_time' => "16:00:00",
            'is_open' => 1
        ]);

        DB::table('home_working_days')->insert([
            'day' => 'Perşembe',
            'start_time' => "09:00:00",
            'end_time' => "16:00:00",
            'is_open' => 1
        ]);

        DB::table('home_working_days')->insert([
            'day' => 'Cuma',
            'start_time' => "09:00:00",
            'end_time' => "16:00:00",
            'is_open' => 1
        ]);
    }
}
