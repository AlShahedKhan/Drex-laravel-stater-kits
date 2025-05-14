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
            </div>
        </div>
        {{-- bradecrumb Area E n d --}}

        <div class="card ot-card">
            <div class="card-header">
                <h4>{{ ___('common.recaptcha_settings') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('settings.recaptcha-setting') }}" enctype="multipart/form-data" method="post"
                    id="visitForm">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row">
                                {{-- Recaptch SITEKEY start --}}
                                <div class="row mb-3">
                                    <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3">
                                        <label for="inputname" class="form-label">{{ ___('settings.recaptcha_sitekey') }}
                                            <span class="fillable">*</span></label>
                                        <input type="text" name="recaptcha_sitekey"
                                            class="form-control ot-input @error('recaptcha_sitekey') is-invalid @enderror"
                                            value="{{ Setting('recaptcha_sitekey') }}">
                                        @error('recaptcha_sitekey')
                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- Recaptch SITEKEY start --}}

                                    {{-- Recaptch SECRET start --}}
                                    <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3">
                                        <label for="inputname" class="form-label">{{ ___('settings.recaptcha_secret') }}
                                            <span class="fillable">*</span></label>
                                        <input type="text" name="recaptcha_secret"
                                            class="form-control ot-input @error('recaptcha_secret') is-invalid @enderror"
                                            value="{{ Setting('recaptcha_secret') }}">
                                        {{-- value="{{ $data['data']->where('name', 'recaptcha_secret')->pluck('value')->first() }} --}}
                                        @error('recaptcha_secret')
                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- Recaptch SECRET end --}}

                                    {{-- Recaptch status start --}}
                                    <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3">
                                        <label for="validationServer04"
                                            class="form-label">{{ ___('settings.recaptcha_status') }} <span
                                                class="fillable">*</span></label>
                                        <select class="nice-select niceSelect bordered_style wide @error('recaptcha_status') is-invalid @enderror"
                                            value="{{ Setting('recaptcha_status') }}" name="recaptcha_status"
                                            id="validationServer04" aria-describedby="validationServer04Feedback">
                                            <option value="">Select</option>
                                            <option value="{{ App\Enums\Status::ACTIVE }}"
                                                {{ Setting('recaptcha_status') == App\Enums\Status::ACTIVE ? 'selected' : '' }}>
                                                {{ ___('common.active') }}</option>
                                            <option value="{{ App\Enums\Status::INACTIVE }}"
                                                {{ Setting('recaptcha_status') == App\Enums\Status::INACTIVE ? 'selected' : '' }}>
                                                {{ ___('common.inactive') }}</option>
                                        </select>
                                    </div>
                                    @error('recaptcha_status')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    {{-- Recaptch status end --}}
                                </div>
                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="text-end">
                                    @if (hasPermission('recaptcha_settings_update'))
                                        <button class="btn btn-lg ot-btn-primary">
                                            <span>
                                                <i class="fa-solid fa-save"></i>
                                            </span>{{ ___('common.update') }}
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
