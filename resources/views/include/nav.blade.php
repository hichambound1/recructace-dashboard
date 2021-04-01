<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                Recrute
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/postule')}}">
                            <i class="ni ni-planet text-orange"></i>
                            <span class="nav-link-text">postuler</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/domain')}}">
                            <i class="ni ni-collection text-orange"></i>
                            <span class="nav-link-text">domaine</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('/ville')}}">
                            <i class="ni ni-pin-3 text-primary"></i>
                            <span class="nav-link-text">ville</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url ('/user')}}">
                            <i class="ni ni-single-02 text-yellow"></i>
                            <span class="nav-link-text">user</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/entreprise')}}">
                            <i class="ni ni-bullet-list-67 text-default"></i>
                            <span class="nav-link-text">entreprise</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/annonce')}}">
                            <i class="ni ni-key-25 text-info"></i>
                            <span class="nav-link-text">annonces</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/condidat')}}">
                            <i class="ni ni-circle-08 text-pink"></i>
                            <span class="nav-link-text">condidats</span>
                        </a>
                    </li>
                   
                </ul>
                
              
            </div>
        </div>
    </div>
</nav>
