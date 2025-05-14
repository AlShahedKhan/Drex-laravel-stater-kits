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
                <h1 class="title">{{ ___('common.create_account') }}</h1>
                <p class="text">
                    {{ ___('common.please_sign_up_to_your_personal_account_if_you_want_to_use_all_our_premium_products') }}
                </p>
            </div>
            <!-- End form heading -->
            <!-- Start With form -->
            <form action="{{ route('register') }}" method="post"
                class="form d-flex justify-content-center align-items-start flex-column">
                @csrf
                <div class="input-field-focus">
                    <label for="username">{{ ___('common.name') }} <sup>*</sup> </label><br>
                    <input name="name" type="text"
                        class="form-control ot-password @error('name') is-invalid @enderror"
                        placeholder="{{ ___('common.enter_your_name') }}" value="{{ old('name') }}">
                    @error('name')
                        <p class="error-text invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <!-- username input field  -->
                <div class="input-field-focus">
                    <label for="username">{{ ___('common.email') }} <sup>*</sup> </label><br>
                    <input name="email" type="email"
                        class="form-control ot-password @error('email') is-invalid @enderror"
                        placeholder="{{ __('Enter your email') }}" value="{{ old('email') }}">
                    @error('email')
                        <p class="error-text invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field-focus">
                    <label for="username">{{ ___('common.phone') }} </label><br>
                    <input name="phone" type="text"
                        class="form-control ot-password @error('phone') is-invalid @enderror"
                        placeholder="{{ __('Enter your email') }}" value="{{ old('phone') }}">
                    @error('phone')
                        <p class="error-text invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field-focus">
                        <label class="form-label">{{ ___('common.date_of_birth') }} <sup>*</sup></label>
                        <input type="date" name="date_of_birth"
                            class="form-control ot-input @error('date_of_birth') is-invalid @enderror" />
                        @error('date_of_birth')
                            <p class="error-text invalid-feedback">{{ $message }}</p>
                        @enderror
                </div>


                <label class="form-label">{{ ___('common.gender') }} <sup>*</sup></label>
                <div class="d-flex align-items-center input-check-radio mb-20 gap-4">
                    <div class="form-check d-flex align-items-center mt-6 gap-2">
                        <input class="form-check-input" type="radio" id="flexRadioDefault1" name="gender"
                            value="{{ App\Enums\Gender::MALE }}" checked />
                        <label class="form-check-label mt-1" for="flexRadioDefault1">{{ ___('common.male') }}</label>
                    </div>
                    <div class="form-check d-flex align-items-center mt-6 gap-2">
                        <input class="form-check-input" type="radio" id="flexRadioDefault2" name="gender"
                            value="{{ App\Enums\Gender::FEMALE }}" />
                        <label class="form-check-label mt-1" for="flexRadioDefault2">{{ ___('common.female') }}</label>
                    </div>
                    <div class="form-check d-flex align-items-center mt-6 gap-2">

                        <input class="form-check-input" type="radio" id="flexRadioDefault3" name="gender"
                            value="{{ App\Enums\Gender::OTHERS }}" />
                        <label class="form-check-label mt-1" for="flexRadioDefault3">{{ ___('common.others') }}</label>
                    </div>
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
                    <input name="confirm_password"
                        class="form-control ot-password @error('confirm_password') is-invalid @enderror" type="password"
                        placeholder="******************">
                    @error('confirm_password')
                        <p class="error-text invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <!-- Remember Me and forget password section start -->
                <div class="d-flex justify-content-between w-100 mb-36">
                    <!-- Remember Me input field  -->
                    <div class="input-check-radio">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input mt-0 mr-4" type="checkbox" name="agree_with" id="agree_with">
                            <label for="rememberMe">{{ ___('common.i_agree_to_privacy_policy_&_terms') }}</label>
                        </div>
                    </div>
                </div>
                <!-- Remember Me and forget password section end -->
                <!-- submit button  -->
                <button type="submit" class="submit-button pv-14" value="Login">{{ ___('common.register') }}</button>
            </form>
            <!-- End form -->
            <!-- text and signup link here  -->
            <p class="text-font">{{ ___('common.already_have_an_account') }} <a class="link-text"
                    href="{{ route('login') }}">{{ ___('common.login') }}</a></p>
        </div>
    </div>
@endsection
