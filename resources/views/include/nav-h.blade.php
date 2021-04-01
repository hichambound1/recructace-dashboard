<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Search form -->
            <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                <div class="form-group mb-0">
                    <div class="input-group input-group-alternative input-group-merge">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-search"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
                <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                    aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </form>
        
            <!-- Navbar links -->
            @auth
            <ul class="navbar-nav align-items-center  ml-md-auto ">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
               
            </ul>
            @endauth
            @guest
               <ul class="navbar-nav align-items-center  ml-md-auto ">
              
                <div class="media-body  ml-2  d-none d-lg-block">
                    <a href="{{ route('register')}}" class="text-white">register</a>
                  
                </div>
               
            </ul>
            <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                <div class="media-body  ml-2  d-none d-lg-block">
                    <a href="{{ route('login')}}" class="text-white">login</a>
                  
                </div>
            </ul> 
            @endguest
            
            
        </div>
    </div>
</nav>
