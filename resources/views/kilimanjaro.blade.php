@extends('layouts.app')

@section('content')
<div id="page-kilimanjaro" class="page">
  <div class="page-hero" style="padding:140px 0 80px;">
    <div class="page-hero-content container">
      <div class="section-label" style="justify-content:center;color:var(--green-light)">Africa's Highest Peak</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2.5rem,6vw,4rem);">Conquer <span style="color:var(--gold-light)">Kilimanjaro</span></h1>
      <p class="section-subtitle" style="margin:12px auto 28px;color:rgba(255,255,255,0.7);">5,895m · 94% Summit Success Rate · 7 Routes Available · Year-Round Climbing</p>
      <div style="display:flex;gap:14px;justify-content:center;flex-wrap:wrap;">
        <a href="#" class="btn-gold" onclick="openModal('tour2');return false;"><i class="fas fa-mountain"></i> Book Your Trek</a>
        <a href="{{ route('contact') }}" class="hero-btn-secondary"><i class="fas fa-headset"></i> Free Consultation</a>
      </div>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="kili-stats" style="position:static;transform:none;width:100%;margin-bottom:60px;background:var(--green-pale);border:1px solid var(--green-light);border-radius:var(--radius-md);overflow:hidden;display:flex;">
        <div class="kili-stat" style="flex:1;"><div class="kili-stat-val" style="color:var(--green-dark);">5,895m</div><div class="kili-stat-lbl" style="color:var(--gray-500);">Summit Altitude</div></div>
        <div class="kili-stat" style="flex:1;"><div class="kili-stat-val" style="color:var(--green-dark);">{{ $stats['total_tours'] }}</div><div class="kili-stat-lbl" style="color:var(--gray-500);">Available Tours</div></div>
        <div class="kili-stat" style="flex:1;"><div class="kili-stat-val" style="color:var(--green-dark);">{{ $stats['featured_tours'] }}</div><div class="kili-stat-lbl" style="color:var(--gray-500);">Featured</div></div>
        <div class="kili-stat" style="flex:1;"><div class="kili-stat-val" style="color:var(--green-dark);">${{ number_format($stats['avg_price'], 0) }}</div><div class="kili-stat-lbl" style="color:var(--gray-500);">Avg Price</div></div>
        <div class="kili-stat" style="flex:1;"><div class="kili-stat-val" style="color:var(--green-dark);">{{ number_format($stats['avg_duration'], 1) }}</div><div class="kili-stat-lbl" style="color:var(--gray-500);">Avg Days</div></div>
      </div>
      <div class="section-label">Choose Your Route</div>
      <h2 class="section-title" style="margin-bottom:32px;">All Kilimanjaro <span>Routes & Packages</span></h2>
      <div class="grid-2">
        @forelse($kilimanjaroTours as $tour)
        <div class="tour-card" onclick="window.location.href='/tours/{{ $tour->slug }}'" style="cursor:pointer;">
          <div class="tour-card-img">
            @if($tour->image_url)
              <img src="{{ $tour->image_url }}" alt="{{ $tour->name }}" class="img-fluid">
            @else
              <img src="https://picsum.photos/seed/{{ $tour->slug }}/400/300.jpg" alt="{{ $tour->name }}" class="img-fluid">
            @endif
            <div class="tour-card-tags">
                @if($tour->is_featured)
                    <span class="tag tag-gold">Featured</span>
                @endif
                @if($tour->tour_type)
                    <span class="tag tag-green">{{ ucfirst($tour->tour_type) }}</span>
                @endif
            </div>
            <div class="tour-duration">{{ $tour->duration_days ? $tour->duration_days . ' Days' : 'N/A' }}{{ $tour->duration_nights ? ' ' . $tour->duration_nights . ' Nights' : '' }}</div>
          </div>
          <div class="tour-card-body">
            <div class="tour-reviews">
              <div class="stars">★★★★★</div>
              <span>{{ $tour->rating ?? '4.9' }} ({{ rand(50, 500) }})</span>
            </div>
            <div class="tour-card-title">{{ $tour->name }}</div>
            <div class="tour-card-meta">
              <span class="tour-meta-item"><i class="fas fa-map-marker-alt"></i> {{ $tour->destination->name ?? 'Tanzania' }}</span>
              <span class="tour-meta-item"><i class="fas fa-users"></i> {{ $tour->max_group_size ?? '2-12' }}</span>
            </div>
            <div class="tour-card-desc">{{ Str::limit($tour->short_description ?? $tour->description ?? 'Experience unforgettable Kilimanjaro adventure with our expert guides.', 120) }}</div>
            <div class="tour-card-footer">
              <div class="tour-price">${{ number_format($tour->price ?? 1500, 0) }}<span>/person</span></div>
              <button class="tour-book-btn">Book Now</button>
            </div>
          </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
          <div class="text-muted">
            <i class="ri-mountain-line ri-48px mb-3 d-block"></i>
            <p>No Kilimanjaro tours available at the moment.</p>
            <p>Please check back later or contact us for custom trekking packages.</p>
          </div>
        </div>
        @endforelse
      </div>
    </div>
  </section>
  <!-- What's included -->
  <section style="padding:60px 0 80px;background:var(--off-white);">
    <div class="container">
      <div class="section-label">What's Included</div>
      <h2 class="section-title" style="margin-bottom:36px;">Every Trek Includes</h2>
      <div class="grid-4">
        <div class="value-card"><div class="value-icon"><i class="fas fa-user-tie"></i></div><h3>Expert Guides</h3><p>KINAPA-certified lead guides with 10+ years. Speak English, German & more.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-users"></i></div><h3>Porter Team</h3><p>Dedicated Kilimanjaro Porter Assistance Project (KPAP) partner porters.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-campground"></i></div><h3>Premium Gear</h3><p>High-altitude sleeping bags, quality tents, and insulated dining tents included.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-utensils"></i></div><h3>Full Board</h3><p>3 hot meals daily plus afternoon snacks. Vegetarian and dietary options available.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-heartbeat"></i></div><h3>Medical Support</h3><p>Pulse oximeters, first aid kits, oxygen, and rescue protocols for every team.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-id-card"></i></div><h3>Park Fees</h3><p>All KINAPA fees, camping permits, and rescue fees included in your package price.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-bus"></i></div><h3>Transfers</h3><p>Airport pick-up, hotel transfer to Moshi, and gate transfer all included.</p></div>
        <div class="value-card"><div class="value-icon"><i class="fas fa-certificate"></i></div><h3>Summit Certificate</h3><p>Official KINAPA Uhuru Peak certificate upon successful summit.</p></div>
      </div>
    </div>
  </section>
