@extends('layouts.app')

@section('content')
<div id="page-press" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Media Center</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Press & <span style="color:var(--gold-light)">Media</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Latest news, stories, and media coverage from TanzaniaTrips.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Recent Coverage</div>
      <h2 class="section-title" style="margin-bottom:12px;">Latest <span>News</span></h2>
      <div class="blog-grid">
        <div class="blog-card">
          <div class="blog-card-img"><div class="img-placeholder img-serengeti" style="height:200px"><i class="fas fa-newspaper" style="font-size:3rem;"></i></div></div>
          <div class="blog-card-body">
            <div class="blog-card-cat">Press Release</div>
            <h3 class="blog-card-title">TanzaniaTrips Wins TripAdvisor Certificate of Excellence for 8th Year</h3>
            <div class="blog-card-meta"><span><i class="fas fa-calendar"></i> January 15, 2025</span></div>
            <p class="blog-card-excerpt">We're proud to announce that TanzaniaTrips has been awarded the TripAdvisor Certificate of Excellence for the 8th consecutive year, recognizing our commitment to exceptional customer service and authentic travel experiences.</p>
            <a href="#" class="btn-outline">Read More</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-card-img"><div class="img-placeholder img-kili" style="height:200px"><i class="fas fa-mountain" style="font-size:3rem;"></i></div></div>
          <div class="blog-card-body">
            <div class="blog-card-cat">Travel News</div>
            <h3 class="blog-card-title">New Kilimanjaro Route Opens for 2025 Season</h3>
            <div class="blog-card-meta"><span><i class="fas fa-calendar"></i> December 20, 2024</span></div>
            <p class="blog-card-excerpt">Tanzania National Parks Authority announces new northern circuit route on Kilimanjaro, expected to reduce congestion on popular Machame route.</p>
            <a href="#" class="btn-outline">Read More</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-card-img"><div class="img-placeholder img-zanzibar" style="height:200px"><i class="fas fa-umbrella-beach" style="font-size:3rem;"></i></div></div>
          <div class="blog-card-body">
            <div class="blog-card-cat">Industry Recognition</div>
            <h3 class="blog-card-title">TanzaniaTrips Featured in National Geographic</h3>
            <div class="blog-card-meta"><span><i class="fas fa-calendar"></i> November 8, 2024</span></div>
            <p class="blog-card-excerpt">Our commitment to sustainable tourism and authentic experiences gets recognition in National Geographic's latest edition on East African safari operators.</p>
            <a href="#" class="btn-outline">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Media Resources</div>
          <h2 class="section-title" style="margin-bottom:20px;">Press <span>Kits</span></h2>
          <p>For media inquiries, high-resolution images, interviews, or press releases, please contact our media relations team.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="mailto:media@tanzaniatrips.com" class="btn-primary"><i class="fas fa-envelope"></i> Media Inquiries</a>
            <a href="{{ route('contact') }}" class="btn-outline">General Contact</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-camera" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'press';
updateNavbar();
</script>
@endpush
