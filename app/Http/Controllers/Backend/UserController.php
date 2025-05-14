<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Interfaces\RoleInterface;
use App\Interfaces\UserInterface;
use App\Http\Controllers\Controller;
use App\Interfaces\PermissionInterface;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    private $user;
    private $permission;
    private $role;

    function __construct(UserInterface $userInterface, PermissionInterface $permissionInterface, RoleInterface $roleInterface)
    {
        $this->user       = $userInterface;
        $this->permission = $permissionInterface;
        $this->role       = $roleInterface;
    }

    public function index()
    {
        $data['users'] = $this->user->getAll();
        $data['title'] = 'Users';
        return view('backend.users.index', compact('data'));
    }

    public function create()
    {
        $data['title']       = 'Create Users';
        $data['permissions'] = $this->permission->all();
        $data['roles']       = $this->role->all();
        return view('backend.users.create', compact('data'));
    }

    public function store(UserStoreRequest $request)
    {
        $result = $this->user->store($request);
        if ($result) {
            return redirect()->route('users.index')->with('success', 'User created successfully');
        }
        return redirect()->route('users.index')->with('danger', 'Something went wrong, please try again.');
    }

    public function edit($id)
    {
        $data['user']        = $this->user->show($id);
        $data['title']       = "Users";
        $data['permissions'] = $this->permission->all();
        $data['roles']       = $this->role->all();
        return view('backend.users.edit', compact('data'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $result = $this->user->update($request, $id);
        if ($result) {
            return redirect()->route('users.index')->with('success', 'User updated successfully');
        }
        return redirect()->route('users.index')->with('danger', 'Something went wrong, please try again.');
    }

    public function delete($id)
    {
        if ($this->user->destroy($id)) :
            $success[0] = "Deleted Successfully";
            $success[1] = "Success";
            $success[2] = "Deleted";
        else :
            $success[0] = "Something went wrong, please try again.";
            $success[1] = 'error';
            $success[2] = "oops";
        endif;
        return response()->json($success);
    }

    public function changeRole(Request $request)
    {
        $data['role_permissions'] = $this->role->show($request->role_id)->permissions;
        $data['permissions']      = $this->permission->all();
        return view('backend.users.permissions', compact('data'))->render();
    }

    public function status(Request $request)
    {

        if ($request->type == 'active') {
            $request->merge([
                'status' => 1
            ]);
            $this->user->status($request);
        }

        if ($request->type == 'inactive') {
            $request->merge([
                'status' => 0
            ]);
            $this->user->status($request);
        }

        return response()->json(["message" => __("Status update successful")], Response::HTTP_OK);
    }

    public function deletes(Request $request)
    {
        $this->user->deletes($request);

        return response()->json(["message" => __('Delete successful.')], Response::HTTP_OK);
    }
}
