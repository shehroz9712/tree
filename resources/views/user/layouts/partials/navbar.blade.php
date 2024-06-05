<nav class="custom-navbar navbar navbar navbar-expand-md navbar-light bg-light" arial-label="Furni navigation bar">

    <div class="container">
        <a class="navbar-brand" href="{{ route('user.index') }}">
            <img src="{{ getLogo() }}" alt="{{ getTitle() }}" style="width: 200px;"></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
            aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
                <li class="nav-item {{ Request::routeIs('user.index') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('user.index') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::routeIs('user.about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('user.about') }}">About us</a>
                </li>
                <li class="nav-item dropdown {{ Request::routeIs('user.services.*') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        @foreach (getServices() as $service)
                            <li><a class="dropdown-item"
                                    href="{{ route('user.service', $service->slug) }}">{{ $service->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item {{ Request::routeIs('user.blog') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('user.blog') }}">Blog</a>
                </li>
                <li class="nav-item {{ Request::routeIs('user.contact') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('user.contact') }}">Contact us</a>
                </li>
            </ul>
        </div>

    </div>

</nav>
