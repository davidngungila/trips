/* ---- HERO SLIDESHOW ---- */
let currentSlide = 0;
const slides = document.querySelectorAll('.hero-slide');
const indicators = document.querySelectorAll('.indicator');
const totalSlides = slides.length;

// Set background images from data attributes
function setSlideImages() {
    slides.forEach((slide, index) => {
        const img = slide.querySelector('.hero-slide-img');
        const imageUrl = slide.getAttribute('data-image');
        if (imageUrl && img) {
            img.style.backgroundImage = `url(${imageUrl})`;
        }
    });
}

// Initialize slide images
setSlideImages();

function showSlide(index) {
  // Hide all slides
  if (slides && slides.length > 0) {
    slides.forEach(slide => slide.classList.remove('active'));
  }
  if (indicators && indicators.length > 0) {
    indicators.forEach(indicator => indicator.classList.remove('active'));
  }
  
  // Show current slide
  if (slides && slides[index]) {
    slides[index].classList.add('active');
  }
  if (indicators && indicators[index]) {
    indicators[index].classList.add('active');
  }
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  showSlide(currentSlide);
}

function prevSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  showSlide(currentSlide);
}

function changeSlide(direction) {
  if (direction === 1) {
    nextSlide();
  } else {
    prevSlide();
  }
}

function goToSlide(index) {
  currentSlide = index;
  showSlide(currentSlide);
}

// Auto-play slideshow
let slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds

// Pause slideshow on hover
const heroSection = document.getElementById('hero');
if (heroSection) {
  heroSection.addEventListener('mouseenter', () => {
    clearInterval(slideInterval);
  });
  
  heroSection.addEventListener('mouseleave', () => {
    slideInterval = setInterval(nextSlide, 5000);
  });
}

/* ---- NAVIGATION ---- */
let currentPage = 'home';

function navigateTo(page) {
  // Map page names to route URLs
  const routeMap = {
    'home': '/',
    'destinations': '/destinations',
    'tours': '/tours',
    'kilimanjaro': '/kilimanjaro',
    'todo': '/things-to-do',
    'blog': '/blog',
    'about': '/about',
    'contact': '/contact'
  };
  
  // Navigate to the actual URL
  if (routeMap[page]) {
    // Navigate to new URL
    window.location.href = routeMap[page];
  }
}

function goHome() {
  navigateTo('home');
}

function updateNavbar() {
  const nav = document.getElementById('navbar');
  if (!nav) return;
  const scrolled = window.scrollY > 40;
  if (currentPage === 'home' && !scrolled) {
    nav.classList.add('hero-mode');
    nav.classList.remove('scrolled');
  } else {
    nav.classList.remove('hero-mode');
    nav.classList.add('scrolled');
  }
}

window.addEventListener('scroll', updateNavbar);

function toggleMobile() {
  const menu = document.getElementById('mobileMenu');
  menu.classList.toggle('open');
}

/* ---- SEARCH ---- */
function switchTab(el, type) {
  document.querySelectorAll('.search-tab').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
}

const suggestions = [
  'Serengeti National Park','Mount Kilimanjaro','Zanzibar Island','Ngorongoro Crater',
  'Tarangire National Park','Lake Manyara','Ruaha National Park','Selous Game Reserve',
  'Pemba Island','Arusha National Park','Mikumi National Park'
];

function showAutocomplete(val) {
  const drop = document.getElementById('acDropdown');
  if (!drop) return;
  if (!val.trim()) { drop.classList.remove('open'); return; }
  const matches = suggestions.filter(s => s.toLowerCase().includes(val.toLowerCase()));
  if (!matches.length) { drop.classList.remove('open'); return; }
  drop.innerHTML = matches.slice(0,6).map(m =>
    `<div class="ac-item" onclick="selectDest('${m}')"><i class="fas fa-map-marker-alt"></i> ${m}</div>`
  ).join('');
  drop.classList.add('open');
}

function selectDest(val) {
  const destInput = document.getElementById('destInput');
  const acDropdown = document.getElementById('acDropdown');
  if (destInput) destInput.value = val;
  if (acDropdown) acDropdown.classList.remove('open');
}

document.addEventListener('click', (e) => {
  const acDropdown = document.getElementById('acDropdown');
  if (!e.target.closest('.sf-input-wrap') && acDropdown) {
    acDropdown.classList.remove('open');
  }
});

