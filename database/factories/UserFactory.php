<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
            'role_id' => 1,
            'permissions' => [
                'user_read','user_create','user_update','user_delete',
                'role_read','role_create','role_update','role_delete',
                'language_read','language_create','language_update','language_update_terms','language_delete',
                'general_settings_read','general_settings_update',
                'storage_settings_read','storage_settings_update',
                'recaptcha_settings_read','recaptcha_settings_update',
                'email_settings_read','email_settings_update'
            ],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
