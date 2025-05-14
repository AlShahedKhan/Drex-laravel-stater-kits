<?php

namespace Database\Seeders;

use App\Models\GoalScore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FootballGoalScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GoalScore::create([
            'goal'    => '0',
            'shots' => '0',
            'shots_on_target' => '0',
            'prossession' => '0',
            'passes' => '0',
            'passes_accuracy' => '0',
            'fouls' => '0',
            'yellow_cards' => '0',
            'red_cards' => '0',
            'off_sides' => '0',
            'corners' => '0'
        ]);
        GoalScore::create([
            'goal'    => '1',
            'shots' => '1',
            'shots_on_target' => '1',
            'prossession' => '1',
            'passes' => '1',
            'passes_accuracy' => '1',
            'fouls' => '1',
            'yellow_cards' => '1',
            'red_cards' => '1',
            'off_sides' => '1',
            'corners' => '1'
        ]);

        GoalScore::create([
            'goal'    => '2',
            'shots' => '2',
            'shots_on_target' => '2',
            'prossession' => '2',
            'passes' => '2',
            'passes_accuracy' => '2',
            'fouls' => '2',
            'yellow_cards' => '2',
            'red_cards' => '2',
            'off_sides' => '2',
            'corners' => '2'
        ]);

        GoalScore::create([
            'goal'    => '3',
            'shots' => '3',
            'shots_on_target' => '3',
            'prossession' => '3',
            'passes' => '3',
            'passes_accuracy' => '3',
            'fouls' => '3',
            'yellow_cards' => '3',
            'red_cards' => '3',
            'off_sides' => '3',
            'corners' => '3'
        ]);
    }
}
