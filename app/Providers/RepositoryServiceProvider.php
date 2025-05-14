<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\RoleInterface;
use App\Repositories\RoleRepository;
use App\Interfaces\AuthenticationRepositoryInterface;
use App\Interfaces\GeneralSettingInterface;
use App\Interfaces\LanguageInterface;
use App\Repositories\AuthenticationRepository;
use App\Interfaces\PermissionInterface;
use App\Interfaces\SettingInterface;
use App\Interfaces\UserInterface;
use App\Repositories\GeneralSettingRepository;
use App\Repositories\LanguageRepository;
use App\Repositories\PermissionRepository;
use App\Repositories\SettingRepository;
use App\Repositories\UserRepository;
use App\Interfaces\FlagIconInterface;
use App\Repositories\FlagIconRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AuthenticationRepositoryInterface::class, AuthenticationRepository::class);
        $this->app->bind(RoleInterface::class,                     RoleRepository::class);
        $this->app->bind(PermissionInterface::class,               PermissionRepository::class);
        $this->app->bind(UserInterface::class,                     UserRepository::class);
        $this->app->bind(GeneralSettingInterface::class,           GeneralSettingRepository::class);
        $this->app->bind(SettingInterface::class,                  SettingRepository::class);
        $this->app->bind(LanguageInterface::class,                 LanguageRepository::class);
        $this->app->bind(FlagIconInterface::class,                 FlagIconRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
