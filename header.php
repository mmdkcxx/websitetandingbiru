<?php
// Security Headers
header("X-Frame-Options: SAMEORIGIN");
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
header("Referrer-Policy: strict-origin-when-cross-origin");
header("Content-Security-Policy: default-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com https://www.instagram.com; img-src 'self' data: https://www.instagram.com; style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; script-src 'self' 'unsafe-inline';");
header("Permissions-Policy: geolocation=(), camera=(), microphone=()");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BRIGAMA International Business Case Competition 2026</title>
  <meta name="description"
    content="A prestigious business case competition for undergraduate and graduate students across Indonesia. Prove your analytical skills and win career opportunities at BRI!" />
  <meta name="author" content="BRI GAMA Business Case Competition" />
  <meta name="keywords"
    content="Business Case Competition, Student Competition, BRI GAMA, UGM Competition, Undergraduate Graduate Competition">
  <link rel="canonical" href="https://brigamabcc.id/" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://brigamabcc.id/" />
  <meta property="og:title" content="BRIGAMA International Business Case Competition 2026" />
  <meta property="og:description"
    content="Showcase your strategy in the most prestigious national business case competition from Bank Rakyat Indonesia and Universitas Gadjah Mada." />
  <meta property="og:image" content="https://brigamabcc.id/assets/images/og-image.jpg" />
  <meta property="og:site_name" content="BRI GAMA 2026">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="https://brigamabcc.id/" />
  <meta name="twitter:title" content="BRIGAMA International Business Case Competition 2026" />
  <meta name="twitter:description"
    content="Showcase your strategy in the most prestigious national business case competition from Bank Rakyat Indonesia and Universitas Gadjah Mada." />
  <meta name="twitter:image" content="https://brigamabcc.id/assets/images/og-image.jpg" />

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/logocut.png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="dns-prefetch" href="https://fonts.googleapis.com" />
  <link rel="dns-prefetch" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <!-- Preload Assets for Performance -->
  <link rel="preload" href="assets/css/style.css?v=1.3" as="style" />

  <!-- Stylesheet -->
  <link rel="stylesheet" href="assets/css/style.css?v=1.3" />
</head>

<body>

  <!-- ══════════════════════════════════════════
     NAVBAR
══════════════════════════════════════════ -->
  <nav class="navbar" id="navbar">
    <div class="container">
      <div class="navbar-inner">
        <!-- Logo -->
        <a href="index.php" class="navbar-logo">
          <img src="assets/images/logo.png" alt="BRIGAMA International Business Case Competition 2026 Logo"
            class="logo-image">
        </a>

        <!-- Desktop Navigation -->
        <ul class="navbar-nav">
          <li><a href="index.php#about" class="nav-link">About</a></li>
          <li><a href="index.php#timeline-activities" class="nav-link">Timeline</a></li>
          <li><a href="index.php#categories" class="nav-link">Categories</a></li>
          <!-- Resources Dropdown -->
          <li class="nav-dropdown">
            <span class="nav-link dropdown-trigger" role="button" tabindex="0">
              Resources
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </span>
            <div class="dropdown-menu" role="menu">
              <a href="index.php#rules" class="dropdown-item" role="menuitem">
                <div class="dropdown-item-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                    <polyline points="14 2 14 8 20 8" />
                  </svg>
                </div>
                Handbook
              </a>
              <a href="index.php#rules-cards" class="dropdown-item" role="menuitem">
                <div class="dropdown-item-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="9 11 12 14 22 4" />
                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" />
                  </svg>
                </div>
                Rules
              </a>
              <a href="index.php#faq" class="dropdown-item" role="menuitem">
                <div class="dropdown-item-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="10" />
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                    <line x1="12" y1="17" x2="12.01" y2="17" />
                  </svg>
                </div>
                FAQ
              </a>
              <a href="index.php#wall-of-fame" class="dropdown-item" role="menuitem">
                <div class="dropdown-item-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 15l8.5-8.5-1-1L12 13l-3.5-3.5-1 1z" />
                    <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z" />
                  </svg>
                </div>
                Winners
              </a>
              <a href="index.php#contact" class="dropdown-item" role="menuitem">
                <div class="dropdown-item-icon">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                    <polyline points="22,6 12,13 2,6" />
                  </svg>
                </div>
                Contact
              </a>
            </div>
          </li>
        </ul>

        <!-- Desktop Actions -->
        <div class="navbar-actions">
          <a href="login.php" class="btn btn-nav-outline">Sign In</a>
          <a href="register.php" class="btn btn-nav-primary">Register</a>
        </div>

        <!-- Hamburger -->
        <button class="hamburger" aria-label="Toggle menu" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </div>

      <!-- Mobile Nav -->
      <div class="mobile-nav" id="mobile-nav">
        <a href="index.php#about" class="mobile-nav-link">About</a>
        <a href="index.php#timeline-activities" class="mobile-nav-link">Timeline</a>
        <a href="index.php#categories" class="mobile-nav-link">Categories</a>
        <div class="mobile-nav-divider"></div>
        <a href="index.php#rules" class="mobile-nav-link">Handbook</a>
        <a href="index.php#rules-cards" class="mobile-nav-link">Rules</a>
        <a href="index.php#faq" class="mobile-nav-link">FAQ</a>
        <a href="index.php#wall-of-fame" class="mobile-nav-link">Winners</a>
        <a href="index.php#contact" class="mobile-nav-link">Contact</a>
        <div class="mobile-nav-divider"></div>
        <div class="mobile-actions">
          <a href="login.php" class="btn btn-nav-outline" style="flex:1;justify-content:center">Sign In</a>
          <a href="register.php" class="btn btn-nav-primary" style="flex:1;justify-content:center">Register</a>
        </div>
      </div>
    </div>
  </nav>