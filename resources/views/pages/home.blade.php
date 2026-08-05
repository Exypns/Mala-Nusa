@extends('layouts.app')

@section('title', 'Home - Mala Nusa')

@section('content') 

<section class="hero">
    <div class="hero-inner">
        <div class="hero-label">Travel · Empower · Restore</div>
        <h1>Regenerative travel in Warloka Pesisir, West Flores</h1>
        <p class="sub">
            An hour from Labuan Bajo, you'll have lunch cooked by a 
            woman who's lived by this coastline her whole life, walk paths 
            that predate any guidebook, and watch the sun drop behind Komodo 
            from a hill the village has been climbing for generations.
        </p>
        <div class="hero-button">
            <a href="{{ route('explore') }}" class="btn home-btn-primary">Find Your Experience</a>
        </div>
    </div>
</section>

<section class="experiences">
    <div class="container">
        <div class="section-header">
            <h2 class="experience-title">Experiences in Warloka Pesisir</h2>
            <h3 class="experience-second-title">Choose how much time you have</h3>
            <p class="experience-description">
                Every experiences is community-led, community-priced, and genuinely a full day of your trip.
            </p>
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
                        <a href="#" class="card-detail-btn">
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
                        <a href="#" class="card-detail-btn">
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

<section class="features-section">
    <div class="features-container">
      
      <!-- Left Header Column -->
      <div class="left-column">
        <h2>Why mala nusa?</h2>
        <h3>Travel that stays where you leave it</h3>
        <p>Every rupiah, every guide, every meal traceable to the community you visited.</p>
      </div>

      <!-- Right Feature List Column -->
      <div class="right-column">
        
        <!-- Feature 1 -->
        <div class="feature-item">
          <div class="feature-icon">
            <!-- Icon Compass -->
                <img src="icons/ic-compass.svg">
          </div>
          <div class="feature-text">
            <h4>Guides who live there</h4>
            <p>Your guide is a certified resident of Warloka Pesisir — not a contractor hired for the day from Labuan Bajo</p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="feature-item">
          <div class="feature-icon">
            <!-- Icon Fork & Knife -->
                <img src="icons/ic-food.svg">
          </div>
          <div class="feature-text">
            <h4>Food from the village</h4>
            <p>Your guide is a certified resident of Warloka Pesisir — not a contractor hired for the day from Labuan Bajo</p>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="feature-item">
          <div class="feature-icon">
            <!-- Icon Leaf/Sprout -->
                <img src="icons/ic-plant.svg">
          </div>
          <div class="feature-text">
            <h4>Every visit restores something</h4>
            <p>Each experience includes mangrove planting alongside Warloka's coastal conservation community. You plant a seedling that outlasts your visit by decades.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="impact-section">
    <div class="impact-container">
      <span class="impact-title">I M P A C T</span>
      <h2 class="impact-subtitle">What your visit actually does</h2>
      <p class="impact-description">
        A portion of every booking goes directly to the Warloka village fund, not to a platform, not to an agency. The community earns from the people who visit.<br>
        That's the structure, not the slogan.
      </p>
      <a href="#" class="btn-impact">Read Impact Stories</a>
    </div>
  </section>

  <section class="cta-section">
    <div class="cta-container">
      <h2 class="cta-title">Ready to experience it yourself</h2>
      <p class="cta-description">We're happy to answer your questions first. No commitment needed.</p>
      
      <div class="button-group">
        <a href="#" class="btn-cta">See All Experiences</a>
        <a href="#" class="btn-cta">Chat on WhatsApp</a>
      </div>
    </div>
  </section>
@endsection
