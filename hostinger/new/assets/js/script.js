/**
 * SOLARNOVA - MODERN PREMIUM SOLAR ENERGY JS ENGINE
 * Features: IntersectionObserver animations, Carousel touch swipe,
 * Interactive Solar Rooftop Calculator Wizard, Throttled Scroll & Counters.
 */

$(document).ready(function () {
  'use strict';

  // --------------------------------------------------------------------------
  // 1. INTERSECTION OBSERVER SCROLL ANIMATIONS
  // --------------------------------------------------------------------------
  function initScrollAnimations() {
    const animatableElements = document.querySelectorAll('.animate-on-scroll');

    if ('IntersectionObserver' in window) {
      const observerOptions = {
        root: null,
        rootMargin: '0px 0px -60px 0px',
        threshold: 0.12
      };

      const observer = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            // Trigger counter animation if element contains stats
            const counters = entry.target.querySelectorAll('.counter-value');
            counters.forEach(counter => animateCounter(counter));
            obs.unobserve(entry.target);
          }
        });
      }, observerOptions);

      animatableElements.forEach(el => observer.observe(el));
    } else {
      // Fallback for legacy browsers
      animatableElements.forEach(el => el.classList.add('is-visible'));
    }
  }

  // --------------------------------------------------------------------------
  // 2. STICKY NAVBAR SCROLL TRANSFORM
  // --------------------------------------------------------------------------
  const $navbar = $('#mainNavbar');
  const $backToTop = $('#backToTopBtn');
  let lastScrollY = 0;
  let ticking = false;

  function updateScrollState() {
    const currentScrollY = window.scrollY;

    if (currentScrollY > 50) {
      $navbar.addClass('scrolled');
    } else {
      $navbar.removeClass('scrolled');
    }

    if (currentScrollY > 400) {
      $backToTop.addClass('visible');
    } else {
      $backToTop.removeClass('visible');
    }

    ticking = false;
  }

  window.addEventListener('scroll', function () {
    lastScrollY = window.scrollY;
    if (!ticking) {
      window.requestAnimationFrame(updateScrollState);
      ticking = true;
    }
  }, { passive: true });

  // Back to Top Click
  $backToTop.on('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // --------------------------------------------------------------------------
  // 3. BOOTSTRAP CAROUSEL TOUCH SWIPE HANDLER
  // --------------------------------------------------------------------------
  const heroCarouselEl = document.getElementById('heroCarousel');
  if (heroCarouselEl && typeof bootstrap !== 'undefined') {
    let touchStartX = 0;
    let touchEndX = 0;

    heroCarouselEl.addEventListener('touchstart', function (e) {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    heroCarouselEl.addEventListener('touchend', function (e) {
      touchEndX = e.changedTouches[0].screenX;
      handleSwipe();
    }, { passive: true });

    function handleSwipe() {
      const carouselInstance = bootstrap.Carousel.getOrCreateInstance(heroCarouselEl);
      if (touchEndX < touchStartX - 50) {
        carouselInstance.next();
      } else if (touchEndX > touchStartX + 50) {
        carouselInstance.prev();
      }
    }
  }

  // --------------------------------------------------------------------------
  // 4. ANIMATED COUNTER UTILITY
  // --------------------------------------------------------------------------
  function animateCounter(el) {
    if (el.dataset.animated === 'true') return;
    el.dataset.animated = 'true';

    const target = parseFloat(el.getAttribute('data-target') || el.innerText);
    const prefix = el.getAttribute('data-prefix') || '';
    const suffix = el.getAttribute('data-suffix') || '';
    const duration = 1800; // ms
    const startTime = performance.now();

    function updateNumber(currentTime) {
      const elapsedTime = currentTime - startTime;
      const progress = Math.min(elapsedTime / duration, 1);
      // Ease-out cubic formula
      const easeProgress = 1 - Math.pow(1 - progress, 3);
      const currentValue = Math.floor(easeProgress * target);

      el.innerText = prefix + currentValue.toLocaleString('en-IN') + suffix;

      if (progress < 1) {
        requestAnimationFrame(updateNumber);
      } else {
        el.innerText = prefix + target.toLocaleString('en-IN') + suffix;
      }
    }

    requestAnimationFrame(updateNumber);
  }

  // --------------------------------------------------------------------------
  // 5. SOLAR ROOFTOP CALCULATOR ENGINE WIZARD
  // --------------------------------------------------------------------------
  let currentStep = 1;
  let calcState = {
    customerType: 'residential', // residential, commercial, industrial
    roofType: 'flat', // flat, metal, tiled
    state: 'Delhi',
    monthlyBill: 3500, // ₹
    roofArea: 350 // sq ft
  };

  // Sync Slider Input with Text Input & Calculations
  const $billRange = $('#billRange');
  const $billInput = $('#billInput');
  const $areaRange = $('#areaRange');

  if ($billRange.length) {
    $billRange.on('input', function () {
      const val = parseInt($(this).val(), 10);
      $billInput.val(val);
      calcState.monthlyBill = val;
      updateCalculatorResults();
    });

    $billInput.on('input change', function () {
      let val = parseInt($(this).val(), 10) || 1000;
      if (val < 500) val = 500;
      if (val > 100000) val = 100000;
      $billRange.val(val);
      calcState.monthlyBill = val;
      updateCalculatorResults();
    });
  }

  // Option Selector Card Click Handlers
  $('.selector-card-group').on('click', '.selector-card', function () {
    $(this).siblings().removeClass('selected');
    $(this).addClass('selected');

    const groupType = $(this).data('group');
    const val = $(this).data('value');

    if (groupType === 'customer') {
      calcState.customerType = val;
    } else if (groupType === 'roof') {
      calcState.roofType = val;
    }

    updateCalculatorResults();
  });

  // Calculation Math Logic
  function updateCalculatorResults() {
    const bill = calcState.monthlyBill;
    const isResidential = (calcState.customerType === 'residential');

    // 1. Monthly Units (kWh): ₹ / avg ₹8.2 per unit
    const monthlyUnits = Math.round(bill / 8.2);

    // 2. Recommended Solar Plant Capacity (kW)
    // Avg 1kW solar produces ~120 units per month
    let recommendedKw = (monthlyUnits / 120);
    recommendedKw = Math.max(1, Math.round(recommendedKw * 10) / 10); // min 1 kW

    // 3. Rooftop Area Needed (80 sq ft per kW)
    const requiredArea = Math.round(recommendedKw * 80);

    // 4. Annual Solar Energy Generation (kWh)
    const annualUnits = Math.round(recommendedKw * 1420);

    // 5. Total Solar System Cost (Avg ₹50,000 - ₹54,000 per kW)
    const grossCost = Math.round(recommendedKw * 52000);

    // 6. Govt Subsidy (PM Surya Ghar Scheme for Residential)
    // 1 kW = ₹30,000 | 2 kW = ₹60,000 | 3 kW+ = ₹78,000
    let subsidy = 0;
    if (isResidential) {
      if (recommendedKw >= 3) {
        subsidy = 78000;
      } else if (recommendedKw >= 2) {
        subsidy = 60000;
      } else {
        subsidy = 30000;
      }
    }

    // 7. Net Out of Pocket Cost
    const netCost = Math.max(0, grossCost - subsidy);

    // 8. Annual Financial Savings (₹)
    const annualSavings = Math.round(annualUnits * 8.5);

    // 9. Payback / ROI Period (Years)
    const paybackYears = (netCost / annualSavings).toFixed(1);

    // 10. 25-Year Lifetime Savings (₹)
    const lifetimeSavings = Math.round((annualSavings * 25) - netCost);

    // 11. Environmental Impact
    const co2Tons = (recommendedKw * 1.25).toFixed(1);
    const treesPlanted = Math.round(recommendedKw * 32);

    // DOM Updates
    $('#resCapacity').text(recommendedKw + ' kW');
    $('#resArea').text(requiredArea + ' sq ft');
    $('#resAnnualUnits').text(annualUnits.toLocaleString('en-IN') + ' kWh');
    $('#resGrossCost').text('₹' + grossCost.toLocaleString('en-IN'));
    $('#resSubsidy').text(subsidy > 0 ? '-₹' + subsidy.toLocaleString('en-IN') : '₹0 (Depreciation Benefit)');
    $('#resNetCost').text('₹' + netCost.toLocaleString('en-IN'));
    $('#resAnnualSavings').text('₹' + annualSavings.toLocaleString('en-IN'));
    $('#resPayback').text(paybackYears + ' Years');
    $('#res25YearSavings').text('₹' + lifetimeSavings.toLocaleString('en-IN'));
    $('#resCO2').text(co2Tons + ' Tons/Yr');
    $('#resTrees').text(treesPlanted + ' Trees');
  }

  // Calculator Step Wizard Navigation
  $('#btnNextStep1').on('click', function () {
    goToStep(2);
  });

  $('#btnNextStep2').on('click', function () {
    goToStep(3);
    updateCalculatorResults();
  });

  $('#btnNextStep3').on('click', function () {
    goToStep(4);
  });

  $('#btnPrevStep2').on('click', function () {
    goToStep(1);
  });

  $('#btnPrevStep3').on('click', function () {
    goToStep(2);
  });

  $('#btnPrevStep4').on('click', function () {
    goToStep(3);
  });

  function goToStep(step) {
    currentStep = step;
    $('.calc-wizard-step').addClass('d-none');
    $('#calcWizardStep' + step).removeClass('d-none');

    // Update Progress Bar & Step Numbers
    $('.calc-step-item').removeClass('active completed');
    for (let i = 1; i <= 4; i++) {
      if (i < step) {
        $(`#stepNav${i}`).addClass('completed');
      } else if (i === step) {
        $(`#stepNav${i}`).addClass('active');
      }
    }

    const progressPct = ((step - 1) / 3) * 80 + 10;
    $('#stepProgressBar').css('width', progressPct + '%');

    // Scroll to calculator header smoothly
    const calcOffset = $('#calculatorWizard').offset();
    if (calcOffset) {
      $('html, body').animate({ scrollTop: calcOffset.top - 90 }, 400);
    }
  }

  // Calculator Lead Form Submission Validation
  $('#calcLeadForm').on('submit', function (e) {
    e.preventDefault();
    const name = $('#leadName').val().trim();
    const phone = $('#leadPhone').val().trim();

    if (!name || !phone || phone.length < 10) {
      alert('Please enter a valid Name and 10-digit Phone Number.');
      return;
    }

    // Success State
    $('#calcLeadForm').html(`
      <div class="text-center py-4">
        <div class="icon-box-green mx-auto mb-3" style="width:70px; height:70px;">
          <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
        </div>
        <h4 class="text-dark fw-bold mb-2">Solar Proposal Request Submitted!</h4>
        <p class="text-muted mb-3">Thank you, <strong>${name}</strong>. Our Solar Consultant will contact you at <strong>${phone}</strong> within 15 minutes with your detailed site feasibility & subsidy blueprint.</p>
        <div class="p-3 bg-soft-amber rounded-3 d-inline-block text-dark fw-semibold">
          Reference ID: SN-${Math.floor(100000 + Math.random() * 900000)}
        </div>
      </div>
    `);
  });

  // Initialize Calculator Math on load
  if ($('#calculatorWizard').length) {
    updateCalculatorResults();
  }

  // --------------------------------------------------------------------------
  // 6. ZUNSOLAR CALCULATOR & PINCODE AUTO-STATE SELECTOR ENGINE
  // --------------------------------------------------------------------------
  function getStateFromPincode(pincode) {
    if (!pincode || pincode.length < 2) return null;
    const prefix = pincode.substring(0, 2);
    const pInt = parseInt(prefix, 10);

    if (pInt === 11) return 'DELHI';
    if (pInt >= 12 && pInt <= 13) return 'HARYANA';
    if (pInt >= 14 && pInt <= 16) return 'PUNJAB';
    if (pInt === 17) return 'HIMACHAL PRADESH';
    if (pInt >= 18 && pInt <= 19) return 'JAMMU & KASHMIR';
    if (pInt >= 20 && pInt <= 28) return 'UTTAR PRADESH';
    if (pInt >= 30 && pInt <= 34) return 'RAJASTHAN';
    if (pInt >= 36 && pInt <= 39) return 'GUJARAT';
    if (pInt >= 40 && pInt <= 44) return 'MAHARASHTRA';
    if (pInt >= 45 && pInt <= 48) return 'MADHYA PRADESH';
    if (pInt >= 50 && pInt <= 53) return 'TELANGANA / ANDHRA PRADESH';
    if (pInt >= 56 && pInt <= 59) return 'KARNATAKA';
    if (pInt >= 60 && pInt <= 64) return 'TAMIL NADU';
    if (pInt >= 67 && pInt <= 69) return 'KERALA';
    if (pInt >= 70 && pInt <= 74) return 'WEST BENGAL';
    if (pInt >= 75 && pInt <= 77) return 'ODISHA';
    if (pInt === 78) return 'ASSAM';
    if (pInt >= 80 && pInt <= 85) return 'BIHAR';
    return null;
  }

  // Pincode Input Event: Auto Select State Dropdown
  $('#zunPincode').on('input keyup', function () {
    const pinVal = $(this).val().trim();
    if (pinVal.length >= 2) {
      const stateMatch = getStateFromPincode(pinVal);
      if (stateMatch) {
        $('#zunState').val(stateMatch);
      }
    }
  });

  // Calculate Zunsolar Solar Engine
  function calculateZunSolar() {
    const bill = parseFloat($('#zunBill').val()) || 0;
    const area = parseFloat($('#zunArea').val()) || 0;
    const category = $('input[name="zunCategory"]:checked').val() || 'residential';
    const isResidential = (category === 'residential');

    let kw = 3.0;
    if (bill > 0 && area > 0) {
      const kwFromBill = bill / 8.2 / 120;
      const kwFromArea = area / 80;
      kw = Math.max(kwFromBill, kwFromArea);
    } else if (bill > 0) {
      kw = bill / 8.2 / 120;
    } else if (area > 0) {
      kw = area / 80;
    }

    kw = Math.max(1, Math.round(kw * 10) / 10);

    const monthlyUnits = Math.round(kw * 120);
    const annualSavings = Math.round(monthlyUnits * 12 * 8.5);

    let subsidy = 0;
    if (isResidential) {
      if (kw >= 3) {
        subsidy = 78000;
      } else if (kw >= 2) {
        subsidy = 60000;
      } else {
        subsidy = 30000;
      }
    }

    const grossCost = Math.round(kw * 52000);
    const netCost = Math.max(0, grossCost - subsidy);

    // Update DOM Results in Right Column
    $('#zunResKw').text(kw.toFixed(1) + ' kW');
    $('#zunResUnits').text(monthlyUnits.toLocaleString('en-IN') + ' kWh');
    $('#zunResSavings').text('₹ ' + annualSavings.toLocaleString('en-IN'));
    $('#zunResSubsidy').text(subsidy > 0 ? '₹ ' + subsidy.toLocaleString('en-IN') : '₹ 0');
    $('#zunResNetCost').text('₹ ' + netCost.toLocaleString('en-IN'));
  }

  // Event Listeners for Live Updates
  $('#zunBill, #zunArea').on('input change', calculateZunSolar);
  $('input[name="zunCategory"]').on('change', calculateZunSolar);
  
  $('#btnZunCalculate').on('click', function () {
    calculateZunSolar();
  });

  // Book Free Site Assessment Action
  $('#btnBookAssessment').on('click', function () {
    const mobile = $('#zunMobile').val().trim();
    const state = $('#zunState').val();

    if (!mobile || mobile.length < 10) {
      alert('Please enter a valid 10-digit Mobile Number to book a site assessment.');
      $('#zunMobile').focus();
      return;
    }

    calculateZunSolar();
    alert(`🎉 Site Assessment Booked!\n\nThank you! Our solar engineer will contact you at ${mobile} for your ${state} property.`);
  });

  // Run calculation once if container present
  if ($('#zunSolarForm').length) {
    calculateZunSolar();
  }

  // --------------------------------------------------------------------------
  // 7. GENERAL CONTACT & AUDIT FORM VALIDATION
  // --------------------------------------------------------------------------
  $('#generalContactForm').on('submit', function (e) {
    e.preventDefault();
    alert('Thank you for reaching out to ADMA Solar! We have received your inquiry and will contact you shortly.');
    this.reset();
  });

  // Initialize Scroll Animations
  initScrollAnimations();

  // --------------------------------------------------------------------------
  // 7.5 THEME TOGGLE ENGINE (DARK / LIGHT MODE)
  // --------------------------------------------------------------------------
  function setTheme(theme) {
    document.documentElement.setAttribute('data-theme', theme);
    localStorage.setItem('adma_theme', theme);
    const sunIcon = `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line></svg>`;
    const moonIcon = `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;
    $('.theme-toggle-btn').html(theme === 'dark' ? sunIcon : moonIcon);
  }

  function initThemeToggle() {
    const storedTheme = localStorage.getItem('adma_theme') || 'light';
    setTheme(storedTheme);

    $(document).on('click', '.theme-toggle-btn', function () {
      const currentTheme = document.documentElement.getAttribute('data-theme') || 'light';
      const newTheme = (currentTheme === 'dark') ? 'light' : 'dark';
      setTheme(newTheme);
    });
  }

  initThemeToggle();

  // --------------------------------------------------------------------------
  // 8. ADMA SOLAR ACROSS INDIA MAP ENGINE & LOCATION TABS
  // --------------------------------------------------------------------------
  function initIndiaSolarMap() {
    const mapEl = document.getElementById('indiaSolarMap');
    if (!mapEl || typeof L === 'undefined') return;

    const locationData = {
      up: {
        name: 'Uttar Pradesh (Ghaziabad Hub)',
        center: [28.6692, 77.4538],
        zoom: 11,
        markers: [
          { lat: 28.6692, lng: 77.4538, title: 'ADMA Solar Ghaziabad Regional Headquarters', city: 'Ghaziabad' },
          { lat: 28.5355, lng: 77.3910, title: '100 kW Industrial Plant', city: 'Noida' },
          { lat: 26.8467, lng: 80.9462, title: '50 kW Commercial Plant', city: 'Lucknow' },
          { lat: 26.4499, lng: 80.3319, title: '10 kW Residential Rooftop', city: 'Kanpur' },
          { lat: 27.1767, lng: 78.0081, title: '25 kW Hotel Solar System', city: 'Agra' },
          { lat: 25.3176, lng: 82.9739, title: '15 kW Hospital Installation', city: 'Varanasi' },
          { lat: 28.9845, lng: 77.7064, title: '20 kW Factory Rooftop', city: 'Meerut' }
        ]
      },

      delhi: {
        name: 'Delhi-NCR',
        center: [28.6139, 77.2090],
        zoom: 10,
        markers: [
          { lat: 28.6139, lng: 77.2090, title: '15 kW Luxury Villa System', city: 'New Delhi' },
          { lat: 28.4595, lng: 77.0266, title: '75 kW Corporate Headquarters', city: 'Gurugram' },
          { lat: 28.4089, lng: 77.3178, title: '30 kW School Rooftop', city: 'Faridabad' },
          { lat: 28.5355, lng: 77.3910, title: '50 kW Commercial Hub', city: 'Greater Noida' }
        ]
      },
      punjab: {
        name: 'Punjab',
        center: [30.9010, 75.8573],
        zoom: 8,
        markers: [
          { lat: 30.9010, lng: 75.8573, title: '60 kW Textile Mill Solar', city: 'Ludhiana' },
          { lat: 31.6340, lng: 74.8723, title: '12 kW Home Rooftop', city: 'Amritsar' },
          { lat: 31.3260, lng: 75.5762, title: '25 kW Cold Storage System', city: 'Jalandhar' },
          { lat: 30.7333, lng: 76.7794, title: '40 kW Commercial Complex', city: 'Chandigarh' }
        ]
      },
      karnataka: {
        name: 'Karnataka',
        center: [12.9716, 77.5946],
        zoom: 9,
        markers: [
          { lat: 12.9716, lng: 77.5946, title: '100 kW Tech Park Solar', city: 'Bangalore' },
          { lat: 12.2958, lng: 76.6394, title: '15 kW Heritage Home System', city: 'Mysore' },
          { lat: 15.3647, lng: 75.1240, title: '50 kW Agriculture Pump Grid', city: 'Hubli' },
          { lat: 12.9141, lng: 74.8560, title: '30 kW Commercial Rooftop', city: 'Mangalore' }
        ]
      },
      telangana: {
        name: 'Telangana',
        center: [17.3850, 78.4867],
        zoom: 9,
        markers: [
          { lat: 17.3850, lng: 78.4867, title: '80 kW IT Hub Installation', city: 'Hyderabad' },
          { lat: 17.9689, lng: 79.5941, title: '20 kW Institutional Plant', city: 'Warangal' },
          { lat: 18.4386, lng: 79.1288, title: '10 kW Residential Solar', city: 'Karimnagar' }
        ]
      },
      gujarat: {
        name: 'Gujarat',
        center: [23.0225, 72.5714],
        zoom: 8,
        markers: [
          { lat: 23.0225, lng: 72.5714, title: '90 kW Manufacturing Unit', city: 'Ahmedabad' },
          { lat: 21.1702, lng: 72.8311, title: '60 kW Textile Mill System', city: 'Surat' },
          { lat: 22.3072, lng: 73.1812, title: '40 kW Commercial Rooftop', city: 'Vadodara' },
          { lat: 22.3039, lng: 70.8022, title: '15 kW Home System', city: 'Rajkot' }
        ]
      },
      mp: {
        name: 'Madhya Pradesh',
        center: [23.2599, 77.4126],
        zoom: 8,
        markers: [
          { lat: 23.2599, lng: 77.4126, title: '45 kW Government Rooftop', city: 'Bhopal' },
          { lat: 22.7196, lng: 75.8577, title: '70 kW Industrial Solar', city: 'Indore' },
          { lat: 23.1815, lng: 79.9864, title: '20 kW Residence Solar', city: 'Jabalpur' },
          { lat: 26.2183, lng: 78.1828, title: '15 kW Hotel Solar', city: 'Gwalior' }
        ]
      },
      maharashtra: {
        name: 'Maharashtra',
        center: [19.0760, 72.8777],
        zoom: 8,
        markers: [
          { lat: 19.0760, lng: 72.8777, title: '100 kW High-rise Complex', city: 'Mumbai' },
          { lat: 18.5204, lng: 73.8567, title: '85 kW Automobile Factory', city: 'Pune' },
          { lat: 21.1458, lng: 79.0882, title: '35 kW Logistics Hub', city: 'Nagpur' },
          { lat: 19.8762, lng: 75.3433, title: '25 kW Commercial Plant', city: 'Aurangabad' }
        ]
      }
    };

    const defaultState = locationData.up;
    const map = L.map('indiaSolarMap', {
      center: defaultState.center,
      zoom: defaultState.zoom,
      scrollWheelZoom: false,
      zoomControl: true
    });

    L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/">CARTO</a>',
      subdomains: 'abcd',
      maxZoom: 19
    }).addTo(map);

    let activeMarkerGroup = L.layerGroup().addTo(map);

    const createSolarIcon = () => {
      return L.divIcon({
        className: 'solar-map-pin',
        html: `<div class="solar-pin-pulse">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                  <circle cx="12" cy="12" r="4" fill="#ffffff" />
                  <path d="M12 2v2M12 20v2M2 12h2M20 12h2" stroke="#ffffff" stroke-width="2"/>
                </svg>
               </div>`,
        iconSize: [28, 28],
        iconAnchor: [14, 28],
        popupAnchor: [0, -28]
      });
    };

    function loadStateMarkers(stateKey) {
      const data = locationData[stateKey];
      if (!data) return;

      activeMarkerGroup.clearLayers();

      map.flyTo(data.center, data.zoom, {
        duration: 1.2
      });

      Object.keys(locationData).forEach(key => {
        const isSelectedState = (key === stateKey);
        const loc = locationData[key];
        
        loc.markers.forEach(m => {
          const marker = L.marker([m.lat, m.lng], { icon: createSolarIcon() });
          marker.bindPopup(`
            <div style="font-size:0.88rem;">
              <strong style="color:#059669; font-size:0.92rem;">ADMA Solar Installation</strong><br/>
              <span style="font-weight:700; color:#1e293b;">${m.title}</span><br/>
              <small style="color:#64748b;">📍 ${m.city}, ${loc.name}</small>
            </div>
          `);
          activeMarkerGroup.addLayer(marker);

          if (isSelectedState && m === loc.markers[0]) {
            setTimeout(() => marker.openPopup(), 1200);
          }
        });
      });
    }

    loadStateMarkers('up');

    $('.location-tab-item').on('click', function () {
      $('.location-tab-item').removeClass('active');
      $(this).addClass('active');

      const stateKey = $(this).data('state');
      loadStateMarkers(stateKey);
    });
  }

  initIndiaSolarMap();
});
document.addEventListener("DOMContentLoaded", function () {
  // Get the current file name from the URL (defaults to "index.html" if empty)
  const currentPath = window.location.pathname.split("/").pop() || "index.html";

  // Select all navigation links inside the navbar
  const navLinks = document.querySelectorAll("#navbarNav .nav-link, #navbarNav .dropdown-item");

  navLinks.forEach(link => {
    const linkPath = link.getAttribute("href");

    // Check if the link's href matches the current page
    if (linkPath === currentPath) {
      link.classList.add("active");
      link.setAttribute("aria-current", "page");

      // If the active link is inside a dropdown, highlight the parent dropdown toggle too
      const dropdownParent = link.closest(".dropdown");
      if (dropdownParent) {
        const dropdownToggle = dropdownParent.querySelector(".dropdown-toggle");
        if (dropdownToggle) {
          dropdownToggle.classList.add("active");
        }
      }
    } else {
      // Remove active from others just in case it's hardcoded in HTML
      link.classList.remove("active");
      link.removeAttribute("aria-current");
    }
  });
});
