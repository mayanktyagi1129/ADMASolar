const NAV_LINKS: Array<{ href: string; label: string; keys: string[] }> = [
  { href: "index.html", label: "Home", keys: ["home", "index"] },
  { href: "about.html", label: "About Us", keys: ["about"] },
  { href: "services.html", label: "Services & Solutions", keys: ["services"] },
  { href: "calculator.html", label: "Solar Calculator", keys: ["calculator"] },
  { href: "contact.html", label: "Contact Us", keys: ["contact"] },
];

const GUIDE_LINKS: Array<{ href: string; label: string; key: string }> = [
  { href: "grid-solar.html", label: "Grid (On-Grid) Solar", key: "grid-solar" },
  { href: "off-grid-solar.html", label: "Off Grid Solar", key: "off-grid-solar" },
  { href: "hybrid-solar.html", label: "Hybrid Solar", key: "hybrid-solar" },
  { href: "faq.html", label: "Solar FAQs (57 Questions)", key: "faq" },
  { href: "adma-solar-energy-solutions.html", label: "ADMA Solar Energy Solutions", key: "adma-solar-energy-solutions" },
];

function isActive(page: string, keys: string[]): boolean {
  return keys.includes(page);
}

export function renderLayout(page: string): void {
  const header = document.getElementById("site-header");
  const footer = document.getElementById("site-footer");
  if (header) header.innerHTML = navbarHtml(page);
  if (footer) footer.innerHTML = footerHtml();
  highlightNav(page);
}

function navClass(page: string, keys: string[]): string {
  return isActive(page, keys) ? "nav-link active" : "nav-link";
}

function navbarHtml(page: string): string {
  const knowledgeActive = ["knowledge-base", "grid-solar", "hybrid-solar", "off-grid-solar", "faq", "adma-solar-energy-solutions"].includes(page);
  const primary = NAV_LINKS.slice(0, 3)
    .map((item) => `<li class="nav-item"><a class="${navClass(page, item.keys)}" href="${item.href}">${item.label}</a></li>`)
    .join("");
  const rest = NAV_LINKS.slice(3)
    .map((item) => `<li class="nav-item"><a class="${navClass(page, item.keys)}" href="${item.href}">${item.label}</a></li>`)
    .join("");
  const knowledge = `<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle${knowledgeActive ? " active" : ""}" href="knowledge-base.html" id="navbarKnowledgeDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Knowledge Base</a>
        <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarKnowledgeDropdown">
          ${GUIDE_LINKS.map((g) => `<li><a class="dropdown-item${page === g.key ? " active" : ""}" href="${g.href}">${g.label}</a></li>`).join("")}
        </ul>
      </li>`;
  const links = primary + knowledge + rest;

  return `<header class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom" id="mainNavbar" aria-label="Main navigation">
    <div class="container">
      <a class="navbar-brand navbar-brand-logo py-1" href="index.html" aria-label="ADMA Solar Home">
        <div class="logo-box">
          <img src="assets/icons/adma.webp" alt="ADMA Solar Logo" class="header-logo-img">
        </div>
      </a>
      <button class="navbar-toggler border-0 shadow-none p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
      </button>
      <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">${links}</ul>
        <div class="d-flex align-items-center gap-3">
          <button type="button" class="theme-toggle-btn shadow-sm" aria-label="Toggle Dark/Light Mode" title="Toggle Theme"></button>
        </div>
      </div>
    </div>
  </nav>
</header>
<div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header border-bottom border-secondary py-3 px-4">
    <div class="d-flex align-items-center gap-2">
      <div class="logo-box bg-white p-1 rounded-3">
        <img src="assets/icons/adma.webp" alt="ADMA Solar Logo" style="height: 32px; width: auto;">
      </div>
      <h5 class="offcanvas-title text-white fw-bold m-0" id="offcanvasNavbarLabel">ADMA Solar</h5>
    </div>
    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column justify-content-between p-4 overflow-y-auto">
    <ul class="navbar-nav gap-1">
      <li class="nav-item"><a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 text-white" href="index.html">Home</a></li>
      <li class="nav-item"><a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 text-white" href="about.html">About Us</a></li>
      <li class="nav-item"><a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 text-white" href="services.html">Services &amp; Solutions</a></li>
      <li class="nav-item"><a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 text-white" href="knowledge-base.html">Knowledge Base</a></li>
      <li class="nav-item"><a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 text-white" href="faq.html">Solar FAQs (57)</a></li>
      <li class="nav-item"><a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 text-white" href="calculator.html">Solar Calculator</a></li>
      <li class="nav-item"><a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 text-white" href="contact.html">Contact Us</a></li>
    </ul>
    <div class="pt-4 mt-3 border-top border-secondary">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <span class="text-white fw-semibold small">Dark Mode</span>
        <button type="button" class="theme-toggle-btn shadow-sm" aria-label="Toggle Dark/Light Mode"></button>
      </div>
      <a href="tel:+917303397790" class="btn btn-outline-light w-100 mb-2 py-2 fw-semibold rounded-3">Call +91 7303397790</a>
      <a href="calculator.html" class="btn btn-warning w-100 py-2 fw-bold text-dark rounded-3 shadow">Calculate Savings</a>
    </div>
  </div>
</div>`;
}

