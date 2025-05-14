@extends('backend.master')

@section('title')
    {{ @$data['title'] }}
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/datepicker.min.css"
        integrity="sha512-YdYyWQf8AS4WSB0WWdc3FbQ3Ypdm0QCWD2k4hgfqbQbRCJBEgX0iAegkl2S1Evma5ImaVXLBeUkIlP6hQ1eYKQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('content')
<div class="page-content">

    {{-- bradecrumb Area S t a r t --}}
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="bradecrumb-title mb-1">{{ $data['title'] }}</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item">{{ $data['title'] }}</li>
                </ol>
            </div>
            <div class="col-sm-6">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    <ul>
                        <li><a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg></a></li>
                        <li><a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></a></li>
                        <li><a href="javascript:void(0)" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-command"><path d="M18 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3H6a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3V6a3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 3 3 0 0 0-3-3z"></path></svg></a></li>
                        <li><a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></a></li>
                        <li><a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star bookmark-search"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg></a></li>
                    </ul>
                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
    {{-- bradecrumb Area E n d --}}

    <div class="card ot-card">
        <div class="card-header ">
            <h4>{{ ___('settings.aws_s3_info') }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('settings.storageSettingUpdate') }}" enctype="multipart/form-data" method="post"
                id="visitForm">
                @csrf
                @method('PUT')

                <div class="row mb-3">
                    <div class="col-md-12">
                            <div class="row mb-3">
                                {{-- File System start --}}
                                <div class="col-sm-6 mb-3">
                                    <label for="inputname" class="form-label">{{ ___('settings.file_system') }} <span class="text-danger">*</span></label>
                                    <select
                                        class="form-select ot-input file_system @error('file_system') is-invalid @enderror"
                                        value="{{ Setting('file_system') }}"
                                        name="file_system" id="validationServer04"
                                        aria-describedby="validationServer04Feedback">
                                    <option value="">Select</option>
                                    <option value="local" {{ setting('file_system') == "local" ? "selected":"" }}>Local</option>
                                    <option value="s3" {{ setting('file_system') == "s3" ? "selected":"" }}>S3</option>
                                </select>
                                @error('file_system')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        {{-- File System end --}}

                        {{-- ACCESS KEY start --}}
                        <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 _common_div">
                                <label for="inputname" class="form-label">{{ ___('settings.aws_access_key_id') }} <span class="text-danger">*</span></label>
                                <input type="text" name="aws_access_key_id"
                                    class="form-control ot-input @error('aws_access_key_id') is-invalid @enderror"
                                    value="{{ setting('aws_access_key_id') }}">
                                @error('aws_access_key_id')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        {{-- ACCESS KEY start --}}

                        {{-- SECRET ACCESS KEY start --}}
                        <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 _common_div">
                                <label for="inputname" class="form-label">{{ ___('settings.aws_secret_key') }} <span class="text-danger">*</span></label>
                                <input type="text" name="aws_secret_key"
                                    class="form-control ot-input @error('aws_secret_key') is-invalid @enderror"
                                    value="{{ setting('aws_secret_key') }}">
                                @error('aws_secret_key')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        {{-- SECRET ACCESS KEY end --}}

                        {{-- REGION start --}}
                        <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 _common_div">
                                <label for="inputname" class="form-label">{{ ___('settings.aws_default_region') }} <span class="text-danger">*</span></label>
                                <input type="text" name="aws_region"
                                    class="form-control ot-input @error('aws_region') is-invalid @enderror"
                                    value="{{ Setting('aws_region') }}">
                                @error('aws_region')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        {{-- REGION end --}}

                        {{-- BUCKET start --}}
                        <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 _common_div">
                                <label for="inputname" class="form-label">{{ ___('settings.aws_bucket') }} <span class="text-danger">*</span></label>
                                <input type="text" name="aws_bucket"
                                    class="form-control ot-input @error('aws_bucket') is-invalid @enderror"
                                    value="{{  setting('aws_bucket') }}">
                                @error('aws_bucket')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        {{-- BUCKET end --}}

                        {{-- ENDPOINT start --}}
                        <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 _common_div">
                                <label for="inputname" class="form-label">{{ ___('settings.aws_endpoint') }} <span class="text-danger">*</span></label>
                                <input type="text" name="aws_endpoint"
                                    class="form-control ot-input @error('aws_endpoint') is-invalid @enderror"
                                    value="{{ Setting('aws_endpoint') }}">
                                @error('aws_endpoint')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            {{-- ENDPOINT end --}}
                        </div>

                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="text-end">
                            @if (hasPermission('email_settings_update'))
                                <button class="btn btn-lg ot-btn-primary">
                                    <span>
                                        <i class="fa-solid fa-save"></i>
                                    </span>{{ ___('common.update') }}
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

