@extends('layouts.app')

@section('content')
<div id="page-careers" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Join Us</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Work With <span style="color:var(--gold-light)">TanzaniaTrips</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Join our passionate team sharing Tanzania's wonders with the world.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Current Openings</div>
      <h2 class="section-title" style="margin-bottom:12px;">Available <span>Positions</span></h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-user-tie"></i></div>
          <h3>Safari Guide</h3>
          <p>Lead small groups on wildlife safaris. Must have KINAPA certification and 3+ years experience.</p>
          <div class="career-meta"><span class="tag tag-green">Full-time</span><span>Moshi, Tanzania</span></div>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-mountain"></i></div>
          <h3>Kilimanjaro Guide</h3>
          <p>Summit specialist with wilderness first aid certification. High altitude experience required.</p>
          <div class="career-meta"><span class="tag tag-green">Full-time</span><span>Moshi, Tanzania</span></div>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-headset"></i></div>
          <h3>Travel Consultant</h3>
          <p>Handle client inquiries and create custom itineraries. Strong communication skills essential.</p>
          <div class="career-meta"><span class="tag tag-gold">Full-time</span><span>Remote Available</span></div>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-camera"></i></div>
          <h3>Content Creator</h3>
          <p>Create engaging content for social media and marketing. Photography/videography skills.</p>
          <div class="career-meta"><span class="tag tag-green">Contract</span><span>Remote Available</span></div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Why Work With Us</div>
          <h2 class="section-title" style="margin-bottom:20px;">Join Our <span>Mission</span></h2>
          <p>At TanzaniaTrips, we're more than a tour company - we're a family of passionate individuals dedicated to showcasing Tanzania's natural beauty while creating positive impact.</p>
          <p>We offer competitive salaries, professional development opportunities, and the chance to work in one of the world's most beautiful countries. Whether you're guiding on safari routes or managing client relationships from afar, you'll be part of something meaningful.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="mailto:careers@tanzaniatrips.com" class="btn-primary"><i class="fas fa-envelope"></i> Send Resume</a>
            <a href="{{ route('about') }}" class="btn-outline">Learn About Us</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-users" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'careers';
updateNavbar();
</script>
@endpush
