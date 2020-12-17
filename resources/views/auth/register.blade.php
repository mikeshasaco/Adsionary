@extends('layouts.app')


<style>

.google-center{
    display: flex;
    justify-content: center;
}

.google-btn {
  width: 210px;
  height: 42px;
  background-color: #4285f4;
  border-radius: 2px;
  box-shadow: 0 3px 4px 0 rgba(0,0,0,.25);
  margin-top: -13px;



}

@import url(https://fonts.googleapis.com/css?family=Roboto:500);

.google-btn  .google-icon-wrapper {
    position: absolute;
    margin-top: 1px;
    margin-left: 1px;
    width: 40px;
    height: 40px;
    border-radius: 2px;
    background-color: #fff;;
  }

  .google-btn   .google-icon {
    position: absolute;
    margin-top: 11px;
    margin-left: 11px;
    width: 18px;
    height: 18px;
  }
  .google-btn   .btn-text {
    float: right;
    margin: 11px 11px 0 0;
    color: #fff;;
    font-size: 16px;
    letter-spacing: 0.2px;
    font-family: "Roboto";
  }

  .btn-text:hover {
    box-shadow: 0 0 6px #4285f4;
  }
  
  .btn-text:active {
    background:  #1669F2;;
  }
</style>


@section('content')
<div class="container" style="margin-top: 70px;">
<h4 style="text-align: center; padding-bottom:30px; color: #5161ce; font-family: 'Lobster', cursive;">Register</h4>

    <div class="row justify-content-center">
        <div class="col-md-8">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                         <div class="google-center">

                        <div class="google-btn">
                            <div class="google-icon-wrapper">
                                <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                            </div>
                             <a class="btn-text" href="{{route('login.google')}}">Sign in Google</a>
                            {{-- <p class="btn-text"><b>Sign in with google</b> --}}
                            </p>
                         </div>
                    </div>

                      <div class="separator-or" style="display: flex; justify-content: center; padding-top:10px; padding-bottom:10px;">
                        <p style="color: #5161ce; font-family: 'Lobster', cursive;">or</p>
                            {{-- <span style=""></span> --}}

                        </div>


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
