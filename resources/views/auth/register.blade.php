@extends('layouts.apppartial', ['class' => 'main-content-has-bg'])

@section('content')
<!-- icofont-css-link -->
    <link rel="stylesheet" href="{{ asset('modernfrontend/css/icofont.min.css') }}">
    <!-- Bootstrap-Style-link -->
    <link rel="stylesheet" href="{{ asset('modernfrontend/css/bootstrap.min.css') }}">
    <!-- Aos-Style-link -->
    <link rel="stylesheet" href="{{ asset('modernfrontend/css/aos.css') }}">
    <!-- Custom-Style-link -->
    <link rel="stylesheet" href="{{ asset('modernfrontend/css/style.css') }}">
    <!-- Responsive-Style-link -->
    <link rel="stylesheet" href="{{ asset('modernfrontend/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <style>
    .toggle-password i {
        font-size: 18px;
        color: #666;
    }
    </style>

<div class="page_wrapper">
     <!-- Preloader -->
    <div id="preloader">
      <div id="loader"></div>
    </div> 
  	
  	<div class="full_bg">
      <div class="container">
          <section class="signup_section">
            	<div class="top_part">
            		<a href="https://ewat.in" class="back_btn"><i class="icofont-arrow-left"></i> Back</a>
            		<a class="navbar-brand" href="#">
              		<img src="{{asset('images/ewat-white.png') }}" alt="image">
            		</a>
          		</div>
            	
            <div class="signup_form">
              	
            
            		@php
                    $formSignUpRoute = route('auth.register.process');
                    if (getAppSettings('activation_required_for_new_user')) {
                    $formSignUpRoute = route('activation_required.auth.register.process');
                    }
                    @endphp
            <x-lw.form :action="$formSignUpRoute" data-secured="true">
                            <div class="section_title">
                                <h2> <span>Create</span> an account</h2>
                                <p>Fill all fields so we can get some info about you. <br> We'll never send you spam</p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="{{ __tr('Company Name') }}"
                                    type="text" name="vendor_title" value="{{ old('vendor_title') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="{{ __tr('Username') }}" type="text"
                                    name="username" value="{{ old('username') }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="{{ __tr('First Name') }}" type="text"
                                    name="first_name" value="{{ old('first_name') }}" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="{{ __tr('Last Name') }}" type="text"
                                    name="last_name" value="{{ old('last_name') }}" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="{{ __tr('Mobile Number') }}"
                                    type="text" name="mobile_number" value="{{ old('mobile_number') }}" required>
                              <h5><span class="text-light" style="color: #00000091 !important;font-size: 15px;">
                {{__tr("Mobile number should be with country code without 0 or +")}}</span></h5>
                            </div>
              
                            <div class="form-group">
                                <input class="form-control" placeholder="{{ __tr('Email') }}" type="email"
                                    name="email" value="{{ old('email') }}" required>
                            </div>
                            <!-- <div class="form-group">
                                <input class="form-control" placeholder="{{ __tr('Password') }}" type="password"
                                    name="password" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="{{ __tr('Confirm Password') }}"
                                    type="password" name="password_confirmation" required>
                            </div> -->
                            <!-- Password Field -->
                            <div class="form-group position-relative">
                                <input id="registerPassword" class="form-control" placeholder="{{ __tr('Password') }}" type="password"
                                    name="password" required style="padding-right: 40px;">
                                <span class="toggle-password" onclick="togglePassword('registerPassword', 'togglePasswordIcon1')"
                                    style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;">
                                    <i class="icofont-eye" id="togglePasswordIcon1"></i>
                                </span>
                            </div>
                            <!-- Confirm Password Field -->
                            <div class="form-group position-relative">
                                <input id="confirmPassword" class="form-control" placeholder="{{ __tr('Confirm Password') }}"
                                    type="password" name="password_confirmation" required style="padding-right: 40px;">
                                <span class="toggle-password" onclick="togglePassword('confirmPassword', 'togglePasswordIcon2')"
                                    style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;">
                                    <i class="icofont-eye" id="togglePasswordIcon2"></i>
                                </span>
                            </div>
                            
              				@if (getAppSettings('user_terms') or getAppSettings('vendor_terms') or getAppSettings('privacy_policy'))
                        <div class="row my-4">
                            <div class="col-12">
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" name="terms_and_conditions" id="itemsAccept"
                                        type="checkbox">
                                    <label class="custom-control-label" for="itemsAccept">
                                        <span class="text-white" style="color: #000 !important;">{{ __tr('I agree with the') }}
                                            @if (getAppSettings('user_terms'))
                                            <a class="text-success" href="{{ route('app.terms_and_policies', [
                                                'contentName' => 'user_terms'
                                            ]) }}">{{ __tr('User Terms And Conditions') }}</a>,
                                            @endif
                                            @if (getAppSettings('vendor_terms'))
                                            <a class="text-success" href="{{ route('app.terms_and_policies', [
                                                'contentName' => 'vendor_terms'
                                            ]) }}">{{ __tr('Vendor Terms And Conditions') }}</a>,
                                            @endif
                                            @if (getAppSettings('privacy_policy'))
                                            <a class="text-success" href="{{ route('app.terms_and_policies', [
                                                'contentName' => 'privacy_policy'
                                            ]) }}">{{
                                                __tr('Privacy Policy')
                                                }}</a>
                                            @endif
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        @endif
                            <div class="form-group">
                                <button class="btn puprple_btn" type="submit">SIGN UP</button>
                            </div>
                        </x-lw.form>
              <p class="or_block">
              <span>OR</span>
            </p>
           <div class="or_option">
               <p>Sign up with your work email</p>
                @if (getAppSettings('allow_google_login'))
                    <a href="<?= route('login.google') ?>" class="btn google_btn">
                        <img src="{{ asset('images/google.png') }}" alt="image">
                        <span>Sign Up with Google</span> </a>
                @endif
                @if (getAppSettings('allow_facebook_login'))
                    <a href="<?= route('login.facebook') ?>" class="btn google_btn">
                        <img src="{{ asset('images/facebook.png') }}" alt="image" class="fasbook_image">
                        <span>Sign Up with facebook</span> </a>
                @endif
                <p>Already have an account? <a href="{{ route('auth.login') }}">Sign In here</a></p>
           </div>
            </div> 	
          </section>
      </div>
  	</div>
</div>



<!-- Jquery-js-Link -->
    <script src="{{ asset('modernfrontend/js/jquery.js') }}"></script>
    <!-- bootstrap-js-Link -->
    <script src="{{ asset('modernfrontend/js/bootstrap.min.js') }}"></script>
    <!-- aos-js-Link -->
    <script src="{{ asset('modernfrontend/js/aos.js') }}"></script>
    <!-- main-js-Link -->
    <script src="{{ asset('modernfrontend/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function togglePassword(inputId, iconId) {
        const passwordField = document.getElementById(inputId);
        const toggleIcon = document.getElementById(iconId);

        if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.classList.remove('icofont-eye');
        toggleIcon.classList.add('icofont-eye-blocked');
        } else {
        passwordField.type = 'password';
        toggleIcon.classList.remove('icofont-eye-blocked');
        toggleIcon.classList.add('icofont-eye');
        }
    }
</script>
@endsection