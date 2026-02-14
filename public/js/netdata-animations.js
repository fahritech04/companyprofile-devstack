/**
 * Netdata-Style Animations & Particle Networks
 * Advanced visual effects inspired by netdata.cloud
 */

// ═══════════════════════════════════════════════════════════════
// Particle Network System
// ═══════════════════════════════════════════════════════════════
class ParticleNetwork {
  constructor(canvasId, options = {}) {
    this.canvas = document.getElementById(canvasId);
    if (!this.canvas) return;

    this.ctx = this.canvas.getContext('2d');
    this.particles = [];
    this.mouseX = 0;
    this.mouseY = 0;
    this.isHovering = false;

    // Default options
    this.options = {
      particleCount: 80,
      connectionDistance: 120,
      particleSize: { min: 1, max: 3 },
      particleSpeed: { min: 0.2, max: 0.5 },
      particleOpacity: { min: 0.2, max: 0.6 },
      connectionOpacity: 0.15,
      mouseInfluenceRadius: 150,
      colors: {
        primary: 'rgba(96, 165, 250, 1)',
        secondary: 'rgba(59, 130, 246, 1)'
      },
      ...options
    };

    this.init();
  }

  init() {
    this.resize();
    this.createParticles();
    this.bindEvents();
    this.animate();
  }

  resize() {
    this.canvas.width = this.canvas.offsetWidth;
    this.canvas.height = this.canvas.offsetHeight;
    this.particleCount = Math.floor(
      (this.canvas.width * this.canvas.height) / 15000
    );
  }

  createParticles() {
    this.particles = [];
    for (let i = 0; i < this.particleCount; i++) {
      this.particles.push({
        x: Math.random() * this.canvas.width,
        y: Math.random() * this.canvas.height,
        vx: (Math.random() - 0.5) * this.options.particleSpeed.max,
        vy: (Math.random() - 0.5) * this.options.particleSpeed.max,
        radius: Math.random() * (this.options.particleSize.max - this.options.particleSize.min) + this.options.particleSize.min,
        opacity: Math.random() * (this.options.particleOpacity.max - this.options.particleOpacity.min) + this.options.particleOpacity.min
      });
    }
  }

  bindEvents() {
    window.addEventListener('resize', () => this.resize());

    this.canvas.addEventListener('mousemove', (e) => {
      const rect = this.canvas.getBoundingClientRect();
      this.mouseX = e.clientX - rect.left;
      this.mouseY = e.clientY - rect.top;
      this.isHovering = true;
    });

    this.canvas.addEventListener('mouseleave', () => {
      this.isHovering = false;
    });
  }

  update() {
    this.particles.forEach(p => {
      // Update position
      p.x += p.vx;
      p.y += p.vy;

      // Bounce off edges
      if (p.x < 0 || p.x > this.canvas.width) p.vx *= -1;
      if (p.y < 0 || p.y > this.canvas.height) p.vy *= -1;

      // Mouse interaction
      if (this.isHovering) {
        const dx = this.mouseX - p.x;
        const dy = this.mouseY - p.y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < this.options.mouseInfluenceRadius) {
          const force = (this.options.mouseInfluenceRadius - dist) / this.options.mouseInfluenceRadius;
          p.x -= dx * force * 0.01;
          p.y -= dy * force * 0.01;
        }
      }
    });
  }

  draw() {
    this.ctx.clearRect(0, 0, this.canvas.width, this.canvas.height);

    // Draw connections
    this.particles.forEach((p1, i) => {
      this.particles.slice(i + 1).forEach(p2 => {
        const dx = p1.x - p2.x;
        const dy = p1.y - p2.y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < this.options.connectionDistance) {
          const opacity = this.options.connectionOpacity * (1 - dist / this.options.connectionDistance);
          this.ctx.beginPath();
          this.ctx.moveTo(p1.x, p1.y);
          this.ctx.lineTo(p2.x, p2.y);
          this.ctx.strokeStyle = `rgba(96, 165, 250, ${opacity})`;
          this.ctx.lineWidth = 0.5;
          this.ctx.stroke();
        }
      });
    });

    // Draw particles
    this.particles.forEach(p => {
      this.ctx.beginPath();
      this.ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
      this.ctx.fillStyle = `rgba(96, 165, 250, ${p.opacity})`;
      this.ctx.fill();
    });
  }

  animate() {
    this.update();
    this.draw();
    requestAnimationFrame(() => this.animate());
  }
}

