@extends('layouts.app')

@section('content')
<div id="page-travel-insurance" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Protection</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Travel <span style="color:var(--gold-light)">Insurance</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Comprehensive coverage for your Tanzania adventure.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Coverage Options</div>
      <h2 class="section-title" style="margin-bottom:12px;">Insurance <span>Plans</span></h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Basic Coverage</h3>
          <p>Medical emergencies, trip cancellation, lost luggage, and travel delays. Ideal for budget travelers.</p>
          <div class="price-tag">From $45</div>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Comprehensive Coverage</h3>
          <p>All basic benefits plus emergency evacuation, adventure sports coverage, and political evacuation protection.</p>
          <div class="price-tag">From $85</div>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Premium Coverage</h3>
          <p>Complete protection including pre-existing conditions, high-risk activities, and comprehensive medical coverage.</p>
          <div class="price-tag">From $125</div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Why Travel Insurance?</div>
          <h2 class="section-title" style="margin-bottom:20px;">Essential <span>Protection</span></h2>
          <p>Travel insurance is essential for international travel, providing peace of mind and financial protection against unexpected events. Tanzania's remote locations and adventure activities make comprehensive coverage particularly important.</p>
          <p>Our insurance partners offer 24/7 worldwide assistance, medical evacuation coverage, and protection for trip cancellation, medical emergencies, and lost belongings.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="mailto:insurance@tanzaniatrips.com" class="btn-primary"><i class="fas fa-shield-alt"></i> Get Quote</a>
            <a href="{{ route('faq') }}" class="btn-outline">Learn More</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-shield-alt" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'travel-insurance';
updateNavbar();
</script>
@endpush
