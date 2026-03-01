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
        <h1 class="hero-title">
          BRI GAMA Business<br>
          Case Competition<br>
          2026
        </h1>
        <p class="hero-subtitle">
          Test your strategy. Compete nationally. Win internationally. The
          stage is set for the brightest minds in business.
        </p>
        <div class="hero-actions">
          <a href="#cta" class="btn btn-primary btn-lg">Register now</a>
          <a href="#" class="btn btn-outline-white btn-lg">View handbook</a>
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
        <h2 class="about-title">About BRIGAMABCC</h2>
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
          <a href="#categories" class="btn btn-primary">Learn more</a>
          <a href="#timeline" class="about-arrow-link">
            Arrow
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
      <span class="section-label">Kategori Lomba</span>
      <h2 class="section-title">Pilih Kategorimu</h2>
      <p class="section-sub">Tersedia dua kategori kompetisi sesuai jenjang pendidikan, masing-masing dengan topik
        kasus bisnis yang berbeda.</p>
    </div>

    <div class="categories-grid" data-animate data-delay="100">

      <!-- Category S1 -->
      <div class="cat-card cat-card--s1">
        <div class="cat-card__content">
          <div class="cat-card__badge">S1 — Undergraduate</div>
          <h3 class="cat-card__title">Undergraduate Student (S1)</h3>
          <p class="cat-card__desc">Tunjukkan kemampuan analisis terbaikmu lewat kompetisi kasus bisnis bergengsi
            untuk mahasiswa S1 dari seluruh Indonesia.</p>
          <a href="#cta" class="cat-card__btn">
            Lihat Selengkapnya
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="7" y1="17" x2="17" y2="7" />
              <polyline points="7 7 17 7 17 17" />
            </svg>
          </a>
        </div>
        <div class="cat-card__illustration">
          <img src="assets/images/S1.png" alt="S1 Illustration" class="cat-img-pop" />
        </div>
      </div>

      <!-- Category S2 -->
      <div class="cat-card cat-card--s2">
        <div class="cat-card__content">
          <div class="cat-card__badge cat-card__badge--gold">S2 — Graduate</div>
          <h3 class="cat-card__title">Graduate Student (S2)</h3>
          <p class="cat-card__desc">Buktikan keahlian strategi bisnismu di level pascasarjana dan bersaing meraih
            penghargaan bergengsi bersama BRI.</p>
          <a href="#cta" class="cat-card__btn cat-card__btn--gold">
            Lihat Selengkapnya
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
              stroke-linecap="round" stroke-linejoin="round">
              <line x1="7" y1="17" x2="17" y2="7" />
              <polyline points="7 7 17 7 17 17" />
            </svg>
          </a>
        </div>
        <div class="cat-card__illustration">
          <img src="assets/images/S2.png" alt="S2 Illustration" class="cat-img-pop" />
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
        <h2 class="rules-banner__title">Get the full handbook</h2>
        <p class="rules-banner__sub">Complete rules, judging criteria, and submission guidelines in one document.</p>
        <div class="rules-banner__actions">
          <a href="#" class="rules-banner__btn rules-banner__btn--outline">Download</a>
          <a href="#cta" class="rules-banner__btn rules-banner__btn--outline">Register now</a>
        </div>
      </div>
    </div>

    <!-- Two info cards -->
    <div class="rules-cards" data-animate data-delay="100">

      <!-- Competition Rules -->
      <div class="rules-info-card">
        <h3 class="rules-info-card__title">Competition Rules</h3>
        <ul class="rules-info-card__list">
          <li>Peserta adalah mahasiswa aktif S1 atau S2 dari perguruan tinggi terdaftar di Indonesia</li>
          <li>Setiap tim terdiri dari maksimal <strong>3 (tiga) anggota</strong> yang berasal dari universitas yang
            sama</li>
          <li>Minimal <strong>satu anggota</strong> dalam tim harus berasal dari Fakultas Ekonomika dan Bisnis</li>
          <li>Setiap peserta hanya diperbolehkan mendaftar dalam <strong>satu tim</strong> dan <strong>satu
              kategori</strong></li>
          <li>Semua karya harus merupakan karya orisinal dan belum pernah diikutsertakan dalam kompetisi lain</li>
          <li>Keputusan dewan juri bersifat <strong>final dan tidak dapat diganggu gugat</strong></li>
        </ul>
      </div>

      <!-- Registration Term -->
      <div class="rules-info-card">
        <h3 class="rules-info-card__title">Registration Term</h3>
        <ul class="rules-info-card__list">
          <li>Curriculum Vitae (CV) setiap anggota tim</li>
          <li>Cover Letter / Motivation Letter tim</li>
          <li>Scan Kartu Tanda Mahasiswa (KTM) aktif</li>
          <li>Transkrip nilai terakhir (per semester)</li>
          <li>Pas foto formal terbaru masing-masing anggota</li>
          <li>Surat rekomendasi dari dosen pembimbing/dekan</li>
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
    <h2 class="gallery-heading" data-animate>Galeri Kompetisi Tahun Lalu</h2>

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
          <span>Presentasi Tim</span>
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
      <div class="gallery-mosaic-item gallery-mosaic--d" style="background: linear-gradient(135deg, #e5a020, #f0b830);">
        <div class="gallery-placeholder" style="color: rgba(0,48,135,0.7);">
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
          <span>Pengumuman Pemenang</span>
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
     TIMELINE SECTION
