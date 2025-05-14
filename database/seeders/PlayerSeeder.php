<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'team_id' => 1,
            'player_name' => 'সাকিব আল হাসান',
            'player_slug' => 'সাকিব আল হাসান'
        ]);
        Player::create([
            'team_id' => 2,
            'player_name' => 'ভিরাক কোহেলি',
            'player_slug' => 'ভিরাক কোহেলি'
        ]);
        Player::create([
            'team_id' => 3,
            'player_name' => 'কেইম উইলিয়াম সন',
            'player_slug' => 'কেইম উইলিয়াম সন'
        ]);
        Player::create([
            'team_id' => 1,
            'player_name' => 'মোস্তাফিজুন রহমান',
            'player_slug' => 'মোস্তাফিজুন রহমান'
        ]);
    }
}
