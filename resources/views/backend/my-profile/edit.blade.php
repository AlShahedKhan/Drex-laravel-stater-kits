@extends('backend.master')

@section('title')
    {{ @$data['title'] }}
@endsection
@section('content')
    <div class="page-content">
        <!-- profile content start -->
        <div class="profile-content">
            <div class="d-flex flex-column flex-lg-row gap-4 gap-lg-0">
                <!-- profile menu mobile start -->
                <div class="profile-menu-mobile">
                    <button class="btn-menu-mobile" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasWithBothOptionsMenuMobile"
                        aria-controls="offcanvasWithBothOptionsMenuMobile">
                        <span class="icon"><i class="fa-solid fa-bars"></i></span>
                    </button>

                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                        id="offcanvasWithBothOptionsMenuMobile">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                <span class="icon"><i class="fa-solid fa-xmark"></i></span>
                            </button>
                        </div>
                        <div class="offcanvas-body">
                            <!-- profile menu start -->
                            <div class="profile-menu">
                                <!-- profile menu head start -->
                                <div class="profile-menu-head">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img class="img-fluid rounded-circle"
                                                src="{{ @globalAsset(Auth::user()->image->path) }}"
                                                alt="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="body">
                                                <h2 class="title">{{ __('Robert_Downey') }}</h2>
                                                <p class="paragraph">{{ __('UI/UX_Designer') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- profile menu head end -->

                                <!-- profile menu body start -->
                                <div class="profile-menu-body">
                                    <nav>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page"
                                                    href="./profile.html">{{ ___('common.my_profile') }}</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="./profile-attendance.html">{{ ___('common.update_password') }}</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- profile menu body end -->
                            </div>
                            <!-- profile menu end -->
                        </div>
                    </div>
                </div>
                <!-- profile menu mobile end -->

                <!-- profile menu start -->
                <div class="profile-menu">
                    <!-- profile menu head start -->
                    <div class="profile-menu-head">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <img class="img-fluid rounded-circle" src="{{ @globalAsset(Auth::user()->image->path) }}"
                                    alt="{{ Auth::user()->name }}">
                            </div>
                            <div class="flex-grow-1">
                                <div class="body">
                                    <h2 class="title">{{ Auth::user()->name }}</h2>
                                    <p class="paragraph">{{ Auth::user()->role->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- profile menu head end -->

                    <!-- profile menu body start -->
                    <div class="profile-menu-body">
                        <nav>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"
                                        href="{{ route('my.profile') }}">{{ ___('common.my_profile') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('passwordUpdate') }}">{{ ___('common.update_password') }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- profile menu body end -->
                </div>
                <!-- profile menu end -->

                <!-- profile body start -->
                <div class="profile-body">

                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h2 class="title">{{ ___('common.edit_my_profile') }}</h2>
                    </div>

                    <!-- profile body form start -->
                    <div class="profile-body-form">

                        <form action="{{ route('my.profile.update') }}" enctype="multipart/form-data" method="post"
                            id="visitForm">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3 mt-3">
                                <label class="form-label" for="image">{{ ___('common.image_') }} </label>
                                <div class="col-md-12">
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        @if (!blank(@Auth::user()->image))
                                                <img class="img-thumbnail ot-input-image-preview mb-3"  src="{{ @globalAsset(Auth::user()->image->path) }}"
                                                    alt="{{ Auth::user()->name }}">
                                        @else
                                            <img class="img-thumbnail ot-input-image-preview mb-3"
                                                src="{{ asset('backend/uploads/default-images/default-1.jpeg') }}"
                                                alt="{{ Auth::user()->name }}">
                                        @endif
                                    </div>
                                    {{-- File Uplode --}}
                                    <div class="ot_fileUploader left-side mb-3">
                                        <input class="form-control" type="text" placeholder="browse" readonly="" id="placeholder">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="btn btn-lg ot-btn-primary" for="fileBrouse">Browse</label>
                                            <input type="file" class="d-none form-control" name="image" id="fileBrouse">
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3 mt-3">
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <label for="inputname" class="form-label">{{ ___('common.name') }} <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input name="name" type="text"
                                                class="form-control ot-input @error('name') is-invalid @enderror"
                                                value="{{ Auth::user()->name }}"
                                                placeholder="{{ ___('common.robert_downey_jr.') }}" />
                                            @error('name')
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputname"
                                            class="form-label">{{ ___('common.date_of_birth') }}</label>
                                        <div class="col-sm-12">
                                            <input name="date_of_birth" type="date"
                                                class="form-control ot-input @error('date_of_birth') is-invalid @enderror""
                                                value="{{ Auth::user()->date_of_birth }}" />
                                            @error('date_of_birth')
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="inputname" class="form-label">{{ ___('common.phone') }} <span
                                                class="text-danger">*</span></label>
                                        <div class="col-sm-12">
                                            <input name="phone" type="text"
                                                class="form-control ot-input @error('phone') is-invalid @enderror""
                                                placeholder="+880 (249) 897 632" value="{{ Auth::user()->phone }}" />
                                            @error('phone')
                                                <div id="validationServer04Feedback" class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mt-3">
                                    <div class="text-end">
                                        <button class="btn btn-lg ot-btn-primary"><span><i class="fa-solid fa-save"></i>
                                            </span>{{ __('Update') }} </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- profile body form end -->
            </div>
            <!-- profile body end -->
        </div>
    </div>
@endsection
