@extends('layouts.app')

@section('content')
<div id="page-tour-show" class="page">
  <!-- Hero Section -->
  <div class="page-hero">
    @if($tour->image_url)
      <img src="{{ $tour->image_url }}" alt="{{ $tour->name }}" class="img-fluid" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;">
    @else
      <img src="https://picsum.photos/seed/{{ $tour->slug }}/1920/500.jpg" alt="{{ $tour->name }}" class="img-fluid" style="position:absolute;top:0;left:0;width:100%;height:100%;object-fit:cover;">
    @endif
    <div class="page-hero-overlay" style="position:absolute;top:0;left:0;width:100%;height:100%;background:linear-gradient(135deg,rgba(13,43,26,0.8) 0%,rgba(13,43,26,0.6) 100%);z-index:1;"></div>
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">{{ $tour->tour_type ?? 'Adventure' }}</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">{{ $tour->name }}</h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">
        {{ $tour->destination->name ?? 'Tanzania' }} • {{ $tour->duration_days ?? 'N/A' }} Days • {{ $tour->difficulty_level ?? 'Moderate' }}
      </p>
      <div class="tour-meta" style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap;margin-top:20px;">
        <span class="tour-meta-item" style="color:rgba(255,255,255,0.8);font-size:0.9rem;">
          <i class="fas fa-map-marker-alt" style="color:var(--gold-light);"></i> 
          {{ $tour->destination->name ?? 'Tanzania' }}
        </span>
        <span class="tour-meta-item" style="color:rgba(255,255,255,0.8);font-size:0.9rem;">
          <i class="fas fa-clock" style="color:var(--gold-light);"></i> 
          {{ $tour->duration_days ? $tour->duration_days . ' Days' : 'N/A' }}{{ $tour->duration_nights ? ' ' . $tour->duration_nights . ' Nights' : '' }}
        </span>
        <span class="tour-meta-item" style="color:rgba(255,255,255,0.8);font-size:0.9rem;">
          <i class="fas fa-users" style="color:var(--gold-light);"></i> 
          {{ $tour->max_group_size ? $tour->min_group_size . '-' . $tour->max_group_size : '2-12' }} People
        </span>
        <span class="tour-meta-item" style="color:rgba(255,255,255,0.8);font-size:0.9rem;">
          <i class="fas fa-signal" style="color:var(--gold-light);"></i> 
          {{ $tour->difficulty_level ?? 'Moderate' }}
        </span>
      </div>
    </div>
  </div>

  <!-- Tour Overview Section -->
  <section class="tour-overview-section">
    <div class="container">
      <div class="tour-grid">
        <div class="tour-content">
          <div class="section-label">Tour Overview</div>
          <h2 class="section-title" style="margin-bottom:20px;">Experience <span>{{ $tour->name }}</span></h2>
          <div class="tour-badges" style="display:flex;gap:8px;margin-bottom:24px;flex-wrap:wrap;">
            @if($tour->is_featured)
              <span class="badge-featured" style="background:var(--gold-light);color:#fff;padding:6px 16px;border-radius:20px;font-size:0.8rem;font-weight:600;">
                <i class="fas fa-star" style="margin-right:6px;"></i>Featured Tour
              </span>
            @endif
            @if($tour->difficulty_level)
              <span class="badge-difficulty" style="background:var(--green-soft);color:#fff;padding:6px 16px;border-radius:20px;font-size:0.8rem;font-weight:600;">
                {{ $tour->difficulty_level }}
              </span>
            @endif
            @if($tour->tour_type)
              <span class="badge-type" style="background:#3498db;color:#fff;padding:6px 16px;border-radius:20px;font-size:0.8rem;font-weight:600;">
                {{ ucfirst($tour->tour_type) }}
              </span>
            @endif
          </div>
          
          <div class="tour-description" style="color:var(--gray-500);line-height:1.7;margin-bottom:32px;">
            {!! $tour->description !!}
          </div>
          
          <!-- Tour Highlights -->
          @if($tour->highlights)
          <div class="tour-highlights" style="margin-bottom:32px;">
            <h3 style="margin-bottom:20px;color:var(--green-dark);display:flex;align-items:center;">
              <i class="fas fa-star" style="margin-right:8px;color:var(--gold-light);"></i>
              Tour Highlights
            </h3>
            <div class="highlights-grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(280px,1fr));gap:16px;">
              @php
                $highlights = is_array($tour->highlights) ? $tour->highlights : explode("\n", $tour->highlights);
              @endphp
              @foreach($highlights as $highlight)
              <div class="highlight-item" style="display:flex;align-items:flex-start;gap:12px;padding:16px;background:var(--green-pale);border-radius:12px;transition:var(--transition);">
                <i class="fas fa-check-circle" style="color:var(--green-soft);font-size:1rem;margin-top:2px;"></i>
                <span style="color:var(--gray-700);font-size:0.95rem;line-height:1.4;">{{ trim($highlight) }}</span>
              </div>
              @endforeach
            </div>
          </div>
          @endif

          <!-- Inclusions & Exclusions Row -->
        <div class="inclusions-exclusions-row" style="display:flex;gap:32px;align-items:flex-start;margin-bottom:32px;">
          <!-- Inclusions Box -->
          @if($tour->inclusions)
          <div class="inclusions-box" style="flex:1;background:linear-gradient(135deg, #e8f5e8 0%, #f0fdf4 50%, #ffffff 100%);border:2px solid #22c55e;border-radius:16px;padding:24px;box-shadow:0 4px 16px rgba(34, 197, 94, 0.1);">
            <div class="box-header" style="display:flex;align-items:center;margin-bottom:16px;">
              <div class="header-icon" style="width:40px;height:40px;background:linear-gradient(135deg, #22c55e 0%, #16a34a 100%);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-right:12px;">
                <i class="fas fa-check" style="color:#fff;font-size:1rem;"></i>
              </div>
              <div>
                <h3 style="color:#16a34a;margin:0;font-size:1.1rem;font-weight:600;">What's Included</h3>
                <p style="color:#6b7280;margin:2px 0 0;font-size:0.8rem;">Everything you need for your adventure</p>
              </div>
            </div>
            <ul style="list-style:none;padding:0;margin:0;">
              @php
                $inclusions = is_array($tour->inclusions) ? $tour->inclusions : explode("\n", $tour->inclusions);
              @endphp
              @foreach($inclusions as $inclusion)
              <li style="display:flex;align-items:center;gap:8px;margin-bottom:8px;padding:8px;background:rgba(255,255,255,0.6);border-radius:8px;">
                <i class="fas fa-check-circle" style="color:#22c55e;font-size:0.9rem;flex-shrink:0;"></i>
                <span style="color:#374151;font-size:0.85rem;line-height:1.4;">{{ trim($inclusion) }}</span>
              </li>
              @endforeach
            </ul>
          </div>
          @endif

          <!-- Exclusions Box -->
          @if($tour->exclusions)
          <div class="exclusions-box" style="flex:1;background:linear-gradient(135deg, #fef2f2 0%, #fef7f7 50%, #ffffff 100%);border:2px solid #ef4444;border-radius:16px;padding:24px;box-shadow:0 4px 16px rgba(239, 68, 68, 0.1);">
            <div class="box-header" style="display:flex;align-items:center;margin-bottom:16px;">
              <div class="header-icon" style="width:40px;height:40px;background:linear-gradient(135deg, #ef4444 0%, #dc2626 100%);border-radius:50%;display:flex;align-items:center;justify-content:center;margin-right:12px;">
                <i class="fas fa-times" style="color:#fff;font-size:1rem;"></i>
              </div>
              <div>
                <h3 style="color:#dc2626;margin:0;font-size:1.1rem;font-weight:600;">What's Not Included</h3>
                <p style="color:#6b7280;margin:2px 0 0;font-size:0.8rem;">Items to arrange separately</p>
              </div>
            </div>
            <ul style="list-style:none;padding:0;margin:0;">
              @php
                $exclusions = is_array($tour->exclusions) ? $tour->exclusions : explode("\n", $tour->exclusions);
              @endphp
              @foreach($exclusions as $exclusion)
              <li style="display:flex;align-items:center;gap:8px;margin-bottom:8px;padding:8px;background:rgba(255,255,255,0.6);border-radius:8px;">
                <i class="fas fa-times-circle" style="color:#ef4444;font-size:0.9rem;flex-shrink:0;"></i>
                <span style="color:#374151;font-size:0.85rem;line-height:1.4;">{{ trim($exclusion) }}</span>
              </li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>

        <!-- Booking Box in its own row - Full Width -->
        <div class="booking-row" style="width:100%;">
          <div class="booking-box" style="width:100%;background:linear-gradient(135deg, #fff 0%, var(--off-white) 100%);border:2px solid var(--green-light);border-radius:16px;padding:32px;box-shadow:0 4px 16px rgba(34, 197, 94, 0.15);">
            <div class="booking-content" style="display:flex;gap:32px;align-items:flex-start;">
              <!-- Left Section - Badge and Price -->
              <div class="booking-left" style="flex:1;text-align:center;">
                <div class="booking-badge" style="display:inline-block;background:var(--gold-light);color:#fff;padding:8px 16px;border-radius:20px;font-size:0.8rem;font-weight:600;margin-bottom:16px;">
                  <i class="fas fa-star" style="margin-right:6px;"></i>
                  {{ $tour->is_featured ? 'Featured Tour' : 'Popular Choice' }}
                </div>
                
                <div class="price-section">
                  <div class="price-label" style="color:var(--gray-500);font-size:0.9rem;margin-bottom:6px;text-transform:uppercase;letter-spacing:1px;">Starting from</div>
                  <div class="price-amount" style="font-size:3rem;font-weight:800;color:var(--green-dark);">
                    ${{ number_format($tour->price ?? 1500, 0) }}
                  </div>
                  <div class="price-note" style="color:var(--gray-500);font-size:0.9rem;margin-top:4px;">per person</div>
                </div>
                
                @if($tour->starting_price && $tour->starting_price < $tour->price)
                <div class="price-savings" style="background:#e74c3c;color:#fff;padding:8px 16px;border-radius:8px;margin-top:16px;font-size:0.8rem;font-weight:600;display:inline-block;">
                  <i class="fas fa-tag" style="margin-right:6px;"></i>
                  Save ${{ number_format($tour->price - $tour->starting_price, 0) }} ({{ round((($tour->price - $tour->starting_price) / $tour->price * 100), 0) }}%)
                </div>
                @endif
              </div>

              <!-- Middle Section - Tour Information -->
              <div class="booking-middle" style="flex:1;">
                <h4 style="color:var(--green-dark);margin:0 0 20px;font-size:1.2rem;font-weight:600;">Tour Information</h4>
                <div class="info-grid" style="display:grid;grid-template-columns:repeat(2,1fr);gap:16px;">
                  <div class="info-item" style="display:flex;align-items:center;gap:8px;">
                    <i class="fas fa-map-marker-alt" style="color:var(--green-soft);font-size:1rem;"></i>
                    <span style="color:#374151;font-size:0.95rem;">{{ $tour->destination->name ?? 'Tanzania' }}</span>
                  </div>
                  <div class="info-item" style="display:flex;align-items:center;gap:8px;">
                    <i class="fas fa-clock" style="color:var(--green-soft);font-size:1rem;"></i>
                    <span style="color:#374151;font-size:0.95rem;">{{ $tour->duration_days ?? 'N/A' }} Days</span>
                  </div>
                  <div class="info-item" style="display:flex;align-items:center;gap:8px;">
                    <i class="fas fa-users" style="color:var(--green-soft);font-size:1rem;"></i>
                    <span style="color:#374151;font-size:0.95rem;">{{ $tour->max_group_size ? $tour->min_group_size . '-' . $tour->max_group_size : '2-12' }} People</span>
                  </div>
                  <div class="info-item" style="display:flex;align-items:center;gap:8px;">
                    <i class="fas fa-signal" style="color:var(--green-soft);font-size:1rem;"></i>
                    <span style="color:#374151;font-size:0.95rem;">{{ $tour->difficulty_level ?? 'Moderate' }}</span>
                  </div>
                </div>
              </div>

              <!-- Right Section - Booking Actions -->
              <div class="booking-right" style="flex:1;text-align:center;">
                <div class="booking-actions" style="display:flex;flex-direction:column;gap:12px;">
                  <a href="{{ route('contact') }}?tour={{ $tour->slug }}" class="btn btn-primary" style="text-decoration:none;display:inline-block;text-align:center;padding:14px 24px;border-radius:8px;font-weight:600;font-size:1rem;width:100%;">
                    <i class="fas fa-calendar-check" style="margin-right:8px;"></i> Book Now
                  </a>
                  <a href="tel:+255123456789" class="btn btn-outline" style="text-decoration:none;display:inline-block;text-align:center;padding:14px 24px;border-radius:8px;font-weight:600;font-size:1rem;width:100%;border:1px solid var(--green-soft);color:var(--green-dark);">
                    <i class="fas fa-phone" style="margin-right:8px;"></i> Call Us
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Itinerary Section -->
  @if($tour->itineraries && $tour->itineraries->count() > 0)
  <section class="itinerary-section" style="background:var(--off-white);padding:80px 0;">
    <div class="container">
      <div class="section-label">Daily Itinerary</div>
      <h2 class="section-title" style="margin-bottom:40px;">Your <span>Adventure</span> Day by Day</h2>
      <div class="itinerary-timeline">
        @foreach($tour->itineraries->sortBy('day_number') as $itinerary)
        <div class="itinerary-day" style="display:flex;gap:32px;margin-bottom:48px;">
          <div class="day-number" style="flex-shrink:0;width:80px;height:80px;background:var(--green-dark);border-radius:50%;display:flex;align-items:center;justify-content:center;color:#fff;font-size:1.5rem;font-weight:700;">
            Day {{ $itinerary->day_number }}
          </div>
          <div class="day-content" style="flex:1;background:#fff;padding:32px;border-radius:16px;box-shadow:var(--shadow-sm);">
            <h3 style="color:var(--green-dark);margin:0 0 16px;font-size:1.3rem;">{{ $itinerary->title }}</h3>
            <div class="day-description" style="color:var(--gray-500);line-height:1.6;">
              {!! $itinerary->description !!}
            </div>
            @if($itinerary->meals)
            <div class="day-meals" style="margin-top:16px;display:flex;gap:16px;">
              @if(strpos($itinerary->meals, 'breakfast') !== false)
              <span class="meal-tag" style="background:#fef3c7;color:#92400e;padding:4px 12px;border-radius:12px;font-size:0.8rem;">
                <i class="fas fa-coffee" style="margin-right:4px;"></i>Breakfast
              </span>
              @endif
              @if(strpos($itinerary->meals, 'lunch') !== false)
              <span class="meal-tag" style="background:#dbeafe;color:#1e40af;padding:4px 12px;border-radius:12px;font-size:0.8rem;">
                <i class="fas fa-utensils" style="margin-right:4px;"></i>Lunch
              </span>
              @endif
              @if(strpos($itinerary->meals, 'dinner') !== false)
              <span class="meal-tag" style="background:#fce7f3;color:#9f1239;padding:4px 12px;border-radius:12px;font-size:0.8rem;">
                <i class="fas fa-utensils" style="margin-right:4px;"></i>Dinner
              </span>
              @endif
            </div>
            @endif
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif

  <!-- Related Tours -->
  @if($relatedTours && $relatedTours->count() > 0)
  <section class="related-tours-section" style="padding:80px 0;">
    <div class="container">
      <div class="section-label">Similar Tours</div>
      <h2 class="section-title" style="margin-bottom:40px;">You Might Also <span>Like</span></h2>
      <div class="grid-3">
        @foreach($relatedTours as $relatedTour)
        <div class="tour-card" style="background:var(--off-white);border-radius:16px;overflow:hidden;box-shadow:var(--shadow-sm);transition:var(--transition);cursor:pointer;" onclick="window.location.href='{{ route('tours.show', $relatedTour->slug) }}'">
          <div class="tour-card-img" style="height:200px;overflow:hidden;">
            @if($relatedTour->image_url)
              <img src="{{ $relatedTour->image_url }}" alt="{{ $relatedTour->name }}" class="img-fluid" style="width:100%;height:100%;object-fit:cover;transition:var(--transition);">
            @else
              <img src="https://picsum.photos/seed/{{ $relatedTour->slug }}/400/200.jpg" alt="{{ $relatedTour->name }}" class="img-fluid" style="width:100%;height:100%;object-fit:cover;transition:var(--transition);">
            @endif
          </div>
          <div class="tour-card-body" style="padding:24px;">
            <div class="tour-reviews" style="display:flex;align-items:center;gap:8px;margin-bottom:16px;">
              <div class="stars" style="color:var(--gold-light);font-size:0.9rem;">
                @for($i = 1; $i <= 5; $i++)
                  @if($i <= round($relatedTour->rating ?? 4.5))
                    ★
                  @else
                    ☆
                  @endif
                @endfor
              </div>
              <span style="color:var(--gray-500);font-size:0.9rem;">{{ $relatedTour->rating ?? '4.9' }} ({{ rand(50, 500) }} reviews)</span>
            </div>
            <h3 style="color:var(--green-dark);margin:0 0 12px;font-size:1.2rem;">{{ $relatedTour->name }}</h3>
            <div class="tour-card-meta" style="display:flex;gap:16px;margin-bottom:16px;flex-wrap:wrap;">
              <span class="tour-meta-item" style="color:var(--gray-500);font-size:0.85rem;">
                <i class="fas fa-map-marker-alt" style="color:var(--green-soft);"></i> {{ $relatedTour->destination->name ?? 'Tanzania' }}
              </span>
              <span class="tour-meta-item" style="color:var(--gray-500);font-size:0.85rem;">
                <i class="fas fa-users" style="color:var(--green-soft);"></i> {{ $relatedTour->max_group_size ? $relatedTour->min_group_size . '-' . $relatedTour->max_group_size : '2-12' }}
              </span>
            </div>
            <div class="tour-card-desc" style="color:var(--gray-500);font-size:0.9rem;line-height:1.5;margin-bottom:20px;">
              {{ Str::limit($relatedTour->short_description ?? $relatedTour->description ?? 'Experience amazing adventures in Tanzania.', 120) }}
            </div>
            <div class="tour-card-footer" style="display:flex;justify-content:space-between;align-items:center;">
              <div class="tour-price" style="font-size:1.5rem;font-weight:700;color:var(--green-dark);">
                ${{ number_format($relatedTour->price ?? 1500, 0) }}
                <span style="font-size:0.8rem;color:var(--gray-500);font-weight:400;">/person</span>
              </div>
              <button class="btn btn-outline" style="padding:8px 16px;border-radius:8px;font-size:0.9rem;">View Details</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'tours';
updateNavbar();

// Smooth scroll for any anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Add hover effects to tour cards
document.querySelectorAll('.tour-card').forEach(card => {
    card.addEventListener('mouseenter', function() {
        this.style.transform = 'translateY(-4px)';
        this.style.boxShadow = '0 12px 24px rgba(0,0,0,0.15)';
    });
    
    card.addEventListener('mouseleave', function() {
        this.style.transform = 'translateY(0)';
        this.style.boxShadow = 'var(--shadow-sm)';
    });
});
</script>
@endpush
