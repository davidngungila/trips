@extends('layouts.app')

@section('content')
<div id="page-custom-tours" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Bespoke Experiences</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Custom <span style="color:var(--gold-light)">Tours</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Your Tanzania adventure, designed exactly your way.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">How It Works</div>
      <h2 class="section-title" style="margin-bottom:12px;">Design Your <span>Dream Trip</span></h2>
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Tailor Made</div>
          <h2 class="section-title" style="margin-bottom:20px;">Perfectly <span>Customized</span></h2>
          <p>Every traveler is unique, and your Tanzania adventure should be too. Our custom tour service puts you in complete control of your itinerary, pace, and experiences.</p>
          <p>Work with our travel experts to design a journey that matches your interests, budget, and travel style. From private wildlife photography safaris to exclusive Kilimanjaro climbs, we bring your vision to life.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-comments"></i> Start Planning</a>
            <a href="{{ route('tours.index') }}" class="btn-outline">Browse Ideas</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-puzzle-piece" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
  <section style="background:var(--off-white);">
    <div class="container">
      <div class="contact-layout">
        <div class="contact-form-card">
          <h3>Plan Your Custom Tour</h3>
          <form method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div class="form-row">
              <div class="form-group"><label class="form-label">Your Name *</label><input type="text" name="name" class="form-input" placeholder="Your full name" required></div>
              <div class="form-group"><label class="form-label">Email Address *</label><input type="email" name="email" class="form-input" placeholder="your@email.com" required></div>
            </div>
            <div class="form-row">
              <div class="form-group"><label class="form-label">Phone / WhatsApp</label><input type="tel" name="phone" class="form-input" placeholder="+1 234 567 890"></div>
              <div class="form-group"><label class="form-label">Group Size</label><select name="group_size" class="form-select"><option>1 person</option><option>2 people</option><option>3-5 people</option><option>6-10 people</option><option>10+ people</option></select></div>
            </div>
            <div class="form-group"><label class="form-label">Travel Dates</label><input type="text" name="travel_dates" class="form-input" placeholder="e.g. June 15-25, 2025"></div>
            <div class="form-group"><label class="form-label">Budget per Person</label><select name="budget" class="form-select"><option>Under $1,000</option><option>$1,000-$2,500</option><option>$2,500-$5,000</option><option>$5,000-$10,000</option><option>$10,000+</option></select></div>
            <div class="form-group"><label class="form-label">Interests</label><select name="interests" class="form-select" multiple><option>Wildlife Safari</option><option>Kilimanjaro Climb</option><option>Zanzibar Beach</option><option>Cultural Tours</option><option>Photography</option><option>Bird Watching</option><option>Walking Safari</option><option>Maasai Village Visit</option></select></div>
            <div class="form-group"><label class="form-label">Accommodation Style</label><select name="accommodation" class="form-select"><option>Luxury Lodges</option><option>Mid-range Hotels</option><option>Budget Camps</option><option>Camping</option></select></div>
            <div class="form-group"><label class="form-label">Special Requirements</label><textarea name="message" class="form-textarea" placeholder="Tell us about your dream Tanzania experience, dietary restrictions, mobility needs, or any special requests..." rows="4"></textarea></div>
            <button type="submit" class="form-submit"><i class="fas fa-paper-plane"></i> &nbsp;Get Custom Itinerary Within 24 Hours</button>
          </form>
        </div>
        <div class="contact-info">
          <h2>Why Choose Custom?</h2>
          <p>Our custom tours offer complete flexibility and personalization that standard packages can't match.</p>
          <div class="contact-items">
            <div class="contact-item">
              <div class="contact-item-icon"><i class="fas fa-calendar-check" style="color:var(--green-dark)"></i></div>
              <div>
                <div class="contact-item-label">Flexible Dates</div>
                <div class="contact-item-val">Travel when you want, at your pace</div>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item-icon"><i class="fas fa-users-cog" style="color:var(--green-dark)"></i></div>
              <div>
                <div class="contact-item-label">Personalized Itinerary</div>
                <div class="contact-item-val">Designed around your interests</div>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item-icon"><i class="fas fa-star" style="color:var(--green-dark)"></i></div>
              <div>
                <div class="contact-item-label">Expert Guidance</div>
                <div class="contact-item-val">Dedicated trip coordinator</div>
              </div>
            </div>
            <div class="contact-item">
              <div class="contact-item-icon"><i class="fas fa-dollar-sign" style="color:var(--green-dark)"></i></div>
              <div>
                <div class="contact-item-label">Fixed Pricing</div>
                <div class="contact-item-val">No hidden fees or surprises</div>
              </div>
            </div>
          </div>
          <div style="background:var(--green-pale);border-radius:var(--radius-md);padding:20px;margin-top:24px;">
            <div style="font-weight:700;color:var(--green-deep);margin-bottom:8px;"><i class="fas fa-clock"></i> Quick Response</div>
            <p style="font-size:0.88rem;color:var(--gray-700);margin-bottom:12px;">Our custom tour specialists respond within 24 hours with detailed itineraries and pricing.</p>
            <a href="tel:+255754123456" class="btn-primary" style="width:fit-content;"><i class="fas fa-phone"></i> Call Now</a>
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
currentPage = 'custom-tours';
updateNavbar();
</script>
@endpush
