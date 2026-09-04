<?php
// Determine current page for active menu highlighting
$current_page = $page_key ?? basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark navbar-custom" id="mainNavbar" aria-label="Main navigation">
    <div class="container">
      <a class="navbar-brand navbar-brand-logo py-1" href="index.php" aria-label="ADMA Solar Home">
        <div class="logo-box">
          <img src="assets/icons/adma.webp" alt="ADMA Solar Logo" class="header-logo-img">
        </div>
      </a>
      <button class="navbar-toggler border-0 shadow-none p-2" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2"
          stroke-linecap="round">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </button>
      <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'home' || $current_page === 'index') ? 'active' : '' ?>" <?= ($current_page === 'home' || $current_page === 'index') ? 'aria-current="page"' : '' ?> href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'about') ? 'active' : '' ?>" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'services') ? 'active' : '' ?>" href="services.php">Services & Solutions</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= in_array($current_page, ['knowledge-base', 'grid-solar', 'hybrid-solar', 'off-grid-solar', 'faq']) ? 'active' : '' ?>" href="knowledge-base.php" id="navbarKnowledgeDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Knowledge Base
            </a>
            <ul class="dropdown-menu dropdown-menu-custom" aria-labelledby="navbarKnowledgeDropdown">
              <li>
                <a class="dropdown-item <?= ($current_page === 'grid-solar') ? 'active' : '' ?>" href="grid-solar.php">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                  </svg>
                  Grid (On-Grid) Solar
                </a>
              </li>
              <li>
                <a class="dropdown-item <?= ($current_page === 'off-grid-solar') ? 'active' : '' ?>" href="off-grid-solar.php">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                  </svg>
                  Off Grid Solar
                </a>
              </li>
              <li>
                <a class="dropdown-item <?= ($current_page === 'hybrid-solar') ? 'active' : '' ?>" href="hybrid-solar.php">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                    <path d="M2 12h20"></path>
                  </svg>
                  Hybrid Solar
                </a>
              </li>
              <li>
                <a class="dropdown-item <?= ($current_page === 'faq') ? 'active' : '' ?>" href="faq.php">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                  </svg>
                  Solar FAQs (57 Questions)
                </a>
              </li>
              <li>
                <a class="dropdown-item <?= ($current_page === 'adma-solar-energy-solutions') ? 'active' : '' ?>" href="adma-solar-energy-solutions.php">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                  </svg>
                  ADMA Solar Energy Solutions
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'calculator') ? 'active' : '' ?>" href="calculator.php">Solar Calculator</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'contact') ? 'active' : '' ?>" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <div class="d-flex align-items-center gap-3">
          <button type="button" class="theme-toggle-btn shadow-sm" aria-label="Toggle Dark/Light Mode"
            title="Toggle Theme"></button>
        </div>
      </div>
    </div>
  </nav>
</header>

