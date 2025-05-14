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
                                href="{{ route('languages.index') }}">{{ ___('language.languages') }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ ___('common.add_new') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="card ot-card">
            {{-- <div class="card-header">
                <h4>{{ ___('common.add_new') }}</h4>
            </div> --}}
            <div class="card-body">
                <form action="{{ route('languages.store') }}" enctype="multipart/form-data" method="post" id="visitForm">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3">
                                    <label for="exampleDataList" class="form-label ">{{ ___('common.name') }} <span class="fillable">*</span></label>
                                    <input class="form-control ot-input @error('name') is-invalid @enderror" name="name"
                                        list="datalistOptions" id="exampleDataList"
                                        placeholder="{{ ___('common.enter_name') }}">
                                    @error('name')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleDataList" class="form-label ">{{ ___('language.code') }} <span class="fillable">*</span></label>
                                    <input class="form-control ot-input @error('code') is-invalid @enderror" name="code"
                                        list="datalistOptions" id="exampleDataList"
                                        placeholder="{{ ___('language.enter_code') }}">
                                    @error('code')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="validationServer04"
                                        class="form-label">{{ ___('language.flag_icon') }} <span class="fillable">*</span></label>
                                    <select
                                        class="form-select ot-input flag_icon_list @error('flagIcon') is-invalid @enderror"
                                        name="flagIcon" id="validationServer04"
                                        aria-describedby="validationServer04Feedback">
                                        <option value="">{{ ___('common.select') }}</option>
                                        @foreach ($data['flagIcons'] as $row)
                                            <option value="{{ $row->icon_class }}" data-icon="{{ $row->icon_class }}">
                                                {{ $row->title }}</option>
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
                                                name="direction" value="{{ App\Enums\Direction::RTL }}" id="rtl_direction">
                                            <label class="custom-control-label"
                                                for="rtl_direction">{{ ___('language.rtl') }}</label>
                                        </div>
                                    </div>

                                    <div class="input-check-radio">
                                        <div class="form-check d-flex align-items-center">
                                            <input type="radio" class="form-check-input mt-0 mr-4 read common-key"
                                                name="direction" value="{{ App\Enums\Direction::LTR }}" id="ltr_direction">
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
                                    </span>{{ ___('common.submit') }}</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
