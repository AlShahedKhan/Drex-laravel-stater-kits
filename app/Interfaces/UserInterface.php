<?php

namespace App\Interfaces;

use Illuminate\Http\Request;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdateRequest;
use App\Http\Requests\Profile\ProfileUpdateRequest;
use App\Http\Requests\Profile\PasswordUpdateRequest;

interface UserInterface
{

    public function index(Request $request);

    public function status(Request $request);

    public function deletes(Request $request);

    public function getAll();

    public function store($request);

    public function show($id);

    public function update($request, $id);

    public function profileUpdate(ProfileUpdateRequest $request, $id);

    public function passwordUpdate(PasswordUpdateRequest $request, $id);

    public function destroy($id);
}
