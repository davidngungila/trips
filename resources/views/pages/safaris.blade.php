@extends('layouts.app')

@section('content')
<div id="page-safaris" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Our Speciality</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Tanzania <span style="color:var(--gold-light)">Safaris</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Expertly guided wildlife adventures across Tanzania's most spectacular parks.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Safari Types</div>
      <h2 class="section-title" style="margin-bottom:12px;">Our <span>Safari Experiences</span></h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-binoculars"></i></div>
          <h3>Classic Safaris</h3>
          <p>Traditional game drives in Serengeti, Ngorongoro, Tarangire, and Lake Manyara with experienced guides.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-camera"></i></div>
          <h3>Photography Safaris</h3>
          <p>Specialized tours for photographers with optimal lighting, positioning, and wildlife viewing opportunities.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-campground"></i></div>
          <h3>Walking Safaris</h3>
          <p>Immersive walking tours with armed rangers in Selous, Ruaha, and remote wilderness areas.</p>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-moon"></i></div>
          <h3>Night Safaris</h3>
          <p>Unique nocturnal wildlife viewing experiences with spotlights and expert night game drives.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Why Choose Our Safaris</div>
          <h2 class="section-title" style="margin-bottom:20px;">The <span>Safari Difference</span></h2>
          <p>Our safaris are led by experienced naturalist guides who know Tanzania's wildlife, ecosystems, and hidden gems. We use custom 4x4 vehicles, maintain small group sizes, and prioritize wildlife conservation in every tour.</p>
          <p>Whether you're seeking the Great Migration, Big Five, or off-the-beaten-path adventures, our safari experiences deliver authentic encounters with Tanzania's incredible biodiversity while supporting local communities and conservation efforts.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('tours.index') }}" class="btn-primary"><i class="fas fa-compass"></i> Safari Packages</a>
            <a href="{{ route('contact') }}" class="btn-outline">Custom Safari</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-binoculars" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'safaris';
updateNavbar();
</script>
@endpush
