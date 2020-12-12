<nav class="navbar navbar-expand-lg navbar-mainbg">
        <a class="navbar-brand navbar-logo" style="font-family: 'Lobster', cursive;" href="{{route('dashboard')}}">Adsionary</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item active dashboard">
                <a class="nav-link" href="javascript:void(0);" onclick="dashboard();return false;"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item  analytics_adtype">
                    <a class="nav-link" href="javascript:void(0);" onclick="adtype();return false;"><i class="far fa-chart-bar"></i>Analytics by Advertisement Type</a>
                </li>
                <li class="nav-item analytics_socialmedia">
                    <a class="nav-link" href="javascript:void(0);" onclick="analytics_socialmedia();return false;"><i class="fab fa-facebook"></i>Analytics by Social Media</a>
                </li>
              
                <li class="nav-item analytics_percentage">
                    <a class="nav-link" href="javascript:void(0);" onclick="analytics_percentage();return false;"><i class="far fa-chart-bar"></i>Analytics by Percentage</a>
                </li>
                
                <li class="nav-item register_nav">
                    <a class="nav-link" href="javascript:void(0);" onclick="registernav();return false;">Register</a>
                </li>
                
                <li class="nav-item login_nav">
                    <a class="nav-link" href="javascript:void(0);" onclick="loginnav();return false;">Login</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
                </li> --}}
            </ul>
        </div>
    </nav>