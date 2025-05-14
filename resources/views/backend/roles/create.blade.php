@extends('backend.master')

@section('title')
    {{ @$data['title'] }}
@endsection
@section('content')
    <div class="page-content">
        <div class="card ot-card border-0 ph-14 pv-14 mb-24">
            <div class="card-body pt-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb ot-breadcrumb-secondary mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ ___('common.home') }}</a></li>
                        <li class="breadcrumb-item" aria-current="page"><a
                                href="{{ route('roles.index') }}">{{ ___('users_roles.roles') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ ___('common.add_new') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card ot-card">
            <div class="card-body">
                <form action="{{ route('roles.store') }}" enctype="multipart/form-data" method="post" id="visitForm">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <label for="exampleDataList" class="form-label ">{{ ___('common.name') }} <span
                                            class="fillable">*</span></label>
                                    <input class="form-control ot-input @error('name') is-invalid @enderror" name="name"
                                        list="datalistOptions" id="exampleDataList"
                                        placeholder="{{ ___('common.enter_name') }}">
                                    @error('name')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="validationServer04" class="form-label">{{ ___('common.status') }} <span
                                            class="fillable">*</span></label>
                                    <select class="form-select ot-input @error('status') is-invalid @enderror"
                                        name="status" id="validationServer04"
                                        aria-describedby="validationServer04Feedback">
                                        <option value="">Select</option>
                                        <option value="{{ App\Enums\Status::ACTIVE }}">{{ ___('common.active') }}</option>
                                        <option value="{{ App\Enums\Status::INACTIVE }}">{{ ___('common.inactive') }}
                                        </option>
                                    </select>
                                    @error('status')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <!-- table content start  -->
                            <div class="table-container pt-20 role-permisssion-control">
                                <!-- table container start  -->
                                <div class="table-responsive">
                                    <!-- table start  -->
                                    <table class="ot-basic-table ot-table-bg">
                                        <thead>
                                            <th class="user_roles_border">{{ ___('users_roles.module_module_links') }}</th>
                                            <th class="user_roles_permission">{{ ___('users_roles.Permissions') }}</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($data['permissions'] as $permission)
                                                <tr>
                                                    <td>{{ $permission->attribute }}</td>
                                                    <td>
                                                        <div class="permission-list-td">
                                                            @foreach ($permission->keywords as $key => $keyword)
                                                                <div class="input-check-radio">
                                                                    <div class="form-check d-flex align-items-center">
                                                                        @if ($keyword != '')
                                                                            <input class="form-check-input mr-4  common-key"
                                                                                type="checkbox" name="permissions[]"
                                                                                value="{{ $keyword }}"
                                                                                id="{{ $keyword }}" />
                                                                            <label class="form-check-label"
                                                                                for="{{ $keyword }}">{{ __($key) }}</label>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <!-- table end  -->
                                </div>
                                <!-- table container end  -->
                            </div>
                            <!-- table content end -->
                        </div>
                        <div class="col-md-12 mt-24">
                            <div class="text-end">
                                <button class="btn btn-lg ot-btn-primary"><span><i class="fa-solid fa-save"></i>
                                    </span>{{ ___('common.submit') }}</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
