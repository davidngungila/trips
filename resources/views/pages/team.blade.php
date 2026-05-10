@extends('layouts.app')

@section('content')
<div id="page-team" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Our People</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Meet Our <span style="color:var(--gold-light)">Expert Team</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">120+ passionate travel professionals dedicated to your perfect Tanzania experience.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="team-grid">
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,var(--green-dark),var(--green-soft))">JM</div>
          <div class="team-name">Joseph Mwenda</div>
          <div class="team-role">Founder & CEO</div>
          <div class="team-bio">Founded TanzaniaTrips in 2009 with a vision to share Tanzania's natural wonders. 15+ years guiding experience.</div>
          <div class="team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,#1a3a5c,#2a6aa8)">AR</div>
          <div class="team-name">Amina Rashid</div>
          <div class="team-role">Head of Operations</div>
          <div class="team-bio">Ensures every trip runs flawlessly. Expert in logistics and customer experience management.</div>
          <div class="team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,#3a2a1a,#8a6a30)">MO</div>
          <div class="team-name">Moses Omondi</div>
          <div class="team-role">Lead Safari Guide</div>
          <div class="team-bio">KINAPA-certified guide with 10+ years experience. Wildlife expert and photographer.</div>
          <div class="team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,#3a1a3a,#8a3a8a)">ZM</div>
          <div class="team-name">Zuri Mohammed</div>
          <div class="team-role">Zanzibar Specialist</div>
          <div class="team-bio">Zanzibar native with deep knowledge of island culture, history, and hidden gems.</div>
          <div class="team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,#2a4a3a,#6a8a6a)">SK</div>
          <div class="team-name">Sarah Kimani</div>
          <div class="team-role">Customer Relations</div>
          <div class="team-bio">Your first point of contact. Ensures smooth communication and personalized service.</div>
          <div class="team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>
        <div class="team-card">
          <div class="team-avatar" style="background:linear-gradient(135deg,#4a3a2a,#8a6a4a)">DK</div>
          <div class="team-name">David Kiprono</div>
          <div class="team-role">Kilimanjaro Guide</div>
          <div class="team-bio">Summited Kilimanjaro 200+ times. Wilderness first aid certified.</div>
          <div class="team-social">
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'team';
updateNavbar();
</script>
@endpush
