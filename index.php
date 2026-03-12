<?php include 'header.php'; ?>

<!-- ══════════════════════════════════════════
     HERO SECTION — Slideshow Banner
══════════════════════════════════════════ -->
<section class="hero-slideshow" id="home">
  <!-- Slides -->
  <div class="hero-slides">
    <div class="hero-slide active" style="background: linear-gradient(135deg, #053b94 0%, #1a6bcc 50%, #3f94f6 100%);">
    </div>
    <div class="hero-slide" style="background: linear-gradient(135deg, #0857C3 0%, #2b80e5 40%, #6cb0fb 100%);"></div>
    <div class="hero-slide" style="background: linear-gradient(135deg, #003087 0%, #e5a020 50%, #f0b830 100%);"></div>
  </div>

  <!-- Overlay Content (stays fixed across all slides) -->
  <div class="hero-slide-overlay">
    <div class="container">
      <div class="hero-slide-content">
        <h1 class="hero-title-wrapper">
          <img src="assets/images/logo_white.png" alt="BRIGAMA International Business Case Competition 2026" class="hero-logo-img">
        </h1>
        <p class="hero-subtitle">
          Test your strategy. Compete nationally. Win internationally. The
          stage is set for the brightest minds in business.
        </p>
        <div class="hero-actions">
          <a href="#cta" class="btn btn-primary btn-lg">Register Now</a>
          <a href="#" class="btn btn-outline-white btn-lg">View Handbook</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Arrow Navigation -->
  <button class="hero-arrow hero-arrow--prev" aria-label="Previous slide">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
      stroke-linecap="round" stroke-linejoin="round">
      <polyline points="15 18 9 12 15 6" />
    </svg>
  </button>
  <button class="hero-arrow hero-arrow--next" aria-label="Next slide">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
      stroke-linecap="round" stroke-linejoin="round">
      <polyline points="9 6 15 12 9 18" />
    </svg>
  </button>

  <!-- Dots Navigation -->
  <div class="hero-dots">
    <button class="hero-dot active" data-slide="0" aria-label="Slide 1"></button>
    <button class="hero-dot" data-slide="1" aria-label="Slide 2"></button>
    <button class="hero-dot" data-slide="2" aria-label="Slide 3"></button>
  </div>
</section>


<!-- ══════════════════════════════════════════
     ABOUT SECTION
══════════════════════════════════════════ -->
<section class="about" id="about">
  <div class="container">
    <div class="about-grid">
      <!-- Left: Text -->
      <div class="about-text" data-animate>
        <h2 class="about-title">About BRIGAMA International Business Case Competition </h2>
        <p class="about-tagline">A competition built for excellence</p>
        <p class="about-desc">
          BRI GAMA brings together the sharpest business minds from across
          Indonesia and the world. Organized by KAFEGAMA in partnership with Bank
          Rakyat Indonesia, this is where strategy meets opportunity.
        </p>
        <ul class="about-features-list">
          <li class="about-feature-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="7" width="20" height="14" rx="2" />
              <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
            </svg>
            Rigorous case analysis
          </li>
          <li class="about-feature-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 8v4l3 3" />
            </svg>
            Real-world business challenges
          </li>
          <li class="about-feature-item">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="3" width="20" height="14" rx="2" />
              <line x1="8" y1="21" x2="16" y2="21" />
              <line x1="12" y1="17" x2="12" y2="21" />
            </svg>
            Industry recognition and prizes
          </li>
        </ul>
        <div class="about-actions">
          <a href="#categories" class="btn btn-primary">Learn More</a>
          <a href="#timeline-activities" class="about-arrow-link">
            Timeline Activities
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <polyline points="9 18 15 12 9 6" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Right: Single image placeholder with blue border -->
      <div class="about-visual" data-animate data-delay="200">
        <div class="about-img-card">
          <div class="about-img-placeholder">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="18" height="18" rx="2" />
              <circle cx="8.5" cy="8.5" r="1.5" />
              <polyline points="21 15 16 10 5 21" />
            </svg>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     CATEGORIES SECTION
