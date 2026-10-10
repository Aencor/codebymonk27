import { useEffect, useLayoutEffect, useRef, useState } from "react";
import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

gsap.registerPlugin(ScrollTrigger);

const projects = [
  {
    number: "01",
    title: "Banca sin fricción",
    type: "Producto digital · Fintech",
    description:
      "Una experiencia financiera más clara, rápida y humana para gestionar el dinero del día a día.",
    tags: ["UX/UI", "DESARROLLO", "SISTEMA DE DISEÑO"],
    color: "red",
    year: "2024",
    challenge:
      "Simplificar una operación financiera compleja sin perder profundidad ni confianza.",
    result:
      "Un producto modular, accesible y preparado para crecer con una experiencia mucho más directa.",
    visual: (
      <div className="bank-visual" aria-hidden="true">
        <div className="bank-card bank-card--back">
          <span>Balance</span>
          <strong>$24,820</strong>
        </div>
        <div className="bank-card bank-card--front">
          <span className="card-mark">CBM</span>
          <div className="card-chip" />
          <p>•••• 8042</p>
        </div>
      </div>
    ),
  },
  {
    number: "02",
    title: "Música que conecta",
    type: "Experiencia web · Cultura",
    description:
      "Plataforma editorial para descubrir artistas, historias y sonidos fuera del algoritmo.",
    tags: ["DIRECCIÓN DE ARTE", "FRONTEND", "MOTION"],
    color: "blue",
    year: "2023",
    challenge:
      "Crear una alternativa editorial a las plataformas musicales dominadas por recomendaciones automáticas.",
    result:
      "Una identidad digital flexible que convierte cada artista y lanzamiento en una historia propia.",
    visual: (
      <div className="music-visual" aria-hidden="true">
        <div className="vinyl">
          <span />
        </div>
        <div className="music-copy">
          <b>NOISE</b>
          <b>IS A</b>
          <b>LANGUAGE</b>
        </div>
      </div>
    ),
  },
  {
    number: "03",
    title: "La ciudad a tu ritmo",
    type: "App móvil · Movilidad",
    description:
      "Una nueva forma de moverse por la ciudad, combinando rutas, tiempo real y accesibilidad.",
    tags: ["PRODUCT DESIGN", "RESEARCH", "PROTOTIPO"],
    color: "black",
    year: "2023",
    challenge:
      "Reunir rutas, incidencias y accesibilidad en una interfaz útil incluso cuando el usuario tiene prisa.",
    result:
      "Un sistema de navegación probado con usuarios que reduce pasos y hace visible la información esencial.",
    visual: (
      <div className="city-visual" aria-hidden="true">
        <div className="route-line route-line--one" />
        <div className="route-line route-line--two" />
        <div className="city-pin">A</div>
        <div className="city-time">12<span>MIN</span></div>
      </div>
    ),
  },
];

const services = [
  {
    number: "01",
    title: "Estrategia & UX",
    description:
      "Convierto problemas complejos en decisiones claras. Research, arquitectura y prototipos que reducen el riesgo.",
    list: ["Auditoría UX", "User flows", "Prototipado", "Product discovery"],
  },
  {
    number: "02",
    title: "Diseño digital",
    description:
      "Interfaces con carácter, consistencia y propósito. Desde una landing hasta un producto completo.",
    list: ["UI Design", "Design systems", "Dirección de arte", "Motion"],
  },
  {
    number: "03",
    title: "Desarrollo web",
    description:
      "Llevo el diseño a producción cuidando cada interacción, cada breakpoint y cada milisegundo.",
    list: ["React / Next.js", "Frontend", "Webflow", "Optimización"],
  },
];

const posts = [
  {
    date: "12.06.24",
    category: "PROCESO",
    title: "Diseñar menos, decidir mejor",
    excerpt:
      "Por qué las mejores interfaces suelen aparecer cuando dejamos de decorar y empezamos a priorizar.",
  },
  {
    date: "28.05.24",
    category: "DESARROLLO",
    title: "El frontend también es diseño",
    excerpt:
      "Los detalles que se pierden entre Figma y producción, y cómo construir una mejor colaboración.",
  },
  {
    date: "03.05.24",
    category: "OFICIO",
    title: "Trabajar con criterio propio",
    excerpt:
      "Una nota sobre referencias, tendencias y la difícil tarea de hacer algo que se sienta auténtico.",
  },
];

function Arrow() {
  return <span aria-hidden="true">↗</span>;
}

