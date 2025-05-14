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
            <h1 class="title">{{ ___('common.forgot_password') }}</h1>
            <p class="text">{{ ___('common.enter_your_phone_or_email_to_recover_your_password') }}</p>
        </div>
        <!-- End form heading -->
        <!-- Start With form -->
        <form action="{{ route('forgot.password') }}" method="post" class="form d-flex justify-content-center align-items-start flex-column">
       @csrf
            <!-- username input field  -->
            <div class="input-field-focus">
                <label for="username">{{ ___('common.email') }} <sup>*</sup> </label><br>
                <input name="email" type="email" class="form-control ot-password @error('email') is-invalid @enderror" placeholder="{{ ___('common.enter_your_email') }}"
                           value="{{old('email')}}">
                @error('email')
                    <p class="error-text invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <!-- Remember Me and forget password section end -->
            <!-- submit button  -->
            <button type="submit" class="submit-button pv-14" value="Login">{{ ___('common.send_link') }}</button>
        </form>
        <!-- End form -->
        <!-- text and signup link here  -->
        <p class="text-font"><a class="link-text" href="{{ route('login') }}">{{ ___('common.back_to_login') }}</a></p>       

    </div>
</div>

@endsection