function footerHtml(): string {
  const year = new Date().getFullYear();
  return `<footer class="footer pt-5 pb-4 bg-dark text-white border-top border-secondary">
    <div class="container">
      <div class="row g-4 mb-4">
        <div class="col-lg-4">
          <div class="d-flex align-items-center gap-2 mb-3">
            <div class="logo-box">
              <img src="assets/icons/adma.webp" alt="ADMA Solar Logo" class="header-logo-img">
            </div>
            <span class="fs-4 fw-bold text-white">ADMA Solar</span>
          </div>
          <p class="text-light opacity-75 small mb-3">India's trusted partner for high-efficiency solar rooftop solutions.</p>
        </div>
        <div class="col-6 col-lg-2">
          <h4 class="h6 text-white fw-bold mb-3 text-uppercase">Quick Links</h4>
          <ul class="list-unstyled small mb-0">
            <li><a href="index.html" class="footer-link">Home</a></li>
            <li><a href="about.html" class="footer-link">About ADMA Solar</a></li>
            <li><a href="services.html" class="footer-link">Solutions &amp; Services</a></li>
            <li><a href="faq.html" class="footer-link">Solar FAQs</a></li>
            <li><a href="calculator.html" class="footer-link">Solar Calculator</a></li>
            <li><a href="contact.html" class="footer-link">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-3">
          <h4 class="h6 text-white fw-bold mb-3 text-uppercase">Solar Guides</h4>
          <ul class="list-unstyled small mb-0">
            <li><a href="grid-solar.html" class="footer-link">On-Grid Solar System</a></li>
            <li><a href="hybrid-solar.html" class="footer-link">Hybrid Solar System</a></li>
            <li><a href="off-grid-solar.html" class="footer-link">Off-Grid Solar System</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
          <h4 class="h6 text-white fw-bold mb-3 text-uppercase">Contact Us</h4>
          <ul class="list-unstyled small mb-0">
            <li class="mb-2">Plot 14, Industrial Area, Ghaziabad, Uttar Pradesh 201001</li>
            <li class="mb-2">+91 7303397790</li>
            <li>support@admasolar.com</li>
          </ul>
        </div>
      </div>
      <div class="pt-4 border-top border-secondary text-center small text-light opacity-60">
        <p class="mb-0">&copy; ${year} ADMA. All Rights Reserved. TypeScript conversion of the Hostinger live site.</p>
      </div>
    </div>
  </footer>
  <a href="https://wa.me/917303397790?text=Hi%20ADMA%20Solar,%20I%20want%20to%20know%20about%20rooftop%20solar%20subsidy" class="whatsapp-float-btn" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
  </a>
  <button type="button" class="back-to-top-btn" id="backToTopBtn" aria-label="Back to top">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>
  </button>`;
}

function highlightNav(page: string): void {
  document.querySelectorAll("#navbarNav .nav-link, #navbarNav .dropdown-item").forEach((link) => {
    const href = link.getAttribute("href");
    const file = page === "home" ? "index.html" : `${page}.html`;
    if (href === file) {
      link.classList.add("active");
      link.setAttribute("aria-current", "page");
    }
  });
}