══════════════════════════════════════════ -->
<section class="categories" id="categories">
  <div class="container">
    <div class="section-header centered" data-animate>
      <span class="section-label">Competition Categories</span>
      <h2 class="section-title">Choose Your Category</h2>
      <p class="section-sub">Two competition categories are available based on your education level, each with unique
        and challenging business cases.</p>
    </div>

    <div class="categories-grid" data-animate data-delay="100">

      <!-- Category S1 -->
      <div class="cat-card cat-card--s1">
        <div class="cat-card__content">

          <h3 class="cat-card__title">Undergraduate Student (S1)</h3>
          <p class="cat-card__desc">Showcase your best analytical skills through a prestigious business case competition
            designed for undergraduate students globally.</p>
          <a href="#cta" class="cat-card__btn">
            Learn More
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="7" y1="17" x2="17" y2="7" />
              <polyline points="7 7 17 7 17 17" />
            </svg>
          </a>
        </div>
        <div class="cat-card__illustration">
          <img src="assets/images/S1.png" alt="S1 Illustration" class="cat-img-pop" loading="lazy" />
        </div>
      </div>

      <!-- Category S2 -->
      <div class="cat-card cat-card--s2">
        <div class="cat-card__content">

          <h3 class="cat-card__title">Graduate Student (S2)</h3>
          <p class="cat-card__desc">Prove your business strategy expertise at the postgraduate level and compete to win
            prestigious awards with Bank Rakyat Indonesia.</p>
          <a href="#cta" class="cat-card__btn">
            Learn More
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="7" y1="17" x2="17" y2="7" />
              <polyline points="7 7 17 7 17 17" />
            </svg>
          </a>
        </div>
        <div class="cat-card__illustration">
          <img src="assets/images/S2.png" alt="S2 Illustration" class="cat-img-pop" loading="lazy" />
        </div>
      </div>

    </div>
  </div>
</section>
<!-- ══════════════════════════════════════════
     TIMELINE ACTIVITIES SECTION
══════════════════════════════════════════ -->
<section class="timeline-activities" id="timeline-activities">
  <div class="container container--left-aligned">
    <div class="ta-header-wrapper" data-animate>
      <div class="section-header" style="margin-bottom: 0;">
        <h2 class="section-title" style="color: var(--blue-800);">Timeline Activities</h2>
        <p class="section-sub" style="color: var(--blue-700);">
          Since its inception, BRI GAMA has evolved into a premier platform for competitive business thinking. Each year
          brings new challenges, new winners, and new standards of excellence.
        </p>
      </div>
      <div class="ta-nav-controls">
        <button class="ta-nav-btn ta-prev" aria-label="Previous Activity">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="15 18 9 12 15 6"></polyline>
          </svg>
        </button>
        <button class="ta-nav-btn ta-next" aria-label="Next Activity">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </button>
      </div>
    </div>

    <!-- Horizontal Slider Container with Navigation Controls -->
    <div class="ta-slider-container" data-animate data-delay="100">



      <div class="ta-slider-wrapper">
        <div class="ta-slider">
          <!-- Card 1 -->
          <!-- <div class="ta-card">
            <div class="ta-card__time">March 31</div>
            <h3 class="ta-card__title">Website Launch</h3>
            <p class="ta-card__desc">Official launch of the BRI GAMA BCC 2026 website as the central information hub, registration portal, and primary communication channel for the competition.</p>
          </div> -->
          <!-- Card 2 -->
          <div class="ta-card">
            <div class="ta-card__time">April 1 – June 3</div>
            <h3 class="ta-card__title">Publication & Participant Registration</h3>
            <p class="ta-card__desc">National-level outreach and registration period for prospective participants.</p>
            <ul class="ta-card__list">
              <li>Official Letter of Invitation distribution to universities</li>
              <li>Strategic content publication highlighting BRI, Kafegama, and the Business Case Competition</li>
              <li>Dedicated Participants Q&A (Customer Service Mode)</li>
              <li>"Road to BRI GAMA BCC 2026" campaign through three Live Instagram sessions</li>
            </ul>
          </div>
          <!-- Card 3 -->
          <div class="ta-card">
            <div class="ta-card__time">July 3</div>
            <h3 class="ta-card__title">Opening Ceremony</h3>
            <p class="ta-card__desc">The official hybrid launch of BRI GAMA BCC 2026.</p>
            <ul class="ta-card__list">
              <li>Opening remarks from BRI executives and strategic partners</li>
              <li>Keynote session on business transformation and innovation</li>
              <li>Thematic talk show on Business Case Competition insights</li>
              <li>Official briefing on competition structure and mechanics</li>
            </ul>
          </div>
          <!-- Card 4 -->
          <div class="ta-card">
            <div class="ta-card__time">July 11 – August 2</div>
            <h3 class="ta-card__title">Pre-Competition Stage</h3>
            <p class="ta-card__desc">The preliminary selection phase designed to identify teams with strong analytical
              capabilities and strategic problem-solving skills.</p>
            <ul class="ta-card__list">
              <li>Case release (July 11)</li>
              <li>Submission period (July 11–17)</li>
              <li>Judging process (July 20–30)</li>
              <li>Official qualification announcement (July 31)</li>
              <li>Podcast session & winners announcement (August 2)</li>
            </ul>
          </div>
          <!-- Card 5 -->
          <div class="ta-card">
            <div class="ta-card__time">August 5 – August 17</div>
            <h3 class="ta-card__title">BCC 1</h3>
            <p class="ta-card__desc">An advanced round focused on in-depth strategic analysis and solution development
              based on real business cases.</p>
            <ul class="ta-card__list">
              <li>Insight Seminar with industry practitioners (August 5)</li>
              <li>Case release (August 8)</li>
              <li>Submission period (August 8–12)</li>
              <li>Hybrid judging session (August 15)</li>
              <li>Official result announcement (August 16/17)</li>
            </ul>
          </div>
          <!-- Card 6 -->
          <div class="ta-card">
            <div class="ta-card__time">August 19 – August 30</div>
            <h3 class="ta-card__title">BCC 2 – Grand Final Stage</h3>
            <p class="ta-card__desc">The final stage bringing together top teams to present strategic solutions before a
              distinguished panel of judges.</p>
            <ul class="ta-card__list">
              <li>Final Insight Seminar (August 19/20)</li>
              <li>Final case release (August 24)</li>
              <li>Submission period (August 24–27)</li>
              <li>Company Visit / Cultural Session (August 29)</li>
              <li>Final Judging & Winner Announcement (August 30)</li>
            </ul>
          </div>
        </div>
      </div>



    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     RULES & REGISTRATION SECTION
