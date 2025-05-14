@extends('backend.auth.master')

@section('title')
    {{ $data['title'] }}
@endsection

@section('content')
    <!-- form heading  -->
    <div class="form-heading mb-40">
        <h1 class="title mb-8">{{ ___('common.create_account') }}</h1>
        <p class="subtitle mb-0"> {{ ___('common.please_sign_up_to_your_personal_account_if_you_want_to_use_all_our_premium_products') }}</p>
    </div>
    <!-- Start With form -->

    <form action="{{ route('register') }}" method="post" class="auth-form d-flex justify-content-center align-items-start flex-column">
        @csrf
        <!-- username input field  -->
        <div class="input-field-group mb-20">
            <label for="username">{{ ___('common.name') }} <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field">
                <input type="text" name="name" id="username" class="ot-input @error('name') is-invalid @enderror" placeholder="{{ ___('common.enter_your_name') }}" value="{{ old('name') }}" />
                <img src="{{ asset('backend') }}/assets/images/icons/username-cus.svg" alt="">
                @error('name')
                        <p class="input-error error-danger invalid-feedback">{{ $message }}</p>
                    @enderror
            </div>
        </div>
        <div class="input-field-group mb-20">
            <label for="username">{{ ___('common.email') }} <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field">
                <input type="email" name="email" class="ot-input @error('email') is-invalid @enderror" id="username" placeholder="{{ ___('common.enter_your_email') }}" value="{{ old('email') }}" />
                <img src="{{ asset('backend') }}/assets/images/icons/email-cus.svg" alt="">
                @error('email')
                <p class="input-error error-danger invalid-feedback">{{ $message }}</p>
            @enderror
            </div>

        </div>
        <div class="input-field-group mb-20">
            <label for="username">{{ ___('common.phone') }} </label><br />
            <div class="custom-input-field">
                <input type="text" name="phone" class="ot-input @error('phone') is-invalid @enderror" id="username" placeholder="{{ ___('common.enter_your_phone') }}" value="{{ old('phone') }}" />
                <img src="{{ asset('backend') }}/assets/images/icons/phone.svg" alt="">
                @error('phone')
                <p class="input-error error-danger invalid-feedback">{{ $message }}</p>
            @enderror
            </div>

        </div>

        <div class="input-field-group mb-20">
            <label for="username">{{ ___('common.date_of_birth') }} <sup class="fillable">*</sup></label><br />
            <div class="custom-input-field">
                <input type="date" name="date_of_birth" class="ot-input @error('date_of_birth') is-invalid @enderror" id="username" placeholder="{{ ___('common.enter_your_date_of_birth') }}" value="{{ old('phone') }}" />
                <img src="{{ asset('backend') }}/assets/images/icons/calender.svg" alt="">
                @error('date_of_birth')
                <p class="input-error error-danger invalid-feedback">{{ $message }}</p>
            @enderror
            </div>

        </div>

        <label class="form-label">{{ ___('common.gender') }} <sup class="fillable">*</sup></label>
        <div class="remember-me d-flex align-items-center input-check-radio mb-20 gap-4">
            <div class="form-check d-flex align-items-center mt-6">
                <input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender"
                    value="{{ App\Enums\Gender::MALE }}" checked />
                <label for="flexRadioDefault1">{{ ___('common.male') }}</label>
            </div>
            <div class="form-check d-flex align-items-center mt-6 ">
                <input class="form-check-input" type="radio" id="flexRadioDefault2" name="gender"
                    value="{{ App\Enums\Gender::FEMALE }}" />
                <label for="flexRadioDefault2">{{ ___('common.female') }}</label>
            </div>
            <div class="form-check d-flex align-items-center mt-6 ">

                <input class="form-check-input" type="radio" id="flexRadioDefault3" name="gender"
                    value="{{ App\Enums\Gender::OTHERS }}" />
                <label for="flexRadioDefault3">{{ ___('common.others') }}</label>
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
        <div class="input-field-group mb-20">
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
        <!-- Remember Me and forget password section start -->
        <div class="d-flex justify-content-between w-100">
            <!-- Remember Me input field  -->
            <div class="remember-me input-check-radio">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="checkbox" name="agree_with" id="agree_with">
                    <label for="rememberMe">{{ ___('common.i_agree_to_privacy_policy_&_terms') }}</label>
                </div>
            </div>
        </div>
        <!-- Remember Me and forget password section end -->
        <!-- submit button  -->
        <button type="submit" class="submit-btn pv-16 mt-32 mb-20" value="Sign In">
            {{ ___('common.register') }}
        </button>
    </form>
    <!-- End form -->
    <p class="authenticate-now mb-0">
        {{ ___('common.already_have_an_account') }}
        <a class="link-text" href="{{ route('login') }}"> {{ ___('common.login') }}</a>
    </p>

@endsection
