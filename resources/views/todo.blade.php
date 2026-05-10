@extends('layouts.app')

@section('content')
<div id="page-todo" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Tanzania Activities</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Things To <span style="color:var(--gold-light)">Do</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">100+ activities — from dawn game drives to sunset dhow cruises.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="todo-cats" style="margin-bottom:40px;">
        <div class="todo-cat active" data-category="all"><i class="fas fa-th-large"></i> All Activities</div>
        @foreach($categories as $category)
        <div class="todo-cat" data-category="{{ $category->slug }}">
            <i class="fas fa-{{ $category->icon ?? 'star' }}"></i> {{ $category->name }}
        </div>
        @endforeach
      </div>
      <div class="todo-grid" id="todoGrid">
        @forelse($allTours as $tour)
        <div class="todo-card" data-categories="{{ $tour->categories->pluck('slug')->implode(',') }}">
          <div class="todo-card-img">
            @if($tour->image_url)
              <img src="{{ $tour->image_url }}" alt="{{ $tour->name }}" class="img-fluid">
            @else
              <img src="https://picsum.photos/seed/{{ $tour->slug }}/400/300.jpg" alt="{{ $tour->name }}" class="img-fluid">
            @endif
            <div class="todo-card-icon">
              <i class="fas fa-{{ $tour->categories->first()->icon ?? 'star' }}"></i>
            </div>
          </div>
          <div class="todo-card-body">
            <div class="todo-card-cat">{{ $tour->categories->first()->name ?? 'Activity' }}</div>
            <div class="todo-card-title">{{ $tour->name }}</div>
            <div class="todo-card-desc">{{ Str::limit($tour->short_description ?? $tour->description ?? 'Experience amazing activities in Tanzania.', 100) }}</div>
            <div class="todo-card-footer">
              <div class="todo-from">From <strong>${{ number_format($tour->price ?? 150, 0) }}/person</strong></div>
              <button class="tour-book-btn" onclick="window.location.href='/tours/{{ $tour->slug }}'">View Details</button>
            </div>
          </div>
        </div>
        @empty
        <div class="col-12 text-center py-5">
          <div class="text-muted">
            <i class="ri-compass-line ri-48px mb-3 d-block"></i>
            <p>No activities available at the moment.</p>
            <p>Please check back later or contact us for custom activity packages.</p>
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
currentPage = 'todo';
updateNavbar();

// Tour details modal
function showTourDetails(tourId) {
    // Find tour data
    const tours = @json($allTours->toArray());
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
                                    ${tour.image_url ? `<img src="${tour.image_url}" alt="${tour.name}" class="img-fluid rounded mb-3">` : ''}
                                </div>
                                <div class="col-md-6">
                                    <h6>Activity Overview</h6>
                                    <p>${tour.short_description || tour.description || 'Experience amazing activities in Tanzania.'}</p>
                                    
                                    <p><strong>Duration:</strong> ${tour.duration_days ? tour.duration_days + ' Days' : 'N/A'}${tour.duration_nights ? ' ' + tour.duration_nights + ' Nights' : ''}</p>
                                    <p><strong>Destination:</strong> ${tour.destination ? tour.destination.name : 'Tanzania'}</p>
                                    <p><strong>Group Size:</strong> ${tour.max_group_size || '2-12'} people</p>
                                    <p><strong>Price:</strong> $${tour.price || '150'} per person</p>
                                    <p><strong>Rating:</strong> ⭐ ${tour.rating || '4.9'}</p>
                                    
                                    ${tour.tour_type ? `<p><strong>Activity Type:</strong> ${tour.tour_type}</p>` : ''}
                                </div>
                                <div class="col-12">
                                    <h6>What's Included</h6>
                                    <ul>
                                        <li>Professional guide/instructor</li>
                                        <li>All necessary equipment</li>
                                        <li>Transportation as required</li>
                                        <li>Meals and refreshments</li>
                                        <li>Safety equipment and briefings</li>
                                        <li>Park/entry fees where applicable</li>
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

// Category filtering functionality
document.addEventListener('DOMContentLoaded', function() {
    const categoryButtons = document.querySelectorAll('.todo-cat');
    const todoCards = document.querySelectorAll('.todo-card');
    
    categoryButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            categoryButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const selectedCategory = this.getAttribute('data-category');
            
            todoCards.forEach(card => {
                if (selectedCategory === 'all') {
                    card.style.display = 'block';
                } else {
                    const cardCategories = card.getAttribute('data-categories');
                    if (cardCategories && cardCategories.includes(selectedCategory)) {
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
