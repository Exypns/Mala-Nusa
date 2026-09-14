@extends('layouts.app')

@section('title', 'Details - Mala Nusa')

@section('content')

<section class="detail-hero-section">
    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb">
      <a href="{{ route('explore') }}">Explore</a>
      <span class="separator">›</span>
      <span>{{ $experience->title }}</span>
    </div>

    <!-- Main Image Slider -->
    <div class="slider-container" id="imageSlider">
      
      <!-- Track Slides -->
      <div class="slider-track" id="sliderTrack">
        @foreach ( $experience->image as $image )
        <div class="slide">
          <img src="{{ Storage::url($image->image) }}" alt="{{ $image->alt_text }}">
        </div>
        @endforeach
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
        <h1>{{ $experience->title }}</h1>
        <p>{{ $experience->short_description }}</p>
      </div>

      <!-- Pagination Dots Indicator -->
      <div class="slider-indicators" id="dotsContainer"></div>
    </div>

    {{-- Full Image View --}}
    <div class="lightbox-modal" id="lightboxModal">
      <button class="lightbox-close" id="lightboxClose" aria-label="Close Lightbox">
        <img src="{{ asset('icons/ic-cross.svg') }}" />
      </button>

      <div class="lightbox-loader" id="lightboxLoader"></div>

      <!-- Tombol Navigasi Lightbox -->
      <button class="lightbox-nav prev" id="lightboxPrev" aria-label="Previous Image">
        <svg viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
      </button>

      <img class="lightbox-img" id="lightboxImg" src="" alt="">

      <button class="lightbox-nav next" id="lightboxNext" aria-label="Next Image">
        <svg viewBox="0 0 24 24"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/></svg>
      </button>

      <div class="lightbox-caption" id="lightboxCaption"></div>
    </div>
  </section>

  <section class="overview-section">
    <h2 class="overview-title">Overview</h2>

    <div class="overview-grid">
      <!-- Description -->
      <div class="overview-content">
        <p>{!! nl2br(e($experience->description)) !!}</p>
      </div>

      <!-- Specification Detail & CTA -->
      <div class="overview-sidebar">
        <div class="specs-card">
          <!-- Duration -->
          <div class="spec-item">
            <img src="{{ asset('icons/ic-clock.svg') }}" />
            <div class="spec-details">
              <span class="spec-label">Duration</span>
              <span class="spec-value">{{ $experience->duration }}</span>
            </div>
          </div>

          <!-- Group Size -->
          <div class="spec-item">
            <img src="{{ asset('icons/ic-group.svg') }}" />
            <div class="spec-details">
              <span class="spec-label">Group Size</span>
              <span class="spec-value">
                Min. {{ $experience->min_guests }} guests 
                @if ($experience->max_guests)
                 • Max. {{ $experience->max_guests }} guests
                @endif
              </span>
            </div>
          </div>

          <!-- Price -->
          <div class="spec-item">
            <img src="{{ asset('icons/ic-pricetag.svg') }}"/>
            <div class="spec-details">
              <span class="spec-label">Price</span>
              <span class="spec-value">Rp {{ number_format($experience->price, 0, ',', '.') }}/person</span>
            </div>
          </div>

          <!-- Location -->
          @if ($experience->location)
          <div class="spec-item">
            <img src="{{ asset('icons/ic-location.svg') }}" />
            <div class="spec-details">
              <span class="spec-label">Location</span>
              <span class="spec-value">{{ $experience->location }}</span>
            </div>
          </div>
          @endif

          <!-- Stay -->
          @if ( $experience->stay->isNotEmpty() )
          <div class="spec-item">
            <img src="{{ asset('icons/ic-stay.svg') }}" />
            <div class="spec-details">
              @foreach ($experience->stay as $stay)
                <span class="spec-label">Stay</span>
                <span class="spec-value">{{ $stay->title }}</span>
              @endforeach
            </div>
          </div>
          @endif
        </div>

        <!-- Call to Action Buttons -->
        <a href="#book" class="overview-btn-primary">Book Now</a>
        <a href="https://wa.me/6281138274321" target="_blank" class="overview-btn-outline">Questions? Chat with us</a>

      </div>
    </div>
  </section>

  <section class="timeline-section">
    <h2 class="timeline-title">Your day in Warloka</h2>

    @if ($experience->schedules->count() > 1)
    <div class="schedule-tabs">
        @foreach ($experience->schedules as $schedule)
            <button
                type="button"
                class="schedule-tab {{ $loop->first ? 'is-active' : '' }}"
                data-schedule="{{ $schedule->id }}">
                <span class="schedule-tab-title">
                    {{ $schedule->title }}
                </span>
                @if ($schedule->description)              
                <span class="schedulte-tab-description">
                  {{ $schedule->description }}
                </span>
                @endif
            </button>
        @endforeach
    </div>
    @endif

    @foreach ($experience->schedules as $schedule)

    <div
        class="schedule-panel {{ $loop->first ? 'is-active' : '' }}"
        data-schedule-panel="{{ $schedule->id }}">
      <div class="timeline-grid">
      @foreach ($schedule->days as $day)

        @if ($schedule->days->count() > 1)
          <h4 class="itinerary-day-title">
            Day {{ $day->day_number }}
            @if ($day->title)
              - {{ $day->title }}
            @endif
          </h4>
        @endif

        @foreach ($day->itineraries as $itinerary)
          <div class="timeline-item {{ $loop->last ? 'last-in-row' : '' }}">
            <div class="timeline-node">
              <div class="timeline-dot"></div>
            </div>
            <span class="timeline-time">{{ $itinerary->time }}</span>
            <h3 class="timeline-item-title">{{ $itinerary->title }}</h3>
              @if ($itinerary->description)
                @foreach (preg_split('/\R{2,}/', $itinerary->description) as $paragraph)
                  <p class="timeline-description">{!! nl2br(e(trim($paragraph))) !!}</p>
                @endforeach
              @endif
          </div>    
        @endforeach
      @endforeach   
    </div>
    </div>
    @endforeach
  </section>

  <section class="detail-info-section">
    <div class="info-grid">
      @if ($experience->inclusion->isNotEmpty())
        
      <!-- Kolom Kiri: What's included -->
      <div>
        <h2 class="section-subtitle">What's included</h2>
        <ul class="included-list">
          @foreach ($experience->inclusion->where('type', 'included') as $included)
          <li class="included-item">
            <svg class="icon-check" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ $included->description }}</span>
          </li> 
          @endforeach

          @foreach ($experience->inclusion->where('type', 'excluded') as $excluded)
          <li class="included-item excluded">
            <svg class="icon-cross" viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            <span>{{ $excluded->description }}</span>
          </li>
          @endforeach
        </ul>
      </div>
      @endif

      <!-- Kolom Kanan: Good to know -->
      <div>
        <h2 class="section-subtitle">Good to know</h2>
        <div class="info-group-container">
          @foreach ($experience->practicalInfo as $practicalInfo)
          <div class="info-group">
            <span class="info-label">{{ $practicalInfo->title }}</span>
            <p class="info-desc">{!! nl2br(e($practicalInfo->content))  !!}</p>
          </div>
          @endforeach
          <div class="info-group">
            <span class="info-label">GROUP SIZE & OPTIONS</span>
            <p class="info-desc"><strong>Shared:</strong> Rp {{ number_format($experience->price, 0, ',', '.') }}/person • Min. {{ $experience->min_guests }} guests</p>
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
      <h2 class="transparency-title">Where your money goes?</h2>
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
        @foreach ($experience->faq as $faq)
        <!-- Item 1 (Default Open) -->
        <details class="faq-item">
          <summary class="faq-summary">
            <span>{{ $faq->question }}</span>
            <svg class="faq-icon" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"></polyline></svg>
          </summary>
          <div class="faq-content">
            {{ $faq->answer }}
          </div>
        </details>
        @endforeach
      </div>
    </div>

  </section>

  <section class="details-cta-wrapper">
    <div class="details-cta-container">
      
      <!-- Judul & Subtitle -->
      <h2 class="details-cta-title">Ready for a full day well spent?</h2>
      <p class="details-cta-subtitle">Book your date or reach out first, no commitment required.</p>

      <!-- Tombol Aksi (CTA) -->
      <div class="details-cta-actions">
        
        <!-- Primary Action: WhatsApp -->
        <a href="https://wa.me/YOUR_NUMBER_HERE" class="details-action-chip primary" target="_blank" rel="noopener">
          <span>Book via WhatsApp</span>
        </a>

        <!-- Secondary Action -->
        <a href="{{ route('explore') }}" class="details-action-chip">
          <span>See Other Experiences</span>
        </a>

      </div>

      <!-- Detail Informasi Kontak & Ketentuan -->
      {{-- <div class="cta-meta">
        <span class="cta-meta-item">admin@malanusa.id</span>
        <span class="meta-divider">•</span>
        <span class="cta-meta-item">@mala.nusa</span>
      </div> --}}
    </div>
  </section>

@endsection