══════════════════════════════════════════ -->
<section class="rules" id="rules">
  <div class="container">

    <!-- Blue handbook banner -->
    <div class="rules-banner" data-animate>
      <div class="rules-banner__text">
        <h2 class="rules-banner__title">Get The Full Handbook</h2>
        <p class="rules-banner__sub">Complete rules, judging criteria, and submission guidelines in one document.</p>
        <div class="rules-banner__actions">
          <a href="#" class="rules-banner__btn rules-banner__btn--outline">Download</a>
          <a href="#cta" class="rules-banner__btn rules-banner__btn--outline">Register Now</a>
        </div>
      </div>
    </div>

    <!-- Two info cards -->
    <div class="rules-cards" id="rules-cards" data-animate data-delay="100">

      <!-- Competition Rules -->
      <div class="rules-info-card">
        <h3 class="rules-info-card__title">Competition Rules</h3>
        <ul class="rules-info-card__list">
          <li>Participants must be active Undergraduate (S1) or Graduate (S2) students from registered universities in
            Indonesia.</li>
          <li>Each team consists of a maximum of <strong>3 (three) members</strong> from the same university.</li>
          <li>At least <strong>one member</strong> must be from the Faculty of Economics and Business.</li>
          <li>Each participant can only register in <strong>one team</strong> and <strong>one category</strong>.</li>
          <li>All submissions must be original work and have never been submitted to other competitions.</li>
          <li>The jury's decision is <strong>final and incontestable</strong>.</li>
        </ul>
      </div>

      <!-- Registration Term -->
      <div class="rules-info-card">
        <h3 class="rules-info-card__title">Registration Term</h3>
        <ul class="rules-info-card__list">
          <li>Curriculum Vitae (CV) of each team member</li>
          <li>Team Cover Letter / Motivation Letter</li>
          <li>Scanned active Student ID Card (KTM)</li>
          <li>Latest academic transcript (per semester)</li>
          <li>Recent formal photograph of each member</li>
          <li>Recommendation letter from academic advisor/dean</li>
        </ul>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     GALLERY SECTION
══════════════════════════════════════════ -->
<section class="gallery" id="gallery">
  <div class="container">
    <h2 class="gallery-heading" data-animate>Past Competition Gallery</h2>

    <div class="gallery-mosaic" data-animate data-delay="150">
      <!-- Item A: top-left small -->
      <div class="gallery-mosaic-item gallery-mosaic--a" style="background: linear-gradient(135deg, #003087, #1a6bcc);">
        <div class="gallery-placeholder">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
          <span>Grand Final 2025</span>
        </div>
      </div>

      <!-- Item B: top-right large landscape -->
      <div class="gallery-mosaic-item gallery-mosaic--b" style="background: linear-gradient(135deg, #00409e, #2282e3);">
        <div class="gallery-placeholder">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
          <span>Team Presentation</span>
        </div>
      </div>

      <!-- Item C: middle-left tall -->
      <div class="gallery-mosaic-item gallery-mosaic--c" style="background: linear-gradient(135deg, #0051b5, #4da3f5);">
        <div class="gallery-placeholder">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
          <span>Workshop & Mentoring</span>
        </div>
      </div>

      <!-- Item D: middle-right -->
      <div class="gallery-mosaic-item gallery-mosaic--d" style="background: linear-gradient(135deg, #0857c3, #71c5e8);">
        <div class="gallery-placeholder" style="color: white;">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
          <span>Networking Session</span>
        </div>
      </div>

      <!-- Item E: bottom-right top -->
      <div class="gallery-mosaic-item gallery-mosaic--e" style="background: linear-gradient(135deg, #053b94, #1a6bcc);">
        <div class="gallery-placeholder">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
          <span>Winner Announcement</span>
        </div>
      </div>

      <!-- Item F: bottom-right bottom -->
      <div class="gallery-mosaic-item gallery-mosaic--f" style="background: linear-gradient(135deg, #2d3348, #4a5368);">
        <div class="gallery-placeholder">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
            stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
          <span>Case Analysis</span>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════
     FAQ SECTION (Newly Integrated)
