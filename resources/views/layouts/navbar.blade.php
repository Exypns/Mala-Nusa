<nav>
    <div class="nav-inner">
        <a href="{{ route('home') }}" class="nav-logo">Mala Nusa</a>
    </div>
    <div class="nav-links">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('explore') }}" class="{{ request()->routeIs('explore*') ? 'active' : '' }}">Explore</a>
        <a href="{{ route('impact') }}" class="{{ request()->routeIs('impact') ? 'active' : '' }}">Impact</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </div>
</nav>
