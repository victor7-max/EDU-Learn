@extends('layouts.app')
@section('content')
<!-- Page Banner Start -->
<div class="section page-banner">

    <img class="shape-1 animation-round" src="assets/images/shape/shape-8.png" alt="Shape">

    <img class="shape-2" src="assets/images/shape/shape-23.png" alt="Shape">

    <div class="container">
        <!-- Page Banner Start -->
        <div class="page-banner-content">
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a></li>
                <li class="active">Login</li>
            </ul>
            <h2 class="title">Login <span>Form</span></h2>
        </div>
        <!-- Page Banner End -->
    </div>

    <!-- Shape Icon Box Start -->
    <div class="shape-icon-box">

        <img class="icon-shape-1 animation-left" src="assets/images/shape/shape-5.png" alt="Shape">

        <div class="box-content">
            <div class="box-wrapper">
                <i class="flaticon-badge"></i>
            </div>
        </div>

        <img class="icon-shape-2" src="assets/images/shape/shape-6.png" alt="Shape">

    </div>
    <!-- Shape Icon Box End -->

    <img class="shape-3" src="assets/images/shape/shape-24.png" alt="Shape">

    <img class="shape-author" src="assets/images/author/author-11.jpg" alt="Shape">

</div>
<!-- Page Banner End -->

<!-- Register & Login Start -->
<div class="section section-padding">
    <div class="container">

        <!-- Register & Login Wrapper Start -->
        <div class="register-login-wrapper">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <!-- Register & Login Images Start -->
                    <div class="register-login-images">
                        <div class="shape-1">
                            <img src="assets/images/shape/shape-26.png" alt="Shape">
                        </div>


                        <div class="images">
                            <img src="assets/images/register-login.png" alt="Register Login">
                        </div>
                    </div>
                    <!-- Register & Login Images End -->

                </div>
                <div class="col-lg-6">

                    <!-- Register & Login Form Start -->
                    <div class="register-login-form">
                        <h3 class="title">Login <span>Now</span></h3>

                        <div class="form-wrapper">
                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="email" placeholder="Username or Email" name="email" required
                                        autofocus />
                                </div>
                                <!-- Single Form End -->
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <input type="password" placeholder="Password" name="password" required
                                        autocomplete="current-password" />
                                </div>
                                <!-- Single Form End -->
                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                            name="remember">
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                                <!-- Single Form Start -->
                                <div class="single-form">
                                    <button class="btn btn-primary btn-hover-dark w-100">Login</button>
                                    <a class="btn btn-secondary btn-outline w-100" href="#">Login with Google</a>
                                </div>
                                <!-- Single Form End -->

                                <!-- Forgot pasword -->
                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                    @endif
                                    <!--End forgot password -->

                                    <!--If not registered -->
                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                            href="{{ route('register') }}">
                                            {{ __('Not registered?') }}
                                        </a>
                            </form>
                        </div>
                    </div>
                    <!-- Register & Login Form End -->

                </div>
            </div>
        </div>
        <!-- Register & Login Wrapper End -->

    </div>
</div>
<!-- Register & Login End -->

<!-- Download App Start -->
<div class="section section-padding download-section">

    <div class="app-shape-1"></div>
    <div class="app-shape-2"></div>
    <div class="app-shape-3"></div>
    <div class="app-shape-4"></div>

    <div class="container">

        <!-- Download App Wrapper Start -->
        <div class="download-app-wrapper mt-n6">

            <!-- Section Title Start -->
            <div class="section-title section-title-white">
                <h5 class="sub-title">Ready to start?</h5>
                <h2 class="main-title">Download our mobile app. for easy to start your course.</h2>
            </div>
            <!-- Section Title End -->

            <img class="shape-1 animation-right" src="assets/images/shape/shape-14.png" alt="Shape">

            <!-- Download App Button End -->
            <div class="download-app-btn">
                <ul class="app-btn">
                    <li><a href="#"><img src="assets/images/google-play.png" alt="Google Play"></a></li>
                    <li><a href="#"><img src="assets/images/app-store.png" alt="App Store"></a></li>
                </ul>
            </div>
            <!-- Download App Button End -->

        </div>
        <!-- Download App Wrapper End -->

    </div>
</div>
<!-- Download App End -->

@endsection