══════════════════════════════════════════ -->
<section class="faq" id="faq">
  <div class="container">
    <div class="section-header" data-animate style="text-align:center;">
      <span class="section-label">FAQs</span>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-sub" style="margin-left:auto;margin-right:auto;">Find answers to the most common questions about
        the BRI GAMA 2026 competition.</p>
    </div>
    <div class="faq-list">
      <div class="faq-item" data-animate data-delay="100">
        <button class="faq-question">
          <span>Who can participate in this competition?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>This competition is open to active Undergraduate (S1) and Graduate (S2) students from all universities in
            Indonesia. Each team consists of a maximum of 3 members.</p>
        </div>
      </div>
      <div class="faq-item" data-animate data-delay="200">
        <button class="faq-question">
          <span>Do team members have to be from the same university?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Yes, all team members must be from the same university, but they can be from different faculties or majors.
          </p>
        </div>
      </div>
      <div class="faq-item" data-animate data-delay="300">
        <button class="faq-question">
          <span>Is there a registration fee?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Registration for the preliminary selection stage is free. The registration fee only applies to teams that
            pass to the preliminary round.</p>
        </div>
      </div>
      <div class="faq-item" data-animate data-delay="400">
        <button class="faq-question">
          <span>What is the submission format?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Teams passing the administrative selection will work on and submit a business case analysis paper in the
            specified format. Finalists will present their solutions to the jury panel.</p>
        </div>
      </div>
      <div class="faq-item" data-animate data-delay="500">
        <button class="faq-question">
          <span>What are the prizes?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Winners will receive cash prizes, award certificates, as well as career opportunities and recognition by
            Bank Rakyat Indonesia. Detailed prize amounts are available in the official competition handbook.</p>
        </div>
      </div>
    </div>
    <div class="faq-cta" data-animate>
      <h3>Still Have Questions?</h3>
      <p>Reach out to our team directly for any additional information.</p>
      <a href="#contact" class="faq-cta-btn">Contact Us</a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     WALL OF FAME SECTION
