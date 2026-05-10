@extends('layouts.app')

@section('content')
<div id="page-reviews" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Testimonials</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Customer <span style="color:var(--gold-light)">Reviews</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Real experiences from real travelers who chose TanzaniaTrips.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Recent Reviews</div>
      <h2 class="section-title" style="margin-bottom:12px;">What Our <span>Travelers Say</span></h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon" style="color:var(--gold-light);"><i class="fas fa-star"></i></div>
          <h3>Exceptional Service</h3>
          <p class="review-text">"Our Kilimanjaro climb with TanzaniaTrips was absolutely incredible. The guides were professional, the food was excellent, and the summit experience was life-changing. Highly recommend!"</p>
          <div class="review-meta">
            <div class="review-author">- Sarah Mitchell, UK</div>
            <div class="review-rating">★★★★★</div>
            <div class="review-date">January 2025</div>
          </div>
        </div>
        <div class="value-card">
          <div class="value-icon" style="color:var(--gold-light);"><i class="fas fa-star"></i></div>
          <h3>Amazing Safari</h3>
          <p class="review-text">"The Serengeti safari exceeded all our expectations. We saw the Big Five in just 3 days, and our guide's knowledge of wildlife was remarkable. Thank you TanzaniaTrips!"</p>
          <div class="review-meta">
            <div class="review-author">- Roberto Chen, Singapore</div>
            <div class="review-rating">★★★★★</div>
            <div class="review-date">December 2024</div>
          </div>
        </div>
        <div class="value-card">
          <div class="value-icon" style="color:var(--gold-light);"><i class="fas fa-star"></i></div>
          <h3>Perfect Zanzibar</h3>
          <p class="review-text">"Zanzibar was paradise! TanzaniaTrips arranged everything flawlessly - from Stone Town tours to spice plantations to pristine beaches. The cultural insights made it extra special."</p>
          <div class="review-meta">
            <div class="review-author">- Emma Wilson, Canada</div>
            <div class="review-rating">★★★★☆</div>
            <div class="review-date">November 2024</div>
          </div>
        </div>
        <div class="value-card">
          <div class="value-icon" style="color:var(--gold-light);"><i class="fas fa-star"></i></div>
          <h3>Professional Team</h3>
          <p class="review-text">"From initial inquiry to post-trip follow-up, TanzaniaTrips provided outstanding service. Their attention to detail and customer care is unmatched in the travel industry."</p>
          <div class="review-meta">
            <div class="review-author">- Michael Park, USA</div>
            <div class="review-rating">★★★★★</div>
            <div class="review-date">October 2024</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Share Your Experience</div>
          <h2 class="section-title" style="margin-bottom:20px;">Leave a <span>Review</span></h2>
          <p>Have you traveled with TanzaniaTrips? We'd love to hear about your experience and share it with future travelers.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-star"></i> Submit Review</a>
            <a href="{{ route('tours.index') }}" class="btn-outline">Browse Tours</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-comments" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'reviews';
updateNavbar();
</script>
@endpush