function MonkLogo() {
  return (
    <svg viewBox="0 0 42 42" role="img" aria-label="Code by Monk">
      <path d="M7 31V11l14 12 14-12v20" />
      <path d="M7 31h28M21 23v8" />
    </svg>
  );
}

function WhatsAppIcon() {
  return (
    <svg viewBox="0 0 32 32" aria-hidden="true">
      <path d="M16 3.2A12.6 12.6 0 0 0 5.3 22.5L3.7 28.3l6-1.6A12.6 12.6 0 1 0 16 3.2Z" />
      <path d="M12 9.6c-.3-.7-.7-.7-1-.7h-.8c-.3 0-.7.1-1 .5-.4.4-1.3 1.3-1.3 3.2s1.4 3.7 1.6 4c.2.3 2.7 4.3 6.7 5.8 3.3 1.3 4 1 4.7.9.7-.1 2.3-1 2.6-1.9.3-.9.3-1.7.2-1.9-.1-.2-.4-.3-.8-.5l-2.8-1.3c-.4-.2-.7-.3-1 .3l-1.3 1.6c-.2.3-.5.3-.9.1-1.1-.5-2.1-1.1-3-2-.8-.7-1.4-1.6-1.9-2.6-.2-.4 0-.6.2-.8l.7-.8.4-.7c.1-.3.1-.5 0-.7L12 9.6Z" />
    </svg>
  );
}

