@extends('layouts.app')
@section('content')
<div class="container" style="margin-top: 98px;">
<h4 style="text-align: center; padding-bottom:30px; color: #5161ce; font-family: 'Lobster', cursive;">Adsionary</h4>

    <div class="row justify-content-center">
        <div class="col-md-8">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="name" placeholder="Enter Name" type="text" class="form-control-login-register @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="email" placeholder="Enter Email" type="email" class="form-control-login-register @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password" placeholder="Enter Password" type="password" class="form-control-login-register @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="password-confirm" placeholder="Password Confirmation" type="password" class="form-control-login-register" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="register-adsionary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="col-md-12 m-auto" style="width: fit-content">
                            <label for="Sign-up" style="font-weight: 800">Do you have an Account?</label>
                            <div class="m-auto" style="width: fit-content">
                                <a href="{{ route('login') }}">Login</a>

                            </div>

                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
