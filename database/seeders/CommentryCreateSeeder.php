<?php

namespace Database\Seeders;

use App\Models\CommentryCreate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentryCreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommentryCreate::create([
            'to' => 'কে বল করলেন',
            'details' => 'লেগ সাইড দিয়ে উড়ে বিশাক এক ছক্কা',
        ]);
        CommentryCreate::create([
            'to' => 'কে বল করলেন',
            'details' => 'বোল্ড মিডেল স্ট্যাম্প উড়ে গেল',
        ]);
    }
}
