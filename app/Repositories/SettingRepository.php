<?php

namespace App\Repositories;

use App\Models\Setting;
use Illuminate\Support\Str;
use App\Interfaces\SettingInterface;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SettingStoreRequest;
use App\Http\Requests\GeneralSetting\StorageUpdateRequest;
use App\Models\Language;
use App\Traits\CommonHelperTrait;

class SettingRepository implements SettingInterface
{
    use CommonHelperTrait;

    private $model;

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return Setting::all();
    }

    public function getLanguage()
    {
        return Language::all();
    }

    // General setting start
    public function updateGeneralSetting($request)
    {
        try {
            // Application name start
            if($request->has('application_name')){
                $setting            = $this->model::where('name', 'application_name')->first();
                if($setting){
                    $setting->value = $request->application_name;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'application_name';
                    $setting->value = $request->application_name;
                }
                $setting->save();
            }
            // Application name end

            //Footer Text start
            if($request->has('footer_text')){
                $setting            = $this->model::where('name', 'footer_text')->first();
                if($setting){
                    $setting->value = $request->footer_text;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'footer_text';
                    $setting->value = $request->footer_text;
                }
                $setting->save();
            }
            //Footer Text end

            //Defualt language start
            if($request->has('default_langauge')){
                $setting            = $this->model::where('name', 'default_langauge')->first();
                if($setting){
                    $setting->value = $request->default_langauge;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'default_langauge';
                    $setting->value = $request->default_langauge;
                }
                $setting->save();
            }
            //Defualt language end

            // White logo start
            if ($request->has('light_logo') && $request->file('light_logo')->isValid()) {
                $setting            = $this->model::where('name', 'light_logo')->first();
                $path               = 'backend/uploads/settings';
                if ($setting) {
                    $file_path          = public_path($setting->value);
                    // if(file_exists($file_path)){
                    //     File::delete($file_path);
                    // }
                    $file               = $request->file('light_logo');
                    $extension          = $file->guessExtension();
                    $filename           = Str::random(6). '_' . time() . '.' . $extension;
                    if (setting('file_system') == 's3') {
                        $filePath       = s3Upload($path, $file);
                        $setting->value = $filePath;
                    }else{
                        $file->move($path, $filename);
                        $setting->value = $path .'/'. $filename;
                    }
                    $setting->save();

                }else {
                    $setting        = new $this->model;
                    $setting->name  = 'light_logo';
                    $file           = $request->file('light_logo');
                    $extension      = $file->guessExtension();
                    $filename       = Str::random(6). '_' . time() . '.' . $extension;
                    if (setting('file_system') == 's3') {
                        $filePath       = s3Upload($path, $file);
                        $setting->value = $filePath;
                    }else{
                        $file->move($path, $filename);
                        $setting->value = $path .'/'. $filename;
                    }
                    $setting->save();
                }
            }
            // White logo end


            if ($request->has('dark_logo') && $request->file('dark_logo')->isValid()) {
                $setting            = $this->model::where('name', 'dark_logo')->first();
                $path               = 'backend/uploads/settings';
                if ($setting) {
                    $file_path = public_path($setting->value);
                    // if(file_exists($file_path)){
                    //     File::delete($file_path);
                    // }
                    $file               = $request->file('dark_logo');
                    $extension          = $file->guessExtension();
                    $filename           = Str::random(6). '_' . time() . '.' . $extension;
                    if (setting('file_system') == 's3') {
                        $filePath       = s3Upload($path, $file);
                        $setting->value = $filePath;
                    }else{
                        $file->move($path, $filename);
                        $setting->value = $path .'/'. $filename;
                    }
                    $setting->save();

                }else {

                    $setting        = new $this->model;
                    $setting->name  = 'dark_logo';
                    $file           = $request->file('dark_logo');
                    $extension      = $file->guessExtension();
                    $filename       = Str::random(6). '_' . time() . '.' . $extension;
                    if (setting('file_system') == 's3') {
                        $filePath       = s3Upload($path, $file);
                        $setting->value = $filePath;
                    }else{
                        $file->move($path, $filename);
                        $setting->value = $path .'/'. $filename;
                    }
                    $setting->save();
                }
            }

            if ($request->has('favicon') && $request->file('favicon')->isValid()) {
                $setting                = $this->model::where('name', 'favicon')->first();
                $path = 'backend/uploads/settings';
                if ($setting) {
                    $file_path          = public_path($setting->value);
                    // if(file_exists($file_path)){
                    //     File::delete($file_path);
                    // }
                    $file               = $request->file('favicon');
                    $extension          = $file->guessExtension();
                    $filename           = Str::random(6). '_' . time() . '.' . $extension;
                    if (setting('file_system') == 's3') {
                        $filePath       = s3Upload($path, $file);
                        $setting->value = $filePath;
                    }else{
                        $file->move($path, $filename);
                        $setting->value = $path .'/'. $filename;
                    }
                    $setting->save();

                }else {
                    $setting            = new $this->model;
                    $setting->name      = 'favicon';
                    $file = $request->file('favicon');
                    $extension          = $file->guessExtension();
                    $filename           = Str::random(6). '_' . time() . '.' . $extension;
                    if (setting('file_system') == 's3') {
                        $filePath       = s3Upload($path, $file);
                        $setting->value = $filePath;
                    }else{
                        $file->move($path, $filename);
                        $setting->value = $path .'/'. $filename;
                    }
                    $setting->save();
                }
            }
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    // General setting en
    public function updateRecaptchaSetting($request)
    {
        try {
            // Recaptcha site key start
            if($request->has('recaptcha_sitekey')){
                $setting            = $this->model::where('name', 'recaptcha_sitekey')->first();
                if($setting){
                    $setting->value = $request->recaptcha_sitekey;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'recaptcha_sitekey';
                    $setting->value = $request->recaptcha_sitekey;
                }
                $setting->save();
            }
            // Recaptcha site key end

            // Recaptcha secret start
            if($request->has('recaptcha_secret')){
                $setting            = $this->model::where('name', 'recaptcha_secret')->first();
                if($setting){
                    $setting->value = $request->recaptcha_secret;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'recaptcha_secret';
                    $setting->value = $request->recaptcha_secret;
                }
                $setting->save();
            }
            // Recaptcha secret end

            // Recaptcha status start
            if($request->has('recaptcha_status')){
                $setting            = $this->model::where('name', 'recaptcha_status')->first();
                if($setting){
                    $setting->value = $request->recaptcha_status;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'recaptcha_status';
                    $setting->value = $request->recaptcha_status;
                }
                $setting->save();
            }
            // Recaptcha status end

            // recaptcha write in env
            $this->setEnvironmentValue('NOCAPTCHA_SITEKEY', $request->recaptcha_sitekey);
            $this->setEnvironmentValue('NOCAPTCHA_SECRET',  $request->recaptcha_secret);
            // recaptcha write in env
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function storageSettingUpdate($request)
    {
        try {
            // Application name start
            if($request->has('file_system')){
                $setting            = $this->model::where('name', 'file_system')->first();
                if($setting){
                    $setting->value = $request->file_system;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'file_system';
                    $setting->value = $request->file_system;
                }
                $setting->save();
            }
            // Application name end

            if ($request->has('aws_access_key_id') && $request->file_system == 's3') {
                // aws_access_key start
                if($request->has('aws_access_key_id')){
                    $setting            = $this->model::where('name', 'aws_access_key_id')->first();
                    if($setting){
                        $setting->value = $request->aws_access_key_id;
                    }else{
                        $setting        = new $this->model;
                        $setting->name  = 'aws_access_key_id';
                        $setting->value = $request->aws_access_key_id;
                    }
                    $setting->save();

                }
                // aws_access_key end

                // aws_secret_key start
                if($request->has('aws_secret_key')){
                    $setting            = $this->model::where('name', 'aws_secret_key')->first();
                    if($setting){
                        $setting->value = $request->aws_secret_key;
                    }else{
                        $setting        = new $this->model;
                        $setting->name  = 'aws_secret_key';
                        $setting->value = $request->aws_secret_key;
                    }
                    $setting->save();
                }
                // aws_secret_key end

                // aws_region start
                if($request->has('aws_region')){
                    $setting            = $this->model::where('name', 'aws_region')->first();
                    if($setting){
                        $setting->value = $request->aws_region;
                    }else{
                        $setting        = new $this->model;
                        $setting->name  = 'aws_region';
                        $setting->value = $request->aws_region;
                    }
                    $setting->save();
                }
                // aws_region end

                // aws_bucket start
                if($request->has('aws_bucket')){
                    $setting            = $this->model::where('name', 'aws_bucket')->first();
                    if($setting){
                        $setting->value = $request->aws_bucket;
                    }else{
                        $setting        = new $this->model;
                        $setting->name  = 'aws_bucket';
                        $setting->value = $request->aws_bucket;
                    }
                    $setting->save();
                }
                // aws_bucket end

                // aws_endpoint start
                if($request->has('aws_endpoint')){
                    $setting            = $this->model::where('name', 'aws_endpoint')->first();
                    if($setting){
                        $setting->value = $request->aws_endpoint;
                    }else{
                        $setting        = new $this->model;
                        $setting->name  = 'aws_endpoint';
                        $setting->value = $request->aws_endpoint;
                    }
                    $setting->save();
                }
                // aws_endpoint end
            }


            // recaptcha write in env
            $this->setEnvironmentValue('AWS_ACCESS_KEY_ID',           $request->aws_access_key_id);
            $this->setEnvironmentValue('AWS_SECRET_ACCESS_KEY',       $request->aws_secret_key);
            $this->setEnvironmentValue('AWS_DEFAULT_REGION',          $request->aws_region);
            $this->setEnvironmentValue('AWS_BUCKET',                  $request->aws_bucket);
            $this->setEnvironmentValue('AWS_ENDPOINT',                $request->aws_endpoint);
            // recaptcha write in env


        } catch (\Throwable $th) {
            return false;
        }
    }
    public function updateMailSetting($request)
    {
        try {
            // Mail drive start
            if($request->has('mail_drive')){
                $setting            = $this->model::where('name', 'mail_drive')->first();
                if($setting){
                    $setting->value = $request->mail_drive;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'mail_drive';
                    $setting->value = $request->mail_drive;
                }
                $setting->save();
            }
            // Mail drive end

            // Mail Host start
            if($request->has('mail_host')){
                $setting            = $this->model::where('name', 'mail_host')->first();
                if($setting){
                    $setting->value = $request->mail_host;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'mail_host';
                    $setting->value = $request->mail_host;
                }
                $setting->save();
            }
            // Mail Host end

            // Mail Host start
            if($request->has('mail_port')){
                $setting            = $this->model::where('name', 'mail_port')->first();
                if($setting){
                    $setting->value = $request->mail_port;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'mail_port';
                    $setting->value = $request->mail_port;
                }
                $setting->save();
            }
            // Mail Host end

            // Mail Address start
            if($request->has('mail_address')){
                $setting            = $this->model::where('name', 'mail_address')->first();
                if($setting){
                    $setting->value = $request->mail_address;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'mail_address';
                    $setting->value = $request->mail_address;
                }
                $setting->save();
            }
            // Mail Address end

            // Form Name start
            if($request->has('from_name')){
                $setting            = $this->model::where('name', 'from_name')->first();
                if($setting){
                    $setting->value = $request->from_name;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'from_name';
                    $setting->value = $request->from_name;
                }
                $setting->save();
            }
            // Form Name end

            // Mail UserName start
            if($request->has('mail_username')){
                $setting            = $this->model::where('name', 'mail_username')->first();
                if($setting){
                    $setting->value = $request->mail_username;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'mail_username';
                    $setting->value = $request->from_name;
                }
                $setting->save();
            }
            // Mail UserName end

            // Mail UserName start
            if($request->has('mail_password')){
                $setting            = $this->model::where('name', 'mail_password')->first();
                if($setting){
                    $setting->value = $request->mail_password;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'mail_password';
                    $setting->value = $request->from_name;
                }
                $setting->save();
            }
            // Mail UserName end

            //Encryption start
            if($request->has('encryption')){
                $setting            = $this->model::where('name', 'encryption')->first();
                if($setting){
                    $setting->value = $request->encryption;
                }else{
                    $setting        = new $this->model;
                    $setting->name  = 'encryption';
                    $setting->value = $request->from_name;
                }
                $setting->save();
            }
            //Encryption end

            // email write in env
            $this->setEnvironmentValue('MAIL_MAILER',           $request->mail_drive);
            $this->setEnvironmentValue('MAIL_HOST',             $request->mail_host);
            $this->setEnvironmentValue('MAIL_PORT',             $request->mail_port);
            $this->setEnvironmentValue('MAIL_USERNAME',         $request->mail_username);
            $this->setEnvironmentValue('MAIL_PASSWORD',         $request->mail_password);
            $this->setEnvironmentValue('MAIL_ENCRYPTION',       $request->encryption);
            $this->setEnvironmentValue('MAIL_FROM_ADDRESS',     $request->mail_address);
            $this->setEnvironmentValue('MAIL_FROM_NAME',        $request->from_name);
            // email write in env

            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

}
