/**
 * DevStack Modern Animation System
 * GSAP + ScrollTrigger + Lenis for Apple/Linear-grade interactions
 * Enhanced with 3D effects, text scramble, particle cursor, and more
 */

(function () {
  'use strict';

  const isTouchDevice = window.matchMedia('(pointer: coarse)').matches;
  const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // ═══════════════════════════════════════════════════════════════
  // 1. LENIS SMOOTH SCROLL
  // ═══════════════════════════════════════════════════════════════
  let lenis;
  if (typeof Lenis !== 'undefined' && !isReducedMotion) {
    lenis = new Lenis({
      lerp: 0.1,
      smoothWheel: true,
      syncTouch: true,
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Integrate with GSAP ScrollTrigger
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
      lenis.on('scroll', ScrollTrigger.update);
      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });
      gsap.ticker.lagSmoothing(0);
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
      anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#') return;
        const target = document.querySelector(href);
        if (target && lenis) {
          e.preventDefault();
          lenis.scrollTo(target, { offset: -80 });
        }
      });
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 2. SCROLL PROGRESS BAR
  // ═══════════════════════════════════════════════════════════════
  const progressBar = document.createElement('div');
  progressBar.className = 'scroll-progress';
  progressBar.style.cssText = 'position:fixed;top:0;left:0;height:3px;background:linear-gradient(90deg,#2563eb,#60a5fa);z-index:9999;transform-origin:left;width:0%;box-shadow:0 0 10px rgba(59,130,246,0.5);';
  document.body.appendChild(progressBar);

  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.to(progressBar, {
      width: '100%',
      ease: 'none',
      scrollTrigger: {
        trigger: document.body,
        start: 'top top',
        end: 'bottom bottom',
        scrub: true,
      },
    });
  } else {
    window.addEventListener('scroll', () => {
      const scrollTop = window.scrollY;
      const docHeight = document.documentElement.scrollHeight - window.innerHeight;
      progressBar.style.width = (scrollTop / docHeight * 100) + '%';
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 3. GSAP SCROLL REVEALS (Enhanced)
  // ═══════════════════════════════════════════════════════════════
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Batch reveal for cards, sections
    const revealElements = document.querySelectorAll('.reveal, .reveal-scale, .card-dark, .glass-card, .service-card-3d');
    if (revealElements.length > 0) {
      ScrollTrigger.batch(revealElements, {
        onEnter: (elements) => {
          gsap.fromTo(
            elements,
            { opacity: 0, y: 40 },
            {
              opacity: 1,
              y: 0,
              duration: 0.8,
              stagger: 0.08,
              ease: 'expo.out',
              overwrite: true,
            }
          );
        },
        start: 'top 88%',
        once: true,
      });
    }

    // Stagger children reveal
    document.querySelectorAll('.stagger-children').forEach((el) => {
      const children = el.children;
      if (children.length === 0) return;
      gsap.fromTo(
        children,
        { opacity: 0, y: 24 },
        {
          opacity: 1,
          y: 0,
          duration: 0.7,
          stagger: 0.1,
          ease: 'expo.out',
          scrollTrigger: {
            trigger: el,
            start: 'top 85%',
            once: true,
          },
        }
      );
    });

    // Parallax layers
    document.querySelectorAll('[data-parallax]').forEach((el) => {
      const speed = parseFloat(el.dataset.parallax) || 0.3;
      gsap.to(el, {
        y: () => speed * 200,
        ease: 'none',
        scrollTrigger: {
          trigger: el,
          start: 'top bottom',
          end: 'bottom top',
          scrub: true,
        },
      });
    });

    // Hero headline text reveal (word by word)
    document.querySelectorAll('.hero-text-reveal').forEach((headline) => {
      const words = headline.textContent.trim().split(/\s+/);
      headline.innerHTML = '';
      words.forEach((word) => {
        const wrap = document.createElement('span');
        wrap.className = 'inline-block overflow-hidden mr-[0.25em]';
        const inner = document.createElement('span');
        inner.className = 'inline-block';
        inner.textContent = word;
        wrap.appendChild(inner);
        headline.appendChild(wrap);
      });

      const innerSpans = headline.querySelectorAll('span > span');
      gsap.fromTo(
        innerSpans,
        { y: '110%', opacity: 0 },
        {
          y: '0%',
          opacity: 1,
          duration: 1.2,
          stagger: 0.04,
          ease: 'expo.out',
          delay: 0.2,
        }
      );

      setTimeout(() => {
        innerSpans.forEach((s) => {
          s.style.opacity = '1';
          s.style.transform = 'translateY(0)';
        });
      }, 2500);
    });

    // Badge reveal
    document.querySelectorAll('.badge-modern, .badge-glow').forEach((badge) => {
      gsap.fromTo(
        badge,
        { opacity: 0, scale: 0.9 },
        {
          opacity: 1,
          scale: 1,
          duration: 0.8,
          ease: 'back.out(1.7)',
          delay: 0.1,
        }
      );
    });

    // Stats counter with scroll trigger
    document.querySelectorAll('[data-counter]').forEach((counter) => {
      const target = parseInt(counter.getAttribute('data-counter'));
      const suffix = counter.getAttribute('data-suffix') || '';
      const prefix = counter.getAttribute('data-prefix') || '';
      if (isNaN(target)) return;

      ScrollTrigger.create({
        trigger: counter,
        start: 'top 85%',
        once: true,
        onEnter: () => {
          gsap.to(
            { val: 0 },
            {
              val: target,
              duration: 2,
              ease: 'power2.out',
              onUpdate: function () {
                counter.textContent = prefix + Math.floor(this.targets()[0].val) + suffix;
              },
            }
          );
        },
      });
    });

    // Enhanced card reveals with rotation
    document.querySelectorAll('.tilt-card').forEach((card, i) => {
      gsap.fromTo(card,
        { opacity: 0, y: 60, rotateX: 10 },
        {
          opacity: 1,
          y: 0,
          rotateX: 0,
          duration: 0.9,
          ease: 'expo.out',
          scrollTrigger: {
            trigger: card,
            start: 'top 90%',
            once: true,
          },
          delay: i * 0.08,
        }
      );
    });

    // Section title glow on scroll
    document.querySelectorAll('h2.text-gradient-blue').forEach((title) => {
      gsap.fromTo(title,
        { opacity: 0, x: -30, filter: 'blur(8px)' },
        {
          opacity: 1,
          x: 0,
          filter: 'blur(0px)',
          duration: 1,
          ease: 'expo.out',
          scrollTrigger: {
            trigger: title,
            start: 'top 85%',
            once: true,
          },
        }
      );
    });

    // Image reveal clip-path
    document.querySelectorAll('.img-reveal').forEach((img) => {
      ScrollTrigger.create({
        trigger: img,
        start: 'top 85%',
        once: true,
        onEnter: () => img.classList.add('revealed'),
      });
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 4. TEXT SCRAMBLE EFFECT
  // ═══════════════════════════════════════════════════════════════
  class TextScramble {
    constructor(el) {
      this.el = el;
      this.chars = '!<>-_\\/[]{}—=+*^?#________';
      this.originalText = el.textContent;
    }

    scramble() {
      const length = this.originalText.length;
      let iteration = 0;
      const interval = setInterval(() => {
        this.el.textContent = this.originalText
          .split('')
          .map((char, index) => {
            if (index < iteration) return this.originalText[index];
            if (char === ' ') return ' ';
            return this.chars[Math.floor(Math.random() * this.chars.length)];
          })
          .join('');

        if (iteration >= length) clearInterval(interval);
        iteration += 1 / 2;
      }, 30);
    }
  }

  // Apply scramble on hover to glitch-text elements
  document.querySelectorAll('.glitch-text').forEach((el) => {
    const scrambler = new TextScramble(el);
    el.addEventListener('mouseenter', () => scrambler.scramble());
  });

  // Auto-scramble hero subtitle once
  document.querySelectorAll('.scramble-text').forEach((el) => {
    const scrambler = new TextScramble(el);
    setTimeout(() => scrambler.scramble(), 800);
  });

  // ═══════════════════════════════════════════════════════════════
  // 5. 3D TILT EFFECT (Enhanced)
  // ═══════════════════════════════════════════════════════════════
  if (!isTouchDevice && !isReducedMotion) {
    document.querySelectorAll('.tilt-card').forEach((card) => {
      const glow = card.querySelector('.tilt-card-glow');

      card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const cx = rect.width / 2;
        const cy = rect.height / 2;
        const rotateX = ((y - cy) / cy) * -10;
        const rotateY = ((x - cx) / cx) * 10;

        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.03, 1.03, 1.03)`;

        if (glow) {
          glow.style.setProperty('--mouse-x', `${x}px`);
          glow.style.setProperty('--mouse-y', `${y}px`);
        }
      });

      card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
      });
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 6. MAGNETIC BUTTON EFFECT (Enhanced)
  // ═══════════════════════════════════════════════════════════════
  if (!isTouchDevice && !isReducedMotion) {
    document.querySelectorAll('.magnetic-btn').forEach((btn) => {
      btn.addEventListener('mousemove', (e) => {
        const rect = btn.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        btn.style.transform = `translate(${x * 0.35}px, ${y * 0.35}px)`;
      });

      btn.addEventListener('mouseleave', () => {
        btn.style.transform = 'translate(0, 0)';
      });
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 7. CUSTOM CURSOR GLOW + PARTICLE TRAIL
  // ═══════════════════════════════════════════════════════════════
  if (!isTouchDevice && !isReducedMotion) {
    const cursor = document.createElement('div');
    cursor.className = 'cursor-glow';
    document.body.appendChild(cursor);

    // Particle trail
    const trailParticles = [];
    const maxTrail = 12;

    function createTrailParticle(x, y) {
      const p = document.createElement('div');
      p.className = 'particle-cursor';
      p.style.left = x + 'px';
      p.style.top = y + 'px';
      p.style.opacity = '0.8';
      p.style.transform = `scale(${Math.random() * 0.5 + 0.5})`;
      document.body.appendChild(p);
      trailParticles.push({ el: p, life: 1 });

      if (trailParticles.length > maxTrail) {
        const old = trailParticles.shift();
        old.el.remove();
      }
    }

    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let cursorX = mouseX;
    let cursorY = mouseY;
    let lastTrailX = mouseX;
    let lastTrailY = mouseY;

    document.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;

      const dist = Math.hypot(mouseX - lastTrailX, mouseY - lastTrailY);
      if (dist > 15) {
        createTrailParticle(mouseX, mouseY);
        lastTrailX = mouseX;
        lastTrailY = mouseY;
      }
    });

    document.addEventListener('mouseleave', () => {
      cursor.style.opacity = '0';
    });

    document.addEventListener('mouseenter', () => {
      cursor.style.opacity = '1';
    });

    function animateCursor() {
      const dx = mouseX - cursorX;
      const dy = mouseY - cursorY;
      cursorX += dx * 0.15;
      cursorY += dy * 0.15;
      cursor.style.left = cursorX + 'px';
      cursor.style.top = cursorY + 'px';

      // Update trail particles
      for (let i = trailParticles.length - 1; i >= 0; i--) {
        const p = trailParticles[i];
        p.life -= 0.04;
        p.el.style.opacity = p.life;
        p.el.style.transform = `scale(${p.life})`;
        if (p.life <= 0) {
          p.el.remove();
          trailParticles.splice(i, 1);
        }
      }

      requestAnimationFrame(animateCursor);
    }
    animateCursor();
  }

  // ═══════════════════════════════════════════════════════════════
  // 8. NAVBAR SCROLL EFFECT
  // ═══════════════════════════════════════════════════════════════
  const navbar = document.getElementById('main-navbar');
  const navContainer = document.getElementById('navbar-container');

  if (navbar && typeof ScrollTrigger !== 'undefined') {
    ScrollTrigger.create({
      start: 30,
      onUpdate: (self) => {
        if (self.scroll() > 30) {
          navbar.classList.add('nav-glass');
          navbar.classList.remove('nav-dark');
          if (navContainer) {
            navContainer.classList.remove('h-20');
            navContainer.classList.add('h-16');
          }
        } else {
          navbar.classList.remove('nav-glass');
          navbar.classList.add('nav-dark');
          if (navContainer) {
            navContainer.classList.remove('h-16');
            navContainer.classList.add('h-20');
          }
        }
      },
    });
  } else if (navbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 30) {
        navbar.classList.add('nav-glass');
        navbar.classList.remove('nav-dark');
        if (navContainer) {
          navContainer.classList.remove('h-20');
          navContainer.classList.add('h-16');
        }
      } else {
        navbar.classList.remove('nav-glass');
        navbar.classList.add('nav-dark');
        if (navContainer) {
          navContainer.classList.remove('h-16');
          navContainer.classList.add('h-20');
        }
      }
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 9. CANVAS PARTICLE NETWORK (Unified)
  // ═══════════════════════════════════════════════════════════════
  function initParticleNetwork(canvasId) {
    const canvas = document.getElementById(canvasId);
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let particles = [];
    let mouseX = 0;
    let mouseY = 0;
    let isHovering = false;

    function resize() {
      canvas.width = canvas.offsetWidth;
      canvas.height = canvas.offsetHeight;
      createParticles();
    }

    function createParticles() {
      particles = [];
      const count = Math.floor((canvas.width * canvas.height) / 20000);
      for (let i = 0; i < count; i++) {
        particles.push({
          x: Math.random() * canvas.width,
          y: Math.random() * canvas.height,
          vx: (Math.random() - 0.5) * 0.4,
          vy: (Math.random() - 0.5) * 0.4,
          radius: Math.random() * 1.5 + 0.5,
          opacity: Math.random() * 0.4 + 0.2,
        });
      }
    }

    function draw() {
      ctx.clearRect(0, 0, canvas.width, canvas.height);

      particles.forEach((p, i) => {
        p.x += p.vx;
        p.y += p.vy;

        if (p.x < 0 || p.x > canvas.width) p.vx *= -1;
        if (p.y < 0 || p.y > canvas.height) p.vy *= -1;

        if (isHovering) {
          const dx = mouseX - p.x;
          const dy = mouseY - p.y;
          const dist = Math.sqrt(dx * dx + dy * dy);
          if (dist < 150) {
            p.x -= dx * 0.008;
            p.y -= dy * 0.008;
          }
        }

        ctx.beginPath();
        ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(96, 165, 250, ${p.opacity})`;
        ctx.fill();

        for (let j = i + 1; j < particles.length; j++) {
          const p2 = particles[j];
          const dx2 = p.x - p2.x;
          const dy2 = p.y - p2.y;
          const dist2 = Math.sqrt(dx2 * dx2 + dy2 * dy2);
          if (dist2 < 120) {
            ctx.beginPath();
            ctx.moveTo(p.x, p.y);
            ctx.lineTo(p2.x, p2.y);
            ctx.strokeStyle = `rgba(59, 130, 246, ${0.12 * (1 - dist2 / 120)})`;
            ctx.lineWidth = 0.5;
            ctx.stroke();
          }
        }
      });

      requestAnimationFrame(draw);
    }

    canvas.addEventListener('mousemove', (e) => {
      const rect = canvas.getBoundingClientRect();
      mouseX = e.clientX - rect.left;
      mouseY = e.clientY - rect.top;
      isHovering = true;
    });

    canvas.addEventListener('mouseleave', () => {
      isHovering = false;
    });

    window.addEventListener('resize', resize);
    resize();
    draw();
  }

  // Initialize all particle canvases
  document.querySelectorAll('canvas[id^="particle-network"]').forEach((canvas) => {
    initParticleNetwork(canvas.id);
  });

  // ═══════════════════════════════════════════════════════════════
  // 10. PORTFOLIO FILTER ANIMATION
  // ═══════════════════════════════════════════════════════════════
  const filterButtons = document.querySelectorAll('.portfolio-filter');
  const portfolioItems = document.querySelectorAll('.portfolio-item');

  filterButtons.forEach((button) => {
    button.addEventListener('click', function () {
      filterButtons.forEach((btn) => {
        btn.classList.remove('active', 'btn-glow-modern');
        btn.classList.add('btn-glass-modern');
      });
      this.classList.add('active', 'btn-glow-modern');
      this.classList.remove('btn-glass-modern');

      const filter = this.dataset.filter;

      portfolioItems.forEach((item) => {
        const matches = filter === 'all' || item.dataset.category === filter;
        if (matches) {
          item.style.display = 'block';
          gsap.fromTo(
            item,
            { opacity: 0, scale: 0.95 },
            { opacity: 1, scale: 1, duration: 0.5, ease: 'expo.out' }
          );
        } else {
          gsap.to(item, {
            opacity: 0,
            scale: 0.95,
            duration: 0.3,
            ease: 'power2.in',
            onComplete: () => {
              item.style.display = 'none';
            },
          });
        }
      });
    });
  });

  // ═══════════════════════════════════════════════════════════════
  // 11. MOBILE MENU
  // ═══════════════════════════════════════════════════════════════
  const mobileMenuBtn = document.querySelector('.mobile-menu-button');
  const mobileMenu = document.querySelector('.mobile-menu');
  const menuIcon = document.querySelector('.menu-icon');
  const closeIcon = document.querySelector('.close-icon');

  if (mobileMenuBtn) {
    mobileMenuBtn.addEventListener('click', function () {
      mobileMenu.classList.toggle('hidden');
      menuIcon.classList.toggle('hidden');
      closeIcon.classList.toggle('hidden');
    });
  }

  document.addEventListener('click', function (e) {
    if (
      mobileMenuBtn &&
      !mobileMenuBtn.contains(e.target) &&
      mobileMenu &&
      !mobileMenu.contains(e.target) &&
      !mobileMenu.classList.contains('hidden')
    ) {
      mobileMenu.classList.add('hidden');
      menuIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
    }
  });

  window.addEventListener('resize', function () {
    if (window.innerWidth >= 768 && mobileMenu && !mobileMenu.classList.contains('hidden')) {
      mobileMenu.classList.add('hidden');
      menuIcon.classList.remove('hidden');
      closeIcon.classList.add('hidden');
    }
  });

  // ═══════════════════════════════════════════════════════════════
  // 12. NEWSLETTER FORM
  // ═══════════════════════════════════════════════════════════════
  const newsletterForm = document.querySelector('footer form');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const email = this.querySelector('input[type="email"]').value;
      if (email) {
        const button = this.querySelector('button');
        const originalHTML = button.innerHTML;
        button.innerHTML = '<span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg> Subscribed!</span>';
        button.disabled = true;
        setTimeout(() => {
          button.innerHTML = originalHTML;
          button.disabled = false;
        }, 3000);
      }
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 13. FEATURE TABS (for home page services section)
  // ═══════════════════════════════════════════════════════════════
  window.initFeatureTabs = function () {
    const btns = document.querySelectorAll('.feature-tab-btn');
    const panels = document.querySelectorAll('.feature-tab-panel');
    btns.forEach((btn) => {
      btn.addEventListener('click', function () {
        btns.forEach((b) => b.classList.remove('active'));
        panels.forEach((p) => {
          p.style.display = 'none';
          p.classList.remove('fade-in-up');
        });
        this.classList.add('active');
        const target = document.getElementById(this.dataset.tab);
        if (target) {
          target.style.display = 'block';
          target.classList.add('fade-in-up');
          if (typeof gsap !== 'undefined') {
            gsap.fromTo(target, { opacity: 0, y: 20 }, { opacity: 1, y: 0, duration: 0.5, ease: 'expo.out' });
          }
        }
      });
    });
  };

  if (window.initFeatureTabs) window.initFeatureTabs();

  // ═══════════════════════════════════════════════════════════════
  // 14. SCROLL INDICATOR
  // ═══════════════════════════════════════════════════════════════
  const scrollIndicator = document.querySelector('.scroll-indicator-smooth');
  if (scrollIndicator) {
    scrollIndicator.addEventListener('click', function () {
      const nextSection = document.querySelector('section:nth-of-type(2)');
      if (nextSection) {
        if (lenis) {
          lenis.scrollTo(nextSection, { offset: -80 });
        } else {
          nextSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 15. FORM INPUT FOCUS EFFECTS
  // ═══════════════════════════════════════════════════════════════
  document.querySelectorAll('input, textarea').forEach((input) => {
    input.addEventListener('focus', function () {
      if (this.parentElement) this.parentElement.classList.add('input-focused');
    });
    input.addEventListener('blur', function () {
      if (this.parentElement) this.parentElement.classList.remove('input-focused');
    });
  });

  // ═══════════════════════════════════════════════════════════════
  // 16. SPOTLIGHT EFFECT ON CARDS
  // ═══════════════════════════════════════════════════════════════
  if (!isTouchDevice) {
    document.querySelectorAll('.spotlight').forEach((el) => {
      el.addEventListener('mousemove', (e) => {
        const rect = el.getBoundingClientRect();
        el.style.setProperty('--spotlight-x', (e.clientX - rect.left) + 'px');
        el.style.setProperty('--spotlight-y', (e.clientY - rect.top) + 'px');
      });
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 17. FEATURE TAB CONTENT SPOTLIGHT
  // ═══════════════════════════════════════════════════════════════
  if (!isTouchDevice) {
    document.querySelectorAll('.feature-tab-content').forEach((el) => {
      el.addEventListener('mousemove', (e) => {
        const rect = el.getBoundingClientRect();
        el.style.setProperty('--mouse-x', (e.clientX - rect.left) + 'px');
        el.style.setProperty('--mouse-y', (e.clientY - rect.top) + 'px');
      });
    });
  }

  // ═══════════════════════════════════════════════════════════════
  // 18. SHINE CARD TRIGGER
  // ═══════════════════════════════════════════════════════════════
  document.querySelectorAll('.shine-card').forEach((card) => {
    card.addEventListener('mouseenter', () => {
      card.classList.add('shining');
    });
    card.addEventListener('animationend', () => {
      card.classList.remove('shining');
    });
  });

})();
