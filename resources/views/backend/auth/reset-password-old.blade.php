@extends('backend.auth.master')

@section('title')
{{ $data['title'] }}
@endsection

@section('content')

<div
    class="col-md-6 form-wrapper col-custom-height p-0 bg-white d-flex justify-content-center align-items-center flex-column">
    <div class="form-content d-flex justify-content-center align-items-start flex-column">
        <!-- Start With form heading  -->
        <div class="form-heading-text">
            <h1 class="title">{{ ___('common.reset_passowrd') }}</h1>
            <p class="text">{{ ___('common.welcome_back_please_reset_your_password') }}</p>
        </div>
        <!-- End form heading -->
        <!-- Start With form -->
        <form action="{{ route('reset.password') }}" method="post" class="form d-flex justify-content-center align-items-start flex-column">
       @csrf
       <input type="hidden" name="token" value="{{ $data['token'] }}">
            <!-- username input field  -->
            <div class="input-field-focus">
                <label for="username">{{ ___('common.email') }} <sup>*</sup> </label><br>
                <input name="email" type="email" class="form-control ot-password @error('email') is-invalid @enderror" placeholder="{{ ___('common.Enter your email') }}"
                           value="{{$data['email']}}">
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
            <div class="input-field-focus">
                <label for="password">{{ ___('common.confirm_password') }} <sup>*</sup> </label><br>
                <input name="confirm_password" class="form-control ot-password @error('confirm_password') is-invalid @enderror"
                    type="password" placeholder="******************">
                @error('confirm_password')
                    <p class="error-text invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <!-- submit button  -->
            <button type="submit" class="submit-button pv-14" value="Login">{{ ___('common.reset') }}</button>
        </form>
        <!-- End form -->
        <!-- text and signup link here  -->
        <p class="text-font"><a class="link-text" href="{{ route('register') }}">{{ ___('common.back_to_login') }}</a></p>
       
    </div>
</div>

@endsection
