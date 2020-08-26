@extends('layouts.app')

@section('content')
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<section class="bg-home" style="background-image: url('assets/images/home/bg-login.jpg');">

<div class="bg-overlay"></div>
<div class="home-center">
    <div class="home-desc-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="bg-white p-30 rounded box-shadow">
                <div class="text-center">
                    <h4><a href="index-2.html"><img src="assets/images/logo.png" height="20" alt="logo"></a></h4>
                    <div class="spacer-15"></div>
                </div>

                <div class="login-form">
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                           
                                {{-- email --}}
                                
                            <div class="col-md-12 mt-2">
                                <label for="email" class="f-12">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                                {{-- pass --}}
                                
                            <div class="col-md-12 mt-2">
                                <label for="password" class="f-12">{{ __('Password') }}</label>

                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      
                                {{-- checkbox --}}
                                
                            <div class="col-lg-12 mt-2">      
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customCheck1">    {{ __('Remember Me') }}</label>
                                </div>
                            </div>

                            {{-- login --}}

                            
                        
                            <div class="col-lg-12 mt-3 mb-4">
                                <button type="submit" class="btn btn-custom w-100">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <div class="mx-auto">
                                    <a class="mb-3 mt-2" href="{{ route('password.request') }}">
                                       <p class="text-dark font-weight-bold"> {{ __('Forgot Your Password?') }}</p>
                                    </a>
                                </div>
                                @endif
                            </div>
                       

                        </div>

                   

                           

                      
                      

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
</section>

@endsection
