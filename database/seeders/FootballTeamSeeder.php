<?php

namespace Database\Seeders;

use App\Models\FootballTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FootballTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FootballTeam::create([
            'team_name' => 'আর্জেন্টিনা'
        ]);
        FootballTeam::create([
            'team_name' => 'ব্রাজিল'
        ]);
        FootballTeam::create([
            'team_name' => 'ফ্রাঞ্চ'
        ]);
    }
}
