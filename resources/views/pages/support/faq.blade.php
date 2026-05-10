@extends('layouts.app')

@section('content')
<div id="page-faq" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Help Center</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Frequently Asked <span style="color:var(--gold-light)">Questions</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Everything you need to know about traveling with TanzaniaTrips.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Popular Questions</div>
      <h2 class="section-title" style="margin-bottom:12px;">Travel <span>FAQ</span></h2>
      <div class="faq-list">
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">When is the best time to visit Tanzania?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>The best time depends on your interests. June-October is ideal for wildlife viewing during dry season. January-February and June-October are best for Kilimanjaro climbing. Great Migration river crossings peak July-September.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">What should I pack for a safari?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>Lightweight clothing in neutral colors, comfortable walking shoes, hat, sunscreen, insect repellent, binoculars, camera, and any personal medications. We provide detailed packing lists upon booking.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">Do I need vaccinations?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>Yellow fever vaccination is required if entering from endemic countries. We recommend hepatitis A & B, typhoid, and anti-malaria prophylaxis. Consult your travel doctor 6-8 weeks before departure.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">Is Tanzania safe for tourists?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>Yes, Tanzania is generally very safe for tourists. We provide experienced guides, secure transportation, and 24/7 emergency support. Standard travel precautions apply as with any international travel.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">What currency is used?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>Tanzania Shilling (TZS) is the local currency, but US dollars are widely accepted in tourist areas. ATMs available in major towns, and credit cards accepted at hotels and larger establishments.</p>
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-q" onclick="toggleFaq(this)">Can I join a group tour?<i class="fas fa-chevron-down"></i></div>
          <div class="faq-a">
            <p>Yes! We offer scheduled group departures with fixed dates, perfect for solo travelers or couples who want to join others. Group sizes typically 6-12 people.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-mission" style="background:var(--off-white);">
    <div class="container">
      <div class="about-grid">
        <div class="about-text">
          <div class="section-label">Still Have Questions?</div>
          <h2 class="section-title" style="margin-bottom:20px;">Contact Our <span>Support Team</span></h2>
          <p>Can't find the answer you're looking for? Our travel experts are here to help with any questions about your Tanzania adventure.</p>
          <div style="display:flex;gap:14px;margin-top:24px;flex-wrap:wrap;">
            <a href="{{ route('contact') }}" class="btn-primary"><i class="fas fa-headset"></i> Contact Support</a>
            <a href="mailto:support@tanzaniatrips.com" class="btn-outline"><i class="fas fa-envelope"></i> Email Us</a>
          </div>
        </div>
        <div class="about-img-wrap">
          <div class="img-placeholder img-serengeti" style="height:480px"><i class="fas fa-question-circle" style="font-size:6rem;"></i></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'faq';
updateNavbar();
</script>
@endpush
