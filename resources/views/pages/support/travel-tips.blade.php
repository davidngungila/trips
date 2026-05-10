@extends('layouts.app')

@section('content')
<div id="page-travel-tips" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Expert Advice</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Travel <span style="color:var(--gold-light)">Tips</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Insider knowledge for the perfect Tanzania adventure.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Essential Tips</div>
      <h2 class="section-title" style="margin-bottom:12px;">Expert <span>Advice</span></h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-sun"></i></div>
          <h3>Packing Essentials</h3>
          <p>Lightweight layers, neutral colors, comfortable walking shoes, hat, sunscreen, insect repellent, binoculars, and camera. Pack for both hot days and cool evenings.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-heartbeat"></i></div>
          <h3>Health & Safety</h3>
          <p>Consult travel doctor 6-8 weeks before departure. Bring personal medications, stay hydrated, and use malaria prophylaxis. Comprehensive travel insurance recommended.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-camera"></i></div>
          <h3>Photography Tips</h3>
          <p>Bring telephoto lens for wildlife, polarizing filter for bright sun, extra batteries, and dust protection. Early morning and late afternoon light is best.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-money-bill-wave"></i></div>
          <h3>Money Matters</h3>
          <p>Bring US dollars in small bills. Credit cards accepted in tourist areas, but cash needed for markets and small purchases. ATMs available in major towns.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-language"></i></div>
          <h3>Cultural Respect</h3>
          <p>Learn basic Swahili greetings. Dress modestly when visiting villages. Always ask permission before photographing people. Support local communities respectfully.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-plug"></i></div>
          <h3>Power & Electronics</h3>
          <p>Bring universal adapter (Type G). Power banks essential for long game drives. Limited electricity in remote areas - solar chargers recommended.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Seasonal Guide</div>
          <h2 class="section-title" style="margin-bottom:20px;">Best Time to <span>Visit</span></h2>
          <p><strong>June-October (Dry Season):</strong> Best for wildlife viewing, clear skies, and Kilimanjaro climbing. Great Migration river crossings peak July-September.</p>
          <p><strong>November-March (Short Rains):</strong> Lush landscapes, fewer tourists, lower prices. Good for photography and bird watching.</p>
          <p><strong>April-May (Long Rains):</strong> Some roads may be impassable. Best for cultural experiences and Northern Tanzania.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-calendar"></i> Plan Your Trip</a>
            <a href="{{ route('tours.index') }}" class="btn-outline">View Tours</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-sun" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'travel-tips';
updateNavbar();
</script>
@endpush