══════════════════════════════════════════ -->
<section class="wof" id="wall-of-fame">
  <div class="container">
    <!-- Header -->
    <div class="section-header centered" data-animate>
      <span class="section-label">Wall of Fame</span>
      <h2 class="section-title">Our Champions</h2>
      <p class="section-sub">Meet the champions who competed and conquered at BRI GAMA. Their success began with a
        single decision to register.</p>
    </div>

    <!-- Tabs row: Year + Category -->
    <div class="wof-controls" data-animate data-delay="100">
      <div class="wof-year-tabs">
        <button class="wof-year-tab active" data-year="2024">2024</button>
        <button class="wof-year-tab" data-year="2023">2023</button>
        <button class="wof-year-tab" data-year="2022">2022</button>
      </div>
      <div class="wof-cat-tabs">
        <button class="wof-cat-tab active" data-cat="s1">Undergraduate (S1)</button>
        <button class="wof-cat-tab" data-cat="s2">Graduate (S2)</button>
      </div>
    </div>

    <!-- Champions Podium — Filtered by Year + Category -->
    <!-- ── 2022 · S1 ── -->
    <div class="wof-podium" data-year="2022" data-cat="s1" style="display:none;">
      <div class="wof-card wof-card--first">
        <div class="wof-card__photo">
          <div class="wof-card__rank wof-rank--gold">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <circle cx="12" cy="9" r="6" />
              <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
            </svg>
            1st Champion
          </div>
          <img src="assets/images/WallofChampion/2022/S1/2022_S1_W1.png" alt="1st Champion 2022 S1"
            style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="wof-card__info">
          <h3 class="wof-card__team">CCG (Chemistree Consulting Group)</h3>
          <p class="wof-card__univ">1st Champion | Universitas Gadjah Mada</p>
        </div>
      </div>
      <div class="wof-right-col">
        <div class="wof-runner-row">
          <div class="wof-card wof-card--second">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--silver">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                2nd
              </div>
              <img src="assets/images/WallofChampion/2022/S1/2022_S1_W2.png" alt="2nd Champion 2022 S1"
                style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Slagen</h3>
              <p class="wof-card__univ">2nd Champion | Universitas Indonesia</p>
            </div>
          </div>
          <div class="wof-card wof-card--third">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--bronze">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                3rd
              </div>
              <img src="assets/images/WallofChampion/2022/S1/2022_S1_W3.png" alt="3rd Champion 2022 S1"
                style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Macario</h3>
              <p class="wof-card__univ">3rd Champion | Institut Teknologi Sepuluh Nopember</p>
            </div>
          </div>
        </div>
        <div class="wof-card wof-card--speaker">
          <div class="wof-speaker-inner">
            <div class="wof-card__photo wof-card__photo--speaker">
              <img src="assets/images/WallofChampion/2022/S1/2022_S1_Best_Speaker.png" alt="Best Speaker 2022 S1"
                style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-speaker-info">
              <div class="wof-card__rank wof-rank--speaker">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
                  <path d="M19 10v2a7 7 0 0 1-14 0v-2" />
                  <line x1="12" y1="19" x2="12" y2="23" />
                  <line x1="8" y1="23" x2="16" y2="23" />
                </svg>
                Best Speaker
              </div>
              <h3 class="wof-card__team">Garry Neville</h3>
              <p class="wof-card__univ">Best Speaker | CCG | Universitas Gadjah Mada</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ── 2022 · S2 ── -->
    <div class="wof-podium" data-year="2022" data-cat="s2" style="display:none;">
      <div class="wof-card wof-card--first">
        <div class="wof-card__photo">
          <div class="wof-card__rank wof-rank--gold">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <circle cx="12" cy="9" r="6" />
              <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
            </svg>
            1st Champion
          </div>
          <img src="assets/images/WallofChampion/2022/S2/2022_S2_W1.png" alt="1st Champion 2022 S2" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="wof-card__info">
          <h3 class="wof-card__team">I-Leaders</h3>
          <p class="wof-card__univ">1st Champion | Universitas Gadjah Mada</p>
        </div>
      </div>
      <div class="wof-right-col">
        <div class="wof-runner-row">
          <div class="wof-card wof-card--second">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--silver">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                2nd
              </div>
              <img src="assets/images/WallofChampion/2022/S2/2022_S2_W2.png" alt="2nd Champion 2022 S2" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Livicha</h3>
              <p class="wof-card__univ">2nd Champion | Universitas Indonesia</p>
            </div>
          </div>
          <div class="wof-card wof-card--third">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--bronze">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                3rd
              </div>
              <img src="assets/images/WallofChampion/2022/S2/2022_S2_W3.png" alt="3rd Champion 2022 S2" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Three M</h3>
              <p class="wof-card__univ">3rd Champion | Universitas Indonesia</p>
            </div>
          </div>
        </div>
        <div class="wof-card wof-card--speaker">
          <div class="wof-speaker-inner">
            <div class="wof-card__photo wof-card__photo--speaker">
              <img src="assets/images/WallofChampion/2022/S2/2022_S2_Best_Speaker.png" alt="Best Speaker 2022 S2" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-speaker-info">
              <div class="wof-card__rank wof-rank--speaker">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
                  <path d="M19 10v2a7 7 0 0 1-14 0v-2" />
                  <line x1="12" y1="19" x2="12" y2="23" />
                  <line x1="8" y1="23" x2="16" y2="23" />
                </svg>
                Best Speaker
              </div>
              <h3 class="wof-card__team">Maya Lynn</h3>
              <p class="wof-card__univ">Best Speaker | I-LEADERS | Universitas Gadjah Mada</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ── 2023 · S1 ── -->
    <div class="wof-podium" data-year="2023" data-cat="s1" style="display:none;">
      <div class="wof-card wof-card--first">
        <div class="wof-card__photo">
          <div class="wof-card__rank wof-rank--gold">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <circle cx="12" cy="9" r="6" />
              <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
            </svg>
            1st Champion
          </div>
          <img src="assets/images/WallofChampion/2023/S1/2023_S1_W1.png" alt="1st Champion 2023 S1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
        </div>
        <div class="wof-card__info">
          <h3 class="wof-card__team">Letsgo</h3>
          <p class="wof-card__univ">1st Champion | Institut Teknologi Bandung</p>
        </div>
      </div>
      <div class="wof-right-col">
        <div class="wof-runner-row">
          <div class="wof-card wof-card--second">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--silver">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                2nd
              </div>
              <img src="assets/images/WallofChampion/2023/S1/2023_S1_W2.png" alt="2nd Champion 2023 S1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Mandalika Team</h3>
              <p class="wof-card__univ">2nd Champion | Universitas Gadjah Mada</p>
            </div>
          </div>
          <div class="wof-card wof-card--third">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--bronze">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                3rd
              </div>
              <img src="assets/images/WallofChampion/2023/S1/2023_S1_W3.png" alt="3rd Champion 2023 S1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Jong Indonesia</h3>
              <p class="wof-card__univ">3rd Champion | Universitas Indonesia</p>
            </div>
          </div>
        </div>
        <div class="wof-card wof-card--speaker">
          <div class="wof-speaker-inner">
            <div class="wof-card__photo wof-card__photo--speaker">
              <img src="assets/images/WallofChampion/2023/S1/2023_S1_Best_Speaker.png" alt="Best Speaker 2023 S1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-speaker-info">
              <div class="wof-card__rank wof-rank--speaker">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
                  <path d="M19 10v2a7 7 0 0 1-14 0v-2" />
                  <line x1="12" y1="19" x2="12" y2="23" />
                  <line x1="8" y1="23" x2="16" y2="23" />
                </svg>
                Best Speaker
              </div>
              <h3 class="wof-card__team">Michael Yoe</h3>
              <p class="wof-card__univ">Best Speaker | LETSGO | Institut Teknologi Bandung</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ── 2023 · S2 ── -->
    <div class="wof-podium" data-year="2023" data-cat="s2" style="display:none;">
      <div class="wof-card wof-card--first">
        <div class="wof-card__photo">
          <div class="wof-card__rank wof-rank--gold">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <circle cx="12" cy="9" r="6" />
              <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
            </svg>
            1st Champion
          </div>
          <img src="assets/images/WallofChampion/2023/S2/2023_S2_W1.png" alt="1st Champion 2023 S2" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="wof-card__info">
          <h3 class="wof-card__team">Buzzer Beater</h3>
          <p class="wof-card__univ">1st Champion | Universitas Indonesia</p>
        </div>
      </div>
      <div class="wof-right-col">
        <div class="wof-runner-row">
          <div class="wof-card wof-card--second">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--silver">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                2nd
              </div>
              <img src="assets/images/WallofChampion/2023/S2/2023_S2_W2.png" alt="2nd Champion 2023 S2" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Prime Team</h3>
              <p class="wof-card__univ">2nd Champion | Universitas Gadjah Mada</p>
            </div>
          </div>
          <div class="wof-card wof-card--third">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--bronze">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                3rd
              </div>
              <img src="assets/images/WallofChampion/2023/S2/2023_S2_W3.png" alt="3rd Champion 2023 S2" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Selat Sunda</h3>
              <p class="wof-card__univ">3rd Champion | Universitas Gadjah Mada</p>
            </div>
          </div>
        </div>
        <div class="wof-card wof-card--speaker">
          <div class="wof-speaker-inner">
            <div class="wof-card__photo wof-card__photo--speaker">
              <img src="assets/images/WallofChampion/2023/S2/2023_S2_Best_Speaker.png" alt="Best Speaker 2023 S2" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="wof-speaker-info">
              <div class="wof-card__rank wof-rank--speaker">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
                  <path d="M19 10v2a7 7 0 0 1-14 0v-2" />
                  <line x1="12" y1="19" x2="12" y2="23" />
                  <line x1="8" y1="23" x2="16" y2="23" />
                </svg>
                Best Speaker
              </div>
              <h3 class="wof-card__team">Prasasta Adi Putra</h3>
              <p class="wof-card__univ">Best Speaker | Buzzer Beater |   Universitas Indonesia</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ── 2024 · S1 ── -->
    <div class="wof-podium active" data-year="2024" data-cat="s1" data-animate data-delay="200">
      <div class="wof-card wof-card--first">
        <div class="wof-card__photo">
          <div class="wof-card__rank wof-rank--gold">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <circle cx="12" cy="9" r="6" />
              <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
            </svg>
            1st Champion
          </div>
          <img src="assets/images/WallofChampion/2024/S1/2024-S1-W1.jpg" alt="1st Champion 2024 S1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
        </div>
        <div class="wof-card__info">
          <h3 class="wof-card__team">Nyubi Nyoba</h3>
          <p class="wof-card__univ">1st Champion | Telkom University</p>
        </div>
      </div>
      <div class="wof-right-col">
        <div class="wof-runner-row">
          <div class="wof-card wof-card--second">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--silver">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                2nd
              </div>
              <img src="assets/images/WallofChampion/2024/S1/2024-S1-W2.jpg" alt="2nd Champion 2024 S1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Bisa - Bisa</h3>
              <p class="wof-card__univ">2nd Champion | Universitas Gadjah Mada</p>
            </div>
          </div>
          <div class="wof-card wof-card--third">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--bronze">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                3rd
              </div>
              <img src="assets/images/WallofChampion/2024/S1/2024-S1-W3.jpg" alt="3rd Champion 2024 S1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">EcoTechpreneurs</h3>
              <p class="wof-card__univ">3rd Champion | Universitas Atma Jaya Yogyakarta</p>
            </div>
          </div>
        </div>
        <div class="wof-card wof-card--speaker">
          <div class="wof-speaker-inner">
            <div class="wof-card__photo wof-card__photo--speaker">
              <img src="assets/images/WallofChampion/2024/S1/2024-S1-BS.jpg" alt="Best Speaker 2024 S1" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-speaker-info">
              <div class="wof-card__rank wof-rank--speaker">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
                  <path d="M19 10v2a7 7 0 0 1-14 0v-2" />
                  <line x1="12" y1="19" x2="12" y2="23" />
                  <line x1="8" y1="23" x2="16" y2="23" />
                </svg>
                Best Speaker
              </div>
              <h3 class="wof-card__team">VIDHA HIRANYA ASTU BABOE</h3>
              <p class="wof-card__univ">Best Speaker | EcoTechpreneurs | Universitas Atma Jaya Yogyakarta</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ── 2024 · S2 ── -->
    <div class="wof-podium" data-year="2024" data-cat="s2" style="display:none;">
      <div class="wof-card wof-card--first">
        <div class="wof-card__photo">
          <div class="wof-card__rank wof-rank--gold">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <circle cx="12" cy="9" r="6" />
              <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
            </svg>
            1st Champion
          </div>
          <img src="assets/images/WallofChampion/2024/S2/2024-S2-W1.jpg" alt="1st Champion 2024 S2" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
        </div>
        <div class="wof-card__info">
          <h3 class="wof-card__team">3mpower</h3>
          <p class="wof-card__univ">1st Champion | Institut Teknologi Bandung</p>
        </div>
      </div>
      <div class="wof-right-col">
        <div class="wof-runner-row">
          <div class="wof-card wof-card--second">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--silver">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                2nd
              </div>
              <img src="assets/images/WallofChampion/2024/S2/2024-S2-W2.jpg" alt="2nd Champion 2024 S2" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Aquator</h3>
              <p class="wof-card__univ">2nd Champion | Osnabruck University of Applied Sciences</p>
            </div>
          </div>
          <div class="wof-card wof-card--third">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--bronze">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6" />
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7" />
                </svg>
                3rd
              </div>
              <img src="assets/images/WallofChampion/2024/S2/2024-S2-W3.jpg" alt="3rd Champion 2024 S2" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">Visionaries</h3>
              <p class="wof-card__univ">3rd Champion | Universitas Indonesia</p>
            </div>
          </div>
        </div>
        <div class="wof-card wof-card--speaker">
          <div class="wof-speaker-inner">
            <div class="wof-card__photo wof-card__photo--speaker">
              <img src="assets/images/WallofChampion/2024/S2/2024-S2-BS.jpg" alt="Best Speaker 2024 S2" style="width: 100%; height: 100%; object-fit: cover; border-radius: 0;">
            </div>
            <div class="wof-speaker-info">
              <div class="wof-card__rank wof-rank--speaker">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z" />
                  <path d="M19 10v2a7 7 0 0 1-14 0v-2" />
                  <line x1="12" y1="19" x2="12" y2="23" />
                  <line x1="8" y1="23" x2="16" y2="23" />
                </svg>
                Best Speaker
              </div>
              <h3 class="wof-card__team">Dian Sinthayani</h3>
              <p class="wof-card__univ">Best Speaker | Food Forward | Monash Univeristy</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Banner -->
    <div class="wof-cta" data-animate data-delay="300">
      <h3 class="wof-cta__title">Will You Be The Next?</h3>
      <p class="wof-cta__sub">Register now and write your name in history.</p>
      <a href="#cta" class="btn btn-primary">Register Now</a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     AGENDA / INSTAGRAM FEED SECTION
