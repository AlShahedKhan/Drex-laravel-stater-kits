<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ImageSeeder extends Seeder
{
    public function run()
    {
        Image::create([
            'path'              => 'backend/uploads/users/user-icon-1.png',
        ]);
        Image::create([
            'path'              => 'backend/uploads/users/user-icon-2.png',
        ]);
        Image::create([
            'path'              => 'backend/uploads/users/user-icon-3.png',
        ]);
        Image::create([
            'path'              => 'backend/uploads/users/user-icon-4.png',
        ]);
    }
}
