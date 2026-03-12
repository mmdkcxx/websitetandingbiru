/* =====================================================
   BRIGAMA International Business Case Competition 2026
   Main JavaScript — Interactivity & Animations
   ===================================================== */

document.addEventListener('DOMContentLoaded', function () {

  /* ── Navbar: Scroll Shadow ── */
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

  /* ── Hero Slideshow ── */
  const heroSlideshow = document.querySelector('.hero-slideshow');
  if (heroSlideshow) {
    const slides = heroSlideshow.querySelectorAll('.hero-slide');
    const dots = heroSlideshow.querySelectorAll('.hero-dot');
    const prevBtn = heroSlideshow.querySelector('.hero-arrow--prev');
    const nextBtn = heroSlideshow.querySelector('.hero-arrow--next');
    let currentSlide = 0;
    let autoPlayTimer = null;

    function goToSlide(index) {
      slides[currentSlide].classList.remove('active');
      dots[currentSlide].classList.remove('active');
      currentSlide = (index + slides.length) % slides.length;
      slides[currentSlide].classList.add('active');
      dots[currentSlide].classList.add('active');
    }

    function nextSlide() {
      goToSlide(currentSlide + 1);
    }

    function prevSlide() {
      goToSlide(currentSlide - 1);
    }

    function startAutoPlay() {
      stopAutoPlay();
      autoPlayTimer = setInterval(nextSlide, 5000);
    }

    function stopAutoPlay() {
      if (autoPlayTimer) {
        clearInterval(autoPlayTimer);
        autoPlayTimer = null;
      }
    }

    // Arrow buttons
    if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); startAutoPlay(); });
    if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); startAutoPlay(); });

    // Dot buttons
    dots.forEach(dot => {
      dot.addEventListener('click', () => {
        goToSlide(parseInt(dot.dataset.slide, 10));
        startAutoPlay();
      });
    });

    // Pause on hover
    heroSlideshow.addEventListener('mouseenter', stopAutoPlay);
    heroSlideshow.addEventListener('mouseleave', startAutoPlay);

    // Start auto-play
    startAutoPlay();
  }

  /* ── Navbar: Resources Dropdown ── */
  const dropdowns = document.querySelectorAll('.nav-dropdown');
  dropdowns.forEach(dd => {
    const trigger = dd.querySelector('.dropdown-trigger');
    const menu = dd.querySelector('.dropdown-menu');
    trigger.addEventListener('click', (e) => {
      e.stopPropagation();
      const isOpen = dd.classList.contains('open');
      // close all
      dropdowns.forEach(d => d.classList.remove('open'));
      if (!isOpen) dd.classList.add('open');
    });
  });
  document.addEventListener('click', () => {
    dropdowns.forEach(d => d.classList.remove('open'));
  });

  /* ── Mobile Menu ── */
  const hamburger = document.querySelector('.hamburger');
  const mobileNav = document.querySelector('.mobile-nav');
  if (hamburger && mobileNav) {
    hamburger.addEventListener('click', () => {
      const isOpen = mobileNav.classList.toggle('open');
      hamburger.setAttribute('aria-expanded', isOpen);
    });
  }

  /* ── Smooth Scroll for anchor links ── */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      mobileNav?.classList.remove('open');
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  /* ── Scroll Animations ── */
  const animEls = document.querySelectorAll('[data-animate]');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.05, rootMargin: '0px 0px -40px 0px' });
  animEls.forEach(el => observer.observe(el));

  /* ── Countdown Timer ── */
  function updateCountdown() {
    // Target: March 15, 2026
    const target = new Date('2026-03-15T23:59:59+07:00').getTime();
    const now = new Date().getTime();
    const diff = target - now;

    if (diff <= 0) {
      document.querySelectorAll('.countdown-val').forEach(el => el.textContent = '00');
      return;
    }

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

    const pad = n => String(n).padStart(2, '0');
    const [dEl, hEl, mEl, sEl] = document.querySelectorAll('.countdown-val');
    if (dEl) dEl.textContent = pad(days);
    if (hEl) hEl.textContent = pad(hours);
    if (mEl) mEl.textContent = pad(minutes);
    if (sEl) sEl.textContent = pad(seconds);
  }
  updateCountdown();
  setInterval(updateCountdown, 1000);

  /* ── FAQ Accordion ── */
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const questionBtn = item.querySelector('.faq-question');
    if (!questionBtn) return;

    questionBtn.addEventListener('click', () => {
      const isActive = item.classList.contains('active');

      // Close all other items (optional, remove this block if you want multiple open at once)
      faqItems.forEach(otherItem => {
        if (otherItem !== item) {
          otherItem.classList.remove('active');
        }
      });

      // Toggle the clicked item
      if (isActive) {
        item.classList.remove('active');
      } else {
        item.classList.add('active');
      }
    });
  });

  /* ── Active Nav Link Highlighting ── */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
  window.addEventListener('scroll', () => {
    let current = '';
    sections.forEach(section => {
      if (window.scrollY >= section.offsetTop - 100) current = section.id;
    });
    navLinks.forEach(link => {
      link.classList.toggle('active', link.getAttribute('href') === '#' + current);
    });
  }, { passive: true });

  /* ── Gallery Lightbox (simple) ── */
  document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', () => {
      const img = item.querySelector('img');
      if (!img) return;
      const overlay = document.createElement('div');
      overlay.style.cssText = `
        position: fixed; inset: 0; background: rgba(0,0,0,0.88);
        display: flex; align-items: center; justify-content: center;
        z-index: 9999; cursor: zoom-out; padding: 24px;
        animation: fadeIn 0.25s ease;
      `;
      const style = document.createElement('style');
      style.textContent = '@keyframes fadeIn { from { opacity: 0 } to { opacity: 1 } }';
      document.head.appendChild(style);
      const clone = img.cloneNode();
      clone.style.cssText = 'max-width: 90%; max-height: 90vh; border-radius: 12px; box-shadow: 0 24px 80px rgba(0,0,0,0.6);';
      overlay.appendChild(clone);
      overlay.addEventListener('click', () => { overlay.remove(); style.remove(); });
      document.body.appendChild(overlay);
    });
  });

  /* ── Timeline Activities Slider Navigation ── */
  const taSliderWrapper = document.querySelector('.ta-slider-wrapper');
  const taPrevBtn = document.querySelector('.ta-prev');
  const taNextBtn = document.querySelector('.ta-next');

  if (taSliderWrapper && taPrevBtn && taNextBtn) {
    const scrollAmount = 424; // Card width (400) + gap (24)

    // Function to check scroll position and toggle button visibility
    const handleScroll = () => {
      // Hide prev button if at the very beginning
      if (taSliderWrapper.scrollLeft <= 5) {
        taPrevBtn.style.opacity = '0';
        taPrevBtn.style.pointerEvents = 'none';
      } else {
        taPrevBtn.style.opacity = '1';
        taPrevBtn.style.pointerEvents = 'auto';
      }

      // Hide next button if reached the end
      const maxScrollLeft = taSliderWrapper.scrollWidth - taSliderWrapper.clientWidth;
      if (taSliderWrapper.scrollLeft >= maxScrollLeft - 5) {
        taNextBtn.style.opacity = '0';
        taNextBtn.style.pointerEvents = 'none';
      } else {
        taNextBtn.style.opacity = '1';
        taNextBtn.style.pointerEvents = 'auto';
      }
    };

    taPrevBtn.addEventListener('click', () => {
      taSliderWrapper.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    taNextBtn.addEventListener('click', () => {
      taSliderWrapper.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });

    // Attach scroll event listener
    taSliderWrapper.addEventListener('scroll', handleScroll, { passive: true });

    // Check initial state on load
    handleScroll();
  }

  /* ── Wall of Fame Tabs ── */
  const fameTabs = document.querySelectorAll('.fame-tab-new');
  fameTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      fameTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });

  /* ── Back to Top Button ── */
  const backToTopBtn = document.getElementById('backToTopBtn');
  if (backToTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    }, { passive: true });

    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  /* ── Contact Form → Gmail Mailto ── */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();

      const name = document.getElementById('contactName').value.trim();
      const email = document.getElementById('contactEmail').value.trim();
      const subject = document.getElementById('contactSubject').value.trim();
      const message = document.getElementById('contactMessage').value.trim();

      // Compose the body with sender info
      const body = `Hi BRI GAMA BCC Team,\n\n${message}\n\n---\nFrom: ${name}\nEmail: ${email}`;

      // Build Gmail compose URL
      const gmailUrl = `https://mail.google.com/mail/?view=cm&fs=1`
        + `&to=${encodeURIComponent('brigamabcc@ugm.ac.id')}`
        + `&su=${encodeURIComponent(subject)}`
        + `&body=${encodeURIComponent(body)}`;

      // Open Gmail in a new tab
      window.open(gmailUrl, '_blank');

      // Reset form
      contactForm.reset();
    });
  }

  /* ── Wall of Fame Tab Filtering ── */
  const yearTabs = document.querySelectorAll('.wof-year-tab');
  const catTabs = document.querySelectorAll('.wof-cat-tab');
  const podiums = document.querySelectorAll('.wof-podium');

  function filterWoF() {
    const activeYear = document.querySelector('.wof-year-tab.active')?.dataset.year || '2022';
    const activeCat = document.querySelector('.wof-cat-tab.active')?.dataset.cat || 's1';

    podiums.forEach(p => {
      if (p.dataset.year === activeYear && p.dataset.cat === activeCat) {
        p.style.display = '';
        p.classList.add('active');
        // Trigger fade+slide animation
        p.classList.remove('wof-entering');
        void p.offsetWidth; // Force reflow to restart animation
        p.classList.add('wof-entering');
      } else {
        p.style.display = 'none';
        p.classList.remove('active', 'wof-entering');
      }
    });
  }

  yearTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      yearTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      filterWoF();
    });
  });

  catTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      catTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      filterWoF();
    });
  });

});
