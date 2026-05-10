@extends('layouts.app')

@section('content')
<div id="page-tours" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label">Our Packages</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Tours & Safari <span style="color:var(--gold-light)">Packages</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">85+ handcrafted itineraries for every traveler, budget, and adventure level.</p>
    </div>
  </div>
  <div class="packages-filters">
    <div class="container">
      <div class="pf-inner">
        <div class="pf-group">
          <div class="pf-label">Destination</div>
          <select class="pf-select" id="destinationFilter" onchange="filterTours()">
            <option value="">All Destinations</option>
            @foreach($destinations as $destination)
            <option value="{{ $destination }}">{{ $destination }}</option>
            @endforeach
          </select>
        </div>
        <div class="pf-divider"></div>
        <div class="pf-group">
          <div class="pf-label">Duration</div>
          <select class="pf-select" onchange="filterTours()">
            <option>Any Duration</option>
            <option>1–3 Days</option>
            <option>4–6 Days</option>
            <option>7–10 Days</option>
            <option>11+ Days</option>
          </select>
        </div>
        <div class="pf-divider"></div>
        <div class="pf-group">
          <div class="pf-label">Budget</div>
          <select class="pf-select" onchange="filterTours()">
            <option>Any Budget</option>
            <option>Under $1,000</option>
            <option>$1,000–$2,500</option>
            <option>$2,500–$5,000</option>
            <option>$5,000+</option>
          </select>
        </div>
        <div class="pf-divider"></div>
        <div class="pf-group">
          <div class="pf-label">Activity</div>
          <select class="pf-select" onchange="filterTours()">
            <option>All Activities</option>
            <option>Safari</option>
            <option>Trekking</option>
            <option>Beach</option>
            <option>Cultural</option>
          </select>
        </div>
        <div class="pf-divider"></div>
        <div class="pf-group">
          <div class="pf-label">Group</div>
          <select class="pf-select" onchange="filterTours()">
            <option>All Groups</option>
            <option>Solo</option>
            <option>Couples</option>
            <option>Family</option>
            <option>Corporate</option>
          </select>
        </div>
        <div class="pf-result-count" id="tourCount">Showing {{ $tours->count() }} tours</div>
      </div>
    </div>
  </div>
  <div style="padding:60px 0;">
    <div class="container">
      <div class="grid-3" id="toursGrid">
        @forelse($tours as $tour)
        <div class="tour-card" onclick="window.location.href='/tours/{{ $tour['slug'] }}'" style="cursor:pointer;">
          <div class="tour-card-img">
            <img src="{{ $tour['image'] }}" alt="{{ $tour['name'] }}" class="img-fluid">
            <div class="tour-card-tags">
                @if($tour['is_featured'])
                    <span class="tag tag-gold">Featured</span>
                @endif
                @if($tour['tour_type'])
                    <span class="tag tag-green">{{ ucfirst($tour['tour_type']) }}</span>
                @endif
            </div>
            <div class="tour-duration">{{ $tour['duration_days'] ? $tour['duration_days'] . ' Days' : 'N/A' }}{{ $tour['duration_nights'] ? ' ' . $tour['duration_nights'] . ' Nights' : '' }}</div>
          </div>
          <div class="tour-card-body">
            <div class="tour-reviews">
              <div class="stars">★★★★★</div>
              <span>{{ $tour['rating'] }} ({{ rand(50, 500) }})</span>
            </div>
            <div class="tour-card-title">{{ $tour['name'] }}</div>
            <div class="tour-card-meta">
              <span class="tour-meta-item"><i class="fas fa-map-marker-alt"></i> {{ $tour['destination'] }}</span>
              <span class="tour-meta-item"><i class="fas fa-users"></i> {{ $tour['max_capacity'] }}</span>
            </div>
            <div class="tour-card-desc">{{ Str::limit($tour['description'], 100) }}</div>
            <div class="tour-card-footer">
              <div class="tour-price">${{ number_format($tour['price'], 0) }}<span>/pp</span></div>
              <button class="tour-book-btn">Book</button>
            </div>
          </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
          <div class="text-muted">
            <i class="ri-compass-line ri-48px mb-3 d-block"></i>
            <p>No tours available at the moment.</p>
            <p>Please check back later or contact us for custom tour packages.</p>
          </div>
        </div>
        @endforelse
      </div>
    </div>
  </div>
  <!-- FAQ -->
  <section class="faq-section" style="background:var(--off-white);">
    <div class="container">
      <div class="section-label">Common Questions</div>
      <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
      <div class="faq-list">
        <div class="faq-item"><div class="faq-q" onclick="toggleFaq(this)">What is included in tour price?<i class="fas fa-chevron-down"></i></div><div class="faq-a"><p>All TanzaniaTrips packages include park/conservation fees, accommodation, meals as specified, transport, professional guide, and government taxes. International flights are not included unless stated.</p></div></div>
        <div class="faq-item"><div class="faq-q" onclick="toggleFaq(this)">What is the best time to visit Tanzania?<i class="fas fa-chevron-down"></i></div><div class="faq-a"><p>Tanzania's dry seasons (June–October and January–February) are ideal for wildlife viewing. The Great Migration river crossings peak July–September. Kilimanjaro is best climbed January–March or June–October.</p></div></div>
        <div class="faq-item"><div class="faq-q" onclick="toggleFaq(this)">Do I need a visa to visit Tanzania?<i class="fas fa-chevron-down"></i></div><div class="faq-a"><p>Most nationalities require a Tanzania visa. You can apply online at the Tanzania e-Visa portal or get a visa on arrival at major entry points. We provide full visa guidance upon booking.</p></div></div>
        <div class="faq-item"><div class="faq-q" onclick="toggleFaq(this)">What vaccinations are recommended?<i class="fas fa-chevron-down"></i></div><div class="faq-a"><p>Yellow fever vaccination is required if entering from endemic countries. We recommend hepatitis A & B, typhoid, and rabies. Anti-malaria prophylaxis is strongly advised. Always consult your travel doctor.</p></div></div>
        <div class="faq-item"><div class="faq-q" onclick="toggleFaq(this)">Can I customize my itinerary?<i class="fas fa-chevron-down"></i></div><div class="faq-a"><p>Absolutely! All our packages can be fully customized. Tell us your dates, budget, interests, and group size and our travel experts will craft a bespoke itinerary within 24 hours.</p></div></div>
        <div class="faq-item"><div class="faq-q" onclick="toggleFaq(this)">What is the cancellation policy?<i class="fas fa-chevron-down"></i></div><div class="faq-a"><p>Free cancellation up to 30 days before departure with full refund. 15–30 days: 50% refund. Under 15 days: no refund, but we offer free rebooking within 12 months for force majeure situations.</p></div></div>
      </div>
    </div>
  </section>
