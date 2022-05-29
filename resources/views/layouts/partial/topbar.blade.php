 <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item "> <a class="nav-link nav-toggler  hidden-md-up  waves-effect waves-dark" href="javascript:void(0)"><i class="fas  fa-bars"></i></a></li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="fas fa-bars"></i></a> </li> 
                     <li class="nav-item pt-2">ADMIN</li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item"><a href="{{ route('logout') }}" class="btn btn-sm btn-danger" onclick="event.preventDefault();document.getElementById('logout').submit();">Logout</a></li>
                        <form action="{{ route('logout') }}" id="logout" style="display:none;" method="POST">@csrf</form>
                    </ul> 
                    
                </div>
            </nav>
</header>