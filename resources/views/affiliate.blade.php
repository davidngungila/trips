@extends('layouts.app')

@section('title', 'Affiliate Program - TanzaniaTrips')

@section('content')
<!-- Page Hero -->
<section class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <div class="section-label">Partner With Us</div>
      <h1 class="section-title">Affiliate Program</h1>
      <p class="section-subtitle">Earn generous commissions by promoting Tanzania's premier safari and adventure experiences</p>
    </div>
  </div>
</section>

<!-- Affiliate Program Section -->
<section class="about-mission">
  <div class="container">
    <div class="about-grid">
      <div class="about-text">
        <h2>Why Partner With TanzaniaTrips?</h2>
        <p>Join our affiliate program and earn competitive commissions while sharing Tanzania's incredible adventures with your audience. As Tanzania's most trusted tour operator since 2009, we offer world-class experiences that convert well and delight travelers.</p>
        <p>Our affiliate program is designed for travel bloggers, influencers, travel agents, and anyone passionate about African adventures. You'll have access to premium marketing materials, real-time tracking, and dedicated support to maximize your earning potential.</p>
        
        <div class="about-values">
          <h3>Program Benefits</h3>
          <div class="values-grid">
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-percentage"></i>
              </div>
              <h3>Generous Commissions</h3>
              <p>Earn up to 10% commission on all referred bookings with our competitive tier structure</p>
            </div>
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-chart-line"></i>
              </div>
              <h3>Real-Time Tracking</h3>
              <p>Advanced dashboard with click tracking, conversion analytics, and performance insights</p>
            </div>
            <div class="value-card">
              <div class="value-icon">
                <i class="fas fa-clock"></i>
              </div>
              <h3>Long Cookie Duration</h3>
              <p>90-day cookie window ensures you get credit for bookings made within 3 months</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="about-img-wrap">
        <img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1778041558/reputable-tours/01_1778041531_0.jpg" alt="Affiliate Program" class="img-placeholder img-safari">
      </div>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="why-section">
  <div class="container">
    <div class="section-header">
      <div>
        <div class="section-label">Simple Process</div>
        <h2 class="section-title">How It Works</h2>
        <p class="section-subtitle">Get started in minutes and start earning from day one</p>
      </div>
    </div>
    
    <div class="why-features">
      <div class="why-feature">
        <div class="why-icon">
          <i class="fas fa-user-plus"></i>
        </div>
        <div>
          <div class="why-feature-title">1. Sign Up</div>
          <div class="why-feature-desc">Complete our simple affiliate registration form and get approved within 24 hours</div>
        </div>
      </div>
      
      <div class="why-feature">
        <div class="why-icon">
          <i class="fas fa-share-alt"></i>
        </div>
        <div>
          <div class="why-feature-title">2. Promote</div>
          <div class="why-feature-desc">Access our marketing toolkit and share your unique affiliate links across your channels</div>
        </div>
      </div>
      
      <div class="why-feature">
        <div class="why-icon">
          <i class="fas fa-chart-bar"></i>
        </div>
        <div>
          <div class="why-feature-title">3. Track & Earn</div>
          <div class="why-feature-desc">Monitor your performance in real-time and receive monthly commission payments</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Commission Structure -->
<section class="tours-section">
  <div class="container">
    <div class="section-header">
      <div>
        <div class="section-label">Commission Tiers</div>
        <h2 class="section-title">Earn More With Performance</h2>
        <p class="section-subtitle">Our tiered commission structure rewards your success</p>
      </div>
    </div>
    
    <div class="tour-card" style="margin-bottom: 20px;">
      <div class="tour-card-body">
        <h3 style="color: var(--green-dark); margin-bottom: 15px;">Standard Affiliate</h3>
        <p style="font-size: 1.2rem; font-weight: 700; color: var(--green-dark); margin-bottom: 10px;">5% Commission</p>
        <p style="color: var(--gray-500); margin-bottom: 15px;">Perfect for beginners and small content creators</p>
        <ul style="color: var(--gray-500); padding-left: 20px;">
          <li>Access to basic marketing materials</li>
          <li>Monthly performance reports</li>
          <li>Standard affiliate support</li>
        </ul>
      </div>
    </div>
    
    <div class="tour-card" style="margin-bottom: 20px;">
      <div class="tour-card-body">
        <h3 style="color: var(--green-dark); margin-bottom: 15px;">Premium Affiliate</h3>
        <p style="font-size: 1.2rem; font-weight: 700; color: var(--green-dark); margin-bottom: 10px;">7.5% Commission</p>
        <p style="color: var(--gray-500); margin-bottom: 15px;">For established affiliates with consistent performance</p>
        <ul style="color: var(--gray-500); padding-left: 20px;">
          <li>Advanced marketing toolkit</li>
          <li>Custom promotional materials</li>
          <li>Priority support</li>
          <li>Quarterly bonus opportunities</li>
        </ul>
      </div>
    </div>
    
    <div class="tour-card">
      <div class="tour-card-body">
        <h3 style="color: var(--green-dark); margin-bottom: 15px;">Elite Partner</h3>
        <p style="font-size: 1.2rem; font-weight: 700; color: var(--green-dark); margin-bottom: 10px;">10% Commission</p>
        <p style="color: var(--gray-500); margin-bottom: 15px;">Top-performing affiliates with proven track records</p>
        <ul style="color: var(--gray-500); padding-left: 20px;">
          <li>Exclusive marketing materials</li>
          <li>Dedicated account manager</li>
          <li>Custom commission structures</li>
          <li>Annual performance bonuses</li>
          <li>Co-marketing opportunities</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
  <div class="cta-inner">
    <div class="section-label">Ready to Start Earning?</div>
    <h2 class="section-title">Join Our Affiliate Program Today</h2>
    <p class="section-subtitle">Start promoting Tanzania's best adventures and earn generous commissions</p>
    <div class="cta-actions">
      <a href="{{ route('contact') }}" class="cta-btn-white">Apply Now</a>
      <a href="#" class="cta-btn-outline">Download Program Guide</a>
    </div>
  </div>
</section>
@endsection
