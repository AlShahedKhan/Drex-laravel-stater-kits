<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'team_name' => 'বাংলাদেশ',
            'team_slug' => 'বাংলাদেশ'
        ]);
        Team::create([
            'team_name' => 'ভারত',
            'team_slug' => 'ভারত'
        ]);
        Team::create([
            'team_name' => 'নিউজিল্যান্ড',
            'team_slug' => 'নিউজিল্যান্ড'
        ]);
    }
}
