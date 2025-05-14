<?php

namespace Database\Seeders;

use App\Models\FootballPlayer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FootballPlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FootballPlayer::create([
            'team_id' => 1,
            'player_name' => 'মেসি'
        ]);
        FootballPlayer::create([
            'team_id' => 2,
            'player_name' => 'নেইমার'
        ]);
        FootballPlayer::create([
            'team_id' => 3,
            'player_name' => 'এমবাপ্পে'
        ]);
        FootballPlayer::create([
            'team_id' => 1,
            'player_name' => 'দিবালা'
        ]);
    }
}
