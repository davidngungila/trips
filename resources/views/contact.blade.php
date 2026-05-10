@extends('layouts.app')

@section('content')
<div id="page-contact" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Get In Touch</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Contact <span style="color:var(--gold-light)">Us</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Our expert travel consultants respond within 2 hours, 7 days a week.</p>
    </div>
  </div>
  <div class="container">
    <div class="contact-layout">
      <div class="contact-info">
        <h2>Let's Plan Your Dream Trip</h2>
        <p>Whether you have a detailed itinerary in mind or just a dream of witnessing Tanzania's wildlife, we're here to make it a reality. No obligation, completely free consultation.</p>
        <div class="contact-items">
          <div class="contact-item"><div class="contact-item-icon"><i class="fas fa-map-marker-alt" style="color:var(--green-dark)"></i></div><div><div class="contact-item-label">Office Address</div><div class="contact-item-val">Moshi, Kilimanjaro Region, Tanzania</div></div></div>
          <div class="contact-item"><div class="contact-item-icon"><i class="fas fa-phone" style="color:var(--green-dark)"></i></div><div><div class="contact-item-label">Phone / WhatsApp</div><div class="contact-item-val">+255 754 123 456</div></div></div>
          <div class="contact-item"><div class="contact-item-icon"><i class="fas fa-envelope" style="color:var(--green-dark)"></i></div><div><div class="contact-item-label">Email</div><div class="contact-item-val">hello@tanzaniatrips.com</div></div></div>
          <div class="contact-item"><div class="contact-item-icon"><i class="fas fa-clock" style="color:var(--green-dark)"></i></div><div><div class="contact-item-label">Office Hours</div><div class="contact-item-val">Mon–Sat: 8am–8pm EAT · Sun: 10am–4pm</div></div></div>
        </div>
        <div style="background:var(--green-pale);border-radius:var(--radius-md);padding:20px;margin-bottom:24px;">
          <div style="font-weight:700;color:var(--green-deep);margin-bottom:8px;"><i class="fab fa-whatsapp" style="color:#25d366"></i> Instant WhatsApp Support</div>
          <p style="font-size:0.88rem;color:var(--gray-700);margin-bottom:12px;">Get instant answers on WhatsApp — typical reply time under 15 minutes during business hours.</p>
          <a href="https://wa.me/255754123456" class="btn-primary" style="width:fit-content;"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
        </div>
        <div style="display:flex;gap:10px;">
          <a href="#" class="footer-social" style="background:var(--gray-50);color:var(--green-dark);border-color:var(--gray-100);"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="footer-social" style="background:var(--gray-50);color:var(--green-dark);border-color:var(--gray-100);"><i class="fab fa-instagram"></i></a>
          <a href="#" class="footer-social" style="background:var(--gray-50);color:var(--green-dark);border-color:var(--gray-100);"><i class="fab fa-twitter"></i></a>
          <a href="#" class="footer-social" style="background:var(--gray-50);color:var(--green-dark);border-color:var(--gray-100);"><i class="fab fa-youtube"></i></a>
          <a href="#" class="footer-social" style="background:var(--gray-50);color:var(--green-dark);border-color:var(--gray-100);"><i class="fab fa-tripadvisor"></i></a>
        </div>
      </div>
      <div class="contact-form-card">
        <h3>Send Us a Message</h3>
        <form method="POST" action="{{ route('contact.submit') }}">
          @csrf
          <div class="form-row">
            <div class="form-group"><label class="form-label">First Name *</label><input type="text" name="first_name" class="form-input" placeholder="Your first name" required></div>
            <div class="form-group"><label class="form-label">Last Name *</label><input type="text" name="last_name" class="form-input" placeholder="Your last name" required></div>
          </div>
          <div class="form-row">
            <div class="form-group"><label class="form-label">Email Address *</label><input type="email" name="email" class="form-input" placeholder="your@email.com" required></div>
            <div class="form-group"><label class="form-label">Phone / WhatsApp</label><input type="tel" name="phone" class="form-input" placeholder="+1 234 567 890"></div>
          </div>
          <div class="form-group"><label class="form-label">Tour Interest</label><select name="tour_interest" class="form-select"><option value="">Select a tour type...</option><option>Safari Package</option><option>Kilimanjaro Trek</option><option>Zanzibar Beach</option><option>Custom Itinerary</option><option>Corporate Group</option><option>Other</option></select></div>
          <div class="form-row">
            <div class="form-group"><label class="form-label">Preferred Dates</label><input type="text" name="preferred_dates" class="form-input" placeholder="e.g. June 2025"></div>
            <div class="form-group"><label class="form-label">Group Size</label><select name="group_size" class="form-select"><option>1 person</option><option>2 people</option><option>3–5 people</option><option>6–10 people</option><option>10+ people</option></select></div>
          </div>
          <div class="form-group"><label class="form-label">Your Message</label><textarea name="message" class="form-textarea" placeholder="Tell us about your dream Tanzania experience, special requirements, or any questions..." rows="5"></textarea></div>
          <button type="submit" class="form-submit"><i class="fas fa-paper-plane"></i> &nbsp;Send Inquiry – Get Response in 2 Hours</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'contact';
updateNavbar();

// Handle form submission
function submitForm() {
  // This would typically make an AJAX call to your Laravel backend
  showToast('Message sent! We\'ll respond within 2 hours.');
}
</script>
@endpush