// ═══════════════════════════════════════════════════════════════
// Floating Orbs System
// ═══════════════════════════════════════════════════════════════
class FloatingOrbs {
  constructor(containerId, options = {}) {
    this.container = document.getElementById(containerId);
    if (!this.container) return;

    this.orbs = [];
    this.options = {
      count: 5,
      size: { min: 100, max: 300 },
      speed: { min: 0.5, max: 2 },
      colors: [
        'rgba(59, 130, 246, 0.1)',
        'rgba(96, 165, 250, 0.08)',
        'rgba(37, 99, 235, 0.12)'
      ],
      ...options
    };

    this.init();
  }

  init() {
    this.createOrbs();
    this.animate();
  }

  createOrbs() {
    for (let i = 0; i < this.options.count; i++) {
      const orb = document.createElement('div');
      orb.className = 'floating-orb';
      orb.style.cssText = `
        position: absolute;
        width: ${Math.random() * (this.options.size.max - this.options.size.min) + this.options.size.min}px;
        height: ${Math.random() * (this.options.size.max - this.options.size.min) + this.options.size.min}px;
        border-radius: 50%;
        background: ${this.options.colors[Math.floor(Math.random() * this.options.colors.length)]};
        filter: blur(60px);
        pointer-events: none;
        left: ${Math.random() * 100}%;
        top: ${Math.random() * 100}%;
        animation-delay: ${Math.random() * 5}s;
        animation-duration: ${Math.random() * 10 + 15}s;
      `;
      this.container.appendChild(orb);
      this.orbs.push(orb);
    }
  }

  animate() {
    // Animation handled by CSS
  }
}

// ═══════════════════════════════════════════════════════════════
// Data Stream Effect
// ═══════════════════════════════════════════════════════════════
class DataStream {
  constructor(containerId, options = {}) {
    this.container = document.getElementById(containerId);
    if (!this.container) return;

    this.options = {
      lineCount: 5,
      ...options
    };

    this.init();
  }

  init() {
    // Lines are created via HTML/CSS
    // This class can be extended for more complex data stream effects
  }
}

// ═══════════════════════════════════════════════════════════════
// Magnetic Button Effect
// ═══════════════════════════════════════════════════════════════
class MagneticButton {
  constructor(button, options = {}) {
    this.button = button;
    if (!this.button) return;

    this.options = {
      strength: 0.3,
      ...options
    };

    this.init();
  }

  init() {
    this.button.addEventListener('mousemove', (e) => this.onMouseMove(e));
    this.button.addEventListener('mouseleave', () => this.onMouseLeave());
  }

  onMouseMove(e) {
    const rect = this.button.getBoundingClientRect();
    const x = e.clientX - rect.left - rect.width / 2;
    const y = e.clientY - rect.top - rect.height / 2;

    this.button.style.transform = `translate(${x * this.options.strength}px, ${y * this.options.strength}px)`;
  }

  onMouseLeave() {
    this.button.style.transform = 'translate(0, 0)';
  }
}

// ═══════════════════════════════════════════════════════════════
// Parallax Effect
// ═══════════════════════════════════════════════════════════════
class ParallaxEffect {
  constructor(options = {}) {
    this.elements = document.querySelectorAll('.parallax-element');
    this.options = {
      speed: 0.5,
      ...options
    };

    this.init();
  }

  init() {
    window.addEventListener('scroll', () => this.onScroll());
  }

  onScroll() {
    const scrollY = window.scrollY;
    this.elements.forEach(el => {
      const speed = parseFloat(el.dataset.speed) || this.options.speed;
      el.style.transform = `translateY(${scrollY * speed}px)`;
    });
  }
}

// ═══════════════════════════════════════════════════════════════
// Text Split Animation
// ═══════════════════════════════════════════════════════════════
class TextSplitAnimation {
  constructor(element, options = {}) {
    this.element = element;
    if (!this.element) return;

    this.options = {
      charDelay: 0.05,
      ...options
    };

    this.init();
  }

  init() {
    const text = this.element.textContent;
    this.element.innerHTML = '';
    this.element.style.opacity = '1';

    text.split('').forEach((char, i) => {
      const span = document.createElement('span');
      span.textContent = char === ' ' ? '\u00A0' : char;
      span.className = 'inline-block animate-char';
      span.style.animationDelay = `${i * this.options.charDelay}s`;
      this.element.appendChild(span);
    });
  }
}

