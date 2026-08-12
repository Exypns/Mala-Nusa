@extends('layouts.app')

@section('title', 'Contact - Mala Nusa')

@section('content')

<section class="contact-hero-section">
    <div class="contact-hero-container animate-scroll">
    
      <!-- Hero Headline -->
      <h1 class="contact-hero-title">
        Contact <em>Us.</em>
      </h1>

      <!-- Description -->
      <p class="hero-description">
        Whether you're planning a trip, have a question about an experience, or just want to know if this is right for you reach out. That's what we're here for.
      </p>

      <!-- Quick Action Buttons -->
      <div class="hero-quick-actions">
        <a href="#contact-form" class="action-chip primary">
          Send a Message
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="12" y1="5" x2="12" y2="19"></line>
            <polyline points="19 12 12 19 5 12"></polyline>
          </svg>
        </a>
        <a href="https://wa.me/YOUR_NUMBER" class="action-chip" target="_blank">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
          </svg>
          Chat via WhatsApp
        </a>
      </div>

    </div>
  </section>

  <section class="contact-main-section" id="contact-form">
    <div class="contact-grid-card">
      
      <!-- Left Panel: Direct Contact Info -->
      <div class="contact-info-panel">
        <div class="animate-scroll">
          <h2 class="info-header-title">Based in Flores.<br>Here's how to reach us.</h2>

          <div class="contact-list">
            
            <!-- WhatsApp -->
            <div class="contact-item">
              <div class="contact-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                </svg>
              </div>
              <div class="contact-details">
                <span class="contact-label">WhatsApp -<strong> Fastest </strong> </span>
                <a href="https://wa.me/6281138274321" class="contact-value">+62 811 3827 4321</a>
                <p class="contact-note">Typically respond within a few hours · WITA / UTC+8</p>
              </div>
            </div>

            <!-- Email -->
            <div class="contact-item">
              <div class="contact-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
              </div>
              <div class="contact-details">
                <span class="contact-label">Email</span>
                <a href="mailto:admin@malanusa.id" class="contact-value">admin@malanusa.id</a>
                <p class="contact-note">For group bookings, partnership inquiries, or longer questions</p>
              </div>
            </div>

            <!-- Instagram -->
            <div class="contact-item">
              <div class="contact-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
              </div>
              <div class="contact-details">
                <span class="contact-label">Instagram</span>
                <a href="https://instagram.com/mala.nusa" target="_blank" class="contact-value">@mala.nusa</a>
                <p class="contact-note">DMs welcome</p>
              </div>
            </div>

            <!-- Location -->
            <div class="contact-item">
              <div class="contact-icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
              </div>
              <div class="contact-details">
                <span class="contact-label">Location</span>
                <span class="contact-value">Labuan Bajo, Manggarai Barat</span>
                <p class="contact-note">Legally registered in Labuan Bajo. Programs run in Warloka Pesisir (~40 min north by car). Want to meet in person? We prefer a café in Labuan Bajo, just WhatsApp us first.</p>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Right Panel: Contact Form -->
      <div class="contact-form-panel">
        <div class="form-header animate-scroll">
          <h2 class="form-title">Ask anything. We'll get back to you.</h2>
          <p class="form-subtitle">Prefer to write it out? We'll reply by email within 24 hours.</p>
        </div>

        <form action="#" class="contact-form">
          <div class="form-row">
            <div class="form-group">
              <label class="form-label">First name *</label>
              <input type="text" class="form-input" placeholder="First name" required>
            </div>
            <div class="form-group">
              <label class="form-label">Last name *</label>
              <input type="text" class="form-input" placeholder="Last name" required>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label">Email *</label>
            <input type="email" class="form-input" placeholder="your@email.com" required>
          </div>

          <div class="form-group">
            <label class="form-label">What's your question about?</label>
            <select class="form-select">
              <option value="planning">I'm planning a trip and have questions</option>
              <option value="custom">Private & Custom Trip Inquiry</option>
              <option value="partnership">Partnership or Media</option>
              <option value="other">Other question</option>
            </select>
          </div>

          <div class="form-group">
            <label class="form-label">Message *</label>
            <textarea class="form-textarea" placeholder="Your message..." required></textarea>
          </div>

          <button type="submit" class="btn-submit">
            Send Message
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="22" y1="2" x2="11" y2="13"></line>
              <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
            </svg>
          </button>

          <p class="form-footer-note">
            We'll get back to you by email, usually within 24 hours. For urgent inquiries, please contact us on WhatsApp.
          </p>
        </form>
      </div>

    </div>
  </section>


@endsection