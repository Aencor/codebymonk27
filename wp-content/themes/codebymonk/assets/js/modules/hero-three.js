import * as THREE from 'three';

/**
 * Interactive Three.js 3D Background for Hero
 * Floating organic particle cloud & wireframe geometry with mouse interaction and dark-mode adaptation
 */
export function initHeroThree() {
  const canvas = document.getElementById('hero-three-canvas');
  if (!canvas) return;

  const container = canvas.parentElement;
  if (!container) return;

  // Scene & Camera
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(
    55,
    container.clientWidth / container.clientHeight,
    0.1,
    1000
  );
  camera.position.set(0, 0, 85);

  // WebGL Renderer
  const renderer = new THREE.WebGLRenderer({
    canvas,
    alpha: true,
    antialias: true,
    powerPreference: 'high-performance'
  });
  renderer.setSize(container.clientWidth, container.clientHeight);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

  // --- 1. Dynamic Particle Field ---
  const particlesCount = 380;
  const geometry = new THREE.BufferGeometry();
  const positions = new Float32Array(particlesCount * 3);
  const scales = new Float32Array(particlesCount);
  const colors = new Float32Array(particlesCount * 3);

  // Palette: Cobalt Blue (#163be6) and Coral Red (#eb3a24)
  const colorCobalt = new THREE.Color(0x163be6);
  const colorCoral = new THREE.Color(0xeb3a24);
  const colorCyan = new THREE.Color(0x00f2fe);
  const colorCharcoal = new THREE.Color(0x333333);

  for (let i = 0; i < particlesCount; i++) {
    const i3 = i * 3;
    // Spread in elliptical volume
    positions[i3] = (Math.random() - 0.5) * 160;
    positions[i3 + 1] = (Math.random() - 0.5) * 90;
    positions[i3 + 2] = (Math.random() - 0.5) * 60;
    scales[i] = Math.random() * 2.5 + 1.2;

    const mixedColor = Math.random() > 0.4 ? colorCobalt : (Math.random() > 0.5 ? colorCoral : colorCyan);
    colors[i3] = mixedColor.r;
    colors[i3 + 1] = mixedColor.g;
    colors[i3 + 2] = mixedColor.b;
  }

  geometry.setAttribute('position', new THREE.BufferAttribute(positions, 3));
  geometry.setAttribute('color', new THREE.BufferAttribute(colors, 3));

  // Create soft round particle texture
  const pCanvas = document.createElement('canvas');
  pCanvas.width = 64;
  pCanvas.height = 64;
  const pCtx = pCanvas.getContext('2d');
  const grad = pCtx.createRadialGradient(32, 32, 0, 32, 32, 32);
  grad.addColorStop(0, 'rgba(255,255,255,1)');
  grad.addColorStop(0.3, 'rgba(255,255,255,0.8)');
  grad.addColorStop(1, 'rgba(255,255,255,0)');
  pCtx.fillStyle = grad;
  pCtx.fillRect(0, 0, 64, 64);
  const pTexture = new THREE.CanvasTexture(pCanvas);

  const isDarkInitial = document.documentElement.classList.contains('dark');

  const particleMaterial = new THREE.PointsMaterial({
    size: 2.2,
    vertexColors: true,
    map: pTexture,
    transparent: true,
    opacity: isDarkInitial ? 0.75 : 0.45,
    blending: isDarkInitial ? THREE.AdditiveBlending : THREE.NormalBlending,
    depthWrite: false
  });

  const particleMesh = new THREE.Points(geometry, particleMaterial);
  scene.add(particleMesh);

  // --- 2. Floating Wireframe Torus Ring (Digital Artifact) ---
  const ringGeometry = new THREE.TorusGeometry(26, 4.5, 16, 60);
  const ringWireframe = new THREE.WireframeGeometry(ringGeometry);
  const ringMaterial = new THREE.LineBasicMaterial({
    color: isDarkInitial ? 0x163be6 : 0x222228,
    transparent: true,
    opacity: isDarkInitial ? 0.35 : 0.18,
    linewidth: 1
  });
  const ringLine = new THREE.LineSegments(ringWireframe, ringMaterial);
  ringLine.position.set(38, -5, -15);
  ringLine.rotation.x = Math.PI / 4;
  scene.add(ringLine);

  // --- 3. Secondary Wave Ribbons (Icosahedron Cage) ---
  const cageGeometry = new THREE.IcosahedronGeometry(18, 2);
  const cageWireframe = new THREE.WireframeGeometry(cageGeometry);
  const cageMaterial = new THREE.LineBasicMaterial({
    color: isDarkInitial ? 0xeb3a24 : 0xeb3a24,
    transparent: true,
    opacity: isDarkInitial ? 0.25 : 0.12,
    linewidth: 1
  });
  const cageLine = new THREE.LineSegments(cageWireframe, cageMaterial);
  cageLine.position.set(-42, 12, -20);
  scene.add(cageLine);

  // --- 4. Interactive Mouse Parallax with Damping ---
  let mouseX = 0;
  let mouseY = 0;
  let targetX = 0;
  let targetY = 0;

  function onMouseMove(event) {
    const rect = container.getBoundingClientRect();
    if (
      event.clientX >= rect.left &&
      event.clientX <= rect.right &&
      event.clientY >= rect.top &&
      event.clientY <= rect.bottom
    ) {
      const x = ((event.clientX - rect.left) / rect.width) * 2 - 1;
      const y = -(((event.clientY - rect.top) / rect.height) * 2 - 1);
      targetX = x * 15;
      targetY = y * 10;
    }
  }
  window.addEventListener('mousemove', onMouseMove, { passive: true });

  // --- 5. Dark Mode Dynamic Theme Synchronizer ---
  function updateThemeColors() {
    const isDark = document.documentElement.classList.contains('dark');
    if (isDark) {
      particleMaterial.opacity = 0.75;
      particleMaterial.blending = THREE.AdditiveBlending;
      ringMaterial.color.setHex(0x163be6);
      ringMaterial.opacity = 0.38;
      cageMaterial.color.setHex(0xeb3a24);
      cageMaterial.opacity = 0.28;
    } else {
      particleMaterial.opacity = 0.45;
      particleMaterial.blending = THREE.NormalBlending;
      ringMaterial.color.setHex(0x33333a);
      ringMaterial.opacity = 0.2;
      cageMaterial.color.setHex(0xeb3a24);
      cageMaterial.opacity = 0.15;
    }
    particleMaterial.needsUpdate = true;
    ringMaterial.needsUpdate = true;
    cageMaterial.needsUpdate = true;
  }

  const themeObserver = new MutationObserver(updateThemeColors);
  themeObserver.observe(document.documentElement, {
    attributes: true,
    attributeFilter: ['class']
  });

  // --- 6. Resize Handler ---
  function onWindowResize() {
    if (!container) return;
    const width = container.clientWidth;
    const height = container.clientHeight;
    camera.aspect = width / height;
    camera.updateProjectionMatrix();
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  }
  window.addEventListener('resize', onWindowResize, { passive: true });

  // --- 7. Animation Loop with Visibility Optimization ---
  let isVisible = true;
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        isVisible = entry.isIntersecting;
      });
    },
    { threshold: 0.05 }
  );
  observer.observe(container);

  let clock = new THREE.Clock();

  function animate() {
    requestAnimationFrame(animate);

    if (!isVisible) return;

    const elapsedTime = clock.getElapsedTime();

    // Damping mouse motion
    mouseX += (targetX - mouseX) * 0.04;
    mouseY += (targetY - mouseY) * 0.04;

    camera.position.x = mouseX;
    camera.position.y = mouseY;
    camera.lookAt(0, 0, 0);

    // Particle subtle fluid oscillation
    const pos = geometry.attributes.position.array;
    for (let i = 0; i < particlesCount; i++) {
      const i3 = i * 3;
      const x = pos[i3];
      pos[i3 + 1] += Math.sin(elapsedTime * 0.8 + x * 0.05) * 0.04;
    }
    geometry.attributes.position.needsUpdate = true;

    // Geometric rotation
    ringLine.rotation.x += 0.003;
    ringLine.rotation.y += 0.004;

    cageLine.rotation.x -= 0.004;
    cageLine.rotation.z += 0.003;

    renderer.render(scene, camera);
  }

  animate();
}

export default {
  init: initHeroThree
};