</div><!-- end page-tours -->
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'tours';
updateNavbar();

// Tour details modal
function showTourDetails(tourId) {
    // Find tour data
    const tours = @json($tours->items());
    const tour = tours.find(t => t.id === tourId);
    
    if (tour) {
        const modal = document.createElement('div');
        modal.innerHTML = `
            <div class="modal fade" id="tourModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="ri-compass-line me-2"></i>${tour.name}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <img src="${tour.image}" alt="${tour.name}" class="img-fluid rounded mb-3">
                                </div>
                                <div class="col-md-6">
                                    <h6>Tour Overview</h6>
                                    <p>${tour.description || 'Experience an unforgettable journey with this amazing tour package.'}</p>
                                    
                                    <p><strong>Duration:</strong> ${tour.duration_days ? tour.duration_days + ' Days' : 'N/A'}${tour.duration_nights ? ' ' + tour.duration_nights + ' Nights' : ''}</p>
                                    <p><strong>Destination:</strong> ${tour.destination || 'Tanzania'}</p>
                                    <p><strong>Group Size:</strong> ${tour.max_capacity || '2-12'} people</p>
                                    <p><strong>Price:</strong> $${tour.price || '1500'} per person</p>
                                    <p><strong>Rating:</strong> ⭐ ${tour.rating || '4.9'}</p>
                                    
                                    ${tour.tour_type ? `<p><strong>Tour Type:</strong> ${tour.tour_type}</p>` : ''}
                                </div>
                                <div class="col-12">
                                    <h6>What's Included</h6>
                                    <ul>
                                        <li>Professional guide</li>
                                        <li>Accommodation as specified</li>
                                        <li>Meals as per itinerary</li>
                                        <li>Transportation</li>
                                        <li>Park entrance fees</li>
                                        <li>Government taxes</li>
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

// Filter functionality
function filterTours() {
    const destinationFilter = document.getElementById('destinationFilter').value;
    const durationFilter = document.querySelector('select[onchange="filterTours()"]:nth-of-type(2)').value;
    const budgetFilter = document.querySelector('select[onchange="filterTours()"]:nth-of-type(3)').value;
    
    const cards = document.querySelectorAll('.tour-card');
    let visibleCount = 0;
    
    cards.forEach(card => {
        let show = true;
        
        // Destination filter
        if (destinationFilter && !card.textContent.toLowerCase().includes(destinationFilter.toLowerCase())) {
            show = false;
        }
        
        // Duration filter (simplified)
        if (durationFilter && durationFilter !== 'Any Duration') {
            const duration = card.querySelector('.tour-duration').textContent;
            const days = parseInt(duration) || 0;
            
            if (durationFilter === '1–3 Days' && days > 3) show = false;
            if (durationFilter === '4–6 Days' && (days < 4 || days > 6)) show = false;
            if (durationFilter === '7–10 Days' && (days < 7 || days > 10)) show = false;
            if (durationFilter === '11+ Days' && days < 11) show = false;
        }
        
        // Budget filter (simplified)
        if (budgetFilter && budgetFilter !== 'Any Budget') {
            const priceText = card.querySelector('.tour-price').textContent;
            const price = parseInt(priceText.replace(/[^0-9]/g, '')) || 0;
            
            if (budgetFilter === 'Under $1,000' && price >= 1000) show = false;
            if (budgetFilter === '$1,000–$2,500' && (price < 1000 || price > 2500)) show = false;
            if (budgetFilter === '$2,500–$5,000' && (price < 2500 || price > 5000)) show = false;
            if (budgetFilter === '$5,000+' && price < 5000) show = false;
        }
        
        card.style.display = show ? 'block' : 'none';
        if (show) visibleCount++;
    });
    
    // Update count
    document.getElementById('tourCount').textContent = `Showing ${visibleCount} tours`;
}

// Auto-filter from URL parameters
document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const destination = urlParams.get('destination');
    
    if (destination) {
        const destFilter = document.getElementById('destinationFilter');
        if (destFilter) {
            destFilter.value = destination;
            filterTours();
        }
    }
});
</script>
@endpush
