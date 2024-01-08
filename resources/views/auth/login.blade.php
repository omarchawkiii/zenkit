@extends('layouts.app_login')
@section('title') {{ __('message.connexion')}}  @endsection
@section('content')

<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
            <div class="w-100">
                <div class="d-flex flex-column h-100 py-0 py-xl-4">

                    <div class="text-center mb-5">
                        <a href="index.html">
                            <span class="logo-lg">
                                <img src="{{asset('/assets/images/logo-dark.png')}}" alt="" >
                            </span>
                        </a>
                    </div>
                    <div class="card my-auto overflow-hidden">
                            <div class="row g-0">
                                <div class="col-lg-6">
                                    <div class="p-lg-5 p-4">
                                        <div class="text-center">
                                            <h5 class="mb-0">{{ __('authtrad.Welcome Back !')}}</h5>
                                            <p class="text-muted mt-2">{{ __('authtrad.Sign in to continue to Invoika.')}}</p>
                                        </div>

                                        <div class="mt-4">
                                            <form action="{{ route('login') }}" class="auth-input" method="POST">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="email" class="form-label">{{ __('authtrad.Email Address') }}</label>
                                                    <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" name="email" aria-describedby="emailHelp"  >
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="mb-2">
                                                    <label for="password" class="form-label">{{ __('authtrad.Password') }}</label>
                                                    <input  class="form-control @error('password') is-invalid @enderror" name="password"  id="password" type="password" >
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>


                                                <div class="mt-2">
                                                    <button class="btn btn-primary w-100" type="submit">{{ __('authtrad.Log In') }}</button>
                                                </div>

                                                <div class="mt-4 text-center d-none">
                                                    <div class="signin-other-title">
                                                        <h5 class="fs-15 mb-3 title">{{ __('authtrad.Sign in with') }}</h5>
                                                    </div>

                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void()" class="social-list-item bg-primary text-white border-primary">
                                                                <i class="mdi mdi-facebook"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                                                                <i class="mdi mdi-twitter"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="javascript:void()" class="social-list-item bg-danger text-white border-danger">
                                                                <i class="mdi mdi-google"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </form>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="d-flex h-100 bg-auth align-items-end">
                                        <div class="p-lg-5 p-4">
                                            <div class="bg-overlay bg-primary"></div>
                                            <div class="p-0 p-sm-4 px-xl-0 py-5">
                                                <div id="reviewcarouselIndicators" class="carousel slide auth-carousel" data-bs-ride="carousel">
                                                    <div class="carousel-indicators carousel-indicators-rounded">
                                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
                                                        <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>

                                                    </div>


                                                </div>
                                                <!-- end review carousel -->
                                            </div>
                                        </div>
                                    </div>
                                </div>


                        </div>
                    </div>
                    <!-- end card -->


                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->

      </div>



@endsection
