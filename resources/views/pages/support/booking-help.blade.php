@extends('layouts.app')

@section('content')
<div id="page-booking-help" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Support Center</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Booking <span style="color:var(--gold-light)">Help</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Everything you need to know about booking your Tanzania adventure.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Common Questions</div>
      <h2 class="section-title" style="margin-bottom:12px;">Booking <span>FAQ</span></h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">How do I make a booking?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>You can book online through our website, by email at bookings@tanzaniatrips.com, or by calling +255 754 123 456. We'll respond within 2 hours to confirm availability and provide payment details.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">What payment methods do you accept?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>We accept bank transfers, credit/debit cards, PayPal, M-Pesa, Tigo Pesa, and Airtel Money. A 30% deposit is required to confirm booking, with balance due 30 days before departure.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">Can I customize my itinerary?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>Absolutely! All our tours can be fully customized. Contact us with your preferences for dates, group size, budget, and special interests, and we'll create a personalized itinerary.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">What is your cancellation policy?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>Free cancellation up to 30 days before departure (full refund). 15-30 days: 50% refund. Less than 15 days: no refund, but we offer free rebooking within 12 months.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">Do you offer travel insurance?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>Yes, we recommend comprehensive travel insurance and can arrange it through our partners. Coverage includes trip cancellation, medical evacuation, and lost luggage.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Need More Help?</div>
          <h2 class="section-title" style="margin-bottom:20px;">Contact Our <span>Support Team</span></h2>
          <p>Our travel consultants are available 7 days a week to help with any questions about your booking, itinerary changes, or special requirements.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="tel:+255754123456" class="btn-primary"><i class="fas fa-phone"></i> Call Us</a>
            <a href="mailto:support@tanzaniatrips.com" class="btn-outline"><i class="fas fa-envelope"></i> Email Support</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-headset" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'booking-help';
updateNavbar();
</script>
@endpush
