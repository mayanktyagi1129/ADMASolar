<?php
$page_key = 'home';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
    <section class="hero-section position-relative" aria-label="Solar Energy Hero Banners">
      <div id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel"
        data-bs-pause="hover" data-bs-interval="6000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="hero-slide-bg"
              style="background-image: url('https://images.unsplash.com/photo-1508514177221-188b1cf16e9d?auto=format&fit=crop&w=1920&q=80');">
            </div>
            <div class="hero-overlay"></div>
            <div class="container position-relative hero-content">
              <div class="row align-items-center gy-5">
                <div class="col-lg-7">
                  <div class="badge-solar-glow hero-animate-up mb-3">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      stroke-width="2.5">
                      <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    <span>PM Surya Ghar Govt Subsidy Up to ₹78,000</span>
                  </div>
                  <h1 class="display-4 text-white fw-bold mb-4 hero-animate-up hero-delay-1">
                    Slash Electricity Bills to <span class="text-gradient-gold">Zero With Solar</span> Rooftops
                  </h1>
                  <p class="lead text-light opacity-90 mb-4 hero-animate-up hero-delay-2">
                    Switch to India's highest-efficiency N-Type TOPCon Solar Systems. 25-Year warranty, zero down
                    payment EMI, and end-to-end government subsidy clearance.
                  </p>
                  <div class="d-flex flex-wrap gap-3 hero-animate-up hero-delay-3">
                    <a href="calculator.php" class="btn-solar-primary">
                      <span>Calculate Solar Savings</span>
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                      </svg>
                    </a>
                    <a href="contact.php" class="btn-solar-secondary">
                      <span>Book Free Site Audit</span>
                    </a>
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="hero-card-glass hero-animate-up hero-delay-4 text-white">
                    <h3 class="h5 fw-bold mb-3 d-flex align-items-center gap-2">
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2.5"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 3h12M6 8h12M6 13l8.5 8M6 13h3a4 4 0 0 0 4-4 4 4 0 0 0-4-4H6" />
                      </svg>
                      Instant Savings Snapshot
                    </h3>
                    <div class="d-flex justify-content-between py-2 border-bottom border-secondary">
                      <span class="text-light opacity-75">Avg. Monthly Bill</span>
                      <span class="fw-bold">₹ 3,500 / mo</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom border-secondary">
                      <span class="text-light opacity-75">Recommended kW</span>
                      <span class="fw-bold text-warning">3.0 kW Plant</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom border-secondary">
                      <span class="text-light opacity-75">Govt Subsidy</span>
                      <span class="fw-bold text-success">₹ 78,000</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 mb-3">
                      <span class="text-light opacity-75">25-Year Savings</span>
                      <span class="fw-bold text-warning fs-5">₹ 8,40,000+</span>
                    </div>
                    <a href="calculator.php" class="btn btn-warning w-100 fw-bold py-2.5 rounded-3">Customize My
                      Rooftop Plan</a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="hero-slide-bg"
              style="background-image: url('https://images.unsplash.com/photo-1545208942-e1c9c916524b?auto=format&fit=crop&w=1920&q=80');">
            </div>
            <div class="hero-overlay"></div>
            <div class="container position-relative hero-content">
              <div class="row align-items-center gy-5">
                <div class="col-lg-7">
                  <div class="badge-solar-glow hero-animate-up mb-3">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      stroke-width="2.5">
                      <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                    </svg>
                    <span>Commercial & Industrial Solar Plants</span>
                  </div>
                  <h1 class="display-4 text-white fw-bold mb-4 hero-animate-up hero-delay-1">
                    Cut Factory & Office Operating <span class="text-gradient-green">Costs by 70%</span>
                  </h1>
                  <p class="lead text-light opacity-90 mb-4 hero-animate-up hero-delay-2">
                    Maximize enterprise profitability with turnkey MW-scale solar projects. Enjoy 40% Accelerated Tax
                    Depreciation and payback within 3 years.
                  </p>
                  <div class="d-flex flex-wrap gap-3 hero-animate-up hero-delay-3">
                    <a href="services.php#commercial" class="btn-solar-primary">
                      <span>Explore Commercial Solar</span>
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                      </svg>
                    </a>
                    <a href="contact.php" class="btn-solar-secondary">
                      <span>Get Commercial Quote</span>
                    </a>
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="hero-card-glass hero-animate-up hero-delay-4 text-white">
                    <h3 class="h5 fw-bold mb-3 d-flex align-items-center gap-2">
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5">
                        <line x1="18" y1="20" x2="18" y2="10"></line>
                        <line x1="12" y1="20" x2="12" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="14"></line>
                      </svg>
                      Enterprise Commercial Benefits
                    </h3>
                    <ul class="list-unstyled gap-2 mb-3">
                      <li class="d-flex align-items-center gap-2 mb-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5">
                          <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>40% Tax Accelerated Depreciation Benefit</span>
                      </li>
                      <li class="d-flex align-items-center gap-2 mb-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5">
                          <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Zero Grid Interruption Guarantee</span>
                      </li>
                      <li class="d-flex align-items-center gap-2 mb-2">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2.5">
                          <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>24/7 Remote Telemetry & Performance Tracking</span>
                      </li>
                    </ul>
                    <a href="contact.php" class="btn btn-success w-100 fw-bold py-2.5 rounded-3">Request Commercial
                      Audit</a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="hero-slide-bg"
              style="background-image: url('https://images.unsplash.com/photo-1509391365360-2e959784a276?auto=format&fit=crop&w=1920&q=80');">
            </div>
            <div class="hero-overlay"></div>
            <div class="container position-relative hero-content">
              <div class="row align-items-center gy-5">
                <div class="col-lg-7">
                  <div class="badge-solar-glow hero-animate-up mb-3">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                      stroke-width="2.5">
                      <rect x="1" y="6" width="18" height="12" rx="2"></rect>
                    </svg>
                    <span>24/7 Smart Battery Hybrid Solar</span>
                  </div>
                  <h1 class="display-4 text-white fw-bold mb-4 hero-animate-up hero-delay-1">
                    Uninterrupted Power <span class="text-gradient-gold">Day & Night</span>
                  </h1>
                  <p class="lead text-light opacity-90 mb-4 hero-animate-up hero-delay-2">
                    Store daytime solar energy in ultra-safe Lithium-ion batteries. Power your home seamlessly during
                    blackouts and peak evening hours.
                  </p>
                  <div class="d-flex flex-wrap gap-3 hero-animate-up hero-delay-3">
                    <a href="services.php#hybrid" class="btn-solar-primary">
                      <span>View Battery Solutions</span>
                      <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                      </svg>
                    </a>
                    <a href="contact.php" class="btn-solar-secondary">
                      <span>Talk to Battery Expert</span>
                    </a>
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="hero-card-glass hero-animate-up hero-delay-4 text-white">
                    <h3 class="h5 fw-bold mb-3 d-flex align-items-center gap-2">
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2.5"
                        stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="18" height="10" rx="2" ry="2"></rect>
                        <line x1="22" y1="11" x2="22" y2="13"></line>
                        <line x1="6" y1="12" x2="10" y2="12"></line>
                        <line x1="14" y1="12" x2="14" y2="12"></line>
                      </svg>
                      Smart Battery System Snapshot
                    </h3>
                    <div class="d-flex justify-content-between py-2 border-bottom border-secondary">
                      <span class="text-light opacity-75">Battery Technology</span>
                      <span class="fw-bold text-warning">Ultra-Safe LiFePO4</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom border-secondary">
                      <span class="text-light opacity-75">Grid Cutover Time</span>
                      <span class="fw-bold text-success">&lt; 10ms (Instant)</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom border-secondary">
                      <span class="text-light opacity-75">Battery Life Span</span>
                      <span class="fw-bold">15+ Years (6000+ Cycles)</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 mb-3">
                      <span class="text-light opacity-75">Night Backup Efficiency</span>
                      <span class="fw-bold text-warning fs-5">98.4% Efficiency</span>
                    </div>
                    <a href="services.php#hybrid" class="btn btn-warning w-100 fw-bold py-2.5 rounded-3">
                      Explore Hybrid Storage Systems
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev"
          aria-label="Previous Slide">
          <span
            class="p-2.5 rounded-circle bg-dark bg-opacity-50 text-white d-flex align-items-center justify-content-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
          </span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next"
          aria-label="Next Slide">
          <span
            class="p-2.5 rounded-circle bg-dark bg-opacity-50 text-white d-flex align-items-center justify-content-center">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </span>
        </button>
      </div>
    </section>

    <section class="py-4 bg-slate-dark text-white border-top border-bottom border-secondary position-relative">
      <div class="container">
        <div class="row g-4 text-center">
          <div class="col-6 col-md-3 animate-on-scroll fade-up">
            <div class="h2 fw-extrabold text-warning mb-1 counter-value" data-target="15000" data-suffix="+">0</div>
            <p class="small text-light opacity-75 mb-0">Rooftops Solarized</p>
          </div>
          <div class="col-6 col-md-3 animate-on-scroll fade-up delay-100">
            <div class="h2 fw-extrabold text-success mb-1 counter-value" data-prefix="₹" data-target="78000">0</div>
            <p class="small text-light opacity-75 mb-0">Max PM Surya Subsidy</p>
          </div>
          <div class="col-6 col-md-3 animate-on-scroll fade-up delay-200">
            <div class="h2 fw-extrabold text-warning mb-1 counter-value" data-target="25" data-suffix=" Yrs">0</div>
            <p class="small text-light opacity-75 mb-0">Performance Warranty</p>
          </div>
          <div class="col-6 col-md-3 animate-on-scroll fade-up delay-300">
            <div class="h2 fw-extrabold text-success mb-1 counter-value" data-target="50" data-suffix=" MW+">0</div>
            <p class="small text-light opacity-75 mb-0">Clean Energy Capacity</p>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-light position-relative">
      <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-5 animate-on-scroll fade-up">
          <span class="badge bg-soft-amber fw-bold px-3 py-2 rounded-pill uppercase mb-2">Why ADMA Solar</span>
          <h2 class="display-6 fw-bold">Engineering Excellence for Complete Energy Freedom</h2>
          <p class="text-muted lead">We combine world-class Tier-1 German & Japanese solar cell technology with
            hassle-free subsidy clearance.</p>
        </div>

        <div class="row g-4">
          <!-- Card 1 -->
          <div class="col-md-6 col-lg-3 animate-on-scroll fade-up">
            <div class="card card-hover-lift h-100 p-4 border-0">
              <div class="icon-box-solar mb-3">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <circle cx="12" cy="12" r="5"></circle>
                  <line x1="12" y1="1" x2="12" y2="3"></line>
                  <line x1="12" y1="21" x2="12" y2="23"></line>
                  <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                  <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                  <line x1="1" y1="12" x2="3" y2="12"></line>
                  <line x1="21" y1="12" x2="23" y2="12"></line>
                </svg>
              </div>
              <h3 class="h5 fw-bold mb-2">N-Type TOPCon Tech</h3>
              <p class="text-muted small mb-0">Highest 22.8% cell efficiency panels designed for hot Indian summers with
                minimal thermal degradation.</p>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-md-6 col-lg-3 animate-on-scroll fade-up delay-100">
            <div class="card card-hover-lift h-100 p-4 border-0">
              <div class="icon-box-green mb-3">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
              </div>
              <h3 class="h5 fw-bold mb-2">Guaranteed Subsidy</h3>
              <p class="text-muted small mb-0">100% direct bank credit assist under PM Surya Ghar Muft Bijli Yojana with
                zero paperwork friction.</p>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-md-6 col-lg-3 animate-on-scroll fade-up delay-200">
            <div class="card card-hover-lift h-100 p-4 border-0">
              <div class="icon-box-solar mb-3">
                <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                  <line x1="8" y1="21" x2="16" y2="21"></line>
                  <line x1="12" y1="17" x2="12" y2="21"></line>
                </svg>
              </div>
              <h3 class="h5 fw-bold mb-2">Smart IoT Monitoring</h3>
              <p class="text-muted small mb-0">Track daily generation, electricity savings, and carbon offset in
                real-time via iOS & Android mobile app.</p>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-md-6 col-lg-3 animate-on-scroll fade-up delay-300">
            <div class="card card-hover-lift h-100 p-4 border-0">
              <div class="icon-box-green mb-3">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                  stroke-linecap="round" stroke-linejoin="round">
                  <path d="M6 3h12M6 8h12M6 13l8.5 8M6 13h3a4 4 0 0 0 4-4 4 4 0 0 0-4-4H6"></path>
                </svg>
              </div>
              <h3 class="h5 fw-bold mb-2">Zero Down EMI</h3>
              <p class="text-muted small mb-0">Flexible low-interest EMI plans starting from ₹1,499/month. Pay using
                monthly electricity savings!</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="py-5 bg-light position-relative" id="calculatorWizard">
      <div class="container py-4">

        <div class="text-center max-w-700 mx-auto mb-4 animate-on-scroll fade-up">
          <span class="badge bg-soft-green fw-bold px-3 py-2 rounded-pill uppercase mb-2">Solar Savings
            Calculator</span>
          <h2 class="display-6 fw-bold text-dark">ADMA Solar Savings Calculator</h2>
          <p class="text-muted lead">Calculate your recommended solar plant size, monthly generation, annual savings,
            and government subsidy instantly.</p>
        </div>

        <div class="zun-calculator-container animate-on-scroll scale-up">
          <div class="row g-4">
            <div class="col-lg-6">
              <form id="zunSolarForm" onsubmit="return false;">
                <div class="mb-3">
                  <div class="input-group zun-input-group">
                    <span class="input-group-text zun-input-addon" id="addonPincode">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>
                    </span>
                    <input type="text" class="form-control zun-form-control" id="zunPincode"
                      placeholder="Pincode (e.g. 110091)" maxlength="6" aria-label="Pincode"
                      aria-describedby="addonPincode">
                  </div>
                </div>
                <div class="mb-3">
                  <div class="input-group zun-input-group">
                    <span class="input-group-text zun-input-addon" id="addonState">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <rect x="4" y="2" width="16" height="20" rx="2"></rect>
                        <line x1="9" y1="6" x2="9" y2="6.01"></line>
                        <line x1="15" y1="6" x2="15" y2="6.01"></line>
                        <line x1="9" y1="10" x2="9" y2="10.01"></line>
                        <line x1="15" y1="10" x2="15" y2="10.01"></line>
                      </svg>
                    </span>
                    <select class="form-select zun-form-select" id="zunState" aria-label="State"
                      aria-describedby="addonState">
                      <option value="DELHI" selected>DELHI</option>
                      <option value="MAHARASHTRA">MAHARASHTRA</option>
                      <option value="GUJARAT">GUJARAT</option>
                      <option value="KARNATAKA">KARNATAKA</option>
                      <option value="TAMIL NADU">TAMIL NADU</option>
                      <option value="UTTAR PRADESH">UTTAR PRADESH</option>
                      <option value="WEST BENGAL">WEST BENGAL</option>
                      <option value="RAJASTHAN">RAJASTHAN</option>
                      <option value="PUNJAB">PUNJAB</option>
                      <option value="HARYANA">HARYANA</option>
                      <option value="KERALA">KERALA</option>
                      <option value="TELANGANA / ANDHRA PRADESH">TELANGANA / ANDHRA PRADESH</option>
                      <option value="MADHYA PRADESH">MADHYA PRADESH</option>
                      <option value="ODISHA">ODISHA</option>
                      <option value="ASSAM">ASSAM</option>
                      <option value="BIHAR">BIHAR</option>
                      <option value="OTHER STATE">OTHER STATE</option>
                    </select>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="input-group zun-input-group">
                    <span class="input-group-text zun-input-addon" id="addonBill">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                      </svg>
                    </span>
                    <input type="number" class="form-control zun-form-control" id="zunBill"
                      placeholder="Average Monthly Bill" min="500" max="500000">
                  </div>
                </div>
                <div class="mb-3">
                  <div class="input-group zun-input-group">
                    <span class="input-group-text zun-input-addon" id="addonArea">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                      </svg>
                    </span>
                    <input type="number" class="form-control zun-form-control" id="zunArea"
                      placeholder="Rooftop Area( in sq. ft.)" min="50" max="100000">
                  </div>
                </div>

                <div class="mb-3">
                  <div class="input-group zun-input-group">
                    <span class="input-group-text zun-input-addon" id="addonMobile">
                      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5">
                        <path
                          d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                        </path>
                      </svg>
                    </span>
                    <input type="tel" class="form-control zun-form-control" id="zunMobile" placeholder="Mobile Number"
                      maxlength="10" pattern="[0-9]{10}">
                  </div>
                </div>
                <div class="mb-3">
                  <div class="zun-radio-group">
                    <label class="zun-radio-option">
                      <input type="radio" name="zunCategory" value="residential" checked>
                      <span class="radio-label">
                        <span class="radio-dot"></span> Residential
                      </span>
                    </label>
                    <label class="zun-radio-option">
                      <input type="radio" name="zunCategory" value="commercial">
                      <span class="radio-label">
                        <span class="radio-dot"></span> Commercial
                      </span>
                    </label>
                  </div>
                </div>

                <div class="form-check mb-4">
                  <input class="form-check-input text-success" type="checkbox" id="zunWhatsApp" checked
                    style="width: 20px; height: 20px; border-color: #10b981;">
                  <label class="form-check-label fw-bold text-dark ms-2 pt-1" for="zunWhatsApp">
                    We can get in touch over WhatsApp!
                  </label>
                </div>
                <button type="button" class="zun-btn-calc w-100" id="btnZunCalculate">Calculate</button>
              </form>
            </div>
            <div class="col-lg-6 d-flex flex-column justify-content-between">
              <div class="row g-2 g-sm-3 mb-3">
                <div class="col-6">
                  <div class="zun-result-card">
                    <div class="zun-card-icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                      </svg>
                    </div>
                    <div class="zun-card-info">
                      <div class="zun-card-title">Recommended System Size</div>
                      <div class="zun-card-value" id="zunResKw">-----</div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="zun-result-card">
                    <div class="zun-card-icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                      </svg>
                    </div>
                    <div class="zun-card-info">
                      <div class="zun-card-title">Monthly Units Generated*</div>
                      <div class="zun-card-value" id="zunResUnits">-----</div>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="zun-result-card">
                    <div class="zun-card-icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 3h12M6 8h12M6 13l8.5 8M6 13h3a4 4 0 0 0 4-4 4 4 0 0 0-4-4H6" />
                      </svg>
                    </div>
                    <div class="zun-card-info">
                      <div class="zun-card-title">Annual Savings*</div>
                      <div class="zun-card-value" id="zunResSavings">-----</div>
                    </div>
                  </div>
                </div>

                <div class="col-6">
                  <div class="zun-result-card">
                    <div class="zun-card-icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path
                          d="M19 5c-1.5 0-2.8 1.4-3 2-3.5-1.5-11-.3-11 5 0 1.8 0 3 2 4.5V20h4v-2h2v2h4v-3.5c1-.5 1.5-1 2-2 1.5-3 1-5 0-6.5-.2-.6-1.5-2-3-2z">
                        </path>
                      </svg>
                    </div>
                    <div class="zun-card-info">
                      <div class="zun-card-title">Subsidy Amount*</div>
                      <div class="zun-card-value" id="zunResSubsidy">-----</div>
                    </div>
                  </div>
                </div>

              </div>
              <div class="mb-3">
                <div class="zun-net-card">
                  <div class="zun-card-icon" style="width:52px; height:52px;">
                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                      stroke-linecap="round" stroke-linejoin="round">
                      <path d="M6 3h12M6 8h12M6 13l8.5 8M6 13h3a4 4 0 0 0 4-4 4 4 0 0 0-4-4H6" />
                    </svg>
                  </div>
                  <div class="text-center">
                    <div class="zun-card-title fs-6">Net Cost After Subsidy*</div>
                    <div class="zun-card-value fs-3" id="zunResNetCost">-------------</div>
                  </div>
                </div>
              </div>
              <button type="button" class="zun-btn-assess w-100" id="btnBookAssessment">Book Free Site
                Assessment</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5 bg-light position-relative">
      <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-5 animate-on-scroll fade-up">
          <span class="badge bg-soft-amber text-warning fw-bold px-3 py-2 rounded-pill uppercase mb-2">Solar
            Offerings</span>
          <h2 class="display-6 fw-bold">Tailored Solar Solutions For Every Need</h2>
          <p class="text-muted lead">From cozy independent homes to massive industrial warehouses, we engineer turnkey
            solar systems.</p>
        </div>

        <div class="row g-4">
          <!-- Service 1 -->
          <div class="col-md-4 animate-on-scroll fade-up">
            <div class="card card-hover-lift h-100 p-4 border-0">
              <div class="icon-box-solar mb-3">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                </svg>
              </div>
              <h3 class="h5 fw-bold mb-2">Residential Rooftop Solar</h3>
              <p class="text-muted small mb-3">Turn your roof into an asset. Enjoy up to ₹78,000 central government
                subsidy with seamless net metering integration.</p>
              <a href="services.php#residential"
                class="fw-bold text-warning text-decoration-none d-inline-flex align-items-center gap-1 mt-auto">
                <span>Learn More</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>

          <!-- Service 2 -->
          <div class="col-md-4 animate-on-scroll fade-up delay-100">
            <div class="card card-hover-lift h-100 p-4 border-0">
              <div class="icon-box-green mb-3">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M3 21h18M3 7v14M8 7v14M13 7v14M18 7v14M3 7l9-4 9 4M7 11h2M7 15h2M15 11h2M15 15h2"></path>
                </svg>
              </div>
              <h3 class="h5 fw-bold mb-2">Commercial & Industrial</h3>
              <p class="text-muted small mb-3">MW-scale solar solutions engineered for factories, schools, and
                hospitals. Reduce operational tariffs and enjoy tax benefits.</p>
              <a href="services.php#commercial"
                class="fw-bold text-success text-decoration-none d-inline-flex align-items-center gap-1 mt-auto">
                <span>Learn More</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>

          <!-- Service 3 -->
          <div class="col-md-4 animate-on-scroll fade-up delay-200">
            <div class="card card-hover-lift h-100 p-4 border-0">
              <div class="icon-box-solar mb-3">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <rect x="2" y="7" width="16" height="12" rx="2"></rect>
                  <line x1="22" y1="11" x2="22" y2="15"></line>
                  <polygon points="10 9 7 13 10 13 9 17 13 13 10 13 10 9" fill="currentColor"></polygon>
                </svg>
              </div>
              <h3 class="h5 fw-bold mb-2">Off-Grid & Battery Hybrid</h3>
              <p class="text-muted small mb-3">Power backup solutions using ultra-long-life Lithium Iron Phosphate
                (LiFePO4) battery banks for grid-free independence.</p>
              <a href="services.php#hybrid"
                class="fw-bold text-warning text-decoration-none d-inline-flex align-items-center gap-1 mt-auto">
                <span>Learn More</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="py-5 bg-white position-relative">
      <div class="container py-4">
        <div class="subsidy-highlight-card animate-on-scroll fade-up">
          <div class="row align-items-center gy-4">
            <div class="col-lg-7">
              <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill mb-3">PM Surya Ghar: Muft Bijli
                Yojana</span>
              <h2 class="display-6 text-white fw-bold mb-3">Direct Bank Subsidy Up to ₹78,000</h2>
              <p class="text-light opacity-90 lead mb-4">
                Under the Government of India's flagship rooftop solar initiative, get instant direct bank subsidies
                credited right after installation.
              </p>
              <div class="row g-3 text-white">
                <div class="col-sm-4">
                  <div class="p-3 bg-dark bg-opacity-50 rounded-3 border border-secondary">
                    <div class="small text-muted">1 kW Capacity</div>
                    <div class="h4 text-warning fw-bold mb-0">₹ 30,000</div>
                    <div class="small text-success">Direct Subsidy</div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="p-3 bg-dark bg-opacity-50 rounded-3 border border-secondary">
                    <div class="small text-muted">2 kW Capacity</div>
                    <div class="h4 text-warning fw-bold mb-0">₹ 60,000</div>
                    <div class="small text-success">Direct Subsidy</div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="p-3 bg-dark bg-opacity-50 rounded-3 border border-secondary">
                    <div class="small text-muted">3 kW+ Capacity</div>
                    <div class="h4 text-warning fw-bold mb-0">₹ 78,000</div>
                    <div class="small text-success">Max Subsidy</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-5 text-center text-lg-end">
              <a href="calculator.php" class="btn-solar-primary btn-lg">
                <span>Check Your Subsidy Eligibility</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <line x1="5" y1="12" x2="19" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ZUNSOLAR-STYLE "WHAT WE DO?" 5-STEP PROCESS SECTION -->
    <section class="zun-what-we-do-section" id="whatWeDoSection">
      <div class="container position-relative">

        <div class="zun-section-title-wrap animate-on-scroll fade-up">
          <h2 class="zun-title-dashed-underline">This is How We Do It</h2>
        </div>

        <div class="zun-track-container">
          <div class="row align-items-center g-4 zun-step-row animate-on-scroll fade-up">
            <div class="col-lg-6">
              <div class="zun-step-title-head">
                <span class="zun-step-badge-num">1</span>
                <span>Design</span>
              </div>
              <p class="zun-step-text-p">
                Our solar experts visit your home to assess your rooftop through shadow profiling and multiple 3D
                layouts.
              </p>
              <p class="zun-step-text-p">
                Our Solar Rooftop App helps in recommending optimal system size, positioning and inclination of solar
                panels, based on your electricity requirements.
              </p>
            </div>
            <div class="col-lg-6">
              <div class="zun-step-illustration-box">
                <svg width="100%" height="220" viewBox="0 0 450 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <!-- Desk Monitor with 3D CAD Rooftop -->
                  <rect x="120" y="30" width="180" height="110" rx="8" fill="#1e293b" stroke="#334155"
                    stroke-width="3" />
                  <rect x="128" y="38" width="164" height="94" rx="4" fill="#0f172a" />
                  <!-- Screen CAD rooftop drawing -->
                  <polygon points="150,105 210,65 270,105" fill="none" stroke="#10b981" stroke-width="2.5" />
                  <line x1="175" y1="88" x2="245" y2="88" stroke="#f59e0b" stroke-width="2" stroke-dasharray="4 3" />
                  <!-- Monitor Stand -->
                  <path d="M 200,140 L 220,140 L 225,165 L 195,165 Z" fill="#475569" />
                  <rect x="180" y="165" width="60" height="6" rx="3" fill="#334155" />
                  <!-- Desk Lamp with Light Beam -->
                  <path d="M 330,165 L 345,110 L 320,95" fill="none" stroke="#f59e0b" stroke-width="3.5"
                    stroke-linecap="round" />
                  <path d="M 310,90 L 335,80 L 340,100 Z" fill="#f59e0b" />
                  <!-- Lamp Light Glow Cone -->
                  <polygon points="315,95 240,170 340,170" fill="url(#lampLightGlow)" opacity="0.45" />
                  <!-- Potted Plant on Desk -->
                  <path d="M 70,165 L 75,140 L 95,140 L 100,165 Z" fill="#d97706" />
                  <path d="M 85,140 C 70,120 60,110 50,115 C 45,125 65,135 85,140 Z" fill="#10b981" />
                  <path d="M 85,140 C 100,120 110,110 120,115 C 125,125 105,135 85,140 Z" fill="#059669" />
                  <path d="M 85,140 C 80,110 85,95 90,95 C 95,105 90,125 85,140 Z" fill="#34d399" />
                  <!-- Desk Line -->
                  <line x1="30" y1="170" x2="420" y2="170" stroke="#cbd5e1" stroke-width="3" stroke-linecap="round" />

                  <defs>
                    <linearGradient id="lampLightGlow" x1="0%" y1="0%" x2="0%" y2="100%">
                      <stop offset="0%" stop-color="#f59e0b" stop-opacity="0.8" />
                      <stop offset="100%" stop-color="#f59e0b" stop-opacity="0" />
                    </linearGradient>
                  </defs>
                </svg>
              </div>
            </div>
          </div>

          <!-- Step 2: Delivery -->
          <div class="row align-items-center g-4 zun-step-row flex-lg-row-reverse animate-on-scroll fade-up">
            <div class="col-lg-6">
              <div class="zun-step-title-head">
                <span class="zun-step-badge-num">2</span>
                <span>Delivery</span>
              </div>
              <p class="zun-step-text-p">
                Our diligent selection process assures you get the highest quality solar panels and solar inverters that
                ensure all-time high adoption and higher output per kW of solar.
              </p>
              <p class="zun-step-text-p">
                We commit solar site commissioning within 48 hours of layout approval*.
              </p>
            </div>
            <div class="col-lg-6">
              <div class="zun-step-illustration-box">
                <svg width="100%" height="220" viewBox="0 0 450 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <!-- Modern House with Solar Roof -->
                  <rect x="140" y="110" width="140" height="70" fill="#ffffff" stroke="#334155" stroke-width="2.5" />
                  <!-- Roof with Solar Panels -->
                  <polygon points="130,110 210,60 290,110" fill="#f8fafc" stroke="#334155" stroke-width="2.5" />
                  <polygon points="150,105 210,68 270,105" fill="#0f172a" stroke="#10b981" stroke-width="2" />
                  <!-- Solar Panel Grid Lines -->
                  <line x1="180" y1="87" x2="240" y2="87" stroke="#10b981" stroke-width="1.5" />
                  <line x1="210" y1="68" x2="210" y2="105" stroke="#10b981" stroke-width="1.5" />
                  <!-- House Door & Windows -->
                  <rect x="195" y="140" width="30" height="40" fill="#059669" />
                  <rect x="155" y="125" width="25" height="25" fill="#38bdf8" stroke="#334155" stroke-width="1.5" />
                  <rect x="240" y="125" width="25" height="25" fill="#38bdf8" stroke="#334155" stroke-width="1.5" />
                  <!-- Trees -->
                  <circle cx="90" cy="140" r="25" fill="#10b981" opacity="0.85" />
                  <rect x="86" y="160" width="8" height="20" fill="#78350f" />
                  <circle cx="330" cy="145" r="20" fill="#059669" opacity="0.85" />
                  <rect x="326" y="160" width="8" height="20" fill="#78350f" />
                  <!-- Delivery Van -->
                  <rect x="340" y="145" width="60" height="30" rx="4" fill="#10b981" />
                  <path d="M 400,155 L 420,155 L 420,175 L 400,175 Z" fill="#059669" />
                  <circle cx="360" cy="178" r="8" fill="#1e293b" />
                  <circle cx="410" cy="178" r="8" fill="#1e293b" />
                  <!-- Ground Line -->
                  <line x1="30" y1="180" x2="430" y2="180" stroke="#cbd5e1" stroke-width="3" stroke-linecap="round" />
                </svg>
              </div>
            </div>
          </div>

          <div class="row align-items-center g-4 zun-step-row animate-on-scroll fade-up">
            <div class="col-lg-6">
              <div class="zun-step-title-head">
                <span class="zun-step-badge-num">3</span>
                <span>DISCOM & Subsidy Approval</span>
              </div>
              <p class="zun-step-text-p">
                We handle complete paperwork for state DISCOM approval and pre-booking of your central PM Surya Ghar
                Muft Bijli Yojana government subsidy.
              </p>
              <p class="zun-step-text-p">
                Our regulatory team tracks your net metering clearance and subsidy credit directly into your bank
                account.
              </p>
            </div>
            <div class="col-lg-6">
              <div class="zun-step-illustration-box">
                <svg width="100%" height="220" viewBox="0 0 450 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="150" y="30" width="150" height="150" rx="10" fill="#ffffff" stroke="#10b981"
                    stroke-width="3" />
                  <rect x="165" y="45" width="120" height="12" rx="3" fill="#10b981" />
                  <line x1="165" y1="75" x2="265" y2="75" stroke="#cbd5e1" stroke-width="3" stroke-linecap="round" />
                  <line x1="165" y1="95" x2="245" y2="95" stroke="#cbd5e1" stroke-width="3" stroke-linecap="round" />
                  <line x1="165" y1="115" x2="275" y2="115" stroke="#cbd5e1" stroke-width="3" stroke-linecap="round" />
                  <circle cx="255" cy="140" r="22" fill="#f59e0b" />
                  <path d="M 247,140 L 253,146 L 265,134" stroke="#ffffff" stroke-width="3.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                  <polygon points="245,160 250,175 255,162 260,175 265,160" fill="#d97706" />
                  <circle cx="100" cy="90" r="28" fill="#ecfdf5" stroke="#10b981" stroke-width="2" />
                  <path d="M 90,90 L 97,97 L 110,84" stroke="#10b981" stroke-width="3.5" stroke-linecap="round" />
                  <circle cx="350" cy="110" r="28" fill="#fef3c7" stroke="#f59e0b" stroke-width="2" />
                  <text x="337" y="117" font-weight="bold" font-size="20" fill="#b45309">₹</text>
                  <line x1="30" y1="190" x2="420" y2="190" stroke="#cbd5e1" stroke-width="3" stroke-linecap="round" />
                </svg>
              </div>
            </div>
          </div>

          <div class="row align-items-center g-4 zun-step-row flex-lg-row-reverse animate-on-scroll fade-up">
            <div class="col-lg-6">
              <div class="zun-step-title-head">
                <span class="zun-step-badge-num">4</span>
                <span>Installation</span>
              </div>
              <p class="zun-step-text-p">
                Certified MNRE solar engineers execute turn-key installation including HD galvanized anti-corrosive
                structure, panel mounting, and electrical surge earthing.
              </p>
              <p class="zun-step-text-p">
                We follow rigid safety standards and quality checks for long-term structural durability under all
                weather conditions.
              </p>
            </div>
            <div class="col-lg-6">
              <div class="zun-step-illustration-box">
                <svg width="100%" height="220" viewBox="0 0 450 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <line x1="120" y1="170" x2="180" y2="70" stroke="#64748b" stroke-width="4" />
                  <line x1="280" y1="170" x2="320" y2="70" stroke="#64748b" stroke-width="4" />
                  <line x1="160" y1="70" x2="330" y2="70" stroke="#475569" stroke-width="5" />
                  <polygon points="140,65 310,65 290,115 120,115" fill="#0f172a" stroke="#10b981" stroke-width="3" />
                  <line x1="180" y1="65" x2="160" y2="115" stroke="#10b981" stroke-width="1.5" />
                  <line x1="220" y1="65" x2="200" y2="115" stroke="#10b981" stroke-width="1.5" />
                  <line x1="260" y1="65" x2="240" y2="115" stroke="#10b981" stroke-width="1.5" />
                  <line x1="130" y1="90" x2="300" y2="90" stroke="#10b981" stroke-width="1.5" />
                  <circle cx="360" cy="130" r="26" fill="#10b981" />
                  <path d="M 350,140 L 370,120" stroke="#ffffff" stroke-width="4" stroke-linecap="round" />
                  <circle cx="370" cy="120" r="4" fill="#ffffff" />
                  <line x1="30" y1="175" x2="420" y2="175" stroke="#cbd5e1" stroke-width="3" stroke-linecap="round" />
                </svg>
              </div>
            </div>
          </div>

          <div class="row align-items-center g-4 zun-step-row animate-on-scroll fade-up">
            <div class="col-lg-6">
              <div class="zun-step-title-head">
                <span class="zun-step-badge-num">5</span>
                <span>Monitoring</span>
              </div>
              <p class="zun-step-text-p">
                Track your daily solar power generation, monthly savings, and carbon offset live on your smartphone with
                our smart IoT telemetry app.
              </p>
              <p class="zun-step-text-p">
                Includes automated health alerts, predictive fault diagnosis, and 25-year performance care guarantee for
                complete peace of mind.
              </p>
            </div>
            <div class="col-lg-6">
              <div class="zun-step-illustration-box">
                <svg width="100%" height="220" viewBox="0 0 450 220" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="175" y="20" width="100" height="175" rx="16" fill="#1e293b" stroke="#334155"
                    stroke-width="3" />
                  <rect x="183" y="32" width="84" height="151" rx="8" fill="#0f172a" />
                  <rect x="210" y="24" width="30" height="4" rx="2" fill="#475569" />
                  <rect x="193" y="45" width="64" height="20" rx="4" fill="#10b981" opacity="0.2" />
                  <text x="198" y="59" font-size="9" font-weight="bold" fill="#10b981">14.8 kWh Today</text>
                  <rect x="193" y="115" width="8" height="35" rx="2" fill="#10b981" />
                  <rect x="205" y="95" width="8" height="55" rx="2" fill="#10b981" />
                  <rect x="217" y="80" width="8" height="70" rx="2" fill="#f59e0b" />
                  <rect x="229" y="105" width="8" height="45" rx="2" fill="#10b981" />
                  <rect x="241" y="90" width="8" height="60" rx="2" fill="#10b981" />
                  <circle cx="110" cy="100" r="28" fill="#eff6ff" stroke="#3b82f6" stroke-width="2" />
                  <path d="M 98,105 C 95,95 105,85 115,90 C 122,82 135,92 130,102 C 135,108 125,115 115,112 Z"
                    fill="#3b82f6" />
                  <circle cx="340" cy="100" r="28" fill="#ecfdf5" stroke="#10b981" stroke-width="2" />
                  <path d="M 330,100 L 337,107 L 350,94" stroke="#10b981" stroke-width="3.5" stroke-linecap="round" />
                  <line x1="30" y1="190" x2="420" y2="190" stroke="#cbd5e1" stroke-width="3" stroke-linecap="round" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </div>

    <section class="py-5 bg-white position-relative" id="across-india">
      <div class="container py-3">
        <div class="text-center mb-4 animate-on-scroll fade-up">
          <div class="display-6 fw-bold">
            <span class="zun-title-dashed"></span>
            <span>ADMA Solar Across India</span>
            <span class="zun-title-dashed"></span>
          </div>
        </div>

        <div class="map-container-wrapper animate-on-scroll fade-up">
          <div class="map-floating-card">
            <div class="card-subtitle-head">
              Over 4500+ high quality solar rooftop installations across 75+ cities, ranging from 1kW to 100kW.
            </div>
            <div class="location-tabs-grid" id="locationTabsGrid">
              <div class="location-tab-item" data-state="delhi">
                <div class="location-tab-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M4 21V10l8-6 8 6v11M9 21v-6h6v6M12 4v4" />
                  </svg>
                </div>
                <div class="location-tab-label">Delhi-NCR</div>
              </div>
              <div class="location-tab-item active" data-state="up">
                <div class="location-tab-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 2L3 9v12h18V9L12 2zM12 6a3 3 0 100 6 3 3 0 000-6zM8 21v-5a4 4 0 018 0v5" />
                  </svg>
                </div>
                <div class="location-tab-label">Uttar Pradesh</div>
              </div>
              <div class="location-tab-item" data-state="punjab">
                <div class="location-tab-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M3 21h18M5 21V9l3-2 4 3 4-3 3 2v12M9 21v-4h6v4" />
                  </svg>
                </div>
                <div class="location-tab-label">Punjab</div>
              </div>
              <div class="location-tab-item" data-state="karnataka">
                <div class="location-tab-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 3L2 12h3v8h14v-8h3L12 3zM12 8a2 2 0 100 4 2 2 0 000-4z" />
                  </svg>
                </div>
                <div class="location-tab-label">Karnataka</div>
              </div>

              <div class="location-tab-item" data-state="telangana">
                <div class="location-tab-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M6 21V4h3v17M15 21V4h3v17M9 7h6M9 12h6M4 21h16" />
                  </svg>
                </div>
                <div class="location-tab-label">Telangana</div>
              </div>
              <div class="location-tab-item" data-state="gujarat">
                <div class="location-tab-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M4 21V10a8 8 0 0116 0v11M10 21v-5a2 2 0 014 0v5" />
                  </svg>
                </div>
                <div class="location-tab-label">Gujarat</div>
              </div>
              <div class="location-tab-item" data-state="mp">
                <div class="location-tab-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M12 3a9 9 0 00-9 9h18a9 9 0 00-9-9zM3 12v9h18v-9M9 21v-4a3 3 0 016 0v4" />
                  </svg>
                </div>
                <div class="location-tab-label">Madhya Pradesh</div>
              </div>
              <div class="location-tab-item" data-state="maharashtra">
                <div class="location-tab-icon">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M3 21h18M6 21V7a6 6 0 0112 0v14M10 21v-6a2 2 0 014 0v6" />
                  </svg>
                </div>
                <div class="location-tab-label">Maharashtra</div>
              </div>
            </div>
            <div class="map-cities-list">
              <a href="#">Solar in Delhi</a> | <a href="#">Solar in Gurgaon</a> | <a href="#">Solar in Faridabad</a> |
              <a href="#">Solar in Haryana</a> | <a href="#">Solar in Bangalore</a> | <a href="#">Solar in Jaipur</a> |
              <a href="#">Solar in Uttar Pradesh</a> | <a href="#">Solar in Delhi NCR</a> | <a href="#">Solar in
                Chandigarh</a> | <a href="#">Solar in Karnataka</a> | <a href="#">Solar in Gurugram</a> | <a
                href="#">Solar in Meerut</a> | <a href="#">Solar in Agra</a> | <a href="#">Solar in Greater Noida</a> |
              <a href="#">Solar in Punjab</a> | <a href="#">Solar in Chennai</a> | <a href="#">Solar in Ghaziabad</a> |
              <a href="#">Solar in Dwarka</a> | <a href="#">Solar in Lucknow</a> | <a href="#">Solar in Hyderabad</a> |
              <a href="#">Solar in Ahmedabad</a> | <a href="#">Solar in Kochi</a> | <a href="#">Solar in Ludhiana</a> |
              <a href="#">Solar in Jalandhar</a> | <a href="#">Solar in Amritsar</a> | <a href="#">Solar in Mysore</a> |
              <a href="#">Solar in Kanpur</a> | <a href="#">Solar in Allahabad</a> | <a href="#">Solar in Varanasi</a> |
              <a href="#">Solar in Ambala</a>
            </div>
          </div>
          <div id="indiaSolarMap"></div>
        </div>
      </div>
    </section>
    
     <section class="py-5 bg-gradient-solar text-white position-relative">
      <div class="container py-4 text-center">
        <div class="max-w-700 mx-auto animate-on-scroll scale-up">
          <span class="badge bg-warning text-dark fw-bold px-3 py-2 rounded-pill uppercase mb-3">Ready to Go
            Solar?</span>
          <h2 class="display-5 text-light mb-3">Start Saving Electricity Costs Today</h2>
          <p class="lead opacity-90 mb-4">Book your free site feasibility survey. Our expert engineers will design a
            custom 3D rooftop solar blueprint.</p>
          <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="calculator.php" class="btn-solar-primary btn-lg">
              <span>Calculate Savings Now</span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <line x1="5" y1="12" x2="19" y2="12"></line>
                <polyline points="12 5 19 12 12 19"></polyline>
              </svg>
            </a>
            <a href="contact.php" class="btn-solar-secondary btn-lg">
              <span>Talk to Solar Engineer</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- FREQUENTLY ASKED QUESTIONS SECTION -->
    <section class="py-5 bg-light position-relative" id="faq">
      <div class="container py-4">
        <div class="text-center max-w-700 mx-auto mb-5 animate-on-scroll fade-up">
          <span class="badge bg-soft-green text-success fw-bold px-3 py-2 rounded-pill uppercase mb-2">Got Questions?</span>
          <h2 class="display-6 fw-bold">Frequently Asked Questions</h2>
          <p class="text-muted lead">Everything you need to know about rooftop solar, savings, subsidies, and installation.</p>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="accordion custom-faq-accordion" id="faqAccordion">
              
              <!-- FAQ 1 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading1">
                  <button class="accordion-button fw-bold py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                    1. How much can I save on my electricity bill with solar?
                  </button>
                </h3>
                <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    A well-designed solar system can significantly reduce your electricity costs. Your actual savings depend on your energy consumption, electricity tariff, rooftop conditions and the size of the system.
                    <br><br>
                    ADMA Solar helps you choose the right system—not simply the biggest one—so your investment delivers maximum value.
                  </div>
                </div>
              </div>

              <!-- FAQ 2 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading2">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                    2. What size solar system is right for my home?
                  </button>
                </h3>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    The ideal system size depends on your electricity consumption, available rooftop space and future energy needs.
                    <br><br>
                    Simply share your electricity bill with us, and our team can help assess the right solar capacity for your home.
                  </div>
                </div>
              </div>

              <!-- FAQ 3 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading3">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                    3. How much does a rooftop solar system cost?
                  </button>
                </h3>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    There is no one-size-fits-all price. The cost depends on system capacity, equipment quality, type of solar system, rooftop conditions and whether battery backup is required.
                    <br><br>
                    At ADMA Solar, we focus on designing the right solution for your requirements and budget—without unnecessary oversizing or hidden surprises.
                  </div>
                </div>
              </div>

              <!-- FAQ 4 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading4">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                    4. Can I get a government subsidy for rooftop solar?
                  </button>
                </h3>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    Eligible residential consumers may be able to avail financial assistance under applicable government rooftop solar schemes, subject to prevailing guidelines and eligibility requirements.
                    <br><br>
                    ADMA Solar can guide you through the applicable process, documentation and installation requirements.
                  </div>
                </div>
              </div>

              <!-- FAQ 5 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading5">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                    5. Which solar system is right for me—On-Grid, Hybrid or Off-Grid?
                  </button>
                </h3>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    It depends on what matters most to you.
                    <ul class="mt-2 mb-2 ps-3">
                      <li><strong>On-Grid:</strong> Best for maximising electricity bill savings.</li>
                      <li><strong>Hybrid:</strong> Ideal if you want both savings and power backup.</li>
                      <li><strong>Off-Grid:</strong> Suitable where reliable grid electricity is unavailable.</li>
                    </ul>
                    Not sure which one fits your needs? We’ll help you make the right choice before you invest.
                  </div>
                </div>
              </div>

              <!-- FAQ 6 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading6">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                    6. Will my solar system work during a power cut?
                  </button>
                </h3>
                <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    A standard on-grid solar system automatically switches off during a grid outage for safety reasons.
                    <br><br>
                    If uninterrupted power is important to you, a hybrid solar system with battery backup can be designed to keep selected appliances or essential loads running during a power cut.
                  </div>
                </div>
              </div>

              <!-- FAQ 7 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading7">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse7" aria-expanded="false" aria-controls="faqCollapse7">
                    7. How much rooftop space do I need?
                  </button>
                </h3>
                <div id="faqCollapse7" class="accordion-collapse collapse" aria-labelledby="faqHeading7" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    As a general guideline, a rooftop solar system requires approximately 80–100 sq. ft. of usable, shadow-free area per kW. The actual requirement may vary depending on the panel type, roof layout and installation design.
                    <br><br>
                    Our site assessment helps determine exactly how much solar capacity your rooftop can support.
                  </div>
                </div>
              </div>

              <!-- FAQ 8 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading8">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse8" aria-expanded="false" aria-controls="faqCollapse8">
                    8. How long does it take to install a solar system?
                  </button>
                </h3>
                <div id="faqCollapse8" class="accordion-collapse collapse" aria-labelledby="faqHeading8" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    For most residential projects, the physical installation can typically be completed within a few days. The complete timeline may vary depending on site conditions, system size and applicable approval or utility processes.
                    <br><br>
                    Our team keeps you informed at every stage—from site assessment to commissioning.
                  </div>
                </div>
              </div>

              <!-- FAQ 9 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading9">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse9" aria-expanded="false" aria-controls="faqCollapse9">
                    9. Is solar difficult to maintain?
                  </button>
                </h3>
                <div id="faqCollapse9" class="accordion-collapse collapse" aria-labelledby="faqHeading9" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    Not at all. Modern solar systems are designed for reliable, long-term operation and require relatively low maintenance.
                    <br><br>
                    Periodic panel cleaning and basic system checks are generally sufficient to maintain optimal performance. Most modern systems also allow you to monitor generation through a mobile app.
                  </div>
                </div>
              </div>

              <!-- FAQ 10 -->
              <div class="accordion-item mb-3 border-0 rounded-3 shadow-sm overflow-hidden">
                <h3 class="accordion-header" id="faqHeading10">
                  <button class="accordion-button fw-bold collapsed py-3 px-4" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse10" aria-expanded="false" aria-controls="faqCollapse10">
                    10. Does ADMA Solar handle everything from start to finish?
                  </button>
                </h3>
                <div id="faqCollapse10" class="accordion-collapse collapse" aria-labelledby="faqHeading10" data-bs-parent="#faqAccordion">
                  <div class="accordion-body text-secondary px-4 pb-4 pt-2">
                    Yes. ADMA Solar can support you through the complete solar journey:
                    <div class="p-3 bg-light border rounded-3 my-3 fw-semibold text-dark text-center">
                      Understanding your energy needs &rarr; System design &rarr; Site assessment &rarr; Installation &rarr; Commissioning &rarr; Guidance on applicable approvals and documentation &rarr; Ongoing support
                    </div>
                    <strong>One solar partner. A seamless experience.</strong>
                  </div>
                </div>
              </div>

            </div>

            <!-- STILL HAVE QUESTIONS CTA BOX -->
            <div class="mt-5 p-4 p-md-5 bg-white border border-secondary rounded-4 shadow-sm text-center">
              <h3 class="h4 fw-bold mb-2 text-dark">Still have questions?</h3>
              <p class="text-secondary max-w-700 mx-auto mb-4">
                Let's find the right solar solution for your home. Speak with an ADMA Solar expert and get personalised guidance based on your electricity consumption, rooftop and energy requirements.
              </p>
              <a href="contact.php" class="btn-solar-primary btn-lg">Talk to a Solar Expert</a>
            </div>

          </div>
        </div>
      </div>
    </section>
   
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
