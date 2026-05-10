@extends('layouts.app')

@section('content')
<div id="page-home" class="page active">

  <!-- HERO -->
  <section id="hero">
    <div class="hero-slideshow">
      <!-- Slide 1 -->
      <div class="hero-slide active" style="background: linear-gradient(rgba(13,43,26,0.7), rgba(13,43,26,0.7)), url('https://res.cloudinary.com/dqflffa1o/image/upload/v1778040877/reputable-tours/03_1778040841_2.jpg') center/cover;">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-pattern"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
          <div class="hero-content">
            <h1 class="hero-title">
              Experience the <span class="line-2">Wild Heart of Africa</span>
            </h1>
            <p class="hero-desc">From Kilimanjaro to Serengeti—Tanzania awaits with life-changing adventures.</p>
            <div class="hero-actions">
              <a href="{{ route('tours.index') }}" class="hero-btn-main"><i class="fas fa-compass"></i> Explore Tours</a>
              <a href="{{ route('kilimanjaro') }}" class="hero-btn-secondary"><i class="fas fa-mountain"></i> Climb Kilimanjaro</a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat"><div class="hero-stat-num">12<span>K+</span></div><div class="hero-stat-label">Happy Travelers</div></div>
              <div class="hero-stat"><div class="hero-stat-num">98<span>%</span></div><div class="hero-stat-label">Satisfaction Rate</div></div>
              <div class="hero-stat"><div class="hero-stat-num">15<span>+</span></div><div class="hero-stat-label">Years Experience</div></div>
              <div class="hero-stat"><div class="hero-stat-num">85<span>+</span></div><div class="hero-stat-label">Tour Packages</div></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 2 -->
      <div class="hero-slide" style="background: linear-gradient(rgba(13,43,26,0.7), rgba(13,43,26,0.7)), url('https://res.cloudinary.com/dqflffa1o/image/upload/v1778040877/reputable-tours/03_1778040841_2.jpg') center/cover;">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-pattern"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
          <div class="hero-content">
            <h1 class="hero-title">
              Witness the <span class="line-2">Great Migration Safari</span>
            </h1>
            <p class="hero-desc">Join millions of wildebeest on their epic journey—Africa's greatest wildlife spectacle.</p>
            <div class="hero-actions">
              <a href="{{ route('tours.index') }}" class="hero-btn-main"><i class="fas fa-binoculars"></i> Safari Tours</a>
              <a href="{{ route('destinations.index') }}" class="hero-btn-secondary"><i class="fas fa-map"></i> Explore Destinations</a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat"><div class="hero-stat-num">1.5<span>M</span></div><div class="hero-stat-label">Wildebeest Migration</div></div>
              <div class="hero-stat"><div class="hero-stat-num">500<span>+</span></div><div class="hero-stat-label">Wildlife Species</div></div>
              <div class="hero-stat"><div class="hero-stat-num">365<span>+</span></div><div class="hero-stat-label">Game Drive Days</div></div>
              <div class="hero-stat"><div class="hero-stat-num">100<span>%</span></div><div class="hero-stat-label">Sighting Success</div></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 3 -->
      <div class="hero-slide" style="background: linear-gradient(rgba(13,43,26,0.7), rgba(13,43,26,0.7)), url('https://res.cloudinary.com/dqflffa1o/image/upload/v1778040877/reputable-tours/03_1778040841_2.jpg') center/cover;">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-pattern"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
          <div class="hero-content">
            <h1 class="hero-title">
              Conquer <span class="line-2">Kilimanjaro's Peak</span>
            </h1>
            <p class="hero-desc">Stand atop Africa's highest summit—5,895 meters of pure adventure and achievement.</p>
            <div class="hero-actions">
              <a href="{{ route('kilimanjaro') }}" class="hero-btn-main"><i class="fas fa-mountain"></i> Climb Routes</a>
              <a href="{{ route('contact') }}" class="hero-btn-secondary"><i class="fas fa-headset"></i> Expert Consultation</a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat"><div class="hero-stat-num">5,895<span>m</span></div><div class="hero-stat-label">Summit Height</div></div>
              <div class="hero-stat"><div class="hero-stat-num">94<span>%</span></div><div class="hero-stat-label">Success Rate</div></div>
              <div class="hero-stat"><div class="hero-stat-num">7<span></span></div><div class="hero-stat-label">Climbing Routes</div></div>
              <div class="hero-stat"><div class="hero-stat-num">9<span>+</span></div><div class="hero-stat-label">Day Adventure</div></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 4 -->
      <div class="hero-slide" style="background: linear-gradient(rgba(13,43,26,0.7), rgba(13,43,26,0.7)), url('https://res.cloudinary.com/dqflffa1o/image/upload/v1778040877/reputable-tours/03_1778040841_2.jpg') center/cover;">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-pattern"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
          <div class="hero-content">
            <h1 class="hero-title">
              Discover <span class="line-2">Zanzibar Paradise</span>
            </h1>
            <p class="hero-desc">Crystal-clear waters, pristine beaches, and rich Swahili culture await on the Spice Island.</p>
            <div class="hero-actions">
              <a href="{{ route('tours.index') }}" class="hero-btn-main"><i class="fas fa-umbrella-beach"></i> Beach Tours</a>
              <a href="{{ route('destinations.index') }}" class="hero-btn-secondary"><i class="fas fa-water"></i> Water Activities</a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat"><div class="hero-stat-num">50<span>+</span></div><div class="hero-stat-label">Pristine Beaches</div></div>
              <div class="hero-stat"><div class="hero-stat-num">25<span>+</span></div><div class="hero-stat-label">Dive Sites</div></div>
              <div class="hero-stat"><div class="hero-stat-num">30<span>°C</span></div><div class="hero-stat-label">Water Temperature</div></div>
              <div class="hero-stat"><div class="hero-stat-num">365<span></span></div><div class="hero-stat-label">Sunny Days</div></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 5 -->
      <div class="hero-slide" style="background: linear-gradient(rgba(13,43,26,0.7), rgba(13,43,26,0.7)), url('https://res.cloudinary.com/dqflffa1o/image/upload/v1778040877/reputable-tours/03_1778040841_2.jpg') center/cover;">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-pattern"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
          <div class="hero-content">
            <h1 class="hero-title">
              Explore <span class="line-2">Ngorongoro Crater</span>
            </h1>
            <p class="hero-desc">Descend into the world's largest volcanic caldera—natural sanctuary for Africa's Big Five.</p>
            <div class="hero-actions">
              <a href="{{ route('tours.index') }}" class="hero-btn-main"><i class="fas fa-binoculars"></i> Safari Tours</a>
              <a href="{{ route('destinations.index') }}" class="hero-btn-secondary"><i class="fas fa-camera"></i> Photography</a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat"><div class="hero-stat-num">600<span>m</span></div><div class="hero-stat-label">Crater Depth</div></div>
              <div class="hero-stat"><div class="hero-stat-num">25,000<span>+</span></div><div class="hero-stat-label">Large Animals</div></div>
              <div class="hero-stat"><div class="hero-stat-num">500<span>+</span></div><div class="hero-stat-label">Bird Species</div></div>
              <div class="hero-stat"><div class="hero-stat-num">100<span>%</span></div><div class="hero-stat-label">Big Five Sighting</div></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 6 -->
      <div class="hero-slide" style="background: linear-gradient(rgba(13,43,26,0.7), rgba(13,43,26,0.7)), url('https://res.cloudinary.com/dqflffa1o/image/upload/v1778040843/reputable-tours/02_1778040811_1.jpg') center/cover;">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-pattern"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
          <div class="hero-content">
            <h1 class="hero-title">
              Experience <span class="line-2">Cultural Heritage</span>
            </h1>
            <p class="hero-desc">Connect with authentic Maasai communities and discover Tanzania's rich cultural traditions.</p>
            <div class="hero-actions">
              <a href="{{ route('todo') }}" class="hero-btn-main"><i class="fas fa-users"></i> Cultural Tours</a>
              <a href="{{ route('about') }}" class="hero-btn-secondary"><i class="fas fa-handshake"></i> Meet Our Team</a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat"><div class="hero-stat-num">120<span>+</span></div><div class="hero-stat-label">Local Communities</div></div>
              <div class="hero-stat"><div class="hero-stat-num">11<span></span></div><div class="hero-stat-label">Languages Spoken</div></div>
              <div class="hero-stat"><div class="hero-stat-num">30<span>+</span></div><div class="hero-stat-label">Cultural Sites</div></div>
              <div class="hero-stat"><div class="hero-stat-num">100<span>%</span></div><div class="hero-stat-label">Authentic Experience</div></div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Slide 7 -->
      <div class="hero-slide" style="background: linear-gradient(rgba(13,43,26,0.7), rgba(13,43,26,0.7)), url('https://res.cloudinary.com/dqflffa1o/image/upload/v1778040814/reputable-tours/01_1778040787_0.jpg') center/cover;">
        <div class="hero-bg-gradient"></div>
        <div class="hero-bg-pattern"></div>
        <div class="hero-orb hero-orb-1"></div>
        <div class="hero-orb hero-orb-2"></div>
        <div class="hero-orb hero-orb-3"></div>
        <div class="container">
          <div class="hero-content">
            <h1 class="hero-title">
              Adventure <span class="line-2">Awaits in Tanzania</span>
            </h1>
            <p class="hero-desc">From hot air balloon safaris to mountain trekking—unlimited adventures await you.</p>
            <div class="hero-actions">
              <a href="{{ route('tours.index') }}" class="hero-btn-main"><i class="fas fa-compass"></i> All Adventures</a>
              <a href="{{ route('contact') }}" class="hero-btn-secondary"><i class="fas fa-phone"></i> Plan Your Trip</a>
            </div>
            <div class="hero-stats">
              <div class="hero-stat"><div class="hero-stat-num">85<span>+</span></div><div class="hero-stat-label">Tour Packages</div></div>
              <div class="hero-stat"><div class="hero-stat-num">365<span></span></div><div class="hero-stat-label">Adventure Days</div></div>
              <div class="hero-stat"><div class="hero-stat-num">22<span></span></div><div class="hero-stat-label">National Parks</div></div>
              <div class="hero-stat"><div class="hero-stat-num">∞</span></div><div class="hero-stat-label">Memories</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Slideshow Controls -->
    <div class="hero-controls">
      <button class="hero-control prev" onclick="changeSlide(-1)">
        <i class="fas fa-chevron-left"></i>
      </button>
      <button class="hero-control next" onclick="changeSlide(1)">
        <i class="fas fa-chevron-right"></i>
      </button>
    </div>
    
    <!-- Slideshow Indicators -->
    <div class="hero-indicators">
      <span class="indicator active" onclick="goToSlide(0)"></span>
      <span class="indicator" onclick="goToSlide(1)"></span>
      <span class="indicator" onclick="goToSlide(2)"></span>
      <span class="indicator" onclick="goToSlide(3)"></span>
      <span class="indicator" onclick="goToSlide(4)"></span>
      <span class="indicator" onclick="goToSlide(5)"></span>
      <span class="indicator" onclick="goToSlide(6)"></span>
    </div>
    <!-- Floating info cards -->
    <div class="hero-float-cards">
      <div class="float-card glass-card-dark">
        <div class="float-card-label">Next Departure</div>
        <div class="float-card-value">Serengeti Safari</div>
        <div class="float-card-meta"><i class="fas fa-calendar"></i> May 15, 2025 · 7 days</div>
      </div>
      <div class="float-card glass-card-dark">
        <div class="float-card-label">Most Popular</div>
        <div class="float-card-value">Kilimanjaro Trek</div>
        <div class="float-card-meta"><i class="fas fa-star"></i> 4.9 · 342 reviews</div>
      </div>
      <div class="float-card glass-card-dark">
        <div class="float-card-label">Flash Deal 🔥</div>
        <div class="float-card-value">Zanzibar Beach</div>
        <div class="float-card-meta"><i class="fas fa-tag"></i> From $899 · 5 days</div>
      </div>
    </div>
    <div class="hero-scroll"><div class="scroll-line"></div>Scroll</div>
  </section>

  <!-- SEARCH SECTION -->
  <div class="search-section">
    <div class="search-wrapper">
      <div class="search-card">
        <div class="search-tabs">
          <div class="search-tab active" onclick="switchTab(this,'all')">All Tours</div>
          <div class="search-tab" onclick="switchTab(this,'safari')">Safari</div>
          <div class="search-tab" onclick="switchTab(this,'trekking')">Trekking</div>
          <div class="search-tab" onclick="switchTab(this,'beach')">Beach</div>
          <div class="search-tab" onclick="switchTab(this,'cultural')">Cultural</div>
        </div>
        <div class="search-fields">
          <div class="sf-group">
            <div class="sf-label">Destination</div>
            <div class="sf-input-wrap" style="position:relative;">
              <i class="fas fa-map-marker-alt"></i>
              <input type="text" class="sf-input" id="destInput" placeholder="Where do you want to go?" oninput="showAutocomplete(this.value)" autocomplete="off">
              <div class="autocomplete-dropdown" id="acDropdown">
                <div class="ac-item" onclick="selectDest('Serengeti National Park')"><i class="fas fa-paw"></i> Serengeti National Park</div>
                <div class="ac-item" onclick="selectDest('Mount Kilimanjaro')"><i class="fas fa-mountain"></i> Mount Kilimanjaro</div>
                <div class="ac-item" onclick="selectDest('Zanzibar Island')"><i class="fas fa-umbrella-beach"></i> Zanzibar Island</div>
                <div class="ac-item" onclick="selectDest('Ngorongoro Crater')"><i class="fas fa-circle-notch"></i> Ngorongoro Crater</div>
                <div class="ac-item" onclick="selectDest('Tarangire National Park')"><i class="fas fa-tree"></i> Tarangire National Park</div>
                <div class="ac-item" onclick="selectDest('Lake Manyara')"><i class="fas fa-water"></i> Lake Manyara</div>
                <div class="ac-item" onclick="selectDest('Ruaha National Park')"><i class="fas fa-hippo"></i> Ruaha National Park</div>
              </div>
            </div>
          </div>
          <div class="sf-group">
            <div class="sf-label">Duration</div>
            <div class="sf-input-wrap">
              <i class="fas fa-clock"></i>
              <select class="sf-select">
                <option value="">Any Duration</option>
                <option>1-3 Days</option>
                <option>4-6 Days</option>
                <option>7-10 Days</option>
                <option>11-14 Days</option>
                <option>15+ Days</option>
              </select>
            </div>
          </div>
          <div class="sf-group">
            <div class="sf-label">Budget (per person)</div>
            <div class="sf-input-wrap">
              <i class="fas fa-dollar-sign"></i>
              <select class="sf-select">
                <option value="">Any Budget</option>
                <option>Under $500</option>
                <option>$500 – $1,000</option>
                <option>$1,000 – $2,500</option>
                <option>$2,500 – $5,000</option>
                <option>$5,000+</option>
              </select>
            </div>
          </div>
          <div class="sf-group">
            <div class="sf-label">Group Type</div>
            <div class="sf-input-wrap">
              <i class="fas fa-users"></i>
              <select class="sf-select">
                <option value="">All Groups</option>
                <option>Solo Traveler</option>
                <option>Couple</option>
                <option>Family</option>
                <option>Corporate</option>
                <option>School Group</option>
              </select>
            </div>
          </div>
          <button class="search-btn" onclick="runSearch()"><i class="fas fa-search"></i> Search</button>
        </div>
        <div class="search-popular">
          <span class="search-popular-label">Popular:</span>
          <span class="search-pill" onclick="fillSearch('Serengeti Safari')">🦁 Serengeti Safari</span>
          <span class="search-pill" onclick="fillSearch('Kilimanjaro Climb')">🏔 Kilimanjaro</span>
          <span class="search-pill" onclick="fillSearch('Zanzibar Beach')">🏖 Zanzibar</span>
          <span class="search-pill" onclick="fillSearch('Ngorongoro Crater')">🦏 Ngorongoro</span>
          <span class="search-pill" onclick="fillSearch('Big Five Safari')">🐘 Big Five</span>
        </div>
      </div>
    </div>
  </div>

  <!-- WHY US -->
  <section class="why-section">
    <div class="container">
      <div class="why-grid">
        <div class="why-visual">
          <div class="why-img-stack">
            <div class="why-img-main"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1778041596/reputable-tours/497181376_18028481366672474_34940990243767663_n%20%281%29_1778041595_0.jpg" alt="Mount Kilimanjaro" class="img-fluid"></div>
            <div class="why-img-accent"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468788/Zeebraaa_cpydg9.jpg" alt="Safari Wildlife" class="img-fluid"></div>
            <div class="why-badge"><div class="why-badge-num">15+</div><div class="why-badge-text">Years of Excellence</div></div>
          </div>
        </div>
        <div>
          <div class="section-label">Why Choose Us</div>
          <h2 class="section-title">Tanzania's Most <span>Trusted</span> Travel Partner</h2>
          <p class="section-subtitle">We don't just book trips — we craft life-changing journeys with unmatched local expertise and care.</p>
          <div class="why-features">
            <div class="why-feature">
              <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
              <div><div class="why-feature-title">100% Safe & Insured</div><div class="why-feature-desc">All tours include comprehensive travel insurance, certified guides, and 24/7 emergency support throughout your journey.</div></div>
            </div>
            <div class="why-feature">
              <div class="why-icon"><i class="fas fa-leaf"></i></div>
              <div><div class="why-feature-title">Eco-Conscious Travel</div><div class="why-feature-desc">We partner only with sustainable lodges and conservation projects, ensuring tourism benefits local communities and wildlife.</div></div>
            </div>
            <div class="why-feature">
              <div class="why-icon"><i class="fas fa-star"></i></div>
              <div><div class="why-feature-title">Expert Local Guides</div><div class="why-feature-desc">Our certified, bilingual naturalist guides have an average of 12 years in the field—they make the difference.</div></div>
            </div>
            <div class="why-feature">
              <div class="why-icon"><i class="fas fa-sync-alt"></i></div>
              <div><div class="why-feature-title">Flexible Booking</div><div class="why-feature-desc">Free cancellation up to 30 days before departure. Custom itineraries on request. No hidden fees, ever.</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DESTINATIONS -->
  <section class="destinations-section">
    <div class="container">
      <div class="section-header">
        <div>
          <div class="section-label">Top Destinations</div>
          <h2 class="section-title">Where Will You <span>Explore</span>?</h2>
        </div>
        <a href="{{ route('destinations.index') }}" class="btn-outline">View All <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="dest-filters">
        <div class="dest-filter active" onclick="filterDest(this,'all')">All</div>
        <div class="dest-filter" onclick="filterDest(this,'national-parks')">🌿 National Parks</div>
        <div class="dest-filter" onclick="filterDest(this,'beach')">🏖 Beach & Islands</div>
        <div class="dest-filter" onclick="filterDest(this,'mountains')">🏔 Mountains</div>
        <div class="dest-filter" onclick="filterDest(this,'cultural')">🏛 Cultural Sites</div>
      </div>
      <div class="dest-grid">
        @forelse($destinations as $destination)
        <div class="dest-card {{ $destination['is_featured'] ? 'featured' : '' }}" data-cat="{{ $destination['category'] }}" onclick="navigateTo('destinations.index')">
          <div class="dest-card-img" style="height:100%">
            @if($destination['featured_image_url'])
              <img src="{{ $destination['featured_image_url'] }}" alt="{{ $destination['name'] }}" class="img-fluid" style="height:100%; object-fit:cover;">
            @else
              <img src="https://picsum.photos/seed/{{ $destination['slug'] }}/400/300.jpg" alt="{{ $destination['name'] }}" class="img-fluid" style="height:100%; object-fit:cover;">
            @endif
          </div>
          @if($destination['is_featured'])
            <div class="dest-card-tag">🔥 Most Popular</div>
          @endif
          <div class="dest-card-overlay"></div>
          <div class="dest-card-content">
            <div class="dest-card-name">{{ $destination['name'] }}</div>
            <div class="dest-card-meta">
              <span class="dest-card-count">{{ $destination['tour_count'] }} tours</span>
              <span class="dest-card-rating"><i class="fas fa-star"></i> {{ $destination['rating'] ?? 4.8 }}</span>
            </div>
          </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
          <div class="text-muted">
            <i class="ri-map-pin-line ri-48px mb-3 d-block"></i>
            <p>No destinations available at the moment.</p>
            <p>Please check back later or contact us for custom destination packages.</p>
          </div>
        </div>
        @endforelse
            <div class="dest-card-meta"><span class="dest-card-count">7 tours</span><span class="dest-card-rating"><i class="fas fa-star"></i> 4.7</span></div>
          </div>
        </div>
        <div class="dest-card" data-cat="beach" onclick="navigateTo('tours.index')">
          <div class="dest-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468780/Wildbeest_at_Water_m4tlfr.jpg" alt="Pemba Island" class="img-fluid"></div>
          <div class="dest-card-overlay"></div>
          <div class="dest-card-content">
            <div class="dest-card-name">Pemba Island</div>
            <div class="dest-card-meta"><span class="dest-card-count">6 tours</span><span class="dest-card-rating"><i class="fas fa-star"></i> 4.9</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TOURS -->
  <section class="tours-section">
    <div class="container">
      <div class="section-header">
        <div>
          <div class="section-label">Featured Packages</div>
          <h2 class="section-title">Handpicked <span>Safari & Tour</span> Packages</h2>
        </div>
        <a href="{{ route('tours.index') }}" class="btn-outline">All Packages <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="grid-3">
        @forelse($featuredTours as $tour)
        <div class="tour-card" onclick="window.location.href='{{ route('tours.show', $tour['slug']) }}'">
          <div class="tour-card-img">
            <img src="{{ $tour['image'] }}" alt="{{ $tour['name'] }}" class="img-fluid">
            <div class="tour-card-tags">
              @if($tour['is_last_minute_deal'])
                <span class="tag tag-red">Last Minute Deal</span>
              @else
                <span class="tag tag-green">Featured</span>
              @endif
            </div>
            <div class="tour-duration">
              <i class="fas fa-clock"></i> 
              @if($tour['duration_days'] && $tour['duration_nights'])
                {{ $tour['duration_days'] }} Days {{ $tour['duration_nights'] }} Nights
              @elseif($tour['duration_days'])
                {{ $tour['duration_days'] }} Days
              @else
                Duration TBD
              @endif
            </div>
          </div>
          <div class="tour-card-body">
            <div class="tour-reviews">
              <div class="stars">
                @for($i = 1; $i <= 5; $i++)
                  @if($i <= round($tour['rating']))
                    ★
                  @else
                    ☆
                  @endif
                @endfor
              </div>
              <span>{{ number_format($tour['rating'], 1) }} ({{ rand(100, 500) }} reviews)</span>
            </div>
            <div class="tour-card-title">{{ $tour['name'] }}</div>
            <div class="tour-card-meta">
              <span class="tour-meta-item"><i class="fas fa-map-marker-alt"></i> {{ $tour['destination'] }}</span>
              @if($tour['min_group_size'] && $tour['max_group_size'])
                <span class="tour-meta-item"><i class="fas fa-users"></i> {{ $tour['min_group_size'] }}–{{ $tour['max_group_size'] }} pax</span>
              @endif
            </div>
            <div class="tour-card-desc">{{ Str::limit($tour['description'], 120) }}</div>
            <div class="tour-card-footer">
              <div class="tour-price">
                @if($tour['is_last_minute_deal'] && $tour['last_minute_discount_percentage'])
                  <span class="original-price">${{ number_format($tour['price'], 0) }}</span>
                  ${{ number_format($tour['price'] * (1 - $tour['last_minute_discount_percentage'] / 100), 0) }}
                @else
                  ${{ number_format($tour['price'], 0) }}
                @endif
                <span>/ person</span>
              </div>
              <button class="tour-book-btn" onclick="event.stopPropagation(); window.location.href='{{ route('tours.show', $tour['slug']) }}'">View Details</button>
            </div>
          </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
          <div class="text-muted">
            <i class="ri-compass-line ri-48px mb-3 d-block"></i>
            <p>No featured tours available at the moment.</p>
            <p>Please check back later or browse all our available packages.</p>
          </div>
        </div>
        @endforelse
      </div>
    </div>
  </section>

  <!-- KILIMANJARO TEASER -->
  <section class="kili-section">
    <div class="kili-bg"></div>
    <div class="kili-orb"></div>
    <div class="container kili-inner">
      <div class="kili-top">
        <div>
          <div class="section-label">The Roof of Africa</div>
          <h2 class="section-title">Conquer <span>Kilimanjaro</span> — Africa's Highest Peak</h2>
          <p class="section-subtitle">5,895 meters of sheer determination. Multiple routes for every fitness level. Our 94% summit success rate is the best in Tanzania.</p>
          <div class="kili-actions">
            <a href="{{ route('kilimanjaro') }}" class="btn-gold"><i class="fas fa-mountain"></i> Explore Routes</a>
            <a href="#" class="hero-btn-secondary" onclick="openModal('tour2');return false;"><i class="fas fa-play"></i> Watch Highlights</a>
          </div>
        </div>
        <div class="kili-visual">
          <div class="kili-main-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468778/WhatsApp_Image_2025-05-06_at_12.08.20_dnraal.jpg" alt="Kilimanjaro Summit" class="img-fluid" style="height:420px; object-fit:cover;"></div>
          <div class="kili-stats">
            <div class="kili-stat"><div class="kili-stat-val">5,895m</div><div class="kili-stat-lbl">Summit Height</div></div>
            <div class="kili-stat"><div class="kili-stat-val">94%</div><div class="kili-stat-lbl">Success Rate</div></div>
            <div class="kili-stat"><div class="kili-stat-val">7</div><div class="kili-stat-lbl">Routes Available</div></div>
            <div class="kili-stat"><div class="kili-stat-val">12K+</div><div class="kili-stat-lbl">Summited</div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- THINGS TO DO TEASER -->
  <section class="todo-section">
    <div class="container">
      <div class="section-header">
        <div>
          <div class="section-label">Activities</div>
          <h2 class="section-title">Things To <span>Do & Experience</span></h2>
        </div>
        <a href="{{ route('todo') }}" class="btn-outline">All Activities <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="todo-cats">
        <div class="todo-cat active"><i class="fas fa-th-large"></i> All</div>
        <div class="todo-cat"><i class="fas fa-paw"></i> Wildlife Safari</div>
        <div class="todo-cat"><i class="fas fa-mountain"></i> Trekking</div>
        <div class="todo-cat"><i class="fas fa-umbrella-beach"></i> Beach & Water</div>
        <div class="todo-cat"><i class="fas fa-landmark"></i> Cultural</div>
        <div class="todo-cat"><i class="fas fa-hot-air-balloon"></i> Adventure</div>
      </div>
      <div class="todo-grid">
        <div class="todo-card">
          <div class="todo-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468780/Wildbeest_and_zebra_k5obgc.jpg" alt="Great Migration Game Drive" class="img-fluid"><div class="todo-card-icon"><i class="fas fa-paw"></i></div></div>
          <div class="todo-card-body">
            <div class="todo-card-cat">Wildlife Safari</div>
            <div class="todo-card-title">Great Migration Game Drive</div>
            <div class="todo-card-desc">Witness over 1.5 million wildebeest crossing the Mara River in one of nature's greatest spectacles.</div>
            <div class="todo-card-footer">
              <div class="todo-from">From <strong>$320/day</strong></div>
              <button class="tour-book-btn" onclick="openModal('tour1')">Book</button>
            </div>
          </div>
        </div>
        <div class="todo-card">
          <div class="todo-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468777/waterbuck_ggd5wl.jpg" alt="Zanzibar Snorkeling & Diving" class="img-fluid"><div class="todo-card-icon"><i class="fas fa-water"></i></div></div>
          <div class="todo-card-body">
            <div class="todo-card-cat">Water Sports</div>
            <div class="todo-card-title">Zanzibar Snorkeling & Diving</div>
            <div class="todo-card-desc">Explore spectacular coral reefs with sea turtles, manta rays, and over 500 species of tropical fish.</div>
            <div class="todo-card-footer">
              <div class="todo-from">From <strong>$75/person</strong></div>
              <button class="tour-book-btn" onclick="openModal('tour3')">Book</button>
            </div>
          </div>
        </div>
        <div class="todo-card">
          <div class="todo-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468779/wildbbbeest_wckh1s.jpg" alt="Stone Town Heritage Walk" class="img-fluid"><div class="todo-card-icon"><i class="fas fa-landmark"></i></div></div>
          <div class="todo-card-body">
            <div class="todo-card-cat">Cultural</div>
            <div class="todo-card-title">Stone Town Heritage Walk</div>
            <div class="todo-card-desc">Wander ancient alleyways, spice markets, and the UNESCO-listed Stone Town with an expert local guide.</div>
            <div class="todo-card-footer">
              <div class="todo-from">From <strong>$45/person</strong></div>
              <button class="tour-book-btn" onclick="openModal('tour3')">Book</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="reviews-section">
    <div class="container">
      <div class="section-label">Testimonials</div>
      <h2 class="section-title">Stories from <span>Our Travelers</span></h2>
      <div class="reviews-track" id="reviewsTrack">
        <div class="review-card">
          <div class="review-card-top">
            <div class="reviewer-info">
              <div class="reviewer-avatar" style="background:linear-gradient(135deg,#1B4332,#40916C)">SJ</div>
              <div><div class="reviewer-name">Sarah Johnson</div><div class="reviewer-meta">🇺🇸 United States · June 2024</div></div>
            </div>
            <div class="stars">★★★★★</div>
          </div>
          <p class="review-quote">"TanzaniaTrips made our dream safari absolutely unforgettable. Our guide Moses knew every inch of the Serengeti and had us in right place at the right time—we witnessed a lion hunt! The camps were luxurious yet authentic."</p>
          <div class="review-tour">Tour: <strong>Classic Serengeti & Ngorongoro Safari · 7 Days</strong></div>
        </div>
        <div class="review-card">
          <div class="review-card-top">
            <div class="reviewer-info">
              <div class="reviewer-avatar" style="background:linear-gradient(135deg,#1a3a5c,#1e6ba8)">MH</div>
              <div><div class="reviewer-name">Marcus Hoffmann</div><div class="reviewer-meta">🇩🇪 Germany · March 2024</div></div>
            </div>
            <div class="stars">★★★★★</div>
          </div>
          <p class="review-quote">"Reaching Uhuru Peak was one of most emotional moments of my life. The TanzaniaTrips team managed our acclimatization perfectly and their encouragement made the difference. 94% success rate? Now I believe it."</p>
          <div class="review-tour">Tour: <strong>Kilimanjaro Lemosho Route · 9 Days</strong></div>
        </div>
        <div class="review-card">
          <div class="review-card-top">
            <div class="reviewer-info">
              <div class="reviewer-avatar" style="background:linear-gradient(135deg,#5a1a4a,#a83a8a)">AP</div>
              <div><div class="reviewer-name">Amara Petrov</div><div class="reviewer-meta">🇬🇧 United Kingdom · August 2024</div></div>
            </div>
            <div class="stars">★★★★★</div>
          </div>
          <p class="review-quote">"The Zanzibar extension after our safari was pure magic. Pristine beaches, incredible food, and the Stone Town tour was worth the entire trip alone. Every detail was thought of. Already planning my return!"</p>
          <div class="review-tour">Tour: <strong>Zanzibar Spice & Beach Escape · 5 Days</strong></div>
        </div>
      </div>
      <div class="reviews-controls">
        <div class="rev-btn" onclick="scrollReviews(-1)"><i class="fas fa-arrow-left"></i></div>
        <div class="rev-btn" onclick="scrollReviews(1)"><i class="fas fa-arrow-right"></i></div>
      </div>
    </div>
  </section>

  <!-- BLOG TEASER -->
  <section class="blog-section">
    <div class="container">
      <div class="section-header">
        <div>
          <div class="section-label">Travel Guides & Stories</div>
          <h2 class="section-title">From Our <span>Blog</span></h2>
        </div>
        <a href="{{ route('blog.index') }}" class="btn-outline">All Articles <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="blog-grid">
        <div class="blog-card featured" onclick="navigateTo('blog.index')">
          <div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468788/Serengeti_wbeest_lxzeyh.jpg" alt="Great Wildebeest Migration Guide" class="img-fluid" style="height:280px; object-fit:cover;"></div>
          <div class="blog-card-body">
            <div class="blog-card-cat">Wildlife Guide</div>
            <h3 class="blog-card-title">The Complete Guide to the Great Wildebeest Migration 2025</h3>
            <p class="blog-card-excerpt">Everything you need to know about timing your visit to witness one of nature's most breathtaking spectacles—month-by-month breakdown, best viewing spots, and expert photography tips.</p>
            <div class="blog-card-meta"><span><i class="fas fa-user"></i> James Osei</span><span><i class="fas fa-calendar"></i> Feb 12, 2025</span><span><i class="fas fa-clock"></i> 8 min read</span></div>
          </div>
        </div>
        <div class="blog-card" onclick="navigateTo('blog.index')">
          <div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468776/warthog-6605830_1920_f8rvu8.jpg" alt="Kilimanjaro Trekking Routes" class="img-fluid" style="height:160px; object-fit:cover;"></div>
          <div class="blog-card-body">
            <div class="blog-card-cat">Trekking Tips</div>
            <h3 class="blog-card-title">Machame vs. Lemosho: Which Kilimanjaro Route Is Right for You?</h3>
            <div class="blog-card-meta"><span><i class="fas fa-user"></i> Amina Rashid</span><span><i class="fas fa-calendar"></i> Jan 28, 2025</span></div>
          </div>
        </div>
        <div class="blog-card" onclick="navigateTo('blog.index')">
          <div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468774/Vulture_Wildbeest_tysgw1.jpg" alt="Zanzibar Hidden Gems" class="img-fluid" style="height:160px; object-fit:cover;"></div>
          <div class="blog-card-body">
            <div class="blog-card-cat">Destination Guide</div>
            <h3 class="blog-card-title">Zanzibar: 10 Hidden Gems Beyond Tourist Trail</h3>
            <div class="blog-card-meta"><span><i class="fas fa-user"></i> Zuri Mohammed</span><span><i class="fas fa-calendar"></i> Jan 15, 2025</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MAP SECTION -->
  <section class="map-section">
    <div class="container">
      <div class="section-header">
        <div>
          <div class="section-label">Our Coverage</div>
          <h2 class="section-title">We Cover All of <span>Tanzania</span></h2>
        </div>
      </div>
      <div class="map-wrapper">
        <div class="map-pins">
          <div class="map-pin" style="left:45%;top:30%"><div class="map-pin-dot"></div><div class="map-pin-label">Serengeti</div></div>
          <div class="map-pin" style="left:60%;top:45%"><div class="map-pin-dot"></div><div class="map-pin-label">Kilimanjaro</div></div>
          <div class="map-pin" style="left:85%;top:70%"><div class="map-pin-dot"></div><div class="map-pin-label">Zanzibar</div></div>
          <div class="map-pin" style="left:50%;top:40%"><div class="map-pin-dot"></div><div class="map-pin-label">Ngorongoro</div></div>
          <div class="map-pin" style="left:30%;top:65%"><div class="map-pin-dot"></div><div class="map-pin-label">Ruaha</div></div>
          <div class="map-pin" style="left:55%;top:35%"><div class="map-pin-dot"></div><div class="map-pin-label">Tarangire</div></div>
        </div>
        <div class="map-placeholder">
          <i class="fas fa-map-marked-alt"></i>
          <h3>Interactive Tanzania Map</h3>
          <p>Hover over pins to explore our destinations</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PARTNERS -->
  <section class="partners-section">
    <div class="partners-label">Trusted Partnerships & Certifications</div>
    <div class="container">
      <div class="partners-track">
        <div class="partner-item">TATO</div>
        <div class="partner-item">Tanzania National Parks</div>
        <div class="partner-item">KPAP</div>
        <div class="partner-item">Rainforest Alliance</div>
        <div class="partner-item">IATA</div>
        <div class="partner-item">TripAdvisor Excellence</div>
        <div class="partner-item">Lonely Planet</div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta-section">
    <div class="cta-orb cta-orb-1"></div>
    <div class="cta-orb cta-orb-2"></div>
    <div class="cta-inner">
      <div class="section-label">Start Your Journey</div>
      <h2 class="section-title">Ready to Discover <span>Tanzania</span>?</h2>
      <p class="section-subtitle">Whether it's your first safari or your tenth summit—we'll create the adventure of a lifetime. Custom itineraries available 24/7.</p>
      <div class="cta-actions">
        <a href="{{ route('tours.index') }}" class="cta-btn-white"><i class="fas fa-compass"></i> Browse All Tours</a>
        <a href="{{ route('contact') }}" class="cta-btn-outline"><i class="fas fa-headset"></i> Talk to an Expert</a>
      </div>
    </div>
  </section>

</div><!-- end page-home -->
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'home';
updateNavbar();
</script>
@endpush
