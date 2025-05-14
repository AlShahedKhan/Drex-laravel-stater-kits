<?php

use App\Models\Setting;
use App\Models\Language;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

function getPagination($ITEM){
    return view('common.pagination', compact('ITEM'));
}


function setting($name)
{
    $setting_data=Setting::where('name', $name)->first();
    if ($setting_data) {
        return $setting_data->value;
    }

    return null;
}



function findDirectionOfLang(){
    $data = Language::where('code', Cache::get('locale'))->select('direction')->first();
    return @$data->direction != null ? strtolower(@$data->direction) : '';
}

// for menu active
if (!function_exists('set_menu')) {
    function set_menu(array $path, $active = 'mm-active')
    {
        foreach ($path as $route) {
            if (Route::currentRouteName() == $route) {
                return $active;
            }
        }
        return (request()->is($path)) ? $active : '';
        // return call_user_func_array('Request::is', (array) $path) ? $active : '';
    }
}

// for  submenu list item active
if (!function_exists('menu_active_by_route')) {
    function menu_active_by_route($route)
    {
        return request()->routeIs($route) ? 'mm-show' : 'in-active';
    }
}


function ___($key = null, $replace = [], $locale = null)
{
    $input       = explode('.', $key);
    $file        = $input[0];
    $term         = $input[1];
    $app_local   = app()->getLocale();

    $jsonString  = file_get_contents(base_path('lang/' . $app_local . '/' . $file . '.json'));
    $data        = json_decode($jsonString, true);
    if (@$data[$term]) {
        return $data[$term];
    }

    return $term;
}

// global thumbnails
if (!function_exists('globalAsset')) {
    function globalAsset($path,$default_image=null)
    {
        if ($path == "") {
            return url('backend/uploads/default-images/user2.jpg');
        } else {
            try{

                if (setting('file_system') == "s3" && Storage::disk('s3')->exists($path) && $path != "") {
                    return Storage::disk('s3')->url($path);
                } else if (setting('file_system') == "local" && file_exists(@$path)) {
                    return url($path);
                } else {
                    if ($default_image==null) {
                        return url('backend/uploads/default-images/user2.jpg');
                    } else {
                        return url("backend/uploads/default-images/$default_image");
                    }
                }

            } catch (\Exception $c){
                return url("backend/uploads/default-images/$default_image");
            }
            
        }
    }
}


// Permission check
if (!function_exists('hasPermission')) {
    function hasPermission($keyword)
    {
        if (in_array($keyword, Auth::user()->permissions ?? [])) {
            return true;
        }
        return false;
    }
}

if (!function_exists('userTheme')) {
    function userTheme()
    {
        $session_theme=Cache::get('user_theme');

        if (isset($session_theme)) {
            return $session_theme;
        } else {
            return 'default-theme';
        }
    }
}

if (!function_exists('leadingZero')) {
    function withLeadingZero($number)
    {

        $strNumber = $number  . "";
        if(strlen($strNumber) < 10){
            return '0' . $strNumber;
        }

        return $number;
    }
}


if (!function_exists('setEnvironmentValue')) {
    function setEnvironmentValue($envKey, $envValue)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        $str .= "\n"; // In case the searched variable is in the last line without \n
        $keyPosition = strpos($str, "{$envKey}=");
        $endOfLinePosition = strpos($str, PHP_EOL, $keyPosition);
        $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);
        $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
        $str = substr($str, 0, -1);

        $fp = fopen($envFile, 'w');
        fwrite($fp, $str);
        fclose($fp);
    }
}

if(!function_exists('s3Upload')){
    function s3Upload($directory, $file){
        $directory = 'public/'.$directory;
        return Storage::disk('s3')->put($directory, $file, 'public');
    }
}

if(!function_exists('s3ObjectCheck')){
    function s3ObjectCheck($path){
        return Storage::disk('s3')->exists($path);
    }
}
