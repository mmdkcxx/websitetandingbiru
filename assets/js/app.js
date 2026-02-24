/* =====================================================
   BRI GAMA Business Case Competition 2026
   Main JavaScript — Interactivity & Animations
   ===================================================== */

document.addEventListener('DOMContentLoaded', function () {

  /* ── Navbar: Scroll Shadow ── */
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 20);
  }, { passive: true });

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

});
