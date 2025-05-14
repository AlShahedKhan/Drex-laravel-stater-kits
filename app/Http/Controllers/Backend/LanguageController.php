<?php

namespace App\Http\Controllers\Backend;

use App;
use Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Interfaces\FlagIconInterface;
use App\Interfaces\LanguageInterface;
use Illuminate\Support\Facades\Cache;
use App\Interfaces\PermissionInterface;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Language\LanguageStoreRequest;
use App\Http\Requests\Language\LanguageUpdateRequest;

class LanguageController extends Controller
{
    private $language;
    private $permission;
    private $flagIcon;

    function __construct(LanguageInterface $languageInterface, PermissionInterface $permissionInterface, FlagIconInterface $flagIconInterface)
    {
        $this->language   = $languageInterface;
        $this->permission = $permissionInterface;
        $this->flagIcon   = $flagIconInterface;
    }

    public function index()
    {
        $data['languages']  = $this->language->getAll();
        $data['title']      = 'Languages';
        return view('backend.languages.index',compact('data'));
    }

    public function create()
    {
        $data['title']       = 'Create Language';
        $data['permissions'] = $this->permission->all();
        $data['flagIcons']   = $this->flagIcon->getAll();
        return view('backend.languages.create', compact('data'));
    }

    public function store(LanguageStoreRequest $request)
    {
        $result = $this->language->store($request);
        if ($result) {
            return redirect()->route('languages.index')->with('success','Language created successfully');
        }
        return redirect()->route('languages.index')->with('danger','Something went wrong, please try again.');
    }

    public function edit($id)
    {
        $data['language']    = $this->language->show($id);
        $data['title']       = "Language";
        $data['permissions'] = $this->permission->all();
        $data['flagIcons']   = $this->flagIcon->getAll();
        return view('backend.languages.edit',compact('data'));
    }

    public function update(LanguageUpdateRequest $request,$id)
    {
        $result = $this->language->update($request,$id);
        if($result){
            return redirect()->route('languages.index')->with('success','Language updated successfully');
        }
        return redirect()->route('languages.index')->with('danger','Something went wrong, please try again.');
    }

    public function delete($id)
    {
        if ($this->language->destroy($id)):
            $success[0] = "Deleted Successfully";
            $success[1] = "Success";
            $success[2] = "Deleted";
        else:
            $success[0] = "Something went wrong, please try again.";
            $success[1] = 'error';
            $success[2] = "oops";
        endif;
        return response()->json($success);

    }

    public function terms($id)
    {
        $data = $this->language->terms($id);
        return view('backend.languages.terms',compact('data'));
    }

    public function termsUpdate(Request $request, $code)
    {
        $result = $this->language->termsUpdate($request, $code);

        if($result){
            return redirect()->route('languages.index')->with('success','Language terms updated successfully');
        }
        return redirect()->route('languages.index')->with('danger','Something went wrong, please try again.');
    }

    public function changeModule(Request $request)
    {
        $path           = base_path('lang/' . $request->code);
        $jsonString     = file_get_contents(base_path("lang/$request->code/$request->module.json"));
        $data['terms']  = json_decode($jsonString, true);

        return view('backend.languages.ajax_terms', compact('data'))->render();
    }


    public function changeLanguage(Request $request)
    {
        $path = base_path('lang/' . $request->code);
        if(is_dir($path)){
            Cache::put('locale', $request->code);
            return 1;
        }
        return 0;

    }

}