══════════════════════════════════════════ -->
<section class="ig-feed" id="agenda">
  <div class="container">
    <div class="section-header centered" data-animate>
      <span class="section-label">Agenda</span>
      <h2 class="section-title" style="color: var(--blue-800);">Catch Latest Agenda</h2>
      <p class="section-sub" style="color: var(--blue-700);">Follow our Instagram feed for the latest updates and
        important information about the competition.</p>
    </div>

    <!-- Instagram Grid -->
    <div class="ig-grid" data-animate data-delay="100">

      <!-- Post 1 -->
      <a href="https://www.instagram.com/p/DC01cFdPFKv/?utm_source=ig_web_button_share_sheet&amp;igsh=MzRlODBiNWFlZA=="
        class="ig-post" target="_blank" rel="noopener">
        <div class="ig-post__img" style="background: url('assets/images/ig/1stchampion.webp') center/cover;">
        </div>
        <div class="ig-post__overlay">
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
            </svg> 128</span>
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
            </svg> 12</span>
        </div>
      </a>

      <!-- Post 2 -->
      <a href="https://www.instagram.com/p/DC01sfNPT6Q/?utm_source=ig_web_button_share_sheet&amp;igsh=MzRlODBiNWFlZA=="
        class="ig-post" target="_blank" rel="noopener">
        <div class="ig-post__img" style="background: url('assets/images/ig/2ndchampion.webp') center/cover;">
        </div>
        <div class="ig-post__overlay">
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
            </svg> 95</span>
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
            </svg> 8</span>
        </div>
      </a>

      <!-- Post 3 -->
      <a href="https://www.instagram.com/p/DC01Y5_vEmh/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
        class="ig-post" target="_blank" rel="noopener">
        <div class="ig-post__img" style="background: url('assets/images/ig/3rdchampion.webp') center/cover;">
        </div>
        <div class="ig-post__overlay">
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
            </svg> 210</span>
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
            </svg> 24</span>
        </div>
      </a>

    </div>

    <!-- Instagram CTA -->
    <div class="ig-cta" data-animate data-delay="200">
      <a href="https://www.instagram.com/brigamabcc/" target="_blank" rel="noopener" class="ig-cta__link">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
        </svg>
        Follow @gamabcc di Instagram
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CONTACT SECTION — Dark Split Layout
══════════════════════════════════════════ -->
<section class="contact-split" id="contact">
  <div class="contact-split__inner">

    <!-- LEFT: Dark Blue Info Panel -->
    <div class="contact-split__info" data-animate>
      <span class="contact-split__label">Contact Us</span>
      <h2 class="contact-split__title">Let's Connect</h2>
      <p class="contact-split__sub">Have questions about registration, rules, or partnerships? We'd love to hear from
        you.</p>

      <div class="contact-split__methods">
        <div class="contact-split__method">
          <div class="contact-split__icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg>
          </div>
          <div>
            <h4>Email</h4>
            <a href="mailto:brigamabcc@ugm.ac.id">brigamabcc@ugm.ac.id</a>
          </div>
        </div>

        <div class="contact-split__method">
          <div class="contact-split__icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
          </div>
          <div>
            <h4>Phone</h4>
            <a href="tel:+622740000000">+62 274-xxx-xxxx</a>
          </div>
        </div>

        <div class="contact-split__method">
          <div class="contact-split__icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
          </div>
          <div>
            <h4>Location</h4>
            <p>Jl. Sosio Humaniora No.1, Yogyakarta, Indonesia</p>
          </div>
        </div>
      </div>

      <!-- Social Media Links -->
      <div class="contact-split__socials">
        <span>Follow us</span>
        <div class="contact-split__social-icons">
          <a href="https://www.instagram.com/brigamabcc/" target="_blank" rel="noopener" aria-label="Instagram">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
            </svg>
          </a>
          <a href="#" target="_blank" rel="noopener" aria-label="LinkedIn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
              <rect x="2" y="9" width="4" height="12" />
              <circle cx="4" cy="4" r="2" />
            </svg>
          </a>
          <a href="#" target="_blank" rel="noopener" aria-label="Twitter / X">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
              <path
                d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
            </svg>
          </a>
        </div>
      </div>
    </div>

    <!-- RIGHT: White Form Panel -->
    <div class="contact-split__form-panel" data-animate data-delay="200">
      <h3 class="contact-split__form-title">Send Us a Message</h3>
      <p class="contact-split__form-sub">Fill out the form below and we'll get back to you as soon as possible.</p>

      <form id="contactForm" class="contact-split__form">
        <div class="contact-form__group">
          <label for="contactName">Full Name</label>
          <input type="text" id="contactName" name="name" placeholder="e.g. Ahmad Rizki" required />
        </div>
        <div class="contact-form__group">
          <label for="contactEmail">Email Address</label>
          <input type="email" id="contactEmail" name="email" placeholder="e.g. ahmad@university.ac.id" required />
        </div>
        <div class="contact-form__group">
          <label for="contactSubject">Subject</label>
          <input type="text" id="contactSubject" name="subject" placeholder="e.g. Registration Inquiry" required />
        </div>
        <div class="contact-form__group">
          <label for="contactMessage">Message</label>
          <textarea id="contactMessage" name="message" rows="5" placeholder="Write your message here..."
            required></textarea>
        </div>
        <button type="submit" class="contact-form__submit">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <line x1="22" y1="2" x2="11" y2="13" />
            <polygon points="22 2 15 22 11 13 2 9 22 2" />
          </svg>
          Send Message
        </button>
      </form>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     CTA SECTION