// ═══════════════════════════════════════════════════════════════
// Counter Animation
// ═══════════════════════════════════════════════════════════════
class CounterAnimation {
  constructor(element, options = {}) {
    this.element = element;
    if (!this.element) return;

    this.options = {
      target: 0,
      duration: 2000,
      prefix: '',
      suffix: '',
      ...options
    };

    this.init();
  }

  init() {
    const target = parseInt(this.element.dataset.counter) || this.options.target;
    const prefix = this.element.dataset.prefix || this.options.prefix;
    const suffix = this.element.dataset.suffix || this.options.suffix;

    this.animateCounter(target, prefix, suffix);
  }

  animateCounter(target, prefix, suffix) {
    const duration = this.options.duration;
    const startTime = performance.now();
    const startValue = 0;

    const update = (currentTime) => {
      const elapsed = currentTime - startTime;
      const progress = Math.min(elapsed / duration, 1);

      // Easing function
      const easeOutQuart = 1 - Math.pow(1 - progress, 4);
      const currentValue = Math.floor(startValue + (target - startValue) * easeOutQuart);

      this.element.textContent = `${prefix}${currentValue}${suffix}`;

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    };

    requestAnimationFrame(update);
  }
}

// ═══════════════════════════════════════════════════════════════
// Card 3D Tilt Effect
// ═══════════════════════════════════════════════════════════════
class Card3DTilt {
  constructor(card, options = {}) {
    this.card = card;
    if (!this.card) return;

    this.options = {
      maxTilt: 5,
      ...options
    };

    this.init();
  }

  init() {
    this.card.addEventListener('mousemove', (e) => this.onMouseMove(e));
    this.card.addEventListener('mouseleave', () => this.onMouseLeave());
  }

  onMouseMove(e) {
    const rect = this.card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    const centerX = rect.width / 2;
    const centerY = rect.height / 2;

    const rotateX = ((y - centerY) / centerY) * this.options.maxTilt;
    const rotateY = ((centerX - x) / centerX) * this.options.maxTilt;

    this.card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
  }

  onMouseLeave() {
    this.card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
  }
}

// ═════════════════════════════════════════════════════════════════
// Ripple Effect
// ═════════════════════════════════════════════════════════════════
class RippleEffect {
  constructor(button, options = {}) {
    this.button = button;
    if (!this.button) return;

    this.options = {
      color: 'rgba(96, 165, 250, 0.4)',
      ...options
    };

    this.init();
  }

  init() {
    this.button.addEventListener('click', (e) => this.createRipple(e));
  }

  createRipple(e) {
    const ripple = document.createElement('span');
    ripple.className = 'ripple';

    const rect = this.button.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);

    ripple.style.cssText = `
      width: ${size}px;
      height: ${size}px;
      left: ${e.clientX - rect.left - size / 2}px;
      top: ${e.clientY - rect.top - size / 2}px;
      background: ${this.options.color};
    `;

    this.button.appendChild(ripple);

    setTimeout(() => ripple.remove(), 600);
  }
}

// ═══════════════════════════════════════════════════════════════
// Glitch Effect
// ═══════════════════════════════════════════════════════════════
class GlitchEffect {
  constructor(element, options = {}) {
    this.element = element;
    if (!this.element) return;

    this.options = {
      intensity: 2,
      ...options
    };

    this.init();
  }

  init() {
    this.element.addEventListener('mouseenter', () => this.addGlitch());
    this.element.addEventListener('mouseleave', () => this.removeGlitch());
  }

  addGlitch() {
    this.element.style.animation = `glitch ${this.options.intensity * 0.1}s ease-in-out`;
  }

  removeGlitch() {
    this.element.style.animation = '';
  }
}

