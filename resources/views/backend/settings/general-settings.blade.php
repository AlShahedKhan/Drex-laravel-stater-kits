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
                <h4>{{ ___('settings.general_settings') }}</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('settings.general-settings') }}" enctype="multipart/form-data" method="post"
                    id="visitForm">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="row mb-3">
                                <!--Application Name Start -->
                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 ">
                                    <label for="inputname" class="form-label">{{ ___('settings.application_name') }} <span
                                            class="fillable">*</span></label>
                                    <input type="text" name="application_name"
                                        class="form-control ot-input @error('application_name') is-invalid @enderror"
                                        value="{{ Setting('application_name') }}"
                                        placeholder="{{ ___('settings.enter_you_application_name') }}">
                                    @error('application_name')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <!--Application Name End -->
                                <!--Footer Text Start -->
                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3 ">
                                    <label for="inputname" class="form-label">{{ ___('settings.footer_text') }} <span
                                            class="fillable">*</span></label>
                                    <input type="text" name="footer_text"
                                        class="form-control ot-input @error('footer_text') is-invalid @enderror"
                                        value="{{ Setting('footer_text') }}"
                                        placeholder="{{ ___('settings.enter_your_footer_text') }}">
                                    @error('footer_text')
                                        <div id="validationServer04Feedback" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 mb-3">
                                    <label class="form-label" for="light_logo">{{ ___('settings.light_logo') }} </label>
                                    <br>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="img-thumbnail mb-10 ot-input full-logo setting-image"
                                            src="{{ @globalAsset(setting('light_logo'), '154x38.png') }}"
                                            alt="{{ __('light logo') }}">
                                    </div>

                                    {{-- File Uplode --}}
                                    <div class="ot_fileUploader left-side mb-3">
                                        <input class="form-control" type="text" placeholder="Browse Light Logo" readonly="" id="placeholder">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="btn btn-lg ot-btn-primary" for="fileBrouse">Browse</label>
                                            <input type="file" class="d-none form-control" name="light_logo" id="fileBrouse">
                                        </button>
                                    </div>
                                </div>
                                <!--White Logo End -->
                                <!--Black Logo Start -->
                                <div class="col-12 col-md-6 col-xl-6 col-lg-6 ">
                                    <label class="form-label" for="dark_logo">{{ ___('settings.dark_logo') }} </label>
                                    <br>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="img-thumbnail mb-10 ot-input full-logo setting-image"
                                            src="{{ @globalAsset(setting('dark_logo'), '154x38.png') }}"
                                            alt="{{ __('dark logo') }}">
                                    </div>
                                    {{-- File Uplode --}}
                                    <div class="ot_fileUploader left-side mb-3">
                                        <input class="form-control" type="text" placeholder="Browse Dark logo" readonly="" id="placeholder2">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="btn btn-lg ot-btn-primary" for="fileBrouse2">Browse</label>
                                            <input type="file" class="d-none form-control" name="dark_logo" id="fileBrouse2">
                                        </button>
                                    </div>
                                </div>
                                <!--Black Logo End -->
                                <div class="col-12">
                                    <div class="">
                                        <div class="row align-items-end">
                                            <!--Favicon Start -->
                                            <div class="col-md-6 favicon-uploader">
                                                <div class="d-flex flex-column">
                                                    <label class="form-label"
                                                        for="favicon">{{ ___('settings.favicon') }}</label>
                                                    <br>
                                                    <div class="d-flex align-items-center gap-3 justify-content-center">
                                                        <img class="img-thumbnail mb-10 ot-input full-logo setting-image"
                                                            src="{{ @globalAsset(setting('favicon'), '38x38.png') }}"
                                                            alt="{{ __('favicon') }}">
                                                    </div>
                                                    <div class="ot_fileUploader left-side mb-3">
                                                        <input class="form-control" type="text" placeholder="Browse favicon" readonly="" id="placeholder3">
                                                        <button class="primary-btn-small-input" type="button">
                                                            <label class="btn btn-lg ot-btn-primary" for="fileBrouse3">Browse</label>
                                                            <input type="file" class="d-none form-control" name="favicon" id="fileBrouse3">
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Favicon End -->
                                            <!-- Default Langauge Start-->
                                            <div class="col-md-6 default-langauge">
                                                <div class="d-flex flex-column">
                                                    <label for="default langauge"
                                                        class="form-label">{{ ___('settings.Default Langauge') }} <span
                                                            class="fillable">*</span></label>
                                                    <select name="default_langauge" id="defaultlangaugeId"
                                                        class="form-select ot-input flag_icon_list @error('default_langauge') is-invalid @enderror">
                                                        <option value="">{{ ___('settings.Default langauge') }}
                                                        </option>
                                                        @foreach ($data['languages'] as $row)
                                                            <option value="{{ $row->code }}"
                                                                data-icon="{{ $row->icon_class }}"
                                                                {{ Setting('default_langauge') == $row->code ? 'selected' : '' }}>
                                                                {{ $row->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Default Langauge End-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-3">
                            <!-- Update Button Start-->
                            <div class="text-end">
                                @if (hasPermission('general_settings_update'))
                                    <button class="btn btn-lg ot-btn-primary"><span><i class="fa-solid fa-save"></i>
                                        </span>{{ ___('common.update') }}</button>
                                @endif
                            </div>
                            <!-- Update Button End-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
