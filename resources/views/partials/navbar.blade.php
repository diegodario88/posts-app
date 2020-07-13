<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark unique-color lighten-1">
    <div class="container">
        <a class="navbar-brand" href="/"><i class="fas fa-blog fa-3x"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
            aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?= Helper::isUrlActive(url('/')) ?>">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item <?= Helper::isUrlActive(url('/dashboard')) ?>">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item <?= Helper::isUrlActive(url('/contactus')) ?>">
                    <a class="nav-link" href="/contactus">Contact</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item dropdown avatar">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset('/img/profile-svg.svg') }}" class="rounded-circle z-depth-0"
                            alt="avatar image" height="35"> Diego Dario
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-info"
                        aria-labelledby="navbarDropdownMenuLink-4">
                        <a class="dropdown-item" href="#">My Account</a>
                        <a class="dropdown-item" href="">Log out</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--/.Navbar -->
