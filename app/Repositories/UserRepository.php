<?php

namespace App\Repositories;

use App\Models\User;
use App\Interfaces\UserInterface;
use App\Traits\CommonHelperTrait;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Http\Requests\Profile\PasswordUpdateRequest;
use App\Models\Role;
use Carbon\Carbon;

class UserRepository implements UserInterface
{
    use CommonHelperTrait;
    private User $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function index($request)
    {
        // dd($request->all());
        $data =  $this->model->query()->with('image', 'designation');

        $where = array();

        if ($request->search) {
            $where[] = ['name', 'like', '%' . $request->search . '%'];
        }

        if ($request->from && $request->to) {
            $data = $data->whereBetween('created_at', [Carbon::parse($request->from), Carbon::parse($request->to)->endOfDay()]);
        }

        if ($request->designation) {
            $data = $data->whereIn('designation_id', $request->designation);
        }

        $data = $data
            ->where($where)
            ->orderBy('id', 'DESC')
            ->paginate($request->show ?? 10);

        return $data;
    }

    public function status($request)
    {
        return $this->model->whereIn('id', $request->ids)->update(['status' => $request->status]);
    }

    public function deletes($request)
    {
        return $this->model->destroy((array)$request->ids);
    }

    public function getAll()
    {
        return User::query()->with('image')->orderBy('id', 'DESC')->paginate(10);
    }

    public function store($request)
    {
        $roles = Role::all();
        try {
            $userStore                  = new $this->model;
            $userStore->name            = $request->name;
            $userStore->role_id         = $request->role;
            $userStore->email           = $request->email;
            $userStore->phone           = $request->phone;
            $userStore->password        = Hash::make($request->password);
            $userStore->permissions     = $request->permissions;
            // if ($roles->status = 0) {
            //     $userStore->status          = $request->status = 0;
            // }else{
            //     $userStore->status          = $request->status;
            // }
            $userStore->status          = $request->status;
            $userStore->image_id        = $this->UploadImageCreate($request->image, 'backend/uploads/users');
            $userStore->save();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function show($id)
    {
        return $this->model->find($id);
    }

    public function update($request, $id)
    {
        try {
            $userUpdate                 = $this->model->findOrfail($id);
            $userUpdate->name           = $request->name;
            $userUpdate->role_id        = $request->role;
            $userUpdate->email          = $request->email;
            $userUpdate->phone          = $request->phone;
            if ($request->password) {
                $userUpdate->password   = Hash::make($request->password);
            }
            $userUpdate->permissions    = $request->permissions;
            $userUpdate->status         = $request->status;
            $userUpdate->image_id       = $this->UploadImageUpdate($request->image, 'backend/uploads/users', $userUpdate->image_id);
            $userUpdate->save();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function profileUpdate($request, $id)
    {
        try {
            $userUpdate                 = $this->model->findOrfail($id);
            $userUpdate->name           = $request->name;
            $userUpdate->phone          = $request->phone;
            $userUpdate->date_of_birth  = $request->date_of_birth;
            $userUpdate->image_id       = $this->UploadImageUpdate($request->image, 'backend/uploads/users', $userUpdate->image_id);
            $userUpdate->save();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function destroy($id)
    {
        try {
            $user   = $this->model->find($id);
            $this->UploadImageDelete($user->image_id); // delete image & record
            $user->delete();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }


    public function passwordUpdate(PasswordUpdateRequest $request, $id)
    {
        try {
            $userUpdate             = $this->model->findOrfail($id);
            $userUpdate->password   = Hash::make($request->password);
            $userUpdate->save();
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
