// ============================================
// FIT Competition 2026 - Main JavaScript
// ============================================

document.addEventListener('DOMContentLoaded', function () {

  // ===========================
  // Navbar Scroll Effect
  // ===========================
  const navbar = document.querySelector('.navbar-fit');
  if (navbar) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  }

  // ===========================
  // Countdown Timer
  // ===========================
  const countdownEl = document.getElementById('countdown-timer');

  if (countdownEl) {
    const targetDate = new Date("2026-05-01T00:00:00").getTime();

    function pad(num) {
      return num < 10 ? "0" + num : String(num);
    }

    function updateCountdown() {
      const now = new Date().getTime();
      const distance = targetDate - now;

      const daysEl = document.getElementById('cd-days');
      const hoursEl = document.getElementById('cd-hours');
      const minsEl = document.getElementById('cd-mins');
      const secsEl = document.getElementById('cd-secs');

      if (distance < 0) {
        if (daysEl) daysEl.textContent = "00";
        if (hoursEl) hoursEl.textContent = "00";
        if (minsEl) minsEl.textContent = "00";
        if (secsEl) secsEl.textContent = "00";
        return;
      }

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const mins = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const secs = Math.floor((distance % (1000 * 60)) / 1000);

      if (daysEl) daysEl.textContent = pad(days);
      if (hoursEl) hoursEl.textContent = pad(hours);
      if (minsEl) minsEl.textContent = pad(mins);
      if (secsEl) secsEl.textContent = pad(secs);
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  }

  // ===========================
  // Scroll Reveal Animations
  // ===========================
  const observerOptions = {
    root: null,
    rootMargin: '0px 0px -80px 0px',
    threshold: 0.1
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, observerOptions);

  // Observe fade-in elements
  document.querySelectorAll('.fade-in-up').forEach(function (el) {
    observer.observe(el);
  });

  // Observe timeline items
  document.querySelectorAll('.timeline-item').forEach(function (el, index) {
    el.style.transitionDelay = (index * 0.12) + 's';
    observer.observe(el);
  });

  // ===========================
  // Prize Pool Counter Animation
  // ===========================
  const prizeTotal = document.getElementById('prize-total');
  if (prizeTotal) {
    let counted = false;
    const prizeObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting && !counted) {
          counted = true;
          animateCount(prizeTotal, 0, 52500000, 2000);
        }
      });
    }, { threshold: 0.5 });

    prizeObserver.observe(prizeTotal);
  }

  function animateCount(element, start, end, duration) {
    const startTime = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);
      // Ease out cubic
      const easeOut = 1 - Math.pow(1 - progress, 3);
      const current = Math.floor(start + (end - start) * easeOut);
      element.textContent = 'Rp ' + current.toLocaleString('id-ID');

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    requestAnimationFrame(update);
  }

  // ===========================
  // Close offcanvas on nav click
  // ===========================
  const offcanvasEl = document.getElementById('offcanvasNav');
  if (offcanvasEl) {
    const offcanvasInstance = bootstrap.Offcanvas.getOrCreateInstance(offcanvasEl);
    offcanvasEl.querySelectorAll('.nav-link:not(.dropdown-toggle)').forEach(function (link) {
      link.addEventListener('click', function () {
        offcanvasInstance.hide();
      });
    });
  }
});
