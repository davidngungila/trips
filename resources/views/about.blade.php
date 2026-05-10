@extends('layouts.app')

@section('content')
<div id="page-about" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Our Story</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">About <span style="color:var(--gold-light)">TanzaniaTrips</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">15 years of transforming adventures into life's most meaningful memories.</p>
    </div>
  </div>
  <section class="about-mission">
    <div class="container">
      <div class="about-grid">
        <div class="about-img-wrap"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468788/Zebra_herd_snsutd.jpg" alt="TanzaniaTrips Team" class="img-fluid" style="height:480px; object-fit:cover; width:100%;"></div>
        <div class="about-text">
          <div class="section-label">Who We Are</div>
          <h2 class="section-title" style="margin-bottom:20px;">Born in <span>Tanzania</span>, Grown Worldwide</h2>
          <p>Founded in 2009 by Moshi-born safari guide Joseph Mwenda, TanzaniaTrips began as a small family-run operation with a single Land Cruiser and an unshakeable passion for sharing Tanzania's natural wonders.</p>
          <p>Today, we are Tanzania's most trusted outbound tour operator — a team of 120+ passionate travel professionals including master naturalists, KINAPA-certified mountain guides, and hospitality experts who collectively speak 11 languages.</p>
          <p>What has never changed is our founding commitment: to provide authentic, responsible travel that creates lifelong memories for our guests while genuinely benefiting communities and ecosystems we depend upon.</p>
          <p>We are proud members of TATO (Tanzania Association of Tour Operators), certified by Kilimanjaro Porters Assistance Project, and a TripAdvisor Certificate of Excellence winner for 8 consecutive years.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('tours.index') }}" class="btn-primary"><i class="fas fa-compass"></i> Our Tours</a>
            <a href="{{ route('contact') }}" class="btn-outline">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-values">
    <div class="container">
      <div class="section-label">Our Values</div>
      <h2 class="section-title" style="margin-bottom:12px;">What Drives <span>Everything We Do</span></h2>
      <div class="values-grid">
        <div class="value-card"><div class="value-icon"><i class="fas fa-leaf"></i></div><h3>Sustainability First</h3><p>Every booking plants 3 trees. We partner exclusively with LEED-certified camps and eco-lodges, and offset 100% of our vehicle emissions.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-heart"></i></div><h3>Community Impact</h3><p>30% of all profits fund local school programs, women's cooperatives, and wildlife ranger training in communities we visit.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-star"></i></div><h3>Excellence Always</h3><p>98% client satisfaction. We respond to inquiries within 2 hours, 7 days a week. Your journey is never handed off to a third party.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-shield-alt"></i></div><h3>Safety & Security</h3><p>Fully licensed and bonded. 24/7 emergency support. Every guide is wilderness first aid certified and carries satellite communication.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-puzzle-piece"></i></div><h3>True Customization</h3><p>No two trips should be the same. We build every itinerary from scratch around your unique interests, group, pace, and budget.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-handshake"></i></div><h3>Transparent Pricing</h3><p>What you see is what you pay. No hidden fees, no surprise charges. Our pricing includes all government taxes and levies.</p></div>
      </div>
    </div>
  </section>
  <section class="team-section">
    <div class="container">
      <div class="section-label">The Team</div>
      <h2 class="section-title" style="margin-bottom:12px;">Meet Our <span>Expert Team</span></h2>
      <div class="team-grid">
        <div class="team-card"><div class="team-avatar" style="background:linear-gradient(135deg,var(--green-dark),var(--green-soft))">JM</div><div class="team-name">Joseph Mwenda</div><div class="team-role">Founder & CEO</div><div class="team-social"><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div></div>
        <div class="team-card"><div class="team-avatar" style="background:linear-gradient(135deg,#1a3a5c,#2a6aa8)">AR</div><div class="team-name">Amina Rashid</div><div class="team-role">Head of Operations</div><div class="team-social"><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-twitter"></i></a></div></div>
        <div class="team-card"><div class="team-avatar" style="background:linear-gradient(135deg,#3a2a1a,#8a6a30)">MO</div><div class="team-name">Moses Omondi</div><div class="team-role">Lead Safari Guide</div><div class="team-social"><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div></div>
        <div class="team-card"><div class="team-avatar" style="background:linear-gradient(135deg,#3a1a3a,#8a3a8a)">ZM</div><div class="team-name">Zuri Mohammed</div><div class="team-role">Zanzibar Specialist</div><div class="team-social"><a href="#"><i class="fab fa-linkedin-in"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div></div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'about';
updateNavbar();
</script>
@endpush
