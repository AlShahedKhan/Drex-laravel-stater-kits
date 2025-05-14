<?php

namespace Database\Seeders;

use App\Models\Updatebowler;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UpdatebowlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Updatebowler::create([
            'overs'     => 0,
            'maidens'   => 0,
            'runs'      => 0,
            'wickets'   => 0,
            'no_balls'  => 0,
            'wides'     => 0,
            'panalty_runs' => 0
        ]);
        Updatebowler::create([
            'overs'     => 0.1,
            'maidens'   => 1,
            'runs'      => 1,
            'wickets'   => 1,
            'no_balls'  => 1,
            'wides'     => 1,
            'panalty_runs' => 1
        ]);
        Updatebowler::create([
            'overs'     => 0.2,
            'maidens'   => 2,
            'runs'      => 2,
            'wickets'   => 2,
            'no_balls'  => 2,
            'wides'     => 2,
            'panalty_runs' => 2
        ]);
    }
}
