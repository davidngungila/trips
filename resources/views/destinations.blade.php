@extends('layouts.app')

@section('content')
<div id="page-destinations" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Explore Tanzania</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">All <span style="color:var(--gold-light)">Destinations</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">From mountain peaks to white sand beaches — every corner of Tanzania awaits.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="dest-filters" style="margin-bottom:40px;">
        <div class="dest-filter active">All</div>
        <div class="dest-filter">🌿 National Parks</div>
        <div class="dest-filter">🏖 Beaches & Islands</div>
        <div class="dest-filter">🏔 Mountains</div>
        <div class="dest-filter">🏛 Heritage</div>
      </div>
      <div class="dest-grid">
        @forelse($destinations as $index => $destination)
        <div class="dest-card {{ $destination->is_featured ? 'featured' : '' }}" onclick="showDestinationDetails('{{ $destination->slug }}')">
          <div class="dest-card-img">
            @if($destination->featured_image_url)
              <img src="{{ $destination->featured_image_url }}" alt="{{ $destination->name }}" class="img-fluid">
            @else
              <img src="https://picsum.photos/seed/{{ $destination->slug }}/400/300.jpg" alt="{{ $destination->name }}" class="img-fluid">
            @endif
          </div>
          @if($destination->is_featured)
            <div class="dest-card-tag">🔥 Featured</div>
          @endif
          <div class="dest-card-overlay"></div>
          <div class="dest-card-content">
            <div class="dest-card-name">{{ $destination->name }}</div>
            <div class="dest-card-meta">
              <span class="dest-card-count">{{ $destination->tour_count }} tours{{ $destination->region ? ' · ' . $destination->region : '' }}</span>
              <span class="dest-card-rating"><i class="fas fa-star"></i> {{ $destination->rating ?? '4.8' }}</span>
            </div>
          </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
          <div class="text-muted">
            <i class="ri-map-pin-line ri-48px mb-3 d-block"></i>
            <p>No destinations available at the moment.</p>
            <p>Please check back later or contact us for custom tours.</p>
          </div>
        </div>
        @endforelse
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'destinations';
updateNavbar();

// Destination details modal
function showDestinationDetails(slug) {
    // Find destination data
    const destinations = @json($destinations->toArray());
    const destination = destinations.find(d => d.slug === slug);
    
    if (destination) {
        const modal = document.createElement('div');
        modal.innerHTML = `
            <div class="modal fade" id="destinationModal" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                <i class="ri-map-pin-line me-2"></i>${destination.name}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    ${destination.featured_image_url ? `<img src="${destination.featured_image_url}" alt="${destination.name}" class="img-fluid rounded mb-3">` : ''}
                                </div>
                                <div class="col-md-6">
                                    <h6>Description</h6>
                                    <p>${destination.short_description || 'Discover the beauty and adventure of ' + destination.name + '.'}</p>
                                    
                                    ${destination.region ? `<p><strong>Region:</strong> ${destination.region}</p>` : ''}
                                    
                                    ${destination.country ? `<p><strong>Country:</strong> ${destination.country}</p>` : ''}
                                    
                                    <p><strong>Tours Available:</strong> ${destination.tour_count}</p>
                                    <p><strong>Rating:</strong> ⭐ ${destination.rating || '4.8'}</p>
                                    <div class="featured-tours" style="margin-top:16px;">
                                        <h6 style="margin-bottom:12px;color:var(--green-dark);">Featured Tours</h6>
                                        <div class="featured-tour-list" style="display:flex;flex-direction:column;gap:8px;">
                                            ${destination.featured_tours ? destination.featured_tours.slice(0, 3).map(tour => `
                                                <div class="featured-tour-item" style="display:flex;align-items:center;gap:8px;padding:8px;background:var(--green-pale);border-radius:var(--radius-sm);cursor:pointer;" onclick="window.location.href='/tours/${tour.slug}'">
                                                    <div class="tour-name" style="font-weight:600;color:var(--green-dark);font-size:0.9rem;">${tour.name}</div>
                                                    <div class="tour-price" style="color:var(--gray-500);font-size:0.8rem;">$${tour.price}/person</div>
                                                </div>
                                            `).join('') : '<p style="color:var(--gray-500);font-size:0.85rem;">No featured tours available</p>'}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h6>Why Visit ${destination.name}?</h6>
                                    <p>${destination.full_description || 'Experience unforgettable adventures and create lasting memories in this amazing destination.'}</p>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex gap-2">
                                        <a href="/tours?destination=${encodeURIComponent(destination.name)}" class="btn btn-primary">
                                            <i class="ri-compass-line me-1"></i>View Tours
                                        </a>
                                        <a href="/contact" class="btn btn-outline-secondary">
                                            <i class="ri-message-3-line me-1"></i>Get Quote
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
document.addEventListener('DOMContentLoaded', function() {
    const filters = document.querySelectorAll('.dest-filter');
    const cards = document.querySelectorAll('.dest-card');
    
    filters.forEach(filter => {
        filter.addEventListener('click', function() {
            // Remove active class from all filters
            filters.forEach(f => f.classList.remove('active'));
            // Add active class to clicked filter
            this.classList.add('active');
            
            const filterValue = this.textContent;
            
            cards.forEach(card => {
                if (filterValue === 'All') {
                    card.style.display = 'block';
                } else {
                    // Simple filtering based on destination name
                    const destinationName = card.querySelector('.dest-card-name').textContent.toLowerCase();
                    if (destinationName.includes(filterValue.toLowerCase()) || 
                        (filterValue.includes('National') && destinationName.includes('park')) ||
                        (filterValue.includes('Beach') && (destinationName.includes('zanzibar') || destinationName.includes('island'))) ||
                        (filterValue.includes('Mountain') && (destinationName.includes('kilimanjaro') || destinationName.includes('meru'))) ||
                        (filterValue.includes('Heritage') && (destinationName.includes('stone') || destinationName.includes('old')))) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                }
            });
        });
    });
});
</script>
@endpush
