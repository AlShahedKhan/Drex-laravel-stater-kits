<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributes = [
            //for staff
            'users'             => ['read' => 'user_read', 'create' => 'user_create', 'update' => 'user_update', 'delete' => 'user_delete'],
            'roles'             => ['read' =>  'role_read', 'create' => 'role_create', 'update' =>  'role_update', 'delete' =>  'role_delete'],
            'language'          => ['read' =>  'language_read', 'create' => 'language_create', 'update' =>  'language_update','update terms' =>  'language_update_terms', 'delete' =>  'language_delete'],
            'general settings'  => ['read' =>  'general_settings_read', 'update' => 'general_settings_update'],
            'storage settings'  => ['read' =>  'storage_settings_read', 'update' => 'storage_settings_update'],
            'recaptcha settings'=> ['read' =>  'recaptcha_settings_read', 'update' => 'recaptcha_settings_update'],
            'email settings'    => ['read' =>  'email_settings_read', 'update' => 'email_settings_update'],
            // For Cricket Start
            'teams'             => ['read' =>  'team_read', 'create' => 'team_create', 'update' =>  'team_update', 'delete' =>  'team_delete'],
            'player'            => ['read' =>  'player_read', 'create' => 'player_create', 'update' =>  'player_update', 'delete' =>  'player_delete'],
            'matchh'            => ['read' =>  'matchh_read', 'create' => 'matchh_create', 'update' =>  'matchh_update', 'delete' =>  'matchh_delete'],
            'scoreupdates'      => ['read' =>  'scoreupdates_read', 'create' => 'scoreupdates_create', 'update' =>  'scoreupdates_update', 'delete' =>  'scoreupdates_delete'],
            'updatebowler'      => ['read' =>  'updatebowler_read', 'create' => 'updatebowler_create', 'update' =>  'updatebowler_update', 'delete' =>  'updatebowler_delete'],
            'score'             => ['read' =>  'score_read', 'create' => 'score_create', 'update' =>  'score_update', 'delete' =>  'score_delete'],
            'scorebowlerfirst'  => ['read' =>  'scorebowlerfirst_read', 'create' => 'scorebowlerfirst_create', 'update' =>  'scorebowlerfirst_update', 'delete' =>  'scorebowlerfirst_delete'],
            'scorebattersecond' => ['read' =>  'scorebattersecond_read', 'create' => 'scorebattersecond_create', 'update' =>  'scorebattersecond_update', 'delete' =>  'scorebattersecond_delete'],
            'scorebowlersecond' => ['read' =>  'scorebowlersecond_read', 'create' => 'scorebowlersecond_create', 'update' =>  'scorebowlersecond_update', 'delete' =>  'scorebowlersecond_delete'],
            'commentrycreate'   => ['read' =>  'commentrycreate_read', 'create' => 'commentrycreate_create', 'update' =>  'commentrycreate_update', 'delete' =>  'commentrycreate_delete'],
            'commentry'         => ['read' =>  'commentry_read', 'create' => 'commentry_create', 'update' =>  'commentry_update', 'delete' =>  'commentry_delete'],
            'curve'             => ['read' =>  'curve_read', 'create' => 'curve_create', 'update' =>  'curve_update', 'delete' =>  'curve_delete'],

            // For Football Start
            'footballteams'     => ['read' =>  'football_team_read', 'create' => 'football_team_create', 'update' =>  'football_team_update', 'delete' =>  'football_team_delete'],
            'player'            => ['read' =>  'football_players_read', 'create' => 'football_players_create', 'update' =>  'football_players_update', 'delete' =>  'football_players_delete'],
            'goalscores'        => ['read' =>  'goal_scores_read', 'create' => 'goal_scores_create', 'update' =>  'goal_scores_update', 'delete' =>  'goal_scores_delete'],
            'footballmatchs'    => ['read' =>  'football_matchs_read', 'create' => 'football_matchs_create', 'update' =>  'football_matchs_update', 'delete' =>  'football_matchs_delete'],
            'footballscores'    => ['read' =>  'football_scores_read', 'create' => 'football_scores_create', 'update' =>  'football_scores_update', 'delete' =>  'football_scores_delete'],
        ];

        foreach($attributes as $key => $attribute){
        	$permission               = new Permission();
        	$permission->attribute    = $key;
            $permission->keywords     = $attribute;
        	$permission->save();
        }
    }
}
