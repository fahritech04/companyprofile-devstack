/**
 * DevStack 3D Hero Background
 * Three.js wireframe sphere + floating particles with mouse interaction
 */
(function () {
  'use strict';

  const isTouchDevice = window.matchMedia('(pointer: coarse)').matches;
  const isReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Only init if Three.js is loaded, hero section exists, and not reduced motion
  if (typeof THREE === 'undefined') return;
  const heroSection = document.querySelector('.hero-section');
  if (!heroSection || isReducedMotion) return;

  const container = document.createElement('div');
  container.id = 'three-hero-container';
  container.style.cssText = 'position:absolute;inset:0;z-index:1;pointer-events:none;overflow:hidden;';
  heroSection.insertBefore(container, heroSection.firstChild);

  // Scene setup
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(75, container.offsetWidth / container.offsetHeight, 0.1, 1000);
  camera.position.z = 5;

  const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
  renderer.setSize(container.offsetWidth, container.offsetHeight);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.domElement.style.cssText = 'width:100%;height:100%;display:block;';
  container.appendChild(renderer.domElement);

  // ── Main Wireframe Sphere ──
  const geometry = new THREE.IcosahedronGeometry(2.2, 1);
  const wireframeGeo = new THREE.WireframeGeometry(geometry);
  const wireframeMat = new THREE.LineBasicMaterial({
    color: 0x3b82f6,
    transparent: true,
    opacity: 0.25,
  });
  const wireframe = new THREE.LineSegments(wireframeGeo, wireframeMat);
  scene.add(wireframe);

  // Inner glowing sphere
  const innerGeo = new THREE.IcosahedronGeometry(1.9, 0);
  const innerMat = new THREE.MeshBasicMaterial({
    color: 0x1e3a5f,
    transparent: true,
    opacity: 0.08,
    wireframe: true,
  });
  const innerSphere = new THREE.Mesh(innerGeo, innerMat);
  scene.add(innerSphere);

  // ── Floating Particles ──
  const particleCount = 200;
  const particleGeo = new THREE.BufferGeometry();
  const positions = new Float32Array(particleCount * 3);
  const velocities = [];

  for (let i = 0; i < particleCount; i++) {
    const theta = Math.random() * Math.PI * 2;
    const phi = Math.acos(Math.random() * 2 - 1);
    const r = 2.5 + Math.random() * 3;
    positions[i * 3] = r * Math.sin(phi) * Math.cos(theta);
    positions[i * 3 + 1] = r * Math.sin(phi) * Math.sin(theta);
    positions[i * 3 + 2] = r * Math.cos(phi);
    velocities.push({
      x: (Math.random() - 0.5) * 0.002,
      y: (Math.random() - 0.5) * 0.002,
      z: (Math.random() - 0.5) * 0.002,
    });
  }

  particleGeo.setAttribute('position', new THREE.BufferAttribute(positions, 3));
  const particleMat = new THREE.PointsMaterial({
    color: 0x60a5fa,
    size: 0.03,
    transparent: true,
    opacity: 0.6,
    blending: THREE.AdditiveBlending,
  });
  const particles = new THREE.Points(particleGeo, particleMat);
  scene.add(particles);

  // ── Connection Lines between nearby particles ──
  const lineMaterial = new THREE.LineBasicMaterial({
    color: 0x3b82f6,
    transparent: true,
    opacity: 0.06,
  });
  const lineGeometry = new THREE.BufferGeometry();
  const linePositions = new Float32Array(particleCount * 6); // 2 points per line, 3 coords each
  lineGeometry.setAttribute('position', new THREE.BufferAttribute(linePositions, 3));
  const lines = new THREE.LineSegments(lineGeometry, lineMaterial);
  scene.add(lines);

  // ── Floating Ring / Orbit ──
  const ringGeo = new THREE.TorusGeometry(3.2, 0.008, 16, 100);
  const ringMat = new THREE.MeshBasicMaterial({
    color: 0x2563eb,
    transparent: true,
    opacity: 0.15,
  });
  const ring = new THREE.Mesh(ringGeo, ringMat);
  ring.rotation.x = Math.PI / 2.5;
  ring.rotation.y = Math.PI / 8;
  scene.add(ring);

  const ring2 = new THREE.Mesh(
    new THREE.TorusGeometry(3.6, 0.005, 16, 100),
    new THREE.MeshBasicMaterial({ color: 0x60a5fa, transparent: true, opacity: 0.1 })
  );
  ring2.rotation.x = Math.PI / 3;
  ring2.rotation.z = Math.PI / 6;
  scene.add(ring2);

  // ── Mouse interaction ──
  let mouseX = 0, mouseY = 0;
  let targetRotationX = 0, targetRotationY = 0;

  if (!isTouchDevice) {
    document.addEventListener('mousemove', (e) => {
      mouseX = (e.clientX / window.innerWidth) * 2 - 1;
      mouseY = (e.clientY / window.innerHeight) * 2 - 1;
    });
  }

  // ── Animation Loop ──
  let animationId;
  const clock = new THREE.Clock();

  function animate() {
    animationId = requestAnimationFrame(animate);
    const elapsed = clock.getElapsedTime();

    // Rotate main wireframe
    wireframe.rotation.y += 0.001;
    wireframe.rotation.x += 0.0005;
    innerSphere.rotation.y -= 0.0015;
    innerSphere.rotation.x -= 0.0008;

    // Rotate rings
    ring.rotation.z += 0.002;
    ring2.rotation.z -= 0.0015;

    // Mouse influence
    targetRotationY = mouseX * 0.3;
    targetRotationX = mouseY * 0.3;
    wireframe.rotation.y += (targetRotationY - wireframe.rotation.y * 0.1) * 0.02;
    wireframe.rotation.x += (targetRotationX - wireframe.rotation.x * 0.1) * 0.02;

    // Update particles
    const posArray = particleGeo.attributes.position.array;
    let lineIdx = 0;

    for (let i = 0; i < particleCount; i++) {
      const idx = i * 3;
      posArray[idx] += velocities[i].x;
      posArray[idx + 1] += velocities[i].y;
      posArray[idx + 2] += velocities[i].z;

      // Boundary wrap
      const dist = Math.sqrt(posArray[idx]**2 + posArray[idx+1]**2 + posArray[idx+2]**2);
      if (dist > 6) {
        posArray[idx] *= 0.95;
        posArray[idx+1] *= 0.95;
        posArray[idx+2] *= 0.95;
      }

      // Draw connections
      let connections = 0;
      for (let j = i + 1; j < particleCount && connections < 3; j++) {
        const jdx = j * 3;
        const dx = posArray[idx] - posArray[jdx];
        const dy = posArray[idx+1] - posArray[jdx+1];
        const dz = posArray[idx+2] - posArray[jdx+2];
        const d = Math.sqrt(dx*dx + dy*dy + dz*dz);

        if (d < 1.2 && lineIdx < particleCount * 6 - 6) {
          linePositions[lineIdx++] = posArray[idx];
          linePositions[lineIdx++] = posArray[idx+1];
          linePositions[lineIdx++] = posArray[idx+2];
          linePositions[lineIdx++] = posArray[jdx];
          linePositions[lineIdx++] = posArray[jdx+1];
          linePositions[lineIdx++] = posArray[jdx+2];
          connections++;
        }
      }
    }

    // Clear remaining line positions
    for (let i = lineIdx; i < linePositions.length; i++) {
      linePositions[i] = 0;
    }

    particleGeo.attributes.position.needsUpdate = true;
    lineGeometry.attributes.position.needsUpdate = true;

    // Gentle particle rotation
    particles.rotation.y = elapsed * 0.05;

    renderer.render(scene, camera);
  }
  animate();

  // ── Resize Handler ──
  window.addEventListener('resize', () => {
    if (!container.offsetWidth || !container.offsetHeight) return;
    camera.aspect = container.offsetWidth / container.offsetHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(container.offsetWidth, container.offsetHeight);
  });

  // ── Visibility check ──
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        if (!animationId) animate();
      } else {
        if (animationId) {
          cancelAnimationFrame(animationId);
          animationId = null;
        }
      }
    });
  }, { threshold: 0.1 });
  observer.observe(heroSection);

})();
