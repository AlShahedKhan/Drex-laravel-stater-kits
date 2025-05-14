<?php

namespace Database\Seeders;

use App\Models\CommentryCreate;
use App\Models\Updatebowler;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ImageSeeder;
use Database\Seeders\SearchSeeder;
use Database\Seeders\SettingSeeder;
use Database\Seeders\FlagIconSeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\PermissionSeeder;
use Database\Seeders\DesignationSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ImageSeeder::class,
            RoleSeeder::class,
            DesignationSeeder::class,
            UserSeeder::class,
            PermissionSeeder::class,
            FlagIconSeeder::class,
            LanguageSeeder::class,
            SettingSeeder::class,
            SearchSeeder::class,
            TeamSeeder::class,
            PlayerSeeder::class,
            ScoreUpdateSeeder::class,
            UpdatebowlerSeeder::class,
            CommentryCreateSeeder::class,
            FootballTeamSeeder::class,
            FootballPlayerSeeder::class,
            FootballGoalScoreSeeder::class
        ]);
    }
}
