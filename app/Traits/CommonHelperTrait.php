<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

trait CommonHelperTrait
{
    // protected $path_prefix = 'public';

    public function UploadImageCreate($image, $path)
    {
        if ($image && is_file($image)) {

            $extension = $image->guessExtension();
            $filename  = time() . '.' . $extension;

            $image_record       = new Image();
            if (setting('file_system') == 's3') {
                // $path = $this->path_prefix . '/' . $path;
                // $filePath = Storage::disk('s3')->put($this->path_prefix . '/' . $path, $image);
                $filePath       = s3Upload($path, $image);
                $imagePostSuccess = Storage::disk('s3')->exists($filePath);
                $image_record->path = $filePath;
            }else{
                $image->move($path, $filename);
                $image_record->path = $path .'/'. $filename;
            }
            $image_record->save();

            return $image_record->id;

        }
        return null;
    }

    public function UploadImageUpdate($image, $path, $image_id)
    {
        if ($image && is_file($image)) {

            if($image_id){
                $image_record = Image::find($image_id);
                if (setting('file_system') == 's3') {
                    Storage::disk('s3')->delete($image_record->path);
                }else{
                    $file_path    = public_path($image_record->path);
                    if(file_exists($file_path)){
                        File::delete($file_path);
                    }
                }
            }else{
                $image_record = new Image();
            }

            $extension          = $image->guessExtension();
            $filename           = time() . '.' . $extension;
            if (setting('file_system') == 's3') {
                // $filePath = Storage::disk('s3')->put($this->path_prefix . '/' . $path, $image);
                // $path = $this->path_prefix . '/' . $path;
                $filePath       = s3Upload($path, $image);
                $image_record->path = $filePath;
            }else{
                $image->move($path, $filename);
                $image_record->path = $path .'/'. $filename;
            }

            $image_record->save();
            return $image_record->id;
        }
        return $image_id;
    }

    public function UploadImageDelete($image_id)
    {
        if($image_id){
            $image_record = Image::find($image_id);
            $file_path    = public_path($image_record->path);
            if(file_exists($file_path)){
                File::delete($file_path);
            }
            $image_record->delete();
        }
        return true;
    }

    public function setEnvironmentValue($envKey, $envValue)
    {
        $envFile = app()->environmentFilePath();
        $str = file_get_contents($envFile);

        $str .= "\n"; // In case the searched variable is in the last line without \n
        $keyPosition = strpos($str, "{$envKey}=");
        $endOfLinePosition = strpos($str, PHP_EOL, $keyPosition);
        $oldLine = substr($str, $keyPosition, $endOfLinePosition - $keyPosition);
        $envValue = '"'.$envValue.'"';
        // dd($envValue);
        $str = str_replace($oldLine, "{$envKey}={$envValue}", $str);
        $str = substr($str, 0, -1);

        $fp = fopen($envFile, 'w');
        fwrite($fp, $str);
        fclose($fp);
        return true;
    }

}
