@extends('backend.auth.master')

@section('title')
    {{ $data['title'] }}
@endsection

@section('content')
    <!-- form heading  -->
    <div class="form-heading mb-40">
        <h1 class="title mb-8">{{ ___('common.login') }}</h1>
        <p class="subtitle mb-0">{{ ___('common.welcome_back_please_login_to_your_account') }}</p>
    </div>
    <!-- Start With form -->

    <form action="{{ route('login.auth') }}" method="post"
        class="auth-form d-flex justify-content-center align-items-start flex-column">
        @csrf
        <!-- username input field  -->
        <div class="input-field-group mb-20">
            <label for="username">{{ ___('common.email') }} <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field">
                <input type="email" name="email" class="ot-input @error('email') is-invalid @enderror" id="username"
                    placeholder="{{ ___('common.enter_your_email') }}" />
                <img src="{{ asset('backend') }}/assets/images/icons/username-cus.svg" alt="">
                @error('email')
                    <p class="input-error error-danger invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

        </div>
        <!-- password input field  -->
        <div class="input-field-group mb-20">
            <label for="password">{{ ___('common.password') }} <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field password-input">
                <input type="password" name="password" class="ot-input @error('password') is-invalid @enderror"
                    id="password" placeholder="******************" />
                <i class="lar la-eye"></i>
                <img src="{{ asset('backend') }}/assets/images/icons/lock-cus.svg" alt="">
                @error('password')
                    <p class="input-error error-danger invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

        </div>
        <!-- password input field  -->
        @if (setting('recaptcha_status'))
            <div class="input-field-group">
                <div class="form-group {{ $errors->has('g-recaptcha-response') ? 'is-invalid' : '' }}">
                    <label
                        class="control-label {{ $errors->has('g-recaptcha-response') ? 'is-invalid' : '' }}">{{ ___('common.captcha') }}
                        <sup class="fillable">*</sup></label>
                    {!! app('captcha')->display() !!}
                    @if ($errors->has('g-recaptcha-response'))
                        <p class="input-error error-danger invalid-feedback">{{ $errors->first('g-recaptcha-response') }}
                        </p>
                    @endif
                </div>
            </div>
        @endif
        <!-- Remember Me and forget password section start -->
        <div class="d-flex justify-content-between align-items-center w-100 mt-20">
            <!-- Remember Me input field  -->
            <div class="remember-me input-check-radio">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" name="rememberMe" id="rememberMe" />
                    <label for="rememberMe">{{ ___('common.remember_me') }}</label>
                </div>
            </div>
            <!-- Forget Password link  -->
            <div>
                <a class="fogotPassword" href="{{ route('forgot-password') }}">{{ ___('common.forgot_password') }}</a>
            </div>
        </div>
        <!-- Remember Me and forget password section end -->

        <!-- submit button  -->
        <button type="submit" class="submit-btn pv-16 mt-32 mb-20" value="Sign In">
            {{ ___('common.login') }}
        </button>
    </form>

    <!-- End form -->
    @if (\Config::get('app.APP_DEMO'))
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('login.auth') }}" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                @csrf
                <input name="email" type="hidden" value="superadmin@onest.com">
                <input name="password" type="hidden" value="123456">
                <input name="g-recaptcha-response" type="hidden" value="123456">
                <button type="submit" class="submit-button submit-button-only-border pv-14"
                    value="Login">{{ ___('common.login_as_superadmin') }}</button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="{{ route('login.auth') }}" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                @csrf
                <input name="email" type="hidden" value="admin@onest.com">
                <input name="password" type="hidden" value="123456">
                <input name="g-recaptcha-response" type="hidden" value="123456">
                <button type="submit" class="submit-button submit-button-only-border pv-14"
                    value="Login">{{ ___('common.login_as_admin') }}</button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="{{ route('login.auth') }}" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                @csrf
                <input name="email" type="hidden" value="manager@onest.com">
                <input name="password" type="hidden" value="123456">
                <input name="g-recaptcha-response" type="hidden" value="123456">
                <button type="submit" class="submit-button submit-button-only-border pv-14"
                    value="Login">{{ ___('common.login_as_manager') }}</button>
            </form>
        </div>
        <div class="col-md-6">
            <form action="{{ route('login.auth') }}" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                @csrf
                <input name="email" type="hidden" value="user@onest.com">
                <input name="password" type="hidden" value="123456">
                <input name="g-recaptcha-response" type="hidden" value="123456">
                <button type="submit" class="submit-button submit-button-only-border pv-14"
                    value="Login">{{ ___('common.login_as_user') }}</button>
            </form>
        </div>
    </div>
    @endif

    <p class="authenticate-now mb-0">
        {{ ___('common.dont_have_an_account') }}
        <a class="link-text" href="{{ route('register') }}"> {{ ___('common.create_an_account') }}</a>
    </p>

@endsection
@section('script')
    {!! NoCaptcha::renderJs() !!}
@endsection
