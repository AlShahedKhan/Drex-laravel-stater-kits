<?php

namespace App\Http\Controllers\Backend;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Interfaces\RoleInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\Role\RoleStoreRequest;
use App\Http\Requests\Role\RoleUpdateRequest;
use App\Interfaces\PermissionInterface;

class RoleController extends Controller
{
    private $role;
    private $permission;

    function __construct(RoleInterface $role, PermissionInterface $permission)
    {
        $this->role       = $role; 
        $this->permission = $permission; 
    }

    public function index()
    {
        $data['roles'] = $this->role->getAll();
        $data['title'] = 'Roles';
        return view('backend.roles.index', compact('data'));
    }

    public function create()
    {
        $data['title']       = 'Create Role';
        $data['permissions'] = $this->permission->all();
        return view('backend.roles.create', compact('data'));
    }

    public function store(RoleStoreRequest $request)
    {
        $result = $this->role->store($request);
        if($result){
            return redirect()->route('roles.index')->with('success','Role created successfully');
        }
        return redirect()->route('roles.index')->with('danger','Something went wrong, please try again.');
    }

    public function edit($id)
    {
        $data['role']        = $this->role->show($id);
        $data['title']       = 'Roles';
        $data['permissions'] = $this->permission->all();
        return view('backend.roles.edit', compact('data'));
    }

    public function update(RoleUpdateRequest $request, $id)
    {
        $result = $this->role->update($request, $id);
        if($result){
            return redirect()->route('roles.index')->with('success','Role updated successfully');
        }
        return redirect()->route('roles.index')->with('danger','Something went wrong, please try again.');
    }

    public function delete($id)
    {
        if($this->role->destroy($id)):
            $success[0] = "Deleted Successfully";
            $success[1] = 'success';
            $success[2] = "Deleted";
            return response()->json($success);
        else:
            $success[0] = "Something went wrong, please try again.";
            $success[1] = 'error';
            $success[2] = "oops";
            return response()->json($success);
        endif;      
    }
}
