import * as THREE from 'three';

/**
 * Interactive Three.js 3D Background for "Sobre Mí" (Developer & Fullstack Theme)
 * 3D Code Matrix / AST Network Constellation with floating programmer symbols:
 * </>, {}, =>, 01, fn(), async, [], git, ;
 */
export function initAboutThree() {
  const canvas = document.getElementById('about-three-canvas');
  if (!canvas) return;

  const container = canvas.parentElement;
  if (!container) return;

  // 1. Scene & Camera
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(
    50,
    container.clientWidth / container.clientHeight,
    0.1,
    1000
  );
  camera.position.set(0, 0, 70);

  // 2. WebGL Renderer
  const renderer = new THREE.WebGLRenderer({
    canvas,
    alpha: true,
    antialias: true,
    powerPreference: 'high-performance'
  });
  renderer.setSize(container.clientWidth, container.clientHeight);
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));

  const isDarkInitial = document.documentElement.classList.contains('dark');

  // Helper: create sprite texture for code symbols
  function createCodeTokenTexture(text, color = '#00f2fe', bgAccent = false) {
    const pCanvas = document.createElement('canvas');
    pCanvas.width = 128;
    pCanvas.height = 128;
    const ctx = pCanvas.getContext('2d');

    if (bgAccent) {
      ctx.fillStyle = 'rgba(22, 59, 230, 0.15)';
      ctx.beginPath();
      ctx.roundRect(10, 20, 108, 88, 16);
      ctx.fill();
      ctx.strokeStyle = color;
      ctx.lineWidth = 2;
      ctx.stroke();
    }

    ctx.font = 'bold 36px "JetBrains Mono", "Fira Code", monospace';
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillStyle = color;
    ctx.fillText(text, 64, 64);

    return new THREE.CanvasTexture(pCanvas);
  }

  // Programmer symbols palette
  const codeTokens = [
    { text: '</>', color: '#00f2fe' },
    { text: '{...}', color: '#163be6' },
    { text: '=>', color: '#eb3a24' },
    { text: '0101', color: '#10b981' },
    { text: 'fn()', color: '#00f2fe' },
    { text: 'async', color: '#8b5cf6' },
    { text: '[ ]', color: '#f59e0b' },
    { text: 'git', color: '#eb3a24' },
    { text: 'npm', color: '#ef4444' },
    { text: ';', color: '#163be6' },
    { text: '&&', color: '#00f2fe' },
    { text: 'API', color: '#10b981' },
    { text: '<dev>', color: '#38bdf8' },
    { text: 'return', color: '#f43f5e' }
  ];

  // 3. Floating 3D Code Symbol Sprites
  const codeSpritesGroup = new THREE.Group();
  const spritesData = [];
  const totalTokens = 28;

  for (let i = 0; i < totalTokens; i++) {
    const token = codeTokens[i % codeTokens.length];
    const texture = createCodeTokenTexture(token.text, token.color, i % 3 === 0);
    const spriteMat = new THREE.SpriteMaterial({
      map: texture,
      transparent: true,
      opacity: isDarkInitial ? 0.65 : 0.35,
      blending: isDarkInitial ? THREE.AdditiveBlending : THREE.NormalBlending,
      depthWrite: false
    });

    const sprite = new THREE.Sprite(spriteMat);
    const posX = (Math.random() - 0.5) * 130;
    const posY = (Math.random() - 0.5) * 75;
    const posZ = (Math.random() - 0.5) * 45;
    sprite.position.set(posX, posY, posZ);

    const scale = Math.random() * 3.5 + 4.5;
    sprite.scale.set(scale, scale, 1);

    codeSpritesGroup.add(sprite);

    spritesData.push({
      sprite,
      initialX: posX,
      initialY: posY,
      initialZ: posZ,
      speedY: Math.random() * 0.012 + 0.006,
      speedRotate: (Math.random() - 0.5) * 0.02,
      phase: Math.random() * Math.PI * 2
    });
  }
  scene.add(codeSpritesGroup);

  // 4. Plexus / AST Graph Network (Interconnected Developer Nodes)
  const nodeCount = 55;
  const nodePositions = new Float32Array(nodeCount * 3);
  const nodeVelocities = [];

  for (let i = 0; i < nodeCount; i++) {
    const i3 = i * 3;
    nodePositions[i3] = (Math.random() - 0.5) * 140;
    nodePositions[i3 + 1] = (Math.random() - 0.5) * 80;
    nodePositions[i3 + 2] = (Math.random() - 0.5) * 40;

    nodeVelocities.push({
      x: (Math.random() - 0.5) * 0.04,
      y: (Math.random() - 0.5) * 0.04,
      z: (Math.random() - 0.5) * 0.02
    });
  }

  const nodesGeometry = new THREE.BufferGeometry();
  nodesGeometry.setAttribute('position', new THREE.BufferAttribute(nodePositions, 3));

  // Node Dots Texture
  const dotCanvas = document.createElement('canvas');
  dotCanvas.width = 32;
  dotCanvas.height = 32;
  const dotCtx = dotCanvas.getContext('2d');
  const dotGrad = dotCtx.createRadialGradient(16, 16, 0, 16, 16, 16);
  dotGrad.addColorStop(0, 'rgba(0, 242, 254, 1)');
  dotGrad.addColorStop(0.5, 'rgba(22, 59, 230, 0.7)');
  dotGrad.addColorStop(1, 'rgba(0,0,0,0)');
  dotCtx.fillStyle = dotGrad;
  dotCtx.fillRect(0, 0, 32, 32);
  const dotTexture = new THREE.CanvasTexture(dotCanvas);

  const nodesMaterial = new THREE.PointsMaterial({
    size: 2.4,
    map: dotTexture,
    transparent: true,
    opacity: isDarkInitial ? 0.7 : 0.4,
    blending: isDarkInitial ? THREE.AdditiveBlending : THREE.NormalBlending,
    depthWrite: false
  });

  const nodesPoints = new THREE.Points(nodesGeometry, nodesMaterial);
  scene.add(nodesPoints);

  // Dynamic connecting lines for Plexus
  const maxLineConnections = 120;
  const linePositions = new Float32Array(maxLineConnections * 6);
  const lineColors = new Float32Array(maxLineConnections * 6);

  const linesGeometry = new THREE.BufferGeometry();
  linesGeometry.setAttribute('position', new THREE.BufferAttribute(linePositions, 3).setUsage(THREE.DynamicDrawUsage));
  linesGeometry.setAttribute('color', new THREE.BufferAttribute(lineColors, 3).setUsage(THREE.DynamicDrawUsage));

  const linesMaterial = new THREE.LineBasicMaterial({
    vertexColors: true,
    transparent: true,
    opacity: isDarkInitial ? 0.35 : 0.18,
    blending: isDarkInitial ? THREE.AdditiveBlending : THREE.NormalBlending,
    depthWrite: false
  });

  const linesMesh = new THREE.LineSegments(linesGeometry, linesMaterial);
  scene.add(linesMesh);

  // 5. 3D Wireframe Floating Binary Matrix Cube (Memory Stack)
  const cubeGeom = new THREE.BoxGeometry(14, 14, 14);
  const cubeWire = new THREE.WireframeGeometry(cubeGeom);
  const cubeMat = new THREE.LineBasicMaterial({
    color: isDarkInitial ? 0x163be6 : 0x163be6,
    transparent: true,
    opacity: isDarkInitial ? 0.28 : 0.12
  });
  const matrixCube = new THREE.LineSegments(cubeWire, cubeMat);
  matrixCube.position.set(-45, -12, -10);
  scene.add(matrixCube);

  // Secondary Wireframe Octahedron (Algorithm Node)
  const octGeom = new THREE.OctahedronGeometry(9, 1);
  const octWire = new THREE.WireframeGeometry(octGeom);
  const octMat = new THREE.LineBasicMaterial({
    color: isDarkInitial ? 0x00f2fe : 0xeb3a24,
    transparent: true,
    opacity: isDarkInitial ? 0.25 : 0.12
  });
  const algoOct = new THREE.LineSegments(octWire, octMat);
  algoOct.position.set(48, 16, -15);
  scene.add(algoOct);

  // 6. Interactive Mouse Parallax
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
      targetX = x * 12;
      targetY = y * 8;
    }
  }
  window.addEventListener('mousemove', onMouseMove, { passive: true });

  // 7. Dark/Light Theme Switcher
  function updateTheme() {
    const isDark = document.documentElement.classList.contains('dark');
    spritesData.forEach((d) => {
      d.sprite.material.opacity = isDark ? 0.65 : 0.35;
      d.sprite.material.blending = isDark ? THREE.AdditiveBlending : THREE.NormalBlending;
      d.sprite.material.needsUpdate = true;
    });
    nodesMaterial.opacity = isDark ? 0.7 : 0.4;
    nodesMaterial.blending = isDark ? THREE.AdditiveBlending : THREE.NormalBlending;
    nodesMaterial.needsUpdate = true;

    linesMaterial.opacity = isDark ? 0.35 : 0.18;
    linesMaterial.blending = isDark ? THREE.AdditiveBlending : THREE.NormalBlending;
    linesMaterial.needsUpdate = true;

    cubeMat.opacity = isDark ? 0.28 : 0.12;
    cubeMat.needsUpdate = true;

    algoOct.material.opacity = isDark ? 0.25 : 0.12;
    algoOct.material.needsUpdate = true;
  }

  const observerTheme = new MutationObserver(updateTheme);
  observerTheme.observe(document.documentElement, {
    attributes: true,
    attributeFilter: ['class']
  });

  // 8. Resize Handler
  function onResize() {
    if (!container) return;
    const w = container.clientWidth;
    const h = container.clientHeight;
    camera.aspect = w / h;
    camera.updateProjectionMatrix();
    renderer.setSize(w, h);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  }
  window.addEventListener('resize', onResize, { passive: true });

  // 9. Visibility Observer (Pause when offscreen)
  let isVisible = true;
  const visibilityObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        isVisible = entry.isIntersecting;
      });
    },
    { threshold: 0.05 }
  );
  visibilityObserver.observe(container);

  // 10. Animation Loop
  const clock = new THREE.Clock();
  const maxDistance = 22;

  function animate() {
    requestAnimationFrame(animate);
    if (!isVisible) return;

    const delta = clock.getDelta();
    const elapsed = clock.getElapsedTime();

    // Mouse camera lag
    mouseX += (targetX - mouseX) * 0.04;
    mouseY += (targetY - mouseY) * 0.04;
    camera.position.x = mouseX;
    camera.position.y = mouseY;
    camera.lookAt(0, 0, 0);

    // Animate code symbol sprites
    spritesData.forEach((d) => {
      d.sprite.position.y += Math.sin(elapsed * 0.8 + d.phase) * 0.03;
      d.sprite.position.x += Math.cos(elapsed * 0.5 + d.phase) * 0.02;
    });

    // Update nodes & plexus connections
    const pos = nodesGeometry.attributes.position.array;
    let lineIdx = 0;
    let colorIdx = 0;
    let lineCount = 0;

    for (let i = 0; i < nodeCount; i++) {
      const i3 = i * 3;

      pos[i3] += nodeVelocities[i].x;
      pos[i3 + 1] += nodeVelocities[i].y;
      pos[i3 + 2] += nodeVelocities[i].z;

      // Bounce at boundaries
      if (Math.abs(pos[i3]) > 70) nodeVelocities[i].x *= -1;
      if (Math.abs(pos[i3 + 1]) > 40) nodeVelocities[i].y *= -1;
      if (Math.abs(pos[i3 + 2]) > 25) nodeVelocities[i].z *= -1;

      // Check distance with other nodes for lines
      for (let j = i + 1; j < nodeCount; j++) {
        if (lineCount >= maxLineConnections) break;

        const j3 = j * 3;
        const dx = pos[i3] - pos[j3];
        const dy = pos[i3 + 1] - pos[j3 + 1];
        const dz = pos[i3 + 2] - pos[j3 + 2];
        const dist = Math.sqrt(dx * dx + dy * dy + dz * dz);

        if (dist < maxDistance) {
          const alpha = 1.0 - dist / maxDistance;

          linePositions[lineIdx++] = pos[i3];
          linePositions[lineIdx++] = pos[i3 + 1];
          linePositions[lineIdx++] = pos[i3 + 2];

          linePositions[lineIdx++] = pos[j3];
          linePositions[lineIdx++] = pos[j3 + 1];
          linePositions[lineIdx++] = pos[j3 + 2];

          // Gradient color (Cyan to Blue)
          lineColors[colorIdx++] = 0.0;
          lineColors[colorIdx++] = 0.95 * alpha;
          lineColors[colorIdx++] = 0.99 * alpha;

          lineColors[colorIdx++] = 0.08 * alpha;
          lineColors[colorIdx++] = 0.23 * alpha;
          lineColors[colorIdx++] = 0.90 * alpha;

          lineCount++;
        }
      }
    }

    nodesGeometry.attributes.position.needsUpdate = true;

    linesGeometry.setDrawRange(0, lineCount * 2);
    linesGeometry.attributes.position.needsUpdate = true;
    linesGeometry.attributes.color.needsUpdate = true;

    // Geometric rotation
    matrixCube.rotation.x += 0.003;
    matrixCube.rotation.y += 0.004;

    algoOct.rotation.x -= 0.004;
    algoOct.rotation.z += 0.005;

    renderer.render(scene, camera);
  }

  animate();
}

export default {
  init: initAboutThree
};
