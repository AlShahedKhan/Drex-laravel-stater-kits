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
                        <li class="breadcrumb-item">Edit Terms</li>
                    </ol>
                </div>
            </div>
        </div>
        {{-- bradecrumb Area E n d --}}

        <div class="card ot-card">
            {{-- <div class="card-header">
                <h4>{{ ___('language.edit_terms') }}</h4>
            </div> --}}
            <div class="card-body">
                <form action="{{ route('languages.update.terms', @$data['language']->code) }}" enctype="multipart/form-data"
                    method="post" id="terms-form">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="code" id="code" value="{{ @$data['language']->code }}">
                    <div class="row mb-3">
                        <div class="col-md-12 mb-3">
                            <label for="validationServer04" class="form-label">{{ ___('language.module') }}</label>
                            <select class="form-select ot-input @error('lang_module') is-invalid @enderror change-module"
                                name="lang_module" id="validationServer04" aria-describedby="validationServer04Feedback">
                                <option value="common" selected>{{ ___('language.common') }}</option>
                                <option value="settings">{{ ___('language.settings') }}</option>
                                <option value="language">{{ ___('language.language') }}</option>
                                <option value="users_roles">{{ ___('language.users_roles') }}</option>
                                <option value="cricket">{{ ___('language.cricket') }}</option>
                                <option value="football">{{ ___('language.football') }}</option>
                            </select>
                            @error('lang_module')
                                <div id="validationServer04Feedback" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="exampleDataList" class="form-label ">{{ ___('language.term') }}</label>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleDataList"
                                        class="form-label ">{{ ___('language.translated_language') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 term-translated-language">
                            @foreach ($data['terms'] as $key => $row)
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <input class="form-control ot-input" name="name" list="datalistOptions"
                                            id="exampleDataList" value="{{ $key }}" disabled>
                                    </div>
                                    <div class="col-md-6 translated_language">
                                        <input class="form-control ot-input" list="datalistOptions" id="exampleDataList"
                                            placeholder="{{ ___('language.translated_language') }}"
                                            name="{{ $key }}" value="{{ $row }}">
                                    </div>
                                </div>
                            @endforeach
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
