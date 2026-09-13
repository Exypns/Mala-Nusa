<div id="scroll-sentinel" style="position: absolute; top: 0; left: 0; width: 100%; height: 50px; pointer-events: none; z-index: -1;"></div>

<nav class="navbar {{ Route::is(['about', 'explore*', 'contact', 'details']) ? 'navbar-with-bg' : '' }}" id="navbar">
    <a href="{{ route('home') }}" class="logo">
        @php
            $alwaysGreen = request()->routeIs(
                'about',
                'explore*',
                'contact',
                'details'
            );
        @endphp
        <picture>
        <source
        media="(max-width: 960px)"
        srcset="{{ asset('images/logo-green.png') }}">
            <img 
            id="navbar-logo"
            src="{{ asset($alwaysGreen
            ? 'images/logo-green.png'
            : 'images/logo-white.png') }}"
            data-always-green={{ $alwaysGreen ? 'true' : 'false' }}
            data-logo-white="{{ asset('images/logo-white.png') }}"
            data-logo-green="{{ asset('images/logo-green.png') }}"
            alt="Mala Nusa"/>
        </picture>
    </a>

    <!-- Desktop Navigation -->
    <ul class="nav-links">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('explore') }}" class="{{ request()->routeIs('explore*') ? 'active' : '' }}">Explore</a>
        <a href="{{ route('impact') }}" class="{{ request()->routeIs('impact') ? 'active' : '' }}">Impact</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
        <a href="" class="book-btn">Book Now</a>
    </ul>


    <!-- Mobile Wrapper (Pill Badge + Floating Dropdown) -->
    <div class="mobile-nav-container">
        
        <div class="nav-overlay" id="navOverlay"></div>

        <div class="pill-card-wrapper" id="pillWrapper">
        <div class="pill-box">
            <button type="button" class="hamburger-btn" id="mobileMenuBtn" aria-label="Toggle Menu">
                <span class="icon-line line-1"></span>
                <span class="icon-line line-2"></span>
                <span class="icon-line line-3"></span>
            </button>
            <a href="{{ route('explore') }}" class="pill-book-btn">Book Now</a>
        </div>

        <!-- Dropdown Menu Mobile -->
        <div class="mobile-dropdown" id="mobileDropdown">
            <div class="mobile-dropdown-inner">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">HOME</a>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">ABOUT</a>
            <a href="{{ route('explore') }}" class="{{ request()->routeIs('explore*') ? 'active' : '' }}">EXPLORE</a>
            <a href="{{ route('impact') }}" class="{{ request()->routeIs('impact') ? 'active' : '' }}">IMPACT</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">CONTACT</a>
            </div>
        </div>
    </div>
    </div>
</nav>

