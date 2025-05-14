<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class RoleSeeder extends Seeder
{
    public function run()
    {
        Role::create([
            'name' => 'Super Admin',
            'permissions' => [
                'user_read',
                'user_create',
                'user_update',
                'user_delete',
                'role_read',
                'role_create',
                'role_update',
                'role_delete',
                'language_read',
                'language_create',
                'language_update',
                'language_update_terms',
                'language_delete',
                'general_settings_read',
                'general_settings_update',
                'storage_settings_read',
                'storage_settings_update',
                'recaptcha_settings_read',
                'recaptcha_settings_update',
                'email_settings_read',
                'email_settings_update'
            ],
        ]);
        Role::create([
            'name' => 'Admin',
            'permissions' => [
                'user_read',
                'user_create',
                'user_update',
                'user_delete',
                'role_read',
                'role_create',
                'role_update',
                'role_delete',
                'language_read',
                'language_create',
                'language_update_terms',
                'general_settings_read',
                'general_settings_update',
                'storage_settings_read',
                'storage_settings_read',
                'recaptcha_settings_update',
                'email_settings_read',
            ],
        ]);
        Role::create([
            'name' => 'Manager',
            'permissions' => [
                'user_read',
                'user_create',
                'role_read',
                'language_read',
                'language_create',
                'general_settings_read',
                'storage_settings_read',
                'recaptcha_settings_read',
                'email_settings_read',
            ],
        ]);
        Role::create([
            'name' => 'User',
            'permissions' => [
                'user_read',
                'role_read',
                'language_read',
            ],
        ]);
    }
}
