
@if(auth::user() )

@else
<div class="modal fade-scale " id="overlay">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
          <h6 style="font-family: 'Lobster', cursive; color:#5161ce">Adsionary</h6>
       <a href="/login" style="margin-left: 20%;"> Sign In</a>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
        
       
         <div class="welcome-title-vouch" style="padding-top:8px; padding-bottom:8px;">
                  {{-- <h4 style="text-align:center; font-style:italic; color:#B35464">Register your Business to Voucheryhub Marketplace</h4>
            <h5 style="color:#B35464;text-align:center; font-weight:bold;">Earn extra money you can put back into your business</h5>
             <h5 style="color:#B35464;text-align:center; font-weight:bold;">Expose your business to our 1000+ Customers!</h5>
            <h5 style="color:#B35464;text-align:center; font-weight:bold;">Grow an audience!</h5> --}}
            
            <h6 style="color: #5161ce;text-align:center; font-weight:bold;">Register to gain FREE access to Social Media Ads Analytics</h6>
            <h6 style="color: #5161ce;text-align:center; font-weight:bold;">Gain access to best advertisement strategies for your industry</h6>
            <h6 style="color: #5161ce;text-align:center; font-weight:bold;">Receive monthly updates sent to your Email for Free </h6>

           

          </div>
      <div class="modal-body">

        <div style="display: flex; justify-content:center;">
                        <div class="google-btn">
                            <div class="google-icon-wrapper">
                                <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                            </div>
                             <a class="btn-text" href="{{route('login.google')}}">Sign in Google</a>
                            </p>
                         </div>
                    </div>
              </div>
          <div class="separator-or" style="display: flex; justify-content: center; padding-top:10px; padding-bottom:10px;">
                        <p style="color: #5161ce; font-family: 'Lobster', cursive;">or</p>
                            {{-- <span style=""></span> --}}

                        </div>
          
        <section class="merchant-newsletter">
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

                    
                    </form>

        </section>

         
        
      </div>
    </div>
  </div>
</div>
@endif