══════════════════════════════════════════ -->
<section class="timeline" id="timeline">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="section-label">Jadwal Kegiatan</span>
      <h2 class="section-title">Timeline Kompetisi</h2>
      <p class="section-sub">Catat tanggal-tanggal penting berikut agar tim kamu tidak melewatkan satu pun tahapan
        kompetisi.</p>
    </div>

    <div class="timeline-wrapper">
      <!-- Timeline List -->
      <div class="timeline-list" data-animate data-delay="100">
        <div class="timeline-item active">
          <div class="timeline-dot">
            <div class="timeline-dot-inner"></div>
          </div>
          <div class="timeline-content">
            <div class="timeline-phase">Fase 1</div>
            <div class="timeline-title">Pendaftaran & Seleksi Administrasi</div>
            <div class="timeline-date">1 Maret — 15 Maret 2026</div>
            <div class="timeline-desc">Pengumpulan berkas pendaftaran dan seleksi administrasi oleh panitia. Pastikan
              semua dokumen lengkap dan valid.</div>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot">
            <div class="timeline-dot-inner"></div>
          </div>
          <div class="timeline-content">
            <div class="timeline-phase">Fase 2</div>
            <div class="timeline-title">Pengumuman Lolos Seleksi</div>
            <div class="timeline-date">20 Maret 2026</div>
            <div class="timeline-desc">Pengumuman tim yang lolos ke babak penyisihan akan diumumkan melalui website
              resmi dan email terdaftar.</div>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot">
            <div class="timeline-dot-inner"></div>
          </div>
          <div class="timeline-content">
            <div class="timeline-phase">Fase 3</div>
            <div class="timeline-title">Babak Penyisihan — Pengumpulan Makalah</div>
            <div class="timeline-date">21 Maret — 10 April 2026</div>
            <div class="timeline-desc">Tim yang lolos mengerjakan dan mengumpulkan makalah analisis kasus menggunakan
              format yang telah ditentukan.</div>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot">
            <div class="timeline-dot-inner"></div>
          </div>
          <div class="timeline-content">
            <div class="timeline-phase">Fase 4</div>
            <div class="timeline-title">Workshop & Mentoring Sesi</div>
            <div class="timeline-date">15 April 2026</div>
            <div class="timeline-desc">Sesi workshop eksklusif dengan mentor dari BRI dan Universitas Gadjah Mada
              untuk tim yang lolos babak penyisihan.</div>
          </div>
        </div>

        <div class="timeline-item">
          <div class="timeline-dot">
            <div class="timeline-dot-inner"></div>
          </div>
          <div class="timeline-content">
            <div class="timeline-phase">Fase 5</div>
            <div class="timeline-title">Grand Final & Pengumuman Pemenang</div>
            <div class="timeline-date">25 April 2026 • Yogyakarta</div>
            <div class="timeline-desc">Presentasi langsung di hadapan dewan juri dari BRI dan akademisi UGM.
              Pengumuman pemenang dan malam penghargaan.</div>
          </div>
        </div>
      </div>

      <!-- CTA Card with Countdown -->
      <div class="timeline-right" data-animate data-delay="200">
        <div class="timeline-cta-card">
          <h3>Jangan Sampai Terlambat!</h3>
          <p>Pendaftaran ditutup pada 15 Maret 2026. Segera lengkapi berkas dan daftarkan tim Anda.</p>
          <div class="countdown">
            <div class="countdown-item">
              <span class="countdown-val">--</span>
              <div class="countdown-label">Hari</div>
            </div>
            <div class="countdown-item">
              <span class="countdown-val">--</span>
              <div class="countdown-label">Jam</div>
            </div>
            <div class="countdown-item">
              <span class="countdown-val">--</span>
              <div class="countdown-label">Menit</div>
            </div>
            <div class="countdown-item">
              <span class="countdown-val">--</span>
              <div class="countdown-label">Detik</div>
            </div>
          </div>
          <a href="#cta" class="btn btn-gold" style="width:100%;justify-content:center;">Daftar Sekarang</a>
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
    <div class="section-header" data-animate>
      <span class="section-label">FAQs</span>
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-sub">Temukan jawaban untuk pertanyaan yang sering diajukan seputar kompetisi BRI GAMA 2026.</p>
    </div>
    <div class="faq-list">
      <div class="faq-item" data-animate data-delay="100">
        <button class="faq-question">
          <span>Siapa saja yang boleh mengikuti kompetisi ini?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Kompetisi ini terbuka untuk mahasiswa aktif S1 dan S2 dari seluruh perguruan tinggi di Indonesia. Setiap
            tim terdiri dari maksimal 3 anggota.</p>
        </div>
      </div>
      <div class="faq-item" data-animate data-delay="200">
        <button class="faq-question">
          <span>Apakah anggota tim harus dari universitas yang sama?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Ya, seluruh anggota tim harus berasal dari universitas yang sama, namun diperbolehkan berbeda fakultas atau
            jurusan.</p>
        </div>
      </div>
      <div class="faq-item" data-animate data-delay="300">
        <button class="faq-question">
          <span>Apakah ada biaya pendaftaran?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Pendaftaran untuk tahap seleksi administrasi tidak dipungut biaya. Biaya pendaftaran hanya berlaku bagi tim
            yang lolos ke tahap babak penyisihan.</p>
        </div>
      </div>
      <div class="faq-item" data-animate data-delay="400">
        <button class="faq-question">
          <span>Bagaimana format pengumpulan karya?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Tim yang lolos seleksi administrasi akan mengerjakan dan mengumpulkan makalah analisis kasus dalam format
            yang telah ditentukan. Finalis akan mempresentasikan solusi mereka di hadapan dewan juri.</p>
        </div>
      </div>
      <div class="faq-item" data-animate data-delay="500">
        <button class="faq-question">
          <span>Apa saja hadiah yang bisa dimenangkan?</span>
          <div class="faq-icon"></div>
        </button>
        <div class="faq-answer">
          <p>Pemenang mendapatkan hadiah uang tunai, sertifikat penghargaan, serta kesempatan berkarir dan dikenal oleh
            Bank Rakyat Indonesia. Detail nominal hadiah tersedia di handbook resmi kompetisi.</p>
        </div>
      </div>
    </div>
    <div class="faq-cta" data-animate>
      <h3>Still have questions?</h3>
      <p>Reach out to our team directly for any additional information.</p>
      <a href="#contact" class="faq-cta-btn">Contact us</a>
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
      <p class="section-sub">Meet the champions who competed and conquered at BRI GAMA. Their success began with a single decision to register.</p>
    </div>

    <!-- Tabs row: Year + Category -->
    <div class="wof-controls" data-animate data-delay="100">
      <div class="wof-year-tabs">
        <button class="wof-year-tab active" data-year="2022">2022</button>
        <button class="wof-year-tab" data-year="2023">2023</button>
      </div>
      <div class="wof-cat-tabs">
        <button class="wof-cat-tab active" data-cat="s1">Undergraduate (S1)</button>
        <button class="wof-cat-tab" data-cat="s2">Graduate (S2)</button>
      </div>
    </div>

    <!-- Champions Podium — Horizontal Layout -->
    <div class="wof-podium" data-animate data-delay="200">

      <!-- LEFT: 1st Champion (large) -->
      <div class="wof-card wof-card--first">
        <div class="wof-card__photo">
          <div class="wof-card__rank wof-rank--gold">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" stroke="none">
              <circle cx="12" cy="9" r="6"/>
              <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7"/>
            </svg>
            1st Champion
          </div>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <circle cx="8.5" cy="8.5" r="1.5"/>
            <polyline points="21 15 16 10 5 21"/>
          </svg>
        </div>
        <div class="wof-card__info">
          <h3 class="wof-card__team">NAMA TIM</h3>
          <p class="wof-card__univ">Universitas Gadjah Mada</p>
        </div>
      </div>

      <!-- RIGHT: 2nd, 3rd, Best Speaker stacked -->
      <div class="wof-right-col">

        <!-- 2nd & 3rd side-by-side -->
        <div class="wof-runner-row">
          <div class="wof-card wof-card--second">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--silver">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6"/>
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7"/>
                </svg>
                2nd
              </div>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <rect x="3" y="3" width="18" height="18" rx="2"/>
                <circle cx="8.5" cy="8.5" r="1.5"/>
                <polyline points="21 15 16 10 5 21"/>
              </svg>
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">NAMA TIM</h3>
              <p class="wof-card__univ">Universitas Indonesia</p>
            </div>
          </div>

          <div class="wof-card wof-card--third">
            <div class="wof-card__photo">
              <div class="wof-card__rank wof-rank--bronze">
                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" stroke="none">
                  <circle cx="12" cy="9" r="6"/>
                  <path d="M8 14l-2 8 6-3 6 3-2-8" opacity="0.7"/>
                </svg>
                3rd
              </div>
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <rect x="3" y="3" width="18" height="18" rx="2"/>
                <circle cx="8.5" cy="8.5" r="1.5"/>
                <polyline points="21 15 16 10 5 21"/>
              </svg>
            </div>
            <div class="wof-card__info">
              <h3 class="wof-card__team">NAMA TIM</h3>
              <p class="wof-card__univ">Universitas Diponegoro</p>
            </div>
          </div>
        </div>

        <!-- Best Speaker -->
        <div class="wof-card wof-card--speaker">
          <div class="wof-speaker-inner">
            <div class="wof-card__photo wof-card__photo--speaker">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                <rect x="3" y="3" width="18" height="18" rx="2"/>
                <circle cx="8.5" cy="8.5" r="1.5"/>
                <polyline points="21 15 16 10 5 21"/>
              </svg>
            </div>
            <div class="wof-speaker-info">
              <div class="wof-card__rank wof-rank--speaker">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/>
                  <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
                  <line x1="12" y1="19" x2="12" y2="23"/>
                  <line x1="8" y1="23" x2="16" y2="23"/>
                </svg>
                Best Speaker
              </div>
              <h3 class="wof-card__team">NAMA PESERTA</h3>
              <p class="wof-card__univ">Tim — Universitas Gadjah Mada</p>
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
      <h2 class="section-title">Catch Latest Agenda</h2>
      <p class="section-sub">Ikuti perkembangan terbaru dan informasi penting seputar kompetisi lewat feed Instagram kami.</p>
    </div>

    <!-- Instagram Grid -->
    <div class="ig-grid" data-animate data-delay="100">

      <!-- Post 1 -->
      <a href="#" class="ig-post" target="_blank" rel="noopener">
        <div class="ig-post__img">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
        </div>
        <div class="ig-post__overlay">
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg> 128</span>
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> 12</span>
        </div>
      </a>

      <!-- Post 2 -->
      <a href="#" class="ig-post" target="_blank" rel="noopener">
        <div class="ig-post__img">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
        </div>
        <div class="ig-post__overlay">
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg> 95</span>
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> 8</span>
        </div>
      </a>

      <!-- Post 3 -->
      <a href="#" class="ig-post" target="_blank" rel="noopener">
        <div class="ig-post__img">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
        </div>
        <div class="ig-post__overlay">
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg> 210</span>
          <span class="ig-stat"><svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> 24</span>
        </div>
      </a>

    </div>

    <!-- Instagram CTA -->
    <div class="ig-cta" data-animate data-delay="200">
      <a href="https://www.instagram.com/brigamabcc/" target="_blank" rel="noopener" class="ig-cta__link">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
          <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
          <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
        </svg>
        Follow @brigamabcc di Instagram
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CONTACT & MAP SECTION
══════════════════════════════════════════ -->
<section class="contact-section" id="contact">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-info" data-animate>
        <div class="section-header">
          <span class="section-label">Contact us</span>
          <h2 class="section-title">Get in touch with us</h2>
          <p class="section-sub">Punya pertanyaan lebih lanjut? Hubungi kami melalui kontak di bawah ini.</p>
        </div>
        <div class="contact-method">
          <div class="contact-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
              <polyline points="22,6 12,13 2,6" />
            </svg>
          </div>
          <div class="contact-detail">
            <h4>Email</h4>
            <p>brigamabcc@ugm.ac.id</p>
          </div>
        </div>
        <div class="contact-method">
          <div class="contact-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
            </svg>
          </div>
          <div class="contact-detail">
            <h4>Phone</h4>
            <p>+62 274-xxx-xxxx</p>
          </div>
        </div>
      </div>
      <div class="contact-map" data-animate data-delay="200">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.111!2d110.370!3d-7.771!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zN8KwNDYnMjcuNiJTIDExMMKwMjInMTIuMCJF!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid"
          style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CTA SECTION
══════════════════════════════════════════ -->
<section class="cta" id="cta">
  <div class="container">
    <div class="cta-content" data-animate>
      <div class="cta-label">Siap Berkompetisi?</div>
      <h2 class="cta-title">Dapatkan Handbooknya &amp; Daftar Sekarang</h2>
      <p class="cta-sub">
        Download handbook lengkap berisi panduan teknis, format penulisan, dan kriteria penilaian.
        Pastikan tim Anda siap sebelum pendaftaran ditutup!
      </p>
      <div class="cta-actions">
        <a href="#" class="btn btn-gold btn-lg">
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