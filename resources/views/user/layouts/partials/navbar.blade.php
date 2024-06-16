 <!-- Navbar & Hero Start -->
 <div class="container-fluid position-relative p-0">
     <nav
         class="navbar navbar-expand-lg bg-light navbar-dark home-navbar">

         <div class="container">

             <a href="{{ route('user.index') }}" class="navbar-brand p-0">
                 <img src="{{ getLogo() }}" alt="Logo">
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                 <span class="fa fa-bars"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                 <div class="navbar-nav ms-auto py-0 pe-4">
                     <a href="{{ route('user.index') }}"
                         class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                     <a href="{{ route('user.about') }}"
                         class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                     <div class="nav-item dropdown">
                         <a href="{{ route('user.services') }}"
                             class="nav-link dropdown-toggle {{ Request::is('service/*') ? 'active' : '' }}"
                             data-bs-toggle="dropdown">Services</a>
                         <div class="dropdown-menu m-0">
                             @foreach (getServices() as $service)
                                 <a class="dropdown-item {{ Request::is('services/' . $service->slug) ? 'active' : '' }}"
                                     href="{{ route('user.service', $service->slug) }}">{{ $service->name }}</a>
                             @endforeach
                         </div>
                     </div>
                     <a href="{{ route('user.contact') }}"
                         class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
                 </div>
                 <a href="tel:{{ getPhone() }}" class="btn btn-primary py-2 px-4">{{ getPhone() }}</a>
             </div>
         </div>
     </nav>

     @yield('hero')
 </div>
 <!-- Navbar & Hero End -->
