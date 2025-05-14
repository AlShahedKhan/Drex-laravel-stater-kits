@extends('backend.auth.master')

@section('title')
    {{ $data['title'] }}
@endsection

@section('content')
    <div
        class="col-md-6 form-wrapper col-custom-height p-0 bg-white d-flex justify-content-center align-items-center flex-column">
        <div class="form-content d-flex justify-content-center align-items-start flex-column">
            <!-- Start With form heading  -->
            <div class="form-heading-text mb-40">
                <h1 class="title">{{ ___('common.login') }}</h1>
                <p class="text">{{ ___('common.welcome_back_please_login_to_your_account') }}</p>
            </div>
            <!-- End form heading -->
            <!-- Start With form -->
            <form action="{{ route('login.auth') }}" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                @csrf
                <!-- username input field  -->
                <div class="input-field-focus">
                    <label for="username">{{ ___('common.email') }} <sup>*</sup> </label><br>
                    <input name="email" type="email"
                        class="form-control ot-password @error('email') is-invalid @enderror"
                        placeholder="{{ ___('common.enter_your_email') }}">
                    @error('email')
                        <p class="error-text invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <!-- password input field  -->

                <div class="input-field-focus">
                    <label for="password">{{ ___('common.password') }} <sup>*</sup> </label><br>
                    <input name="password" class="form-control ot-password @error('password') is-invalid @enderror"
                        type="password" placeholder="******************">
                    @error('password')
                        <p class="error-text invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>


                <!-- password input field  -->
                @if (setting('recaptcha_status'))
                    <div class="input-field-focus">
                        <div class="form-group {{ $errors->has('g-recaptcha-response') ? 'is-invalid' : '' }}">
                            <label
                                class="control-label {{ $errors->has('g-recaptcha-response') ? 'is-invalid' : '' }}">{{ ___('common.captcha') }}
                                <sup>*</sup></label>
                            {!! app('captcha')->display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <p class="error-text invalid-feedback">{{ $errors->first('g-recaptcha-response') }}</p>
                            @endif
                        </div>
                    </div>
                @endif
                <!-- Remember Me and forget password section start -->

                <div class="d-flex justify-content-between w-100 mb-36">
                    <!-- Remember Me input field  -->
                    <div class="input-check-radio">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input mt-0 mr-4" type="checkbox" name="rememberMe" id="rememberMe">
                            <label for="rememberMe">{{ ___('common.remember_me') }}</label>
                        </div>
                    </div>
                    <!-- Forget Password link  -->
                    <div>
                        <a class="fogotPassword"
                            href="{{ route('forgot-password') }}">{{ ___('common.forgot_password') }}?</a>
                    </div>
                </div>
                <!-- Remember Me and forget password section end -->
                <!-- submit button  -->
                <button type="submit" class="submit-button pv-14" value="Login">{{ ___('common.login') }}</button>
            </form>
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
            <!-- End form -->
            <!-- text and signup link here  -->
            <p class="text-font mb-20">{{ ___('common.dont_have_an_account') }}
                <a class="link-text ml-1" href="{{ route('register') }}">{{ ___('common.create_an_account') }}</a>
            </p>
        </div>
    </div>
@endsection
@section('script')
    {!! NoCaptcha::renderJs() !!}
@endsection
