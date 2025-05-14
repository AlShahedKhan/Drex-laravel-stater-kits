@extends('backend.auth.master')

@section('title')
    {{ $data['title'] }}
@endsection

@section('content')
    <!-- form heading  -->
    <div class="form-heading mb-40">
        <h1 class="title mb-8">{{ ___('common.reset_passowrd') }}</h1>
        <p class="subtitle mb-0">{{ ___('common.welcome_back_please_reset_your_password') }}</p>
    </div>
    <!-- Start With form -->

    <form action="{{ route('reset.password') }}" method="post" class="auth-form d-flex justify-content-center align-items-start flex-column">
        @csrf
        <input type="hidden" name="token" value="{{ $data['token'] }}">
        <!-- username input field  -->
        <div class="input-field-group mb-20">
            <label for="username">{{ ___('common.email') }} <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field">
                <input type="email" name="email" class="ot-input @error('email') is-invalid @enderror" id="username" placeholder="{{ ___('common.enter_your_email') }}" value="{{$data['email']}}" />
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
                <input type="password" name="password" class="ot-input @error('password') is-invalid @enderror" id="password" placeholder="******************" />
                <i class="lar la-eye"></i>
                <img src="{{ asset('backend') }}/assets/images/icons/lock-cus.svg" alt="">
                @error('password')
                        <p class="input-error error-danger invalid-feedback">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <!-- password input field  -->
        <div class="input-field-group">
            <label for="password">{{ ___('common.confirm_password') }} <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field password-input">
                <input type="password" name="confirm_password" id="confirm_password" class="ot-input @error('confirm_password') is-invalid @enderror" placeholder="******************" />
                <i class="lar la-eye"></i>
                <img src="{{ asset('backend') }}/assets/images/icons/lock-cus.svg" alt="">
                @error('confirm_password')
                        <p class="input-error error-danger invalid-feedback">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <!-- submit button  -->
        <button type="submit" class="submit-btn pv-16 mt-32 mb-20" value="Sign In">
            Sign In
        </button>
    </form>
    <!-- End form -->
    <p class="authenticate-now mb-0">
        <a class="link-text" href="{{ route('login') }}"> {{ ___('common.back_to_login') }}</a>
    </p>

@endsection
@section('script')
    {!! NoCaptcha::renderJs() !!}
@endsection