function fillSearch(text) {
  const destInput = document.getElementById('destInput');
  if (destInput) destInput.value = text;
  showToast('Searching for: ' + text);
}

function runSearch() {
  const destInput = document.getElementById('destInput');
  if (destInput) {
    const dest = destInput.value;
    navigateTo('tours');
    if (dest) showToast('Showing results for: ' + dest);
  }
}

/* ---- DESTINATION FILTER ---- */
function filterDest(el, cat) {
  document.querySelectorAll('.dest-filter').forEach(f => f.classList.remove('active'));
  el.classList.add('active');
  document.querySelectorAll('.dest-card').forEach(c => {
    if (cat === 'all' || c.dataset.cat === cat) {
      c.style.display = '';
    } else {
      c.style.display = 'none';
    }
  });
}

function filterTours() {
  // Simple visual feedback
  const count = Math.floor(Math.random() * 5) + 4;
  const el = document.getElementById('tourCount');
  if(el) el.textContent = `Showing ${count} tours`;
}

/* ---- REVIEWS SLIDER ---- */
function scrollReviews(dir) {
  const track = document.getElementById('reviewsTrack');
  if (track) track.scrollBy({ left: dir * 400, behavior: 'smooth' });
}

/* ---- FAQ ACCORDION ---- */
function toggleFaq(el) {
  const item = el.closest('.faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}

/* ---- TOAST ---- */
function showToast(msg) {
  const toast = document.getElementById('toast');
  document.getElementById('toast-msg').textContent = msg;
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 3000);
}

/* ---- FORM SUBMIT ---- */
function submitForm() {
  showToast('Message sent! We\'ll respond within 2 hours.');
}

function subscribeNewsletter() {
  showToast('Subscribed! Welcome to TanzaniaTrips community.');
}

/* ---- PRICE CALCULATOR ---- */
let calcData = { adults: 2, children: 0, basePrice: 2850 };

function updateCalc() {
  const total = (calcData.adults * calcData.basePrice) + (calcData.children * calcData.basePrice * 0.7);
  const el = document.getElementById('calcTotalPrice');
  if (el) el.textContent = '$' + total.toLocaleString();
  const ac = document.getElementById('adultCount');
  if (ac) ac.textContent = calcData.adults;
  const cc = document.getElementById('childCount');
  if (cc) cc.textContent = calcData.children;
}

function changeAdults(d) {
  calcData.adults = Math.max(1, Math.min(20, calcData.adults + d));
  updateCalc();
}

function changeChildren(d) {
  calcData.children = Math.max(0, Math.min(10, calcData.children + d));
  updateCalc();
}

/* ---- MODAL ---- */
const tours = {
  tour1: {
    name: 'Serengeti Great Migration Safari',
    duration: '7 Days / 6 Nights',
    location: 'Serengeti, Ngorongoro, Arusha',
    difficulty: 'Easy',
    price: 2850,
    image: 'https://res.cloudinary.com/dqflffa1o/image/upload/v1778041558/reputable-tours/01_1778041531_0.jpg',
    icon: 'fa-paw',
    itinerary: [
      { day: 1, title: 'Arrival in Arusha', desc: 'Welcome briefing, overnight at Arusha Coffee Lodge. Evening cultural walk.' },
      { day: 2, title: 'Tarangire National Park', desc: 'Full-day game drive in Tarangire. Famous for enormous elephant herds and ancient baobabs.' },
      { day: 3, title: 'Drive to Serengeti', desc: 'Morning departure to Serengeti. Afternoon game drive with sundowner on plains.' },
      { day: 4, title: 'Full Day Serengeti', desc: 'Dawn game drive to catch predators at work. Optional hot air balloon at sunrise.' },
      { day: 5, title: 'Serengeti to Ngorongoro', desc: 'Morning game drive then drive to crater rim. Sunset views from lodge.' },
      { day: 6, title: 'Ngorongoro Crater', desc: 'Full day descent into crater. All Big Five in one day is very common here.' },
      { day: 7, title: 'Return to Arusha & Departure', desc: 'Morning game drive, then drive to Arusha for your flight. Farewell lunch.' }
    ],
    inclusions: ['Park & conservation fees','All accommodation','All meals (full board)','Professional guide','Transport in 4x4 Land Cruiser','Airport transfers','Government taxes'],
    exclusions: ['International flights','Travel insurance','Optional balloon safari ($550)','Tips & gratuities','Personal expenses'],
    faqs: [
      { q: 'What is the best time for this safari?', a: 'Year-round is great, but July–October offers the best Great Migration viewing in the Serengeti.' },
      { q: 'Are children welcome?', a: 'Absolutely! This tour is suitable for families with children of all ages.' }
    ]
  },
  tour2: {
    name: 'Mount Kilimanjaro Climb - Machame Route',
    duration: '8 Days / 7 Nights',
    location: 'Mount Kilimanjaro',
    difficulty: 'Moderate–Hard',
    price: 1950,
    image: 'https://res.cloudinary.com/dqflffa1o/image/upload/v1778041558/reputable-tours/02_1778041531_0.jpg',
    icon: 'fa-mountain',
    itinerary: [
      { day: 1, title: 'Moshi & Machame Gate (1,800m)', desc: 'Transfer to gate, register, and trek through rainforest to Machame Camp (3,010m).' },
      { day: 2, title: 'Machame to Shira Camp (3,840m)', desc: 'Climb out of forest zone through heather and moorland with Kibo views.' },
      { day: 3, title: 'Shira to Barranco (3,960m)', desc: 'Acclimatization day. Trek to Lava Tower (4,630m) then descend to Barranco Camp.' },
      { day: 4, title: 'Barranco to Karanga (4,035m)', desc: 'Climb the Barranco Wall — the route\'s most exciting section. Short but steep.' },
      { day: 5, title: 'Karanga to Base Camp (4,681m)', desc: 'Final acclimatization day. Arrive at Barafu Base Camp. Rest and prepare for summit.' },
      { day: 6, title: 'Summit Night! → Uhuru Peak (5,895m)', desc: 'Midnight departure. Summit at dawn. Descend to Mweka Camp (3,100m) for rest.' },
      { day: 7, title: 'Descent to Mweka Gate', desc: 'Final descent through rainforest. Certificate ceremony at gate. Transfer to Moshi.' },
      { day: 8, title: 'Moshi & Departure', desc: 'Celebration breakfast. Transfer to airport or optional recovery day in Moshi.' }
    ],
    inclusions: ['All KINAPA park fees','Professional mountain guide','Trained porters (1:1 ratio)','All meals on mountain','High-altitude camping equipment','Airport and gate transfers','Uhuru Peak certificate'],
    exclusions: ['International flights','Travel insurance','Tips ($180 recommended)','Personal climbing gear','Altitude medication'],
    faqs: [
      { q: 'Do I need prior climbing experience?', a: 'No technical climbing experience is needed. Good physical fitness and determination are key.' },
      { q: 'What is the summit success rate?', a: 'Our Machame route success rate is 85%. Lemosho is 97%. Both are above the industry average.' }
    ]
  },
  tour3: {
    name: 'Zanzibar Beach & Culture Escape',
    duration: '6 Days / 5 Nights',
    location: 'Zanzibar Island',
    difficulty: 'Easy',
    price: 1290,
    image: 'https://res.cloudinary.com/dqflffa1o/image/upload/v1778041558/reputable-tours/03_1778041531_0.jpg',
    icon: 'fa-umbrella-beach',
    itinerary: [
      { day: 1, title: 'Arrive Zanzibar — Stone Town', desc: 'Airport pickup, check in to boutique Stone Town hotel. Evening harbor dhow cruise.' },
      { day: 2, title: 'Stone Town Heritage Tour', desc: 'UNESCO walking tour: Forodhani Night Market, Sultan\'s Palace, spice bazaars, and House of Wonders.' },
      { day: 3, title: 'Spice Farm & Prison Island', desc: 'Morning spice plantation tour with tasting. Afternoon boat to Prison Island to meet giant tortoises. Snorkeling.' },
      { day: 4, title: 'North Coast Beaches', desc: 'Transfer to Nungwi or Kendwa. Beach day: snorkeling, sunset dhow cruise, seafood dinner.' },
      { day: 5, title: 'Departure', desc: 'Leisurely breakfast. Last swim. Transfer to airport. Karibu tena — come back again!' }
    ],
    inclusions: ['4 nights accommodation','Daily breakfast + 3 dinners','Airport transfers','Stone Town guided tour','Spice farm tour','Prison Island boat trip','Dhow sunset cruise'],
    exclusions: ['International flights','Lunch meals','Travel insurance','Water sports extras','Personal expenses'],
    faqs: [
      { q: 'When is the best time to visit Zanzibar?', a: 'June–October and December–February are ideal. Avoid April–May (long rains) and November (short rains).' },
      { q: 'Is Zanzibar safe for solo female travelers?', a: 'Yes — Zanzibar is generally safe. We recommend modest dress in Stone Town and never leaving valuables on beach.' }
    ]
  }
};

function openModal(tourId) {
  const tour = tours[tourId];
  if (!tour) return;
  
  // Prevent body scroll
  document.body.style.overflow = 'hidden';
  
  calcData.basePrice = tour.price;
  calcData.adults = 2;
  calcData.children = 0;
  
  // Build calendar
  const cal = buildCalendar();
  
  // Clear modal content first
  const modalBox = document.getElementById('modalBox');
  if (!modalBox) return;
  
  modalBox.innerHTML = `
    <div class="modal-header-img">
      <img src="${tour.image}" alt="${tour.name}" style="width:100%;height:100%;object-fit:cover;">
      <button class="modal-close" onclick="closeModal()"><i class="fas fa-times"></i></button>
    </div>
    <div class="modal-body">
      <h2 class="modal-title">${tour.name}</h2>
      <div class="modal-meta">
        <span class="modal-meta-item"><i class="fas fa-clock"></i> ${tour.duration}</span>
        <span class="modal-meta-item"><i class="fas fa-map-marker-alt"></i> ${tour.location}</span>
        <span class="modal-meta-item"><i class="fas fa-fire"></i> ${tour.difficulty}</span>
        <span class="modal-meta-item"><i class="fas fa-dollar-sign"></i> $${tour.price}/person</span>
        <span class="modal-meta-item stars">★★★★★ <span style="color:var(--gray-500)">4.9 (200+ reviews)</span></span>
      </div>
      <div class="modal-tabs">
        <div class="modal-tab active" onclick="switchModalTab(this,'itinerary')">Itinerary</div>
        <div class="modal-tab" onclick="switchModalTab(this,'pricing')">Pricing</div>
        <div class="modal-tab" onclick="switchModalTab(this,'inclusions')">Inclusions</div>
        <div class="modal-tab" onclick="switchModalTab(this,'availability')">Availability</div>
        <div class="modal-tab" onclick="switchModalTab(this,'faqs')">FAQs</div>
      </div>
      
      <div class="modal-tab-content active" id="tab-itinerary">
        ${tour.itinerary.map(d => `
          <div class="itinerary-day">
            <div class="itinerary-day-num">D${d.day}</div>
            <div>
              <div class="itinerary-day-title">${d.title}</div>
              <div class="itinerary-day-desc">${d.desc}</div>
            </div>
          </div>
        `).join('')}
      </div>
      
      <div class="modal-tab-content" id="tab-pricing">
        <p style="font-size:0.88rem;color:var(--gray-500);margin-bottom:16px;">Pricing is per person based on double occupancy. Solo supplement applies for single travelers.</p>
        <div class="pricing-grid">
          <div class="price-option selected">
            <div class="price-option-name">Standard</div>
            <div class="price-option-price">$${tour.price.toLocaleString()}</div>
            <div class="price-option-per">per person</div>
          </div>
          <div class="price-option">
            <div class="price-option-name">Comfort</div>
            <div class="price-option-price">$${(tour.price * 1.35).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',')}</div>
            <div class="price-option-per">per person</div>
          </div>
          <div class="price-option">
            <div class="price-option-name">Luxury</div>
            <div class="price-option-price">$${(tour.price * 1.75).toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ',')}</div>
            <div class="price-option-per">per person</div>
          </div>
        </div>
        <div class="price-calc">
          <h4>Price Calculator</h4>
          <div class="calc-row">
            <span class="calc-label">Adults (18+)</span>
            <div class="calc-controls">
              <div class="calc-btn" onclick="changeAdults(-1)">−</div>
              <span class="calc-count" id="adultCount">2</span>
              <div class="calc-btn" onclick="changeAdults(1)">+</div>
            </div>
          </div>
          <div class="calc-row">
            <span class="calc-label">Children (5–17)</span>
            <div class="calc-controls">
              <div class="calc-btn" onclick="changeChildren(-1)">−</div>
              <span class="calc-count" id="childCount">0</span>
              <div class="calc-btn" onclick="changeChildren(1)">+</div>
            </div>
          </div>
          <div class="calc-total">
            <span class="calc-total-label">Estimated Total</span>
            <span class="calc-total-price" id="calcTotalPrice">$${(tour.price * 2).toLocaleString()}</span>
          </div>
        </div>
      </div>
      
      <div class="modal-tab-content" id="tab-inclusions">
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:24px;">
          <div>
            <h4 style="font-weight:700;color:var(--green-deep);margin-bottom:12px;display:flex;align-items:center;gap:8px;"><i class="fas fa-check-circle" style="color:var(--green-soft)"></i> Included</h4>
            <div style="display:flex;flex-direction:column;gap:8px;">
              ${tour.inclusions.map(i => `<div class="inclusion-item"><i class="fas fa-check"></i> ${i}</div>`).join('')}
            </div>
          </div>
          <div>
            <h4 style="font-weight:700;color:var(--green-deep);margin-bottom:12px;display:flex;align-items:center;gap:8px;"><i class="fas fa-times-circle" style="color:#e74c3c"></i> Excluded</h4>
            <div style="display:flex;flex-direction:column;gap:8px;">
              ${tour.exclusions.map(e => `<div class="exclusion-item"><i class="fas fa-times"></i> ${e}</div>`).join('')}
            </div>
          </div>
        </div>
      </div>
      
      <div class="modal-tab-content" id="tab-availability">
        <p style="font-size:0.88rem;color:var(--gray-500);margin-bottom:16px;">Select your preferred departure date. Green = available, grey = unavailable.</p>
        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:12px;">
          <button style="padding:6px 14px;border:1px solid var(--gray-100);border-radius:6px;font-size:0.85rem;cursor:pointer;" onclick="showToast('Previous month')">◀ Prev</button>
          <strong>May 2025</strong>
          <button style="padding:6px 14px;border:1px solid var(--gray-100);border-radius:6px;font-size:0.85rem;cursor:pointer;" onclick="showToast('Next month')">Next ▶</button>
        </div>
        ${cal}
      </div>
      
      <div class="modal-tab-content" id="tab-faqs">
        ${tour.faqs.map(f => `
          <div style="margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid var(--gray-100);">
            <div style="font-weight:700;color:var(--green-deep);margin-bottom:6px;"><i class="fas fa-question-circle" style="color:var(--green-soft)"></i> ${f.q}</div>
            <div style="font-size:0.88rem;color:var(--gray-500);">${f.a}</div>
          </div>
        `).join('')}
      </div>
      
      <div class="modal-footer">
        <a href="#" class="btn-primary" style="flex:1;justify-content:center;" onclick="closeModal();navigateTo('contact');return false;"><i class="fas fa-calendar-check"></i> Book This Tour</a>
        <button class="btn-outline" onclick="showToast('Itinerary PDF sent to your email!')"><i class="fas fa-download"></i> Download PDF</button>
        <button class="btn-outline" onclick="showToast('Added to wishlist!')"><i class="fas fa-heart"></i></button>
      </div>
    </div>
  `;
  document.getElementById('modalOverlay').classList.add('open');
  document.body.style.overflow = 'hidden';
}

function buildCalendar() {
  const days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
  const available = [3,5,10,12,15,17,22,24,26];
  let html = '<div class="calendar-grid">';
  html += days.map(d => `<div class="cal-day-name">${d}</div>`).join('');
  // offset
  for(let i=0;i<3;i++) html += '<div class="cal-day"></div>';
  for(let i=1;i<=31;i++) {
    const cls = available.includes(i) ? 'available' : 'unavailable';
    const today = i === 15 ? ' today' : '';
    html += `<div class="cal-day ${cls}${today}" onclick="if(this.classList.contains('available')){showToast('Date selected: May ${i}, 2025');}">${i}</div>`;
  }
  html += '</div>';
  return html;
}

function switchModalTab(el, tab) {
  document.querySelectorAll('.modal-tab').forEach(t => t.classList.remove('active'));
  document.querySelectorAll('.modal-tab-content').forEach(t => t.classList.remove('active'));
  el.classList.add('active');
  const content = document.getElementById('tab-' + tab);
  if(content) content.classList.add('active');
}

function closeModal() {
  const modalOverlay = document.getElementById('modalOverlay');
  if (modalOverlay) {
    modalOverlay.classList.remove('open');
  }
  document.body.style.overflow = '';
}

function closeModalOnBg(e) {
  if(e.target === document.getElementById('modalOverlay')) closeModal();
}

/* ---- INITIAL STATE ---- */
updateNavbar();
