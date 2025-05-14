<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\CurveController;
use App\Http\Controllers\ScoreController;
use App\Http\Controllers\MatchhController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\CommentryController;
use App\Http\Controllers\ScoreupdateController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\UpdatebowlerController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\CommentryCreateController;
use App\Http\Controllers\Backend\LanguageController;
use App\Http\Controllers\ScorebowlerfirstController;
use App\Http\Controllers\Backend\MyProfileController;
use App\Http\Controllers\ScorebattersecondController;
use App\Http\Controllers\ScorebowlersecondController;
use App\Http\Controllers\Backend\AuthenticationController;
use App\Http\Controllers\FootballHomeController;
use App\Http\Controllers\FootballMatchController;
use App\Http\Controllers\FootballPlayerController;
use App\Http\Controllers\FootballScoreController;
use App\Http\Controllers\FootballTeamController;
use App\Http\Controllers\GoalScoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['middleware' => ['XssSanitizer']], function () {

    Route::group(['middleware' => 'lang'], function () {

        // Non-auth routes
        Route::group(['middleware' => ['not.auth.routes']], function () {
            // controller namespace
            Route::controller(AuthenticationController::class)->group(function () {

                if (Config::get('app.APP_DEMO')) {
                    Route::get('/', function () {
                        return view('welcome');
                    });
                } else {
                    Route::get('/',                            'loginPage')->name('login');
                }

                Route::get('login',                        'loginPage')->name('login');
                Route::post('login',                       'login')->name('login.auth');
                Route::get('register',                     'registerPage')->name('register');
                Route::post('register',                    'register')->name('register');
                Route::get('verify-email/{email}/{token}', 'verifyEmail')->name('verify-email');

                // reset password
                Route::get('forgot-password',               'forgotPasswordPage')->name('forgot-password');
                Route::post('forgot-password',              'forgotPassword')->name('forgot.password');

                Route::get('reset-password/{email}/{token}', 'resetPasswordPage')->name('reset-password');
                Route::post('reset-password',                'resetPassword')->name('reset.password');
            });
        });


        // auth routes
        Route::group(['middleware' => ['auth.routes']], function () {

            // dashboard routes
            Route::get('dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
            Route::get('dashboard/school', [App\Http\Controllers\Backend\DashboardController::class, 'schoolDashboard'])->name('school_dashboard');
            Route::get('dashboard/lms', [App\Http\Controllers\Backend\DashboardController::class, 'lmsDashboard'])->name('lms_dashboard');
            Route::get('dashboard/crm', [App\Http\Controllers\Backend\DashboardController::class, 'crmDashboard'])->name('crm_dashboard');
            Route::post('logout',   [App\Http\Controllers\Backend\AuthenticationController::class, 'logout'])->name('logout');
            Route::post('searchMenuData', [App\Http\Controllers\Backend\DashboardController::class, 'searchMenuData'])->name('searchMenuData');

            Route::controller(RoleController::class)->prefix('roles')->group(function () {
                Route::get('/',                 'index')->name('roles.index')->middleware('PermissionCheck:role_read');
                Route::get('/create',           'create')->name('roles.create')->middleware('PermissionCheck:role_create');
                Route::post('/store',           'store')->name('roles.store')->middleware('PermissionCheck:role_create');
                Route::get('/edit/{id}',        'edit')->name('roles.edit')->middleware('PermissionCheck:role_update');
                Route::put('/update/{id}',      'update')->name('roles.update')->middleware('PermissionCheck:role_update');
                Route::delete('/delete/{id}',   'delete')->name('roles.delete')->middleware('PermissionCheck:role_delete');
            });

            Route::controller(UserController::class)->prefix('users')->group(function () {
                Route::get('/',                 'index')->name('users.index')->middleware('PermissionCheck:user_read');
                Route::get('/create',           'create')->name('users.create')->middleware('PermissionCheck:user_create');
                Route::post('/store',           'store')->name('users.store')->middleware('PermissionCheck:user_create');
                Route::get('/edit/{id}',        'edit')->name('users.edit')->middleware('PermissionCheck:user_update');
                Route::put('/update/{id}',      'update')->name('users.update')->middleware('PermissionCheck:user_update');
                Route::delete('/delete/{id}',   'delete')->name('users.delete')->middleware('PermissionCheck:user_delete');

                Route::get('/change-role',      'changeRole')->name('change.role');
                Route::post('/status',      'status')->name('users.status');
                Route::delete('/{id}',      'deletes')->name('users.deletes');
            });

            Route::controller(MyProfileController::class)->prefix('my')->group(function () {
                Route::get('/profile',              'profile')->name('my.profile');
                Route::get('/profile/edit',         'edit')->name('my.profile.edit');
                Route::put('/profile/update',       'update')->name('my.profile.update');

                Route::get('/password/update',      'passwordUpdate')->name('passwordUpdate');
                Route::put('/password/update/store', 'passwordUpdateStore')->name('passwordUpdateStore');
            });

            Route::controller(LanguageController::class)->prefix('languages')->group(function () {
                Route::get('/',                         'index')->name('languages.index')->middleware('PermissionCheck:language_read');
                Route::get('/create',                   'create')->name('languages.create')->middleware('PermissionCheck:language_create');
                Route::post('/store',                   'store')->name('languages.store')->middleware('PermissionCheck:language_create');
                Route::get('/edit/{id}',                'edit')->name('languages.edit')->middleware('PermissionCheck:language_update');
                Route::put('/update/{id}',              'update')->name('languages.update')->middleware('PermissionCheck:language_update');
                Route::delete('/delete/{id}',           'delete')->name('languages.delete')->middleware('PermissionCheck:language_delete');

                Route::get('/terms/{id}',               'terms')->name('languages.edit.terms')->middleware('PermissionCheck:language_update_terms');
                Route::put('/update/terms/{code}',      'termsUpdate')->name('languages.update.terms')->middleware('PermissionCheck:language_update_terms');
                Route::get('/change-module',            'changeModule')->name('languages.change.module');

                Route::get('/change',                   'changeLanguage')->name('languages.change');
            });

            Route::controller(SettingController::class)->prefix('/')->group(function () {

                Route::get('/general-settings',             'generalSettings')->name('settings.general-settings')->middleware('PermissionCheck:general_settings_read');
                Route::post('/general-settings',            'updateGeneralSetting')->name('settings.general-settings')->middleware('PermissionCheck:general_settings_update');

                Route::get('/storage-setting',              'storagesetting')->name('settings.storagesetting')->middleware('PermissionCheck:storage_settings_read');
                Route::put('/storage-setting-update',       'storageSettingUpdate')->name('settings.storageSettingUpdate')->middleware("PermissionCheck:storage_settings_update");

                Route::get('/recaptcha-setting',            'recaptchaSetting')->name('settings.recaptcha-setting')->middleware('PermissionCheck:recaptcha_settings_read');
                Route::post('/recaptcha-setting',           'updateRecaptchaSetting')->name('settings.recaptcha-setting')->middleware('PermissionCheck:recaptcha_settings_update');

                Route::get('/email-setting',                 'mailSetting')->name('settings.mail-setting')->middleware('PermissionCheck:email_settings_read');
                Route::post('/email-setting',                'updateMailSetting')->name('settings.mail-setting')->middleware('PermissionCheck:email_settings_update');

                //Theme Change
                Route::post('/change-theme',                 'changeTheme')->name('changeTheme');
            });
        });
    });
});