@extends('layouts.app')

@section('content')
<div id="page-gift-cards" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Perfect Gifts</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Travel <span style="color:var(--gold-light)">Gift Cards</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Give the gift of adventure to someone special.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Gift Options</div>
      <h2 class="section-title" style="margin-bottom:12px;">Choose <span>Amount</span></h2>
      <div class="values-grid">
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-gift"></i></div>
          <h3>Safari Adventure</h3>
          <p>Perfect for wildlife enthusiasts. Includes 3-day safari for one person with accommodation and meals.</p>
          <div class="price-tag">$500</div>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-mountain"></i></div>
          <h3>Kilimanjaro Climb</h3>
          <p>7-day Machame route trek for one person. Includes guides, equipment, and park fees.</p>
          <div class="price-tag">$1,200</div>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-umbrella-beach"></i></div>
          <h3>Zanzibar Escape</h3>
          <p>5-day beach holiday for two people. Includes accommodation, transfers, and spice tour.</p>
          <div class="price-tag">$800</div>
        </div>
        <div class="value-card">
          <div class="value-icon"><i class="fas fa-users"></i></div>
          <h3>Family Safari</h3>
          <p>4-day family safari for two adults and two children. Includes family-friendly accommodation and activities.</p>
          <div class="price-tag">$1,500</div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">How It Works</div>
          <h2 class="section-title" style="margin-bottom:20px;">Gift of <span>Adventure</span></h2>
          <p>TanzaniaTrips gift cards are the perfect way to share Tanzania's incredible experiences with your loved ones. Recipients can choose their preferred adventure and travel dates.</p>
          <p>Gift cards are delivered instantly via email and can be used toward any of our tours or custom itineraries. Valid for 2 years from purchase date.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-gift"></i> Purchase Gift Card</a>
            <a href="mailto:support@tanzaniatrips.com" class="btn-outline">Questions?</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-gift" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'gift-cards';
updateNavbar();
</script>
@endpush