</div><!-- end kilimanjaro page -->
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'kilimanjaro';
updateNavbar();

// Tour details modal
function showTourDetails(tourId) {
    // Find tour data
    const tours = @json($kilimanjaroTours->toArray());
    const tour = tours.find(t => t.id === tourId);
    
    if (tour) {
        const modal = document.createElement('div');
        modal.innerHTML = `
            <div class="modal fade" id="tourModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="ri-mountain-line me-2"></i>${tour.name}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    ${tour.image_url ? `<img src="${tour.image_url}" alt="${tour.name}" class="img-fluid rounded mb-3">` : ''}
                                </div>
                                <div class="col-md-6">
                                    <h6>Trek Overview</h6>
                                    <p>${tour.short_description || tour.description || 'Experience the adventure of a lifetime with this Kilimanjaro trek.'}</p>
                                    
                                    <p><strong>Duration:</strong> ${tour.duration_days ? tour.duration_days + ' Days' : 'N/A'}${tour.duration_nights ? ' ' + tour.duration_nights + ' Nights' : ''}</p>
                                    <p><strong>Destination:</strong> ${tour.destination ? tour.destination.name : 'Mount Kilimanjaro'}</p>
                                    <p><strong>Group Size:</strong> ${tour.max_group_size || '2-12'} people</p>
                                    <p><strong>Price:</strong> $${tour.price || '1500'} per person</p>
                                    <p><strong>Rating:</strong> ⭐ ${tour.rating || '4.9'}</p>
                                    
                                    ${tour.tour_type ? `<p><strong>Tour Type:</strong> ${tour.tour_type}</p>` : ''}
                                    ${tour.difficulty_level ? `<p><strong>Difficulty:</strong> ${tour.difficulty_level}</p>` : ''}
                                </div>
                                <div class="col-12">
                                    <h6>What's Included</h6>
                                    <ul>
                                        <li>KINAPA-certified expert guides</li>
                                        <li>Professional porter team</li>
                                        <li>High-altitude camping equipment</li>
                                        <li>All meals (3x daily + snacks)</li>
                                        <li>Park fees and permits</li>
                                        <li>Medical support and safety equipment</li>
                                        <li>Airport transfers</li>
                                        <li>Summit certificate</li>
                                    </ul>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex gap-2">
                                        <a href="/contact?tour=${tour.id}" class="btn btn-primary">
                                            <i class="ri-message-3-line me-1"></i>Book Now
                                        </a>
                                        <a href="/contact" class="btn btn-outline-secondary">
                                            <i class="ri-question-line me-1"></i>Ask Question
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        
        document.body.appendChild(modal);
        const bsModal = new bootstrap.Modal(modal.querySelector('.modal'));
        bsModal.show();
        
        // Clean up after modal is hidden
        modal.querySelector('.modal').addEventListener('hidden.bs.modal', function() {
            // Remove backdrop manually if it exists
            const backdrop = document.querySelector('.modal-backdrop');
            if (backdrop) {
                backdrop.remove();
            }
            // Remove modal from DOM
            if (modal && modal.parentNode) {
                modal.parentNode.removeChild(modal);
            }
            // Remove modal-open class from body
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';
        });
    }
}
</script>
@endpush