export default function App() {
  const mainRef = useRef<HTMLElement>(null);
  const [isDark, setIsDark] = useState(
    () => localStorage.getItem("cbm-theme") === "dark",
  );
  const [selectedProject, setSelectedProject] = useState<
    (typeof projects)[number] | null
  >(null);

  useLayoutEffect(() => {
    if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

    const context = gsap.context(() => {
      gsap.from(".hero-animate", {
        y: 45,
        opacity: 0,
        duration: 0.9,
        stagger: 0.12,
        ease: "power3.out",
      });

      gsap.utils.toArray<HTMLElement>(".gsap-reveal").forEach((element) => {
        gsap.from(element, {
          y: 55,
          opacity: 0,
          duration: 0.9,
          ease: "power3.out",
          scrollTrigger: {
            trigger: element,
            start: "top 84%",
            once: true,
          },
        });
      });

      gsap.utils.toArray<HTMLElement>(".project").forEach((project) => {
        gsap.from(project.querySelector(".project-visual"), {
          clipPath: "inset(0 100% 0 0)",
          duration: 1.1,
          ease: "power4.inOut",
          scrollTrigger: { trigger: project, start: "top 78%", once: true },
        });
        gsap.from(project.querySelector(".project-copy"), {
          x: 35,
          opacity: 0,
          duration: 0.8,
          delay: 0.2,
          ease: "power3.out",
          scrollTrigger: { trigger: project, start: "top 78%", once: true },
        });
      });
    }, mainRef);

    return () => context.revert();
  }, []);

  useEffect(() => {
    document.documentElement.dataset.theme = isDark ? "dark" : "light";
    localStorage.setItem("cbm-theme", isDark ? "dark" : "light");
  }, [isDark]);

  useEffect(() => {
    if (!selectedProject) return;

    document.body.classList.add("modal-open");
    const closeOnEscape = (event: KeyboardEvent) => {
      if (event.key === "Escape") setSelectedProject(null);
    };
    window.addEventListener("keydown", closeOnEscape);
    gsap.fromTo(
      ".project-modal__panel",
      { y: 60, opacity: 0 },
      { y: 0, opacity: 1, duration: 0.55, ease: "power3.out" },
    );

    return () => {
      document.body.classList.remove("modal-open");
      window.removeEventListener("keydown", closeOnEscape);
    };
  }, [selectedProject]);

  return (
    <main ref={mainRef}>
      <header className="site-header">
        <a className="brand" href="#inicio" aria-label="Code by Monk, inicio">
          <span className="brand-mark"><MonkLogo /></span>
          <span>CODE BY MONK</span>
        </a>
        <nav aria-label="Navegación principal">
          <a href="#trabajo">Trabajo</a>
          <a href="#servicios">Servicios</a>
          <a href="#sobre-mi">Sobre mí</a>
          <a href="#blog">Blog</a>
        </nav>
        <div className="header-actions">
          <button
            className="theme-toggle"
            type="button"
            onClick={() => setIsDark((value) => !value)}
            aria-label={isDark ? "Activar tema claro" : "Activar tema oscuro"}
            title={isDark ? "Tema claro" : "Tema oscuro"}
          >
            <span>{isDark ? "☼" : "◐"}</span>
          </button>
          <a className="header-cta" href="mailto:hola@codebymonk.com">
            Hablemos <Arrow />
          </a>
        </div>
      </header>

      <section className="hero" id="inicio">
        <div className="hero-kicker hero-animate">
          <span>Diseño & desarrollo independiente</span>
          <span>Madrid / Remoto</span>
        </div>
        <h1 className="hero-animate">
          Ideas con
          <br />
          <span className="word-build">forma</span>
          <span className="hero-stamp">EST. 2018</span>
          <br />
          <em>y función.</em>
        </h1>
        <div className="hero-bottom hero-animate">
          <p>
            Ayudo a empresas y personas a convertir ideas complejas en
            experiencias digitales <strong>claras, útiles y memorables.</strong>
          </p>
          <a className="circle-link" href="#trabajo" aria-label="Ver proyectos">
            <span>VER</span>
            <span>PROYECTOS</span>
            <b>↓</b>
          </a>
        </div>
      </section>

      <div className="ticker" aria-hidden="true">
        <div>
          <span>ESTRATEGIA</span><b>✦</b><span>DISEÑO</span><b>✦</b>
          <span>DESARROLLO</span><b>✦</b><span>PRODUCTO</span><b>✦</b>
          <span>ESTRATEGIA</span><b>✦</b><span>DISEÑO</span><b>✦</b>
        </div>
      </div>

      <section className="work section-pad" id="trabajo">
        <div className="section-heading gsap-reveal">
          <p>01 / TRABAJO SELECCIONADO</p>
          <h2>No hago relleno.<br /><em>Hago trabajo que funciona.</em></h2>
        </div>
        <div className="project-list">
          {projects.map((project) => (
            <article className="project" key={project.number}>
              <div className={`project-visual project-visual--${project.color}`}>
                <span className="project-number">{project.number}</span>
                {project.visual}
                <button
                  className="project-open"
                  type="button"
                  onClick={() => setSelectedProject(project)}
                  aria-label={`Ver proyecto ${project.title}`}
                >
                  <Arrow />
                </button>
              </div>
              <div className="project-copy">
                <p className="eyebrow">{project.type}</p>
                <h3>{project.title}</h3>
                <p className="project-description">{project.description}</p>
                <div className="tag-list">
                  {project.tags.map((tag) => <span key={tag}>{tag}</span>)}
                </div>
                <button
                  className="project-link"
                  type="button"
                  onClick={() => setSelectedProject(project)}
                >
                  VER PROYECTO <Arrow />
                </button>
              </div>
            </article>
          ))}
        </div>
        <a className="text-link" href="mailto:hola@codebymonk.com?subject=Quiero ver más proyectos">
          VER TODOS LOS PROYECTOS <Arrow />
        </a>
      </section>

      <section className="services section-pad" id="servicios">
        <div className="section-heading section-heading--light gsap-reveal">
          <p>02 / CÓMO PUEDO AYUDARTE</p>
          <h2>Del primer boceto<br />al último <em>detalle.</em></h2>
        </div>
        <div className="services-grid">
          {services.map((service) => (
            <article className="service gsap-reveal" key={service.number}>
              <span>{service.number}</span>
              <h3>{service.title}</h3>
              <p>{service.description}</p>
              <ul>
                {service.list.map((item) => <li key={item}>{item}</li>)}
              </ul>
            </article>
          ))}
        </div>
      </section>

      <section className="about section-pad" id="sobre-mi">
        <div className="about-intro gsap-reveal">
          <p className="section-label">03 / SOBRE MÍ</p>
          <div className="monk-portrait" aria-hidden="true">
            <span>CBM</span>
            <div className="portrait-eye portrait-eye--left" />
            <div className="portrait-eye portrait-eye--right" />
            <div className="portrait-smile" />
          </div>
        </div>
        <div className="about-copy gsap-reveal">
          <h2>Diseñador de producto.<br />Desarrollador frontend.<br /><em>Curioso profesional.</em></h2>
          <p>
            Soy Monk. Llevo más de 7 años creando productos digitales para
            startups, estudios y equipos que valoran tanto una buena idea como
            una ejecución impecable.
          </p>
          <p>
            Trabajo en la intersección entre diseño y código: ahí donde las
            decisiones dejan de ser promesas y se convierten en experiencias.
          </p>
          <a className="cv-link" href="mailto:hola@codebymonk.com?subject=Solicitud de CV">
            SOLICITAR CV <span>DISPONIBLE EN PDF</span> <Arrow />
          </a>
        </div>
        <div className="experience gsap-reveal">
          <p className="eyebrow">EXPERIENCIA</p>
          <div><span>2022—HOY</span><p><b>Freelance</b>Diseño & desarrollo</p></div>
          <div><span>2020—2022</span><p><b>North Studio</b>Senior Product Designer</p></div>
          <div><span>2018—2020</span><p><b>Common Digital</b>UI Designer & Frontend</p></div>
        </div>
      </section>

      <section className="blog section-pad" id="blog">
        <div className="blog-header">
          <div className="section-heading gsap-reveal">
            <p>04 / NOTAS & APRENDIZAJES</p>
            <h2>Desde el <em>taller.</em></h2>
          </div>
          <p>Ideas sobre diseño, código y el trabajo de hacer productos digitales.</p>
        </div>
        <div className="post-grid">
          {posts.map((post, index) => (
            <article className={`post post--${index + 1} gsap-reveal`} key={post.title}>
              <div className="post-meta"><span>{post.date}</span><span>{post.category}</span></div>
              <h3>{post.title}</h3>
              <p>{post.excerpt}</p>
              <a href={`mailto:hola@codebymonk.com?subject=${encodeURIComponent(post.title)}`} aria-label={`Leer ${post.title}`}>
                LEER NOTA <Arrow />
              </a>
            </article>
          ))}
        </div>
      </section>

      <footer>
        <div className="footer-main">
          <p>¿Tienes una idea?</p>
          <h2>Hagámosla<br /><em>real.</em></h2>
          <a href="mailto:hola@codebymonk.com">HOLA@CODEBYMONK.COM <Arrow /></a>
        </div>
        <div className="footer-bottom">
          <span>© 2025 CODE BY MONK</span>
          <div><a href="#">LINKEDIN</a><a href="#">DRIBBBLE</a><a href="#">GITHUB</a></div>
          <span>HECHO CON CABEZA + CAFÉ</span>
        </div>
      </footer>

      {selectedProject && (
        <div
          className="project-modal"
          role="presentation"
          onMouseDown={(event) => {
            if (event.currentTarget === event.target) setSelectedProject(null);
          }}
        >
          <article
            className="project-modal__panel"
            role="dialog"
            aria-modal="true"
            aria-labelledby="project-modal-title"
          >
            <div className={`project-modal__visual project-visual--${selectedProject.color}`}>
              <span className="project-number">
                {selectedProject.number} / {selectedProject.year}
              </span>
              {selectedProject.visual}
              <button
                className="modal-close"
                type="button"
                onClick={() => setSelectedProject(null)}
                aria-label="Cerrar proyecto"
                autoFocus
              >
                ×
              </button>
            </div>
            <div className="project-modal__content">
              <p className="eyebrow">{selectedProject.type}</p>
              <h2 id="project-modal-title">{selectedProject.title}</h2>
              <p className="project-modal__lead">{selectedProject.description}</p>
              <div className="project-modal__details">
                <div>
                  <span>EL RETO</span>
                  <p>{selectedProject.challenge}</p>
                </div>
                <div>
                  <span>EL RESULTADO</span>
                  <p>{selectedProject.result}</p>
                </div>
              </div>
              <div className="tag-list">
                {selectedProject.tags.map((tag) => <span key={tag}>{tag}</span>)}
              </div>
              <a
                className="modal-contact"
                href={`mailto:hola@codebymonk.com?subject=${encodeURIComponent(`Quiero saber más sobre ${selectedProject.title}`)}`}
              >
                ¿QUIERES ALGO ASÍ? HABLEMOS <Arrow />
              </a>
            </div>
          </article>
        </div>
      )}

      <a
        className="whatsapp-button"
        href="https://wa.me/5125619956812?text=Hola%20Monk%2C%20vi%20tu%20portafolio%20y%20me%20gustar%C3%ADa%20conversar%20sobre%20un%20proyecto."
        target="_blank"
        rel="noreferrer"
        aria-label="Escribir a Code by Monk por WhatsApp"
      >
        <span className="whatsapp-label">HABLEMOS</span>
        <WhatsAppIcon />
      </a>
    </main>
  );
}
