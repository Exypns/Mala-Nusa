@extends('layouts.app')

@section('title', 'Impact - Mala Nusa')

@section('content')

<section class="hero-impact">
    <!-- Dark overlay untuk keterbacaan teks -->
    <div class="hero-overlay"></div>
    
    <!-- Hero Content -->
    <div class="hero-content">
        <h1 class="hero-title">Warloka, after you leave</h1>
        <p class="hero-description">
            Every visit plants something real a seedling, a story, <br class="desktop-only">
            a morning's income for someone who made your lunch. <br class="desktop-only">
            Here's what that looks like on the ground.
        </p>
    </div>
</section>

<section class="mechanism-section">
    
    <!-- Section Header -->
    <div class="mechanism-header animate-scroll">
      <span class="mechanism-tag">HOW A VISIT WORKS</span>
      <h2 class="mechanism-title">Your booking is the mechanism</h2>
      <p class="mechanism-subtitle">Not a donation, a transaction that's structured differently from the beginning.</p>
    </div>

    <!-- 3-Column Feature Cards -->
    <div class="mechanism-grid">

      <!-- Card 1 -->
      <div class="mechanism-card animate-scroll">
        <div class="card-top">
          <div class="card-icon-box">
            <svg class="card-icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="5" width="20" height="14" rx="2"></rect>
              <line x1="2" y1="10" x2="22" y2="10"></line>
            </svg>
          </div>
          {{-- <span class="step-number">01</span> --}}
        </div>
        <h3 class="card-title">You pay once</h3>
        <p class="card-desc">
          A flat rate per person. No hidden service fees, no agency cut taken at the source. The price you see is the price that enters the community.
        </p>
      </div>

      <!-- Card 2 -->
      <div class="mechanism-card animate-scroll">
        <div class="card-top">
          <div class="card-icon-box">
            <svg class="card-icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          {{-- <span class="step-number">02</span> --}}
        </div>
        <h3 class="card-title">The community earns directly</h3>
        <p class="card-desc">
          Your guide lives in Warloka. The women who cooked your lunch are members of the village UMKM collective. Their income doesn't pass through a middleman.
        </p>
      </div>

      <!-- Card 3 -->
      <div class="mechanism-card animate-scroll">
        <div class="card-top">
          <div class="card-icon-box">
            <svg class="card-icon" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
              <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
              <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
            </svg>
          </div>
          {{-- <span class="step-number">03</span> --}}
        </div>
        <h3 class="card-title">Something grows back</h3>
        <p class="card-desc">
          Every experience includes mangrove planting with Warloka's coastal conservation community. The seedling you plant will outlast your visit by decades.
        </p>
      </div>

    </div>

  </section>

  <section class="field-stories-section">
    
    <!-- Section Header -->
    <div class="section-header animate-scroll">
      <span class="section-tag">FROM THE FIELD</span>
      <h2 class="section-title">Stories from Warloka Pesisir</h2>
    </div>

    <!-- Alert / Coming Soon Box -->
    <div class="notice-banner animate-scroll">
      <div class="notice-header">
        <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path>
          <line x1="12" y1="9" x2="12" y2="13"></line>
          <line x1="12" y1="17" x2="12.01" y2="17"></line>
        </svg>
        <span>COMING SOON</span>
      </div>
      <div class="notice-body">
        <p class="notice-text">
          Field stories, community profiles, and conservation updates will be published here as Mala Nusa's programs grow. The first articles are in preparation check back, or follow @mala.nusa on Instagram for real-time updates.
        </p>
        <a href="https://www.instagram.com/mala.nusa/" target="_blank" class="notice-btn-follow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
            <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
          </svg>
          FOLLOW US
        </a>
      </div>
    </div>

    <!-- Story Cards Stream -->
    <div class="story-cards-list">

      <!-- Card 1 -->
      <article class="story-card animate-scroll">
        <div class="story-card-image">
          <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?q=80&w=800&auto=format&fit=crop" alt="Mangrove Planting">
        </div>
        <div class="story-card-content">
          <span class="story-tag">FIELD STORY</span>
          <h3 class="story-title">The morning we planted 40 seedlings before breakfast</h3>
          <p class="story-excerpt">
            It was low tide. The guide had been at the shoreline since dawn, marking the spots. By the time the guests arrived, the mud was already warm...
          </p>
          <div class="status-badge">Coming · May 2026</div>
        </div>
      </article>

      <!-- Card 2 (Reversed Image Position) -->
      <article class="story-card reverse animate-scroll">
        <div class="story-card-image">
          <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?q=80&w=800&auto=format&fit=crop" alt="Local Women Cooking">
        </div>
        <div class="story-card-content">
          <span class="story-tag">COMMUNITY PROFILE</span>
          <h3 class="story-title">Meet the women who cook every meal in Warloka</h3>
          <p class="story-excerpt">
            The village UMKM collective has been feeding this coastline for years. When guests arrive, they're not catering they're hosting.
          </p>
          <div class="status-badge">Coming · May 2026</div>
        </div>
      </article>

      <!-- Card 3 -->
      <article class="story-card animate-scroll">
        <div class="story-card-image">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=800&auto=format&fit=crop" alt="Warloka Coastline">
        </div>
        <div class="story-card-content">
          <span class="story-tag">INITIATIVE SPOTLIGHT</span>
          <h3 class="story-title">Restoring the coastline, one tide at a time</h3>
          <p class="story-excerpt">
            The mangrove line at Warloka was once twice as thick. The community is working to bring it back one planting session, one guest group at a time.
          </p>
          <div class="status-badge">Coming · May 2026</div>
        </div>
      </article>

    </div>

  </section>

 <section class="cta-impact-section">
    <div class="cta-impact-inner-container animate-scroll">
      
      <!-- Left Column Text -->
      <div class="cta-impact-left-content">
        <span class="cta-impact-tagline">JOIN THE JOURNEY</span>
        <h2 class="cta-impact-heading">
          Want to be part of <em>the next story?</em>
        </h2>
        <p class="cta-impact-body-text">
          Every experience is an opportunity to visit the community behind these stories not as a spectator, but as someone who plants, walks, and eats there.
        </p>
      </div>

      <!-- Right Column Action Buttons -->
      <div class="cta-impact-right-actions">
        <a href="{{ route('explore') }}" class="cta-impact-btn-full-primary">
          Explore Experiences
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="5" y1="12" x2="19" y2="12"></line>
            <polyline points="12 5 19 12 12 19"></polyline>
          </svg>
        </a>

        <a href="https://wa.me/YOUR_NUMBER_HERE" class="cta-impact-btn-full-secondary" target="_blank">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
          </svg>
          Ask via WhatsApp
        </a>
      </div>

    </div>
  </section>

@endsection