<!-- Mobile Offcanvas Menu Drawer -->
<div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="offcanvasNavbar"
  aria-labelledby="offcanvasNavbarLabel">
  <div class="offcanvas-header border-bottom border-secondary py-3 px-4">
    <div class="d-flex align-items-center gap-2">
      <div class="logo-box bg-white p-1 rounded-3">
        <img src="assets/icons/adma.webp" alt="ADMA Solar Logo" style="height: 32px; width: auto;">
      </div>
      <h5 class="offcanvas-title text-white fw-bold m-0" id="offcanvasNavbarLabel">
        ADMA Solar
      </h5>
    </div>
    <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas"
      aria-label="Close"></button>
  </div>
  <div class="offcanvas-body d-flex flex-column justify-content-between p-4 overflow-y-auto">
    <ul class="navbar-nav gap-1">
      <li class="nav-item">
        <a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 d-flex align-items-center gap-3 <?= ($current_page === 'home' || $current_page === 'index') ? 'active bg-warning text-dark' : 'text-white' ?>" href="index.php">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
            <polyline points="9 22 9 12 15 12 15 22"></polyline>
          </svg>
          Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 d-flex align-items-center gap-3 <?= ($current_page === 'about') ? 'active bg-warning text-dark' : 'text-white' ?>" href="about.php">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
          About Us
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 d-flex align-items-center gap-3 <?= ($current_page === 'services') ? 'active bg-warning text-dark' : 'text-white' ?>" href="services.php">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
          </svg>
          Services & Solutions
        </a>
      </li>

      <!-- Knowledge Base & Solar Guides Accordion/Submenu -->
      <li class="nav-item">
        <a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 d-flex align-items-center justify-content-between <?= in_array($current_page, ['knowledge-base', 'grid-solar', 'hybrid-solar', 'off-grid-solar']) ? 'active bg-warning text-dark' : 'text-white' ?>" href="knowledge-base.php">
          <span class="d-flex align-items-center gap-3">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
              <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
            </svg>
            Knowledge Base
          </span>
          <span class="badge bg-secondary text-white rounded-pill px-2">Guides</span>
        </a>
        <!-- Sub links for mobile navigation -->
        <div class="ps-4 mt-1 d-flex flex-column gap-1 border-start border-secondary ms-4">
          <a class="nav-link py-1 fs-7 <?= ($current_page === 'grid-solar') ? 'text-warning fw-bold' : 'text-light opacity-75' ?>" href="grid-solar.php">⚡ On-Grid Solar System</a>
          <a class="nav-link py-1 fs-7 <?= ($current_page === 'off-grid-solar') ? 'text-warning fw-bold' : 'text-light opacity-75' ?>" href="off-grid-solar.php">🔋 Off-Grid Solar System</a>
          <a class="nav-link py-1 fs-7 <?= ($current_page === 'hybrid-solar') ? 'text-warning fw-bold' : 'text-light opacity-75' ?>" href="hybrid-solar.php">🔄 Hybrid Solar System</a>
        </div>
      </li>

      <li class="nav-item mt-1">
        <a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 d-flex align-items-center gap-3 <?= ($current_page === 'faq') ? 'active bg-warning text-dark' : 'text-white' ?>" href="faq.php">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"></circle>
            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
            <line x1="12" y1="17" x2="12.01" y2="17"></line>
          </svg>
          Solar FAQs (57)
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 d-flex align-items-center gap-3 <?= ($current_page === 'calculator') ? 'active bg-warning text-dark' : 'text-white' ?>" href="calculator.php">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
            <line x1="8" y1="6" x2="16" y2="6"></line>
            <line x1="16" y1="14" x2="16" y2="18"></line>
            <path d="M16 10h.01"></path>
            <path d="M12 10h.01"></path>
            <path d="M8 10h.01"></path>
            <path d="M12 14h.01"></path>
            <path d="M8 14h.01"></path>
            <path d="M12 18h.01"></path>
            <path d="M8 18h.01"></path>
          </svg>
          Solar Calculator
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link fs-6 fw-semibold px-3 py-2 rounded-3 d-flex align-items-center gap-3 <?= ($current_page === 'contact') ? 'active bg-warning text-dark' : 'text-white' ?>" href="contact.php">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
          </svg>
          Contact Us
        </a>
      </li>
    </ul>

    <div class="pt-4 mt-3 border-top border-secondary">
      <div class="d-flex align-items-center justify-content-between mb-3">
        <span class="text-white fw-semibold small">Dark Mode</span>
        <button type="button" class="theme-toggle-btn shadow-sm" aria-label="Toggle Dark/Light Mode"></button>
      </div>
      <a href="tel:+917303397790"
        class="btn btn-outline-light w-100 mb-2 py-2 d-flex align-items-center justify-content-center gap-2 fw-semibold rounded-3">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <path
            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
          </path>
        </svg>
        Call +91 7303397790
      </a>
      <a href="calculator.php" class="btn btn-warning w-100 py-2 fw-bold text-dark rounded-3 shadow">Calculate Savings</a>
    </div>
  </div>
</div>
