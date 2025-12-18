<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">
            <span class="text-primary">JULIENS</span>LARAVEL
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Start</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('message-board') }}">Wunschliste</a>
                </li>

{{--                <li class="nav-item dropdown">--}}
{{--                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">--}}
{{--                        Resourcen--}}
{{--                    </a>--}}
{{--                    <ul class="dropdown-menu dropdown-menu-dark">--}}
{{--                        <li><a class="dropdown-item" href="#">Documentation</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Tutorials</a></li>--}}
{{--                        <li><hr class="dropdown-divider"></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Support</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>

            <div class="d-flex align-items-center">
                <a href="/login" class="btn btn-link text-white text-decoration-none me-3">Login</a>
                <a href="/register" class="btn btn-primary px-4">Registrieren</a>
            </div>
        </div>
    </div>
</nav>