══════════════════════════════════════════ -->
<section class="cta" id="cta">
  <div class="container">
    <div class="cta-content" data-animate>
      <div class="cta-label">Ready to Compete?</div>
      <h2 class="cta-title">Get the Handbook &amp; Register Now</h2>
      <p class="cta-sub">
        Download the complete handbook containing technical guidelines, writing formats, and evaluation criteria. Ensure
        your team is ready before registration closes!
      </p>
      <div class="cta-actions">
        <a href="#" class="btn btn-nav-primary btn-lg">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
            <polyline points="7 10 12 15 17 10" />
            <line x1="12" y1="15" x2="12" y2="3" />
          </svg>
          Download Handbook
        </a>
        <a href="#" class="btn btn-ghost-white btn-lg">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
            stroke-linecap="round" stroke-linejoin="round">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
          </svg>
          Register Now
        </a>
      </div>
    </div>
  </div>
</section>

<script>
  /* FAQ Accordion */
  document.querySelectorAll('.faq-question').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var item = this.closest('.faq-item');
      var isOpen = item.classList.contains('open');
      // close all
      document.querySelectorAll('.faq-item').forEach(function (el) {
        el.classList.remove('open');
      });
      // toggle current
      if (!isOpen) item.classList.add('open');
    });
  });

  /* Wall of Fame — Year Tabs */
  document.querySelectorAll('.wof-year-tab').forEach(function (tab) {
    tab.addEventListener('click', function () {
      document.querySelectorAll('.wof-year-tab').forEach(function (t) {
        t.classList.remove('active');
      });
      this.classList.add('active');
    });
  });

  /* Wall of Fame — Category Tabs */
  document.querySelectorAll('.wof-cat-tab').forEach(function (tab) {
    tab.addEventListener('click', function () {
      document.querySelectorAll('.wof-cat-tab').forEach(function (t) {
        t.classList.remove('active');
      });
      this.classList.add('active');
    });
  });
</script>
<?php include 'footer.php'; ?>