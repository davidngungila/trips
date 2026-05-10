<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo" style="color:#fff;margin-bottom:12px;cursor:pointer;" onclick="goHome()">
          <img src="{{ asset('tanzaniatripslogo.png') }}" alt="TanzaniaTrips Logo" class="footer-logo-img">
        </div>
        <p>Tanzania's most trusted tour operator since 2009. Crafting transformative African adventures with passion, expertise, and genuine care for our planet.</p>
        <div class="footer-socials">
          <div class="footer-social"><i class="fab fa-facebook-f"></i></div>
          <div class="footer-social"><i class="fab fa-instagram"></i></div>
          <div class="footer-social"><i class="fab fa-twitter"></i></div>
          <div class="footer-social"><i class="fab fa-youtube"></i></div>
          <div class="footer-social"><i class="fab fa-tripadvisor"></i></div>
        </div>
        <div class="footer-newsletter" style="margin-top:20px;">
          <p>Get travel inspiration & exclusive deals:</p>
          <div class="newsletter-form">
            <input type="email" class="newsletter-input" placeholder="Enter your email">
            <button class="newsletter-btn" onclick="subscribeNewsletter()">Subscribe</button>
          </div>
        </div>
      </div>
      <div>
        <h4>Destinations</h4>
        <ul class="footer-links">
          <li><a href="{{ route('destinations.index') }}">Serengeti</a></li>
          <li><a href="{{ route('kilimanjaro') }}">Kilimanjaro</a></li>
          <li><a href="{{ route('destinations.index') }}">Zanzibar</a></li>
          <li><a href="{{ route('destinations.index') }}">Ngorongoro</a></li>
          <li><a href="{{ route('destinations.index') }}">Tarangire</a></li>
          <li><a href="{{ route('destinations.index') }}">Ruaha</a></li>
          <li><a href="{{ route('destinations.index') }}">Pemba Island</a></li>
        </ul>
      </div>
      <div>
        <h4>Tour Types</h4>
        <ul class="footer-links">
          <li><a href="{{ route('tours.index') }}">Safari Packages</a></li>
          <li><a href="{{ route('kilimanjaro') }}">Kilimanjaro Treks</a></li>
          <li><a href="{{ route('tours.index') }}">Beach & Islands</a></li>
          <li><a href="{{ route('tours.index') }}">Cultural Tours</a></li>
          <li><a href="{{ route('tours.index') }}">Family Safaris</a></li>
          <li><a href="{{ route('tours.index') }}">Corporate Groups</a></li>
          <li><a href="{{ route('tours.index') }}">Custom Itineraries</a></li>
        </ul>
      </div>
      <div>
        <h4>Company</h4>
        <ul class="footer-links">
          <li><a href="{{ route('about') }}">About Us</a></li>
          <li><a href="{{ route('blog.index') }}">Travel Blog</a></li>
          <li><a href="{{ route('todo') }}">Things To Do</a></li>
          <li><a href="{{ route('contact') }}">Contact Us</a></li>
          <li><a href="{{ route('careers') }}">Careers</a></li>
          <li><a href="{{ route('press') }}">Press & Media</a></li>
          <li><a href="{{ route('affiliate') }}">Affiliate Program</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-copy">© 2025 TanzaniaTrips Ltd. All rights reserved. Registered in Tanzania (TZ-2009-04521)</div>
      <div class="footer-legal">
        <a href="{{ route('privacy') }}">Privacy Policy</a>
        <a href="{{ route('terms') }}">Terms & Conditions</a>
        <a href="{{ route('cookies') }}">Cookie Policy</a>
        <a href="{{ route('booking') }}">Booking Conditions</a>
      </div>
    </div>
  </div>
</footer>