// ═══════════════════════════════════════════════════════════════
// Initialize All Effects
// ═══════════════════════════════════════════════════════════════
document.addEventListener('DOMContentLoaded', () => {
  // Initialize particle networks
  const particleNetworks = ['particle-network', 'particle-network-services', 'particle-network-portfolio', 'particle-network-contact'];
  particleNetworks.forEach(id => {
    new ParticleNetwork(id);
  });

  // Initialize magnetic buttons
  document.querySelectorAll('.magnetic-btn').forEach(btn => {
    new MagneticButton(btn);
  });

  // Initialize parallax elements
  new ParallaxEffect();

  // Initialize text split animations
  document.querySelectorAll('.animate-text-split').forEach(el => {
    new TextSplitAnimation(el);
  });

  // Initialize counter animations
  document.querySelectorAll('[data-counter]').forEach(el => {
    new CounterAnimation(el);
  });

  // Initialize card 3D tilt effects
  document.querySelectorAll('.card-tilt').forEach(card => {
    new Card3DTilt(card);
  });

  // Initialize ripple effects
  document.querySelectorAll('.btn-glow').forEach(btn => {
    new RippleEffect(btn);
  });

  // Initialize glitch effects
  document.querySelectorAll('.glitch-effect').forEach(el => {
    new GlitchEffect(el);
  });

  // ═══════════════════════════════════════════════════════════════
  // Smooth Scroll for Internal Links
  // ═══════════════════════════════════════════════════════════════
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });

  // ═══════════════════════════════════════════════════════════════
  // Intersection Observer for Scroll Animations
  // ═══════════════════════════════════════════════════════════════
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };

  const scrollObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
      }
    });
  }, observerOptions);

  document.querySelectorAll('.animate-on-scroll').forEach(el => {
    scrollObserver.observe(el);
  });

  // ═══════════════════════════════════════════════════════════════
  // Mouse Trail Effect
  // ═══════════════════════════════════════════════════════════════
  const mouseTrail = {
    points: [],
    maxPoints: 20,
    canvas: null,
    ctx: null
  };

  if (document.querySelector('.hero-section')) {
    mouseTrail.canvas = document.createElement('canvas');
    mouseTrail.canvas.className = 'absolute inset-0 w-full h-full pointer-events-none opacity-20';
    mouseTrail.canvas.style.cssText = 'z-index: 1;';
    document.querySelector('.hero-section').appendChild(mouseTrail.canvas);
    mouseTrail.ctx = mouseTrail.canvas.getContext('2d');

    const resizeMouseTrail = () => {
      mouseTrail.canvas.width = mouseTrail.canvas.offsetWidth;
      mouseTrail.canvas.height = mouseTrail.canvas.offsetHeight;
    };

    window.addEventListener('resize', resizeMouseTrail);
    resizeMouseTrail();

    document.addEventListener('mousemove', (e) => {
      const rect = mouseTrail.canvas.getBoundingClientRect();
      mouseTrail.points.push({
        x: e.clientX - rect.left,
        y: e.clientY - rect.top,
        life: 1
      });

      if (mouseTrail.points.length > mouseTrail.maxPoints) {
        mouseTrail.points.shift();
      }
    });

    const animateMouseTrail = () => {
      mouseTrail.ctx.clearRect(0, 0, mouseTrail.canvas.width, mouseTrail.canvas.height);

      mouseTrail.points.forEach((point, i) => {
        point.life -= 0.02;

        if (point.life > 0) {
          mouseTrail.ctx.beginPath();
          mouseTrail.ctx.arc(point.x, point.y, 2, 0, Math.PI * 2);
          mouseTrail.ctx.fillStyle = `rgba(96, 165, 250, ${point.life})`;
          mouseTrail.ctx.fill();

          // Connect to next point
          if (i < mouseTrail.points.length - 1) {
            const nextPoint = mouseTrail.points[i + 1];
            mouseTrail.ctx.beginPath();
            mouseTrail.ctx.moveTo(point.x, point.y);
            mouseTrail.ctx.lineTo(nextPoint.x, nextPoint.y);
            mouseTrail.ctx.strokeStyle = `rgba(96, 165, 250, ${point.life * 0.5})`;
            mouseTrail.ctx.lineWidth = 1;
            mouseTrail.ctx.stroke();
          }
        }
      });

      requestAnimationFrame(animateMouseTrail);
    };

    animateMouseTrail();
  }
});

// ═══════════════════════════════════════════════════════════════
// Export classes for external use
// ═══════════════════════════════════════════════════════════════
if (typeof module !== 'undefined' && module.exports) {
  module.exports = {
    ParticleNetwork,
    FloatingOrbs,
    DataStream,
    MagneticButton,
    ParallaxEffect,
    TextSplitAnimation,
    CounterAnimation,
    Card3DTilt,
    RippleEffect,
    GlitchEffect
  };
}
