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
<section class="fame-section-new" id="wall-of-fame">
  <div class="container">
    <h2 class="fame-title-new" data-animate>Wall of Fame</h2>
    <p class="fame-desc-new" data-animate data-delay="100">
      Meet the champions who have competed and conquered at BRI GAMA.
      Their success began with a single decision to register.
    </p>

    <div class="fame-tabs-new" data-animate data-delay="200">
      <button class="fame-tab-new active">Undergraduate Student (S1)</button>
      <button class="fame-tab-new">Undergraduate Student (S2)</button>
    </div>

    <div class="fame-scroll-new" data-animate data-delay="300">
      <!-- Card 1 -->
      <div class="winner-card-new">
        <div class="winner-img-box-new">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
        </div>
        <div class="winner-info-box-new">
          <h3 class="winner-name-new">NAMA PEMENANG</h3>
          <p class="winner-desc-new">Deskripsi Seng</p>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="winner-card-new">
        <div class="winner-img-box-new">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
        </div>
        <div class="winner-info-box-new">
          <h3 class="winner-name-new">NAMA PEMENANG</h3>
          <p class="winner-desc-new">Deskripsi Seng</p>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="winner-card-new">
        <div class="winner-img-box-new">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
        </div>
        <div class="winner-info-box-new">
          <h3 class="winner-name-new">NAMA PEMENANG</h3>
          <p class="winner-desc-new">Deskripsi Seng</p>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="winner-card-new">
        <div class="winner-img-box-new">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <circle cx="8.5" cy="8.5" r="1.5" />
            <polyline points="21 15 16 10 5 21" />
          </svg>
        </div>
        <div class="winner-info-box-new">
          <h3 class="winner-name-new">NAMA PEMENANG</h3>
          <p class="winner-desc-new">Deskripsi Seng</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     AGENDA SECTION (Newly Integrated)
══════════════════════════════════════════ -->
<section class="agenda" id="agenda">
  <div class="container">
    <div class="section-header" data-animate>
      <span class="section-label">Agenda</span>
      <h2 class="section-title">Catch Latest Agenda</h2>
      <p class="section-sub">Berita terbaru, artikel bisnis, dan pengumuman penting seputar kompetisi.</p>
    </div>
    <div class="agenda-grid">
      <div class="agenda-card" data-animate data-delay="100">
        <div class="agenda-img"
          style="background:var(--primary-light); opacity:0.1; display:flex; align-items:center; justify-content:center;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="1.5">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
          </svg>
        </div>
        <div class="agenda-date">24 Feb 2026</div>
        <h3 class="agenda-title">Tips and Trick to Win Business Case Competition</h3>
        <a href="#" class="agenda-link">Read more ➔</a>
      </div>
      <div class="agenda-card" data-animate data-delay="200">
        <div class="agenda-img"
          style="background:var(--secondary); opacity:0.1; display:flex; align-items:center; justify-content:center;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="1.5">
            <circle cx="12" cy="12" r="10" />
            <polyline points="12 6 12 12 16 14" />
          </svg>
        </div>
        <div class="agenda-date">20 Feb 2026</div>
        <h3 class="agenda-title">Preparing for BRI GAMA 2026: What You Need to Know</h3>
        <a href="#" class="agenda-link">Read more ➔</a>
      </div>
      <div class="agenda-card" data-animate data-delay="300">
        <div class="agenda-img"
          style="background:var(--primary-dark); opacity:0.1; display:flex; align-items:center; justify-content:center;">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="1.5">
            <path
              d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" />
          </svg>
        </div>
        <div class="agenda-date">15 Feb 2026</div>
        <h3 class="agenda-title">Meet Last Year's Winners: Their Journey to the Top</h3>
        <a href="#" class="agenda-link">Read more ➔</a>
      </div>
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
  document.querySelectorAll('.faq-question').forEach(function (b tn) {
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

  /* Wall of Fame Tabs */
  document.querySelectorAll('.fame-tab-new').forEach(function (tab) {
    tab.addEventListener('click', functio n() {
      document.querySelectorAll('.fame-tab-new').forEach(functi on(t) {
        t.classList.remove('active');
      });
      this.classList.add('active');
    });
  });
</script>
<?php include 'footer.php'; ?>