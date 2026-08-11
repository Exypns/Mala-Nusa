@extends('layouts.app')

@section('title', 'Explore - Mala Nusa')

@section('content')

<section class="featured-section">
    <div class="featured-grid">
      
      <!-- Content Area -->
      <div class="featured-content">
        <span class="location-badge">West Manggarai, Flores</span>
        <h1 class="featured-title">Warloka Pesisir</h1>
        
        <p class="featured-description">
          A fishing village on the western tip of Flores where an exotic coastline meets ancient megalithic heritage, and where the communities of Bajo and Manggarai have lived by the sea for centuries.
        </p>

        <p class="featured-highlight">
          “Not the kind of place you'll find on a 'top 10 things to do in Labuan Bajo' list. That's exactly what makes it special.”
        </p>
      </div>

      <!-- Image Area -->
      <div class="featured-media">
        <img src="{{ asset('images/first.jpg') }} " alt="Warloka Pesisir Pier" class="featured-image">
      </div>

    </div>
  </section>

  <section class="experiences">
    <div class="container-">
        <div class="section-header">
            <h3 class="experience-title">THREE EXPERIENCES ONE VILLAGE</h3>
            <h2 class="experience-second-title">Choose how deep you want to go</h2>
        </div>
        <div class="experience-grid">
            <article class="experience-card">
                <div class="card-image">
                    <img src="images/welcomesection.jpg" />
                </div>
                <div class="card-content">
                    <h3>A Full Day in Warloka Pesisir</h3>
                    <p class="duration">
                        Full day · 6-7 hours
                    </p>
                    <p class="card-description">
                        Megalithic stones, local lunch from the women's collective,mangrove planting, and sunset over the Komodo archipelago.
                    </p>
                    <div class="card-footer">
                        <div class="price">
                            <strong>Rp 800.000</strong>
                            <span>/ person</span>
                        </div>
                        <a href="{{ route('details') }}" class="card-detail-btn">
                            <span>Details</span>
                            <span class="icon-circle">
                                <img class="arrow-icon" src="icons/ic_arrow.svg">
                            </span>
                        </a>
                    </div>
                </div>
            </article>
            <article class="experience-card">
                <div class="card-image">
                    <span class="card-badge">
                        ⭐ Most Booked
                    </span>
                    <img src="images/welcomesection.jpg" />
                </div>
                <div class="card-content">
                    <h3>A Full Day in Warloka Pesisir</h3>
                    <p class="duration">
                        Full day · 6-7 hours
                    </p>
                    <p class="card-description">
                        Megalithic stones, local lunch from the women's collective,mangrove planting, and sunset over the Komodo archipelago.
                    </p>
                    <div class="card-footer">
                        <div class="price">
                            <strong>Rp 800.000</strong>
                            <span>/ person</span>
                        </div>
                        <a href="{{ route('details') }}" class="card-detail-btn">
                            <span>Details</span>
                            <span class="icon-circle">
                                <img class="arrow-icon" src="icons/ic_arrow.svg">
                            </span>
                        </a>
                    </div>
                </div>
            </article>
            <article class="experience-card">
                <div class="card-image">
                    <img src="images/welcomesection.jpg" />
                </div>
                <div class="card-content">
                    <h3>A Full Day in Warloka Pesisir</h3>
                    <p class="duration">
                        Full day · 6-7 hours
                    </p>
                    <p class="card-description">
                        Megalithic stones, local lunch from the women's collective,mangrove planting, and sunset over the Komodo archipelago.
                    </p>
                    <div class="card-footer">
                        <div class="price">
                            <strong>Rp 800.000</strong>
                            <span>/ person</span>
                        </div>
                        <a href="#" class="card-detail-btn">
                            <span>Details</span>
                            <span class="icon-circle">
                                <img class="arrow-icon" src="icons/ic_arrow.svg">
                            </span>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<section class="info-section">
    <div class="info-grid-container">
      
      <!-- Column 1: Included Features -->
      <div class="info-column">
        <div class="column-header">
          <div class="icon-wrapper">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
              <polyline points="22 4 12 14.01 9 11.01"></polyline>
            </svg>
          </div>
          <h3 class="column-title">All Experiences Include</h3>
        </div>

        <ul class="include-list">
          <li>Certified local guide & community interpreter</li>
          <li>Village & site entry fees</li>
          <li>Mangrove planting activity</li>
          <li>Local snacks & drinks</li>
          <li>Direct contribution to Warloka community fund</li>
        </ul>
      </div>

      <!-- Column 2: Private & Custom Trips -->
      <div class="info-column">
        <div class="column-header">
          <div class="icon-wrapper">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
          </div>
          <h3 class="column-title">Private & Custom Trips</h3>
        </div>

        <p class="column-text">
          All programs are available as private departures for any group size, or customised around your specific interests.
        </p>
        <p class="column-text">
          Contact us via <a href="https://wa.me/YOUR_NUMBER" class="highlight-link">WhatsApp</a> for custom pricing.
        </p>
      </div>

      <!-- Column 3: Booking Policy -->
      <div class="info-column">
        <div class="column-header">
          <div class="icon-wrapper">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
          </div>
          <h3 class="column-title">Booking Policy</h3>
        </div>

        <div class="policy-box">
          <strong>50% deposit</strong> required to confirm reservation. Full balance due 14 days before your experience.
        </div>

        <p class="column-text" style="font-size: 13px; color: #666;">
          * Full payment required for bookings made within 7 days.
        </p>
      </div>

    </div>
  </section>

@endsection