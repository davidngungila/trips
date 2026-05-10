@extends('layouts.app')

@section('content')
<div id="page-blog" class="page">
  <div class="page-hero">
    <div class="page-hero-content">
      <div class="section-label" style="justify-content:center;">Stories & Guides</div>
      <h1 class="section-title" style="color:#fff;font-size:clamp(2rem,5vw,3.5rem);">Travel <span style="color:var(--gold-light)">Blog</span></h1>
      <p class="section-subtitle" style="margin:12px auto 0;color:rgba(255,255,255,0.7);">Expert guides, insider tips, and first-person stories from heart of Africa.</p>
    </div>
  </div>
  <section style="padding:80px 0;">
    <div class="container">
      <div class="todo-cats" style="margin-bottom:40px;">
        <div class="todo-cat active"><i class="fas fa-th-large"></i> All Posts</div>
        <div class="todo-cat">Wildlife Guide</div>
        <div class="todo-cat">Trekking Tips</div>
        <div class="todo-cat">Destination Guide</div>
        <div class="todo-cat">Travel Tips</div>
        <div class="todo-cat">Conservation</div>
      </div>
      <div class="blog-grid" style="grid-template-columns:1fr 1fr;margin-bottom:32px;">
        <div class="blog-card featured" onclick="navigateTo('blog')">
          <div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468788/Serengeti_wbeest_lxzeyh.jpg" alt="Great Wildebeest Migration Guide" class="img-fluid" style="height:280px; object-fit:cover;"></div>
          <div class="blog-card-body">
            <div class="blog-card-cat">Wildlife Guide</div>
            <h3 class="blog-card-title" style="font-size:1.4rem;">The Complete Guide to Great Wildebeest Migration 2025</h3>
            <p class="blog-card-excerpt">Everything you need to know about timing your visit, best viewing spots, and expert photography tips for world's greatest wildlife spectacle.</p>
            <div class="blog-card-meta"><span><i class="fas fa-user"></i> James Osei</span><span><i class="fas fa-calendar"></i> Feb 12, 2025</span><span><i class="fas fa-clock"></i> 8 min read</span></div>
          </div>
        </div>
        <div class="blog-card featured" onclick="navigateTo('blog')">
          <div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468776/warthog-6605830_1920_f8rvu8.jpg" alt="Kilimanjaro Routes Comparison" class="img-fluid" style="height:280px; object-fit:cover;"></div>
          <div class="blog-card-body">
            <div class="blog-card-cat">Trekking Tips</div>
            <h3 class="blog-card-title" style="font-size:1.4rem;">Machame vs Lemosho: Which Kilimanjaro Route Is Right for You?</h3>
            <p class="blog-card-excerpt">A detailed breakdown of Tanzania's two most popular Kilimanjaro routes—comparing difficulty, scenery, success rates, and cost.</p>
            <div class="blog-card-meta"><span><i class="fas fa-user"></i> Amina Rashid</span><span><i class="fas fa-calendar"></i> Jan 28, 2025</span><span><i class="fas fa-clock"></i> 6 min read</span></div>
          </div>
        </div>
      </div>
      <div class="grid-3">
        <div class="blog-card"><div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468786/Wwwwwbeest_lnndaz.jpg" alt="Zanzibar Hidden Gems" class="img-fluid" style="height:180px; object-fit:cover;"></div><div class="blog-card-body"><div class="blog-card-cat">Destination Guide</div><h3 class="blog-card-title" style="font-size:1rem;">Zanzibar: 10 Hidden Gems Beyond Tourist Trail</h3><div class="blog-card-meta"><span><i class="fas fa-user"></i> Zuri Mohammed</span><span><i class="fas fa-calendar"></i> Jan 15, 2025</span></div></div></div>
        <div class="blog-card"><div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468785/Wildbeest_Migration_vnkbqc.jpg" alt="Big Five Guide" class="img-fluid" style="height:180px; object-fit:cover;"></div><div class="blog-card-body"><div class="blog-card-cat">Wildlife Guide</div><h3 class="blog-card-title" style="font-size:1rem;">Big Five: A Complete Guide to Spotting All Five in Tanzania</h3><div class="blog-card-meta"><span><i class="fas fa-user"></i> Moses Omondi</span><span><i class="fas fa-calendar"></i> Dec 20, 2024</span></div></div></div>
        <div class="blog-card"><div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468774/Vulture_Wildbeest_tysgw1.jpg" alt="Tanzania Packing List" class="img-fluid" style="height:180px; object-fit:cover;"></div><div class="blog-card-body"><div class="blog-card-cat">Travel Tips</div><h3 class="blog-card-title" style="font-size:1rem;">Tanzania Packing List: Everything You Actually Need (2025)</h3><div class="blog-card-meta"><span><i class="fas fa-user"></i> James Osei</span><span><i class="fas fa-calendar"></i> Dec 5, 2024</span></div></div></div>
        <div class="blog-card"><div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468781/Wildbeest_jump_r7hnyp.jpg" alt="Ruaha Anti-Poaching Operations" class="img-fluid" style="height:180px; object-fit:cover;"></div><div class="blog-card-body"><div class="blog-card-cat">Conservation</div><h3 class="blog-card-title" style="font-size:1rem;">How Tourism Funds Ruaha's Anti-Poaching Operations</h3><div class="blog-card-meta"><span><i class="fas fa-user"></i> Joseph Mwenda</span><span><i class="fas fa-calendar"></i> Nov 18, 2024</span></div></div></div>
        <div class="blog-card"><div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468777/waterbuck_ggd5wl.jpg" alt="Best Dive Sites in Zanzibar" class="img-fluid" style="height:180px; object-fit:cover;"></div><div class="blog-card-body"><div class="blog-card-cat">Destination Guide</div><h3 class="blog-card-title" style="font-size:1rem;">Best Dive Sites in Zanzibar and Pemba: Rated by Depth & Species</h3><div class="blog-card-meta"><span><i class="fas fa-user"></i> Zuri Mohammed</span><span><i class="fas fa-calendar"></i> Nov 3, 2024</span></div></div></div>
        <div class="blog-card"><div class="blog-card-img"><img src="https://res.cloudinary.com/dqflffa1o/image/upload/v1777468782/wildebeest-7093885_1920_m60neg.jpg" alt="Tanzania Visa Guide" class="img-fluid" style="height:180px; object-fit:cover;"></div><div class="blog-card-body"><div class="blog-card-cat">Travel Tips</div><h3 class="blog-card-title" style="font-size:1rem;">Tanzania Visa Guide 2025: Complete Application Process</h3><div class="blog-card-meta"><span><i class="fas fa-user"></i> Amina Rashid</span><span><i class="fas fa-calendar"></i> Oct 22, 2024</span></div></div></div>
      </div>
    </div>
  </section>
</div>
@endsection

@push('scripts')
<script>
// Set current page for navigation
currentPage = 'blog';
updateNavbar();
</script>
@endpush
