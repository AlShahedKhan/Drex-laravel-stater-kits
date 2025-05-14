<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Interfaces\UserInterface;
use App\Models\Designation;
use App\Models\Language;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\Search;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $user;


    function __construct(UserInterface $userInterface)
    {
        $this->user       = $userInterface;
    }

    public function index(Request $request)
    {
        /*
            Summery
        */

        //Users
        $users['total'] = User::count();
        $users['active'] = User::where('status', 1)->count();
        $users['inactive'] = User::where('status', 4)->count();

        //Roles
        $roles['total'] = Role::count();
        $roles['active'] = Role::where('status', 1)->count();
        $roles['inactive'] = Role::where('status', 4)->count();

        //Languages
        $languages['total'] = Language::count();
        $languages['active'] = Language::count(); //lanuage status are not assigned
        $languages['inactive'] = 0; //lanuage status are not assigned

        //Languages
        $permissions['total'] = Permission::count();
        $permissions['active'] = Permission::count(); //lanuage status are not assigned
        $permissions['inactive'] = 0; //lanuage status are not assigned


        //users
        $user = $this->user->getAll();

        $users = $this->user->index($request);
        $designations = Designation::query()->get(['id', 'title']);

        return view('backend.dashboard', [
            "users" => $users,
            "roles" => $roles,
            "languages" => $languages,
            "permissions" => $permissions,
            "user" => $user,
            "users" => $users,
            "designations" => $designations,
        ]);
    }
    public function schoolDashboard()
    {
        /*
            Summery
        */

        //Users
        $users['total'] = User::count();
        $users['active'] = User::where('status', 1)->count();
        $users['inactive'] = User::where('status', 4)->count();

        //Roles
        $roles['total'] = Role::count();
        $roles['active'] = Role::where('status', 1)->count();
        $roles['inactive'] = Role::where('status', 4)->count();

        //Languages
        $languages['total'] = Language::count();
        $languages['active'] = Language::count(); //lanuage status are not assigned
        $languages['inactive'] = 0; //lanuage status are not assigned

        //Languages
        $permissions['total'] = Permission::count();
        $permissions['active'] = Permission::count(); //lanuage status are not assigned
        $permissions['inactive'] = 0; //lanuage status are not assigned


        //users
        $user = $this->user->getAll();


        return view('backend.school_dashboard', [
            "users" => $users,
            "roles" => $roles,
            "languages" => $languages,
            "permissions" => $permissions,
            "user" => $user
        ]);
    }
    public function lmsDashboard()
    {
        /*
            Summery
        */

        //Users
        $users['total'] = User::count();
        $users['active'] = User::where('status', 1)->count();
        $users['inactive'] = User::where('status', 4)->count();

        //Roles
        $roles['total'] = Role::count();
        $roles['active'] = Role::where('status', 1)->count();
        $roles['inactive'] = Role::where('status', 4)->count();

        //Languages
        $languages['total'] = Language::count();
        $languages['active'] = Language::count(); //lanuage status are not assigned
        $languages['inactive'] = 0; //lanuage status are not assigned

        //Languages
        $permissions['total'] = Permission::count();
        $permissions['active'] = Permission::count(); //lanuage status are not assigned
        $permissions['inactive'] = 0; //lanuage status are not assigned


        //users
        $user = $this->user->getAll();


        return view('backend.lms_dashboard', [
            "users" => $users,
            "roles" => $roles,
            "languages" => $languages,
            "permissions" => $permissions,
            "user" => $user
        ]);
    }
    public function crmDashboard()
    {
        /*
            Summery
        */

        //Users
        $users['total'] = User::count();
        $users['active'] = User::where('status', 1)->count();
        $users['inactive'] = User::where('status', 4)->count();

        //Roles
        $roles['total'] = Role::count();
        $roles['active'] = Role::where('status', 1)->count();
        $roles['inactive'] = Role::where('status', 4)->count();

        //Languages
        $languages['total'] = Language::count();
        $languages['active'] = Language::count(); //lanuage status are not assigned
        $languages['inactive'] = 0; //lanuage status are not assigned

        //Languages
        $permissions['total'] = Permission::count();
        $permissions['active'] = Permission::count(); //lanuage status are not assigned
        $permissions['inactive'] = 0; //lanuage status are not assigned


        //users
        $user = $this->user->getAll();


        return view('backend.crm_dashboard', [
            "users" => $users,
            "roles" => $roles,
            "languages" => $languages,
            "permissions" => $permissions,
            "user" => $user
        ]);
    }

    public function searchMenuData(Request $request)
    {
        $targets = Search::where('url', 'LIKE', "%{$request->searchData}%")->get();
        $view = View('backend.menu-autocomplete', compact('targets'))->render();
        return response()->json(['data' => $view]);
    }
}
