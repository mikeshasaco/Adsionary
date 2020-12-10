<nav id="nav" class="d-block d-lg-none">
  <header class="nav__top">
    <div id="Logo-V">
        <a href="" class="navbar-brand" style="cursor:pointer;">Adsionary</a>
    </div>
  </header>

  <div class="nav__bottom">
    <ul>
        <li><a class="nav-link" href="">Analytics by Industry </a></li>
        <li><a class="nav-link" href=""></a>Analytics by Color</li>
        @if(!auth()->guard('web')->check())
        <li><a class="nav-link" href="{{ route('login') }}">Analytics by percentages</a></li>
        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
        @else
         
        <li>
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a></li>
   
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
        </li>
    @endif

    </ul>
  </div>
</nav>
