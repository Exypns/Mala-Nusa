<div id="scroll-sentinel" style="position: absolute; top: 0; left: 0; width: 100%; height: 50px; pointer-events: none; z-index: -1;"></div>

<nav class="navbar {{ Route::is(['about', 'explore', 'impact', 'contact']) ? 'navbar-with-bg' : '' }}" id="navbar">
    <a href="#" class="logo">mala<br>nusa</a>
    <ul class="nav-links">
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
        <a href="{{ route('explore') }}" class="{{ request()->routeIs('explore*') ? 'active' : '' }}">Explore</a>
        <a href="{{ route('impact') }}" class="{{ request()->routeIs('impact') ? 'active' : '' }}">Impact</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </ul>
</nav>
