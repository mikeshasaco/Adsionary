@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 98px;">
    <h4 style="text-align: center; padding-bottom:30px; color: #5161ce; font-family: 'Lobster', cursive;">Sign In To  Your Account</h4>

    <div class="row justify-content-center">
        <div class="col-md-8">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <a href="{{route('login.google')}}">Sign in Google</a>
                                
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" placeholder="Enter Email Address" type="email" class="form-control-login-register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" placeholder="Enter Password" type="password" class="form-control-login-register @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 ">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="register-adsionary">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}

                                      <div class="col-md-12 m-auto" style="width: fit-content">
                                        <label for="Sign-up" style="font-weight: 800">Don't have an account yet?</label>
                                         <div class="m-auto" style="width: fit-content">
                                            <a href="{{ route('register') }}">Register</a>

                                        </div>
                                 </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
