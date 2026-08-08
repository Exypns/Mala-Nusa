@extends('layouts.app')

@section('title', 'Details - Mala Nusa')

@section('content')


<section class="detail-hero-section">
    
    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb">
      <a href="/">Home</a>
      <span class="separator">›</span>
      <span>A Full Day in Warloka Pesisir Details</span>
    </div>

    <!-- Main Image Slider -->
    <div class="slider-container" id="imageSlider">
      
      <!-- Track Slides -->
      <div class="slider-track" id="sliderTrack">
        <div class="slide">
          <img src="images/welcomesection.jpg" alt="Warloka Beach 1">
        </div>
        <div class="slide">
          <img src="images/first.jpg" alt="Warloka Beach 2">
        </div>
        <div class="slide">
          <img src="images/second.jpg" alt="Warloka Beach 3">
        </div>
        <div class="slide">
          <img src="images/third.jpg" alt="Warloka Beach 3">
        </div>
      </div>

      <!-- Left / Right Navigation Arrows -->
      <button class="nav-arrow prev" id="prevBtn" aria-label="Previous Slide">
        <svg viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
      </button>
      <button class="nav-arrow next" id="nextBtn" aria-label="Next Slide">
        <svg viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
      </button>

      <!-- Floating Card Info -->
      <div class="hero-info-card">
        <h1>A Full Day in Warloka Pesisir</h1>
        <p>Megaliths, mangroves, a meal cooked by the village, and sunset over Komodo all in one day.</p>
      </div>

      <!-- Pagination Dots Indicator -->
      <div class="slider-indicators" id="dotsContainer"></div>

    </div>

  </section>

  <section class="overview-section">
    <h2 class="overview-title">Overview</h2>

    <div class="overview-grid">
      
      <!-- Kolom Kiri: Narasi Deskripsi -->
      <div class="overview-content">
        <p>
          You've probably done the boats. Maybe the dive. You've seen the Komodo islands from a deck and taken the photo that proves you were there.
        </p>
        <p>
          And somewhere on the ride back to Labuan Bajo, a quiet thought arrived: is this actually what I came for?
          It isn't. But the answer is one hour up the coast.
        </p>
        <p>
          Your day starts the way Warloka starts without a schedule. Your guide, born and raised on this coastline, walks you into the village through paths that wind past traditional houses and fishing nets left out to dry. The air smells of salt and woodsmoke. Somewhere nearby, someone is already cooking.
        </p>
        <p>
          By mid-morning you'll be standing at Batu Meja a field of megalithic stones placed here by hands that predate any map of this island. Nobody knows exactly how old they are. The silence there has a particular weight.
        </p>
        <p>
          Lunch is on the floor of a family home, cooked over open flame by the women of Warloka's local collective. Fresh catch from the morning's nets. Local vegetables. Sambal that has no business being this good. The meal isn't served to you it's shared with you. And that is a different thing entirely.
        </p>
        <p>
          There's a moment at lunch when you notice you haven't checked your phone in over an hour. The food is between you on the floor. A child has decided to sit next to you for reasons known only to her. The women who cooked the meal are laughing at something that needs no translation.
        </p>
        <p>
          That moment ordinary and unrepeatable at the same time is what this day is actually for.
        </p>
        <p>
          The day ends on Bukit Anjungan. The climb is thirty minutes and entirely worth it. At the top: an unobstructed view of Warloka below, the Flores Sea ahead, and the island clusters of Komodo National Park stretching to the horizon. This view belongs to the people of Warloka. For this hour, it belongs to you too.
        </p>
      </div>

      <!-- Kolom Kanan: Detail Spesifikasi & CTA -->
      <div class="overview-sidebar">
        
        <div class="specs-card">
          <!-- Duration -->
          <div class="spec-item">
            <svg class="spec-icon" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="9"></circle>
              <polyline points="12 7 12 12 15 15"></polyline>
            </svg>
            <div class="spec-details">
              <span class="spec-label">Duration</span>
              <span class="spec-value">6 - 7 hours</span>
            </div>
          </div>

          <!-- Group Size -->
          <div class="spec-item">
            <svg class="spec-icon" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <div class="spec-details">
              <span class="spec-label">Group Size</span>
              <span class="spec-value">Min. 5 guests</span>
            </div>
          </div>

          <!-- Price -->
          <div class="spec-item">
            <svg class="spec-icon" viewBox="0 0 24 24">
              <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
              <line x1="7" y1="7" x2="7.01" y2="7"></line>
            </svg>
            <div class="spec-details">
              <span class="spec-label">Price</span>
              <span class="spec-value">Rp 800.000/person</span>
            </div>
          </div>

          <!-- Location -->
          <div class="spec-item">
            <svg class="spec-icon" viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
              <circle cx="12" cy="10" r="3"></circle>
            </svg>
            <div class="spec-details">
              <span class="spec-label">Location</span>
              <span class="spec-value">Warloka Pesisir</span>
            </div>
          </div>
        </div>

        <!-- Call to Action Buttons -->
        <a href="#book" class="overview-btn-primary">Book Now</a>
        <a href="https://wa.me/6281138274321" target="_blank" class="overview-btn-outline">Questions? Chat with us</a>

      </div>

    </div>
  </section>

  <section class="timeline-section">
    <h2 class="timeline-title">Your day in Warloka</h2>

    <div class="timeline-grid">
      
      <!-- Item 1 -->
      <div class="timeline-item">
        <div class="timeline-node">
          <div class="timeline-dot"></div>
        </div>
        <span class="timeline-time">09:00</span>
        <h3 class="timeline-item-title">Arrival & welcome</h3>
        <p class="timeline-description">
          Your guide meets you at the village entrance. Brief introductions, local tea, and orientation.
        </p>
      </div>

      <!-- Item 2 -->
      <div class="timeline-item">
        <div class="timeline-node">
          <div class="timeline-dot"></div>
        </div>
        <span class="timeline-time">09:15</span>
        <h3 class="timeline-item-title">Batu Meja - The ancestor stones</h3>
        <p class="timeline-description">
          The megalithic council ground. Your guide tells you what is known and what remains a mystery. Both are worth your time.
        </p>
      </div>

      <!-- Item 3 -->
      <div class="timeline-item">
        <div class="timeline-node">
          <div class="timeline-dot"></div>
        </div>
        <span class="timeline-time">10:30</span>
        <h3 class="timeline-item-title">Village walk</h3>
        <p class="timeline-description">
          Fishing boats, drying fish, elders, children. No curated route just Warloka as it is.
        </p>
      </div>

      <!-- Item 4 -->
      <div class="timeline-item">
        <div class="timeline-node">
          <div class="timeline-dot"></div>
        </div>
        <span class="timeline-time">12:00</span>
        <h3 class="timeline-item-title">Lunch with the village women's collective</h3>
        <p class="timeline-description">
          Fresh catch from this morning. Traditional coastal recipes. Eaten together, on the floor, the way it's meant to be.
        </p>
      </div>

      <!-- Item 5 -->
      <div class="timeline-item">
        <div class="timeline-node">
          <div class="timeline-dot"></div>
        </div>
        <span class="timeline-time">13:30</span>
        <h3 class="timeline-item-title">Mangrove planting</h3>
        <p class="timeline-description">
          Learn how the ecosystem works and plant a seedling that will outlast your visit by decades.
        </p>
      </div>

      <!-- Item 6 -->
      <div class="timeline-item">
        <div class="timeline-node">
          <div class="timeline-dot"></div>
        </div>
        <span class="timeline-time">15:00</span>
        <h3 class="timeline-item-title">Trek to Bukit Anjungan</h3>
        <p class="timeline-description">
          A 30-minute uphill walk. At the top: Warloka below, the Flores Sea, and the Komodo archipelago to the horizon.
        </p>
      </div>

      <!-- Item 7 (Last Item) -->
      <div class="timeline-item last-in-row">
        <div class="timeline-node">
          <div class="timeline-dot"></div>
        </div>
        <span class="timeline-time">16:30</span>
        <h3 class="timeline-item-title">Sunset and then goodbye</h3>
        <p class="timeline-description">
          Watch the light change. When you're ready, your guide walks you back down.
        </p>
      </div>

    </div>
  </section>

  <section class="info-section">
    <div class="info-grid">

      <!-- Kolom Kiri: What's included -->
      <div>
        <h2 class="section-subtitle">What's included</h2>
        <ul class="included-list">
          
          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Certified local guide (Warloka resident, English-speaking)</span>
          </li>

          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Community interpreter throughout the day</span>
          </li>

          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Batu Meja megalithic site guided cultural tour</span>
          </li>

          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Village walk with resident introductions</span>
          </li>

          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Local lunch fresh fish + traditional coastal dishes</span>
          </li>

          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Mangrove conservation session + your own seedling</span>
          </li>

          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Sunset trek to Bukit Anjungan</span>
          </li>

          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>Snacks and drinks throughout</span>
          </li>

          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>All village and site entry tickets</span>
          </li>

          <li class="included-item excluded">
            <svg class="icon-cross" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            <span>Transport to/from Warloka (~40 min from Labuan Bajo)</span>
          </li>

          <li class="included-item excluded">
            <svg class="icon-cross" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            <span>Personal travel insurance · Gratuities (optional)</span>
          </li>

        </ul>
      </div>

      <!-- Kolom Kanan: Good to know -->
      <div>
        <h2 class="section-subtitle">Good to know</h2>
        <div class="info-group-container">
          
          <div class="info-group">
            <span class="info-label">GETTING THERE</span>
            <p class="info-desc">~40 minutes by car from Labuan Bajo. Most hotels can arrange transport or ask us via WhatsApp.</p>
          </div>

          <div class="info-group">
            <span class="info-label">PHYSICAL LEVEL</span>
            <p class="info-desc">Moderate. Village paths, mangrove mud, and a 30-minute uphill walk to Bukit Anjungan. Closed-toe shoes recommended.</p>
          </div>

          <div class="info-group">
            <span class="info-label">DIETARY REQUIREMENTS</span>
            <p class="info-desc">Standard lunch features fresh fish and traditional dishes. Let us know your requirements at booking.</p>
          </div>

          <div class="info-group">
            <span class="info-label">GROUP SIZE & OPTIONS</span>
            <p class="info-desc"><strong>Shared:</strong> Rp 800,000/person · min. 5 guests</p>
            <p class="info-desc"><strong>Private:</strong> Your group exclusively contact us for pricing</p>
            <p class="info-desc"><strong>Custom:</strong> Different focus or itinerary? We're open to it.</p>
          </div>

        </div>
      </div>

    </div>
  </section>

  <section class="faq-section">

    <!-- Card Tranparansi Biaya -->
    <div class="transparency-card">
      <span class="transparency-badge">THE PART MOST OPERATORS DON'T TELL YOU</span>
      <h2 class="transparency-title">Where your money goes</h2>
      <p class="transparency-desc">
        Your guide is a certified resident of Warloka Pesisir. Your lunch payment goes directly to the village women's collective. Village entry fees fund the Warloka community program. We charge a fair coordination fee the rest stays in the village. That's the whole point.
      </p>
    </div>

    <!-- FAQ Accordion -->
    <div>
      <div class="faq-header">
        <h2 class="faq-main-title">Questions we get asked</h2>
      </div>

      <div class="faq-container">

        <!-- Item 1 (Default Open) -->
        <details class="faq-item" open>
          <summary class="faq-summary">
            <span>Is this for me?</span>
            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </summary>
          <div class="faq-content">
            This day is for travellers who've already been somewhere "beautiful" and come back wanting more than beautiful. Who want to understand a place, not just photograph it. Who are comfortable with simple food, basic conditions, and the kind of conversation where you don't share a language but somehow manage anyway.
          </div>
        </details>

        <!-- Item 2 -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>How far is Warloka from Labuan Bajo?</span>
            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </summary>
          <div class="faq-content">
            It is approximately a 40-minute scenic drive by car from central Labuan Bajo.
          </div>
        </details>

        <!-- Item 3 -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>How physically demanding is the day?</span>
            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </summary>
          <div class="faq-content">
            Moderate. The day involves village walks, navigating mangrove mud, and a 30-minute uphill trek to Bukit Anjungan. Comfortable, closed-toe shoes are recommended.
          </div>
        </details>

        <!-- Item 4 -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>Can I book if my group is smaller than 5?</span>
            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </summary>
          <div class="faq-content">
            Yes! You can either join an existing open group or choose our Private Option designed exclusively for your party regardless of size.
          </div>
        </details>

      </div>
    </div>

  </section>

  <section class="details-cta-wrapper">
    <div class="details-cta-container">
      
      <!-- Judul & Subtitle -->
      <h2 class="details-cta-title">Ready for a full day well spent?</h2>
      <p class="details-cta-subtitle">Minimum 5 guests. Book your date or reach out first — no commitment required.</p>

      <!-- Tombol Aksi (CTA) -->
      <div class="details-cta-actions">
        
        <!-- Primary Action: WhatsApp -->
        <a href="https://wa.me/YOUR_NUMBER_HERE" class="btn btn-primary" target="_blank" rel="noopener">
          <svg class="icon-wa" viewBox="0 0 24 24">
            <path d="M12.031 2c-5.517 0-9.993 4.476-9.993 9.993 0 1.763.459 3.481 1.332 4.992l-1.37 5.015 5.132-1.347c1.46.797 3.109 1.218 4.799 1.218 5.516 0 9.993-4.476 9.993-9.993 0-5.517-4.477-9.993-9.993-9.993zm5.823 14.162c-.247.693-1.229 1.328-1.996 1.488-.528.11-1.214.2-3.526-.708-2.955-1.162-4.858-4.148-5.006-4.343-.147-.197-1.2-1.597-1.2-3.047 0-1.45.759-2.164 1.029-2.458.27-.294.59-.368.788-.368.197 0 .395.002.567.01.185.008.434-.07.679.518.247.592.839 2.046.913 2.194.074.148.123.321.025.518-.099.197-.148.321-.296.493-.148.173-.311.386-.444.518-.148.148-.302.309-.13.605.172.296.766 1.266 1.643 2.047 1.13 1.006 2.083 1.318 2.379 1.466.296.148.469.123.642-.074.173-.197.74-0.863.938-1.159.198-.296.395-.247.666-.148.271.099 1.726.814 2.022.962.296.148.493.222.567.345.074.123.074.715-.173 1.408z"/>
          </svg>
          <span>Book via WhatsApp</span>
        </a>

        <!-- Secondary Action -->
        <a href="#experiences" class="btn btn-secondary">
          <span>See Other Experiences</span>
        </a>

      </div>

      <!-- Detail Informasi Kontak & Ketentuan -->
      <div class="cta-meta">
        <span class="cta-meta-item">50% deposit to confirm</span>
        <span class="meta-divider">•</span>
        <span class="cta-meta-item">admin@malanusa.id</span>
        <span class="meta-divider">•</span>
        <span class="cta-meta-item">@mala.nusa</span>
      </div>

    </div>
  </section>

@endsection