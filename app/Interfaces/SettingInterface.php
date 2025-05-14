<?php

namespace App\Interfaces;

use App\Http\Requests\SettingStoreRequest;

interface SettingInterface{

    public function getAll();

    public function getLanguage();

    public function updateRecaptchaSetting(SettingStoreRequest $request);

    public function storageSettingUpdate($request);

    public function updateMailSetting($request);

    public function updateGeneralSetting($request);
}
