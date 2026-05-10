@extends('layouts.app')

@section('content')
<div id="page-sustainability" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Our Commitment</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Sustainable <span style="color:var(--gold-light)">Tourism</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Protecting Tanzania's natural heritage for future generations.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Our Impact</div>
      <h2 class="section-title" style="margin-bottom:12px;">Making a <span>Difference</span></h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-leaf"></i></div>
          <h3>Environmental Protection</h3>
          <p>Every tour plants 3 trees. We offset 100% of our carbon emissions and partner only with eco-certified lodges.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-users"></i></div>
          <h3>Community Support</h3>
          <p>30% of profits fund local schools, healthcare, and women's cooperatives in communities we visit.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-graduation-cap"></i></div>
          <h3>Education & Training</h3>
          <p>We provide ongoing training for our guides and support local conservation education programs.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Wildlife Conservation</h3>
          <p>We support anti-poaching units and wildlife research projects in all areas we operate.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Our Initiatives</div>
          <h2 class="section-title" style="margin-bottom:20px;">How We <span>Make a Difference</span></h2>
          <p>Since 2009, TanzaniaTrips has been committed to sustainable tourism that benefits both our guests and the communities we visit. We believe that responsible travel should be the standard, not the exception.</p>
          <p>Our sustainability programs focus on three key areas: environmental conservation, community development, and cultural preservation. Every booking directly contributes to these initiatives.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('tours.index') }}" class="btn-primary"><i class="fas fa-compass"></i> Sustainable Tours</a>
            <a href="{{ route('contact') }}" class="btn-outline">Learn More</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-leaf" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'sustainability';
updateNavbar();
</script>
@endpush
