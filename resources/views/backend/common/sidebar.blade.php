<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}"
                    href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-gauge"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#header"
                    aria-expanded="false" aria-controls="header">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-heading"></i></div>
                    Header/Footer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['header', 'manage.header']) ? 'show' : '' }}"
                    id="header" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Route::currentRouteName() === 'header' ? 'active' : '' }}"
                            href="{{ route('header') }}">Add Infoes</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.header' ? 'active' : '' }}"
                            href="{{ route('manage.header') }}">Manage Infoes</a>
                    </nav>
                </div>

                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#about"
                    aria-expanded="{{ in_array(Route::currentRouteName(), ['about', 'manage.about']) ? 'true' : 'false' }}"
                    aria-controls="about">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-address-card"></i></div>
                    About
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['about', 'manage.about']) ? 'show' : '' }}"
                    id="about" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}"
                            href="{{ route('about') }}">Add About Infoes</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.about' ? 'active' : '' }}"
                            href="{{ route('manage.about') }}">Manage About</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#experience"
                    aria-expanded="false" aria-controls="experience">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-business-time"></i></div>
                    Experience
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['experience', 'manage.experience', 'details.experience', 'manage.details.experience']) ? 'show' : '' }}"
                    id="experience" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Route::currentRouteName() === 'experience' ? 'active' : '' }}"
                            href="{{ route('experience') }}">Add Experience</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.experience' ? 'active' : '' }}"
                            href="{{ route('manage.experience') }}">Manage Experience</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'details.experience' ? 'active' : '' }}"
                            href="{{ route('details.experience') }}">Add Details</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.details.experience' ? 'active' : '' }}"
                            href="{{ route('manage.details.experience') }}">Manage Details</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#services"
                    aria-expanded="false" aria-controls="services">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bell-concierge"></i></div>
                    Services
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['service', 'manage.service', 'details.service', 'manage.details.service']) ? 'show' : '' }}"
                    id="services" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Route::currentRouteName() === 'service' ? 'active' : '' }}"
                            href="{{ route('service') }}">Add Service</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.service' ? 'active' : '' }}"
                            href="{{ route('manage.service') }}">Manage Service</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'details.service' ? 'active' : '' }}"
                            href="{{ route('details.service') }}">Add Details</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.details.service' ? 'active' : '' }}"
                            href="{{ route('manage.details.service') }}">Manage Details</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#portfolio"
                    aria-expanded="false" aria-controls="portfolio">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-tie"></i></div>
                    Portfolio
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['portfolio', 'manage.portfolio']) ? 'show' : '' }}"
                    id="portfolio" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Route::currentRouteName() === 'portfolio' ? 'active' : '' }}"
                            href="{{ route('portfolio') }}">Add Portfolio</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.portfolio' ? 'active' : '' }}"
                            href="{{ route('manage.portfolio') }}">Manage Portfolio</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                    data-bs-target="#testimonials" aria-expanded="false" aria-controls="testimonials">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-comment"></i></div>
                    Testimonials
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['testimonial', 'manage.testimonial']) ? 'show' : '' }}"
                    id="testimonials" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Route::currentRouteName() === 'testimonial' ? 'active' : '' }}"
                            href="{{ route('testimonial') }}">Add Testimonial</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.testimonial' ? 'active' : '' }}"
                            href="{{ route('manage.testimonial') }}">Manage Testimonials</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#contact"
                    aria-expanded="false" aria-controls="contact">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-address-book"></i></div>
                    Contact
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ in_array(Route::currentRouteName(), ['contact', 'manage.contact']) ? 'show' : '' }}"
                    id="contact" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link {{ Route::currentRouteName() === 'contact' ? 'active' : '' }}"
                            href="{{ route('contact') }}">Add Contact</a>
                        <a class="nav-link {{ Route::currentRouteName() === 'manage.contact' ? 'active' : '' }}"
                            href="{{ route('manage.contact') }}">Manage Contact</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <span class="text-success"><b>{{ Auth::user()->name }}</b></span>
        </div>
    </nav>
</div>


