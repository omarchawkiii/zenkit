@extends('layouts.app_login')
@section('title') {{ __('message.register')}}  @endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-11">
        <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
            <div class="w-100">
                <div class="d-flex flex-column h-100 py-0 py-xl-4">
                    <div class="card my-auto overflow-hidden">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4">
                                    <div class="text-center">
                                        <h5 class="mb-0">{{ __('authtrad.Welcome Back !')}}</h5>
                                            <p class="text-muted mt-2">{{ __('authtrad.Sign in to continue to Invoika.')}}</p>
                                    </div>

                                    <div class="mt-4">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="name" class="col-form-label">{{ __('authtrad.Name') }}</label>
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="col-form-label">{{ __('authtrad.Email Address') }}</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="company_name" class="col-form-label">{{ __('authtrad.Companyn ame') }}</label>
                                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ old('company_name') }}" required autocomplete="company_name">
                                                @error('company_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>



                                            <div class="mb-3">
                                                <label for="password" class="col-form-label">{{ __('authtrad.Password') }}</label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="password-confirm" class="col-form-label">{{ __('authtrad.Confirm Password') }}</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>

                                            <div class="mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('authtrad.Register') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
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

                                    <div class="mt-4 text-center">
                                        <p class="mb-0">{{ __('authtrad.you have an account ?') }}  <a  href="{{ route('login') }}" class="fw-medium text-primary text-decoration-underline">{{ __('authtrad.Signin now') }}  </a> </p>

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

                                                <!-- end carouselIndicators -->
                                                <div class="carousel-inner mx-auto">
                                                    <div class="carousel-item">
                                                        <div class="testi-contain text-center">
                                                            <h5 class="fs-20 text-white mb-0">{{ __('authtrad.Facilitez la facturation, simplifiez la réussite')}}</h5>

                                                        </div>
                                                    </div>

                                                    <div class="carousel-item active">
                                                        <div class="testi-contain text-center">
                                                            <h5 class="fs-20 text-white mb-0">{{ __('authtrad.Simplifiez la facturation, maximisez vos gains')}}</h5>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- end carousel-inner -->
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
