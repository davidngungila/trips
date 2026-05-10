@extends('layouts.app')

@section('content')
<div id="page-partners" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Our Network</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Travel <span style="color:var(--gold-light)">Partners</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Working together to provide exceptional Tanzania experiences.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Partnership Types</div>
      <h2 class="section-title" style="margin-bottom:12px;">Our <span>Partners</span></h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-hotel"></i></div>
          <h3>Lodge Partners</h3>
          <p>Premium eco-lodges and camps throughout Tanzania that share our commitment to sustainability and exceptional service.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-plane"></i></div>
          <h3>Airline Partners</h3>
          <p>Major airlines providing reliable connections to Tanzania and domestic flight services.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-umbrella-beach"></i></div>
          <h3>Travel Agencies</h3>
          <p>International tour operators who trust us to deliver authentic Tanzania experiences to their clients.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-camera"></i></div>
          <h3>Photography Partners</h3>
          <p>Professional photography companies and equipment providers for safari and landscape photography.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-car"></i></div>
          <h3>Transport Partners</h3>
          <p>Vehicle manufacturers and maintenance services ensuring safe, reliable transportation.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-heart"></i></div>
          <h3>Conservation Organizations</h3>
          <p>Wildlife conservation groups we support through donations and awareness programs.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Become a Partner</div>
          <h2 class="section-title" style="margin-bottom:20px;">Join Our <span>Network</span></h2>
          <p>We're always looking to expand our network with like-minded organizations that share our values of sustainability, quality, and authentic travel experiences.</p>
          <p>If you're interested in partnering with TanzaniaTrips, we'd love to hear from you. We offer competitive commission rates, marketing support, and access to our extensive client network.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-handshake"></i> Partnership Inquiries</a>
            <a href="{{ route('about') }}" class="btn-outline">Learn About Us</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-handshake" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'partners';
updateNavbar();
</script>
@endpush
