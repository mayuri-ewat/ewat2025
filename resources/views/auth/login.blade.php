@extends('layouts.apppartial', ['class' => 'main-content-has-bg'])
@section('content')
<link rel="stylesheet" href="{{asset('modernfrontend/css/icofont.min.css')}}">
  <!-- Owl-Carosal-Style-link -->
  <link rel="stylesheet" href="{{asset('modernfrontend/css/owl.carousel.min.css')}}">
  <!-- Bootstrap-Style-link -->
  <link rel="stylesheet" href="{{asset('modernfrontend/css/bootstrap.min.css')}}">
  <!-- Aos-Style-link -->
  <link rel="stylesheet" href="{{asset('modernfrontend/css/aos.css')}}">
  <!-- Coustome-Style-link -->									
  <link rel="stylesheet" href="{{asset('modernfrontend/css/style.css')}}">
  <!-- Responsive-Style-link -->
  <link rel="stylesheet" href="{{asset('modernfrontend/css/responsive.css')}}">		
  <!-- Favicon -->						
  <link rel="shortcut icon" href="{{asset('images/site-fevicon.png')}}" type="image/x-icon">
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
              	<div class="section_title">
              		<h2> Welcome to <span>Ewat</span> </h2>
              		<p>Fill all fields so we can get some info about you. <br> We'll never send you spam</p>
            	</div>
            
            
            <x-lw.form id="lwLoginForm" data-secured="true" :action="route('auth.login.process')">
                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <input id="lwLoginEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __tr('Email or Username or Mobile Number') }}" type="text" name="email" value="" required autofocus autocomplete="email">

                </div>
                <!-- <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">

                   <input id="lwLoginPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __tr('Password') }}" type="password" value="" required autocomplete="current-password">
                   <span class="toggle-password" onclick="togglePassword()" style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;">
                      <i class="icofont-eye" id="togglePasswordIcon"></i>
                  </span>
                </div> -->
                <div class="form-group position-relative{{ $errors->has('password') ? ' has-danger' : '' }}">
    <input id="lwLoginPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __tr('Password') }}" type="password" value="" required autocomplete="current-password">
    <span class="toggle-password" onclick="togglePassword()" style="position: absolute; top: 50%; right: 15px; transform: translateY(-50%); cursor: pointer;">
        <i class="icofont-eye" id="togglePasswordIcon"></i>
    </span>
</div>

                <script>
                      function togglePassword() {
                        const passwordField = document.getElementById('lwLoginPassword');
                        const toggleIcon = document.getElementById('togglePasswordIcon');

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

              
              <div class="custom-control custom-control-alternative custom-checkbox">
                            @if (Route::has('auth.password.request'))
                            <a href="{{ route('auth.password.request') }}" class="text-light float-right">
                                <small style="color: black;font-size: 16px;">{{ __tr('Forgot password?') }}</small>
                            </a>
                            @endif
                        </div>
              
                <div class="form-group">
                  <button class="btn puprple_btn" type="submit">SIGN IN</button>
                </div>
             </x-lw.form>
              
              
              <p class="or_block">
              <span>OR</span>
            </p>
           <div class="or_option">
              <p>Sign In with your work email</p>
              @if(getAppSettings('allow_google_login'))
                  <a href="<?= route('login.google') ?>" class="btn google_btn">
                  <img src="{{asset('images/google.png') }}" alt="image"> 
                  <span>Sign Up with Google</span> </a>
              @endif
              @if(getAppSettings('allow_facebook_login'))
                  <a href="<?= route('login.facebook') ?>" class="btn google_btn">
                  <img src="{{asset('images/facebook.png') }}" alt="image" class="fasbook_image"> 
                  <span>Sign Up with facebook</span> </a>
              @endif
              <p>Don't have an account? <a href="{{ route('auth.register') }}">Sign Up here</a></p>
           </div>
            </div> 	
          </section>
      </div>
  	</div>
</div>
    

<script src="{{asset('modernfrontend/js/jquery.js') }}"></script>
  <!-- bootstrap-js-Link -->
  <script src="{{asset('modernfrontend/js/bootstrap.min.js') }}"></script>
  <!-- aos-js-Link -->
  <script src="{{asset('modernfrontend/js/aos.js') }}"></script>
  <!-- main-js-Link -->
  <script src="{{asset('modernfrontend/js/main.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
@endsection