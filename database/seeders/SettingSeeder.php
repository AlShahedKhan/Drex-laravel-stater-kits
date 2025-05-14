<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'name' => 'application_name',
            'value' => 'KhelarAdda',
        ]);
        Setting::create([
            'name' => 'footer_text',
            'value' => 'Khelaradda.com',
        ]);
        Setting::create([
            'name' => 'file_system',
            'value' => 'local',
        ]);
        Setting::create([
            'name' => 'aws_access_key_id',
            'value' => 'AKIA3OGN2RWSOIIG3A4J',
        ]);
        Setting::create([
            'name' => 'aws_secret_key',
            'value' => 'e5hV1auxMkbQ+kDmzW0WjTJRmO8lEN28XVr7w6Jz',
        ]);
        Setting::create([
            'name' => 'aws_region',
            'value' => 'ap-southeast-1',
        ]);
        Setting::create([
            'name' => 'aws_bucket',
            'value' => 'onest-starter-kit',
        ]);
        Setting::create([
            'name' => 'aws_endpoint',
            'value' => 'https://s3.ap-southeast-1.amazonaws.com',
        ]);
        Setting::create([
            'name' => 'recaptcha_sitekey',
            'value' => '6Lfn6nQhAAAAAKYauxvLddLtcqSn1yqn-HRn_CbN',
        ]);
        Setting::create([
            'name' => 'recaptcha_secret',
            'value' => '6Lfn6nQhAAAAABOzRtEjhZYB49Dd4orv41thfh02',
        ]);
        Setting::create([
            'name' => 'recaptcha_status',
            'value' => '1',
        ]);
        Setting::create([
            'name' => 'mail_drive',
            'value' => 'smtp',
        ]);
        Setting::create([
            'name' => 'mail_host',
            'value' => 'smtp.gmail.com',
        ]);
        Setting::create([
            'name' => 'mail_address',
            'value' => 'sales@onesttech.com',
        ]);
        Setting::create([
            'name' => 'from_name',
            'value' => 'KhelarAdda',
        ]);
        Setting::create([
            'name' => 'mail_username',
            'value' => 'sales@onesttech.com',
        ]);
        Setting::create([
            'name' => 'mail_password',
            'value' => 'ya!@a+TIY3Vl&esT',
        ]);
        Setting::create([
            'name' => 'mail_port',
            'value' => '587',
        ]);
        Setting::create([
            'name' => 'encryption',
            'value' => 'tls',
        ]);
        Setting::create([
            'name' => 'default_langauge',
            'value' => 'en',
        ]);
        Setting::create([
            'name' => 'light_logo',
            'value' => 'backend/uploads/settings/light.png',
        ]);
        Setting::create([
            'name' => 'dark_logo',
            'value' => 'backend/uploads/settings/light.png',
        ]);
        Setting::create([
            'name' => 'favicon',
            'value' => 'backend/uploads/settings/fevicon.png',
        ]);
    }
}
