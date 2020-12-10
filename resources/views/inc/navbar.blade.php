{{-- fixed-top Customer navbar --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light border-bottom sidebarNavigation" id="navbarfix" style="background-color:white !important; border:0 !important;">
        <div class="container">

            <a href=" " class="navbar-brand" style="cursor:pointer;">Adsionary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                        <div class="container">
                          
                        </div>
                    </div>

                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="" style="color: #B35464; font-size:16px;"> Help</a>
                </li>


                {{-- name saves the query result to the bar && id query print the result--}}

            </ul>

          



            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @if(!auth()->guard('web')->check())
                <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                @else

                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::guard('web')->user()->username }} <span class="caret"></span>
                        </a>




                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        {{-- @if(auth()->guard('customer')->check())

                            <a class="dropdown-item" href="{{ route('customerprofile', Auth()->guard('customer')->user()->customerslug) }}"> My Profile</a>

                        @endif --}}

                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                </li>
            @endif
            </ul>

        </div>
    </div>
</nav>
