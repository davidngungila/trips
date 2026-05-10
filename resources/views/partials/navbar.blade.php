<nav id="navbar" class="hero-mode">
  <div class="container">
    <div class="nav-inner">
      <div class="logo" onclick="goHome()">
        <img src="{{ asset('tanzaniatripslogo.png') }}" alt="TanzaniaTrips Logo" class="logo-img">
      </div>
      <div class="nav-links">
        <span class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" onclick="navigateTo('home')">Home</span>
        <span class="nav-link {{ request()->routeIs('destinations.index') ? 'active' : '' }}" onclick="navigateTo('destinations')">Destinations</span>
        <span class="nav-link {{ request()->routeIs('tours.index') ? 'active' : '' }}" onclick="navigateTo('tours')">Tours & Packages</span>
        <span class="nav-link {{ request()->routeIs('kilimanjaro') ? 'active' : '' }}" onclick="navigateTo('kilimanjaro')">Kilimanjaro</span>
        <span class="nav-link {{ request()->routeIs('todo') ? 'active' : '' }}" onclick="navigateTo('todo')">Things To Do</span>
        <span class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" onclick="navigateTo('blog')">Blog</span>
        <span class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" onclick="navigateTo('about')">About</span>
        <span class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" onclick="navigateTo('contact')">Contact</span>
      </div>
      <div class="nav-cta">
        <button class="nav-book-btn" onclick="openModal('tour1')">Book Now</button>
        <div class="hamburger" id="hamburger" onclick="toggleMobile()">
          <span></span><span></span><span></span>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <span class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" onclick="navigateTo('home');toggleMobile()">Home</span>
  <span class="nav-link {{ request()->routeIs('destinations.index') ? 'active' : '' }}" onclick="navigateTo('destinations');toggleMobile()">Destinations</span>
  <span class="nav-link {{ request()->routeIs('tours.index') ? 'active' : '' }}" onclick="navigateTo('tours');toggleMobile()">Tours & Packages</span>
  <span class="nav-link {{ request()->routeIs('kilimanjaro') ? 'active' : '' }}" onclick="navigateTo('kilimanjaro');toggleMobile()">Kilimanjaro</span>
  <span class="nav-link {{ request()->routeIs('todo') ? 'active' : '' }}" onclick="navigateTo('todo');toggleMobile()">Things To Do</span>
  <span class="nav-link {{ request()->routeIs('blog') ? 'active' : '' }}" onclick="navigateTo('blog');toggleMobile()">Blog</span>
  <span class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" onclick="navigateTo('about');toggleMobile()">About</span>
  <span class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" onclick="navigateTo('contact');toggleMobile()">Contact</span>
</div>
