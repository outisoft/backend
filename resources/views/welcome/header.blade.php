<header class="header">
    <div class="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#"><span class="color-primary">R.</span>State
            
            <!--img
                src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
                height="15"
                alt="MDB Logo"
                loading="lazy"
            /-->
            </a>
            <!-- Left links -->
            <!--ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Building</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Agent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
            </ul-->
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        
            
        @if (Route::has('login'))
        @auth
        <div class="d-flex align-items-center">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
            <i class="fas fa-shopping-cart"></i>
            </a>

            <!-- Notifications -->
            <div class="dropdown">
            <a
                class="text-reset me-3 dropdown-toggle hidden-arrow"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
            >
                <i class="fas fa-bell"></i>
                <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul
                class="dropdown-menu dropdown-menu-end"
                aria-labelledby="navbarDropdownMenuLink"
            >
                <li>
                <a class="dropdown-item" href="#">Some news</a>
                </li>
                <li>
                <a class="dropdown-item" href="#">Another news</a>
                </li>
                <li>
                <a class="dropdown-item" href="#">Something else here</a>
                </li>
            </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown">
            <a
                class="dropdown-toggle d-flex align-items-center hidden-arrow"
                href="#"
                id="navbarDropdownMenuAvatar"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
            >
                <img
                src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                class="rounded-circle"
                height="25"
                alt="Black and White Portrait of a Man"
                loading="lazy"
                />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                    <a class="dropdown-item" href="{{ url('user/perfil') }}">My profile</a>
                </li>
                <li>
                    <a class="dropdown-item" href="#">Settings</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                        this.closest('form').submit();" 
                        class="dropdown-item">Logout</a>
                    </form>
                </li>
            </ul>
            
            </div>
            @else
            <div>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-theme">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-theme">Register</a>
                    @endif
                </li>
            </div>
            
        </div>
            @endauth
        @endif
        <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
    </div>
</header>