<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\SettingInterface;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\SettingStoreRequest;
use App\Http\Requests\Settings\EmailSettingStoreRequest;
use App\Http\Requests\GeneralSetting\StorageUpdateRequest;
use App\Http\Requests\GeneralSetting\GeneralSettingStoreRequest;

class SettingController extends Controller
{
    private $setting;

    function __construct(SettingInterface $settingInterface)
    {
        $this->setting = $settingInterface;
    }

    // General setting start
    public function generalSettings()
    {
        $data['title']      = 'General Settings';
        $data['data']       = $this->setting->getAll();
        $data['languages']  = $this->setting->getLanguage();
        return view('backend.settings.general-settings', compact('data'));
    }

    public function updateGeneralSetting(GeneralSettingStoreRequest $request)
    {
        $result = $this->setting->updateGeneralSetting($request);
        if ($result) {
            return redirect()->back()->with('success', 'General settings created successfully');
        }
        return redirect()->back()->with('danger', 'Something went wrong, please try again.');
    }
    // General setting end

    // Storage setting start
    public function storagesetting()
    {
        
        try {
            $data['title'] = 'Storage Settings';
            $data['data']  = $this->setting->getAll();
            return view('backend.settings.storage_setting',compact('data'));
        } catch (\Throwable $th) {
            return redirect('/');
        }
    }

    public function storageSettingUpdate(Request $request)
    {
        try {
            $result = $this->setting->storageSettingUpdate($request);
            return back()->with('success','Storage settings updated successfully');
        } catch (\Throwable $th) {
            return back()->with('danger','Something went wrong, please try again.');
        }
    }
    // Storage setting start

    // Recaptcha setting start
    public function recaptchaSetting()
    {
        $data['title'] = 'Recaptcha Setting';
        $data['data']  = $this->setting->getAll();
        return view('backend.settings.recaptcha-settings', compact('data'));
    }

    public function updateRecaptchaSetting(SettingStoreRequest $request)
    {
        // return $request;
        $result = $this->setting->updateRecaptchaSetting($request);
        // dd($request);
        if ($result) {
            return redirect()->back()->with('success', 'General settings created successfully');
        }
        return redirect()->back()->with('danger', 'Something went wrong, please try again.');
    }
    // Recaptcha setting end

    // mail settings start
    public function mailSetting()
    {
        $data['title'] = 'Email Settings';
        $data['data']  = $this->setting->getAll();
        return view('backend.settings.mail-settings', compact('data'));
    }

    public function updateMailSetting(Request $request)
    {
        $result = $this->setting->updateMailSetting($request);

        if ($result) {
            return redirect()->back()->with('success','Email settings created successfully');
        }
        return redirect()->back()->with('danger','Email went wrong, please try again.');
    }
    // mail settings end


    public function changeTheme(Request $request)
    {
        Cache::put('user_theme', $request->theme_mode);
        return true;
    }
}
