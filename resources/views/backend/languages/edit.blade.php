@extends('backend.master')

@section('title')
    {{ @$data['title'] }}
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
                        <li class="breadcrumb-item">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
        {{-- bradecrumb Area E n d --}}

        <div class="card ot-card">
            {{-- <div class="card-header">
                <h4>{{ ___('common.edit') }}</h4>
            </div> --}}
            <div class="card-body">
                <form action="{{ route('languages.update', @$data['language']->id) }}" enctype="multipart/form-data"
                    method="post" id="visitForm">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleDataList" class="form-label ">{{ ___('common.name') }} <span
                                            class="fillable">*</span></label>
                                    <input class="form-control ot-input @error('name') is-invalid @enderror" name="name"
                                        list="datalistOptions" id="exampleDataList"
                                        placeholder="{{ ___('common.enter_name') }} "
                                        value="{{ $data['language']->name }}">
                                    @error('name')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleDataList" class="form-label ">{{ ___('language.code') }} <span
                                            class="fillable">*</span></label>
                                    <input class="form-control ot-input @error('code') is-invalid @enderror" name="code"
                                        list="datalistOptions" id="exampleDataList"
                                        placeholder="{{ ___('language.enter_code') }}"
                                        value="{{ $data['language']->code }}">
                                    @error('code')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="validationServer04" class="form-label">{{ ___('language.flag_icon') }}
                                        <span class="fillable">*</span></label>
                                    <select
                                        class="form-select ot-input flag_icon_list @error('flagIcon') is-invalid @enderror"
                                        name="flagIcon" id="validationServer04"
                                        aria-describedby="validationServer04Feedback">
                                        <option value="">{{ ___('common.select') }}</option>
                                        @foreach ($data['flagIcons'] as $row)
                                            <option value="{{ $row->icon_class }}" data-icon="{{ $row->icon_class }}" @php if($data['language']->icon_class == $row->icon_class) echo 'selected' @endphp>
                                                {{ $row->title }} </option>
                                        @endforeach
                                    </select>
                                    @error('flagIcon')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="col-md-6 direction-button">

                                    <label for="validationServer04"
                                        class="form-label">{{ ___('language.direction') }}</label>
                                    <div class="input-check-radio">
                                        <div class="form-check d-flex align-items-center">
                                            <input type="radio" class="form-check-input mt-0 mr-4 read common-key"
                                                name="direction" value="{{ App\Enums\Direction::RTL }}" id="rtl_direction" {{ strtoupper($data['language']->direction) == App\Enums\Direction::RTL ? 'checked' : '' }}>
                                            <label class="custom-control-label"
                                                for="rtl_direction">{{ ___('language.rtl') }}</label>
                                        </div>
                                    </div>

                                    <div class="input-check-radio">
                                        <div class="form-check d-flex align-items-center">

                                            <input type="radio" class="form-check-input mt-0 mr-4 read common-key"
                                                name="direction" value="{{ App\Enums\Direction::LTR }}" id="ltr_direction" {{ strtoupper($data['language']->direction) == App\Enums\Direction::LTR ? 'checked' : '' }}>
                                            <label class="custom-control-label"
                                                for="ltr_direction">{{ ___('language.ltr') }}</label>
                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>

                        <div class="col-md-12 mt-3">
                            <div class="text-end">
                                <button class="btn btn-lg ot-btn-primary"><span><i class="fa-solid fa-save"></i>
                                    </span>{{ ___('common.update') }}</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
