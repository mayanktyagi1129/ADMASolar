export function initScrollAnimations(): void {
  const elements = document.querySelectorAll(".animate-on-scroll");
  if (!("IntersectionObserver" in window)) {
    elements.forEach((el) => el.classList.add("is-visible"));
    return;
  }
  const observer = new IntersectionObserver(
    (entries, obs) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("is-visible");
        entry.target.querySelectorAll<HTMLElement>(".counter-value").forEach(animateCounter);
        obs.unobserve(entry.target);
      });
    },
    { root: null, rootMargin: "0px 0px -60px 0px", threshold: 0.12 },
  );
  elements.forEach((el) => observer.observe(el));
}

function animateCounter(el: HTMLElement): void {
  if (el.dataset.animated === "true") return;
  el.dataset.animated = "true";
  const target = Number.parseFloat(el.getAttribute("data-target") || el.innerText);
  const prefix = el.getAttribute("data-prefix") || "";
  const suffix = el.getAttribute("data-suffix") || "";
  const duration = 1800;
  const start = performance.now();

  const tick = (now: number) => {
    const progress = Math.min((now - start) / duration, 1);
    const eased = 1 - (1 - progress) ** 3;
    el.innerText = prefix + Math.floor(eased * target).toLocaleString("en-IN") + suffix;
    if (progress < 1) requestAnimationFrame(tick);
    else el.innerText = prefix + target.toLocaleString("en-IN") + suffix;
  };
  requestAnimationFrame(tick);
}

export function initNavbarScroll(): void {
  const navbar = document.getElementById("mainNavbar");
  const backToTop = document.getElementById("backToTopBtn");
  let ticking = false;
  const update = () => {
    const y = window.scrollY;
    navbar?.classList.toggle("scrolled", y > 50);
    backToTop?.classList.toggle("visible", y > 400);
    ticking = false;
  };
  window.addEventListener(
    "scroll",
    () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(update);
    },
    { passive: true },
  );
  backToTop?.addEventListener("click", () => window.scrollTo({ top: 0, behavior: "smooth" }));
}

export function initHeroSwipe(): void {
  const hero = document.getElementById("heroCarousel");
  const bootstrap = window.bootstrap;
  if (!hero || !bootstrap) return;
  let startX = 0;
  let endX = 0;
  hero.addEventListener("touchstart", (e) => {
    startX = e.changedTouches[0].screenX;
  }, { passive: true });
  hero.addEventListener("touchend", (e) => {
    endX = e.changedTouches[0].screenX;
    const carousel = bootstrap.Carousel.getOrCreateInstance(hero);
    if (endX < startX - 50) carousel.next();
    if (endX > startX + 50) carousel.prev();
  }, { passive: true });
}

export function initContactForm(): void {
  document.getElementById("generalContactForm")?.addEventListener("submit", (event) => {
    event.preventDefault();
    alert("Thank you for reaching out to ADMA Solar! We have received your inquiry and will contact you shortly.");
    (event.currentTarget as HTMLFormElement).reset();
  });
}

export function initFaq(): void {
  const searchInput = document.getElementById("faqSearchInput") as HTMLInputElement | null;
  if (!searchInput) return;
  const pills = document.querySelectorAll<HTMLButtonElement>("#categoryFilterPills button");
  const blocks = document.querySelectorAll<HTMLElement>(".faq-category-block");
  const noResults = document.getElementById("noResultsMsg");
  let currentCategory = "all";

  const filterFaqs = () => {
    const query = searchInput.value.trim().toLowerCase();
    let visible = 0;
    blocks.forEach((block) => {
      let blockVisible = 0;
      block.querySelectorAll<HTMLElement>(".faq-item").forEach((item) => {
        const cat = item.getAttribute("data-category");
        const text = item.textContent?.toLowerCase() ?? "";
        const match = (currentCategory === "all" || cat === currentCategory) && (query === "" || text.includes(query));
        item.classList.toggle("d-none", !match);
        if (match) {
          blockVisible += 1;
          visible += 1;
          if (query) {
            const collapseEl = item.querySelector(".accordion-collapse");
            if (collapseEl && window.bootstrap) {
              new window.bootstrap.Collapse(collapseEl, { toggle: false }).show();
            }
          }
        }
      });
      block.classList.toggle("d-none", blockVisible === 0);
    });
    noResults?.classList.toggle("d-none", visible !== 0);
  };

  searchInput.addEventListener("input", filterFaqs);
  document.getElementById("faqSearchResetBtn")?.addEventListener("click", () => {
    searchInput.value = "";
    filterFaqs();
    searchInput.focus();
  });
  pills.forEach((pill) => {
    pill.addEventListener("click", () => {
      pills.forEach((p) => {
        p.classList.remove("btn-dark", "active");
        p.classList.add("btn-outline-dark");
      });
      pill.classList.remove("btn-outline-dark");
      pill.classList.add("btn-dark", "active");
      currentCategory = pill.getAttribute("data-category") ?? "all";
      filterFaqs();
    });
  });
  document.getElementById("expandAllBtn")?.addEventListener("click", () => {
    document.querySelectorAll(".faq-item:not(.d-none) .accordion-collapse").forEach((el) => {
      if (window.bootstrap) new window.bootstrap.Collapse(el, { toggle: false }).show();
    });
  });
  document.getElementById("collapseAllBtn")?.addEventListener("click", () => {
    document.querySelectorAll(".faq-item .accordion-collapse").forEach((el) => {
      if (window.bootstrap) new window.bootstrap.Collapse(el, { toggle: false }).hide();
    });
  });
}

export function initIndiaMap(): void {
  const mapEl = document.getElementById("indiaSolarMap");
  if (!mapEl || typeof L === "undefined") return;

  type Marker = { lat: number; lng: number; title: string; city: string };
  type StateData = { name: string; center: [number, number]; zoom: number; markers: Marker[] };

  const locationData: Record<string, StateData> = {
    up: {
      name: "Uttar Pradesh (Ghaziabad Hub)",
      center: [28.6692, 77.4538],
      zoom: 11,
      markers: [
        { lat: 28.6692, lng: 77.4538, title: "ADMA Solar Ghaziabad Regional Headquarters", city: "Ghaziabad" },
        { lat: 28.5355, lng: 77.391, title: "100 kW Industrial Plant", city: "Noida" },
        { lat: 26.8467, lng: 80.9462, title: "50 kW Commercial Plant", city: "Lucknow" },
      ],
    },
    delhi: {
      name: "Delhi-NCR",
      center: [28.6139, 77.209],
      zoom: 10,
      markers: [
        { lat: 28.6139, lng: 77.209, title: "15 kW Luxury Villa System", city: "New Delhi" },
        { lat: 28.4595, lng: 77.0266, title: "75 kW Corporate Headquarters", city: "Gurugram" },
      ],
    },
    punjab: {
      name: "Punjab",
      center: [30.901, 75.8573],
      zoom: 8,
      markers: [{ lat: 30.901, lng: 75.8573, title: "60 kW Textile Mill Solar", city: "Ludhiana" }],
    },
    karnataka: {
      name: "Karnataka",
      center: [12.9716, 77.5946],
      zoom: 9,
      markers: [{ lat: 12.9716, lng: 77.5946, title: "100 kW Tech Park Solar", city: "Bangalore" }],
    },
    telangana: {
      name: "Telangana",
      center: [17.385, 78.4867],
      zoom: 9,
      markers: [{ lat: 17.385, lng: 78.4867, title: "80 kW IT Hub Installation", city: "Hyderabad" }],
    },
    gujarat: {
      name: "Gujarat",
      center: [23.0225, 72.5714],
      zoom: 8,
      markers: [{ lat: 23.0225, lng: 72.5714, title: "90 kW Manufacturing Unit", city: "Ahmedabad" }],
    },
    mp: {
      name: "Madhya Pradesh",
      center: [23.2599, 77.4126],
      zoom: 8,
      markers: [{ lat: 23.2599, lng: 77.4126, title: "45 kW Government Rooftop", city: "Bhopal" }],
    },
    maharashtra: {
      name: "Maharashtra",
      center: [19.076, 72.8777],
      zoom: 8,
      markers: [{ lat: 19.076, lng: 72.8777, title: "100 kW High-rise Complex", city: "Mumbai" }],
    },
  };

  const map = L.map("indiaSolarMap", {
    center: locationData.up.center,
    zoom: locationData.up.zoom,
    scrollWheelZoom: false,
    zoomControl: true,
  });
  L.tileLayer("https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png", {
    attribution: "&copy; OpenStreetMap &copy; CARTO",
    subdomains: "abcd",
    maxZoom: 19,
  }).addTo(map);

  const group = L.layerGroup().addTo(map);
  const icon = L.divIcon({
    className: "solar-map-pin",
    html: `<div class="solar-pin-pulse"></div>`,
    iconSize: [28, 28],
    iconAnchor: [14, 28],
    popupAnchor: [0, -28],
  });

  const load = (key: string) => {
    const data = locationData[key];
    if (!data) return;
    group.clearLayers();
    map.flyTo(data.center, data.zoom, { duration: 1.2 });
    data.markers.forEach((m) => {
      const marker = L.marker([m.lat, m.lng], { icon });
      marker.bindPopup(`<strong>${m.title}</strong><br/><small>${m.city}, ${data.name}</small>`);
      group.addLayer(marker);
    });
  };

  load("up");
  document.querySelectorAll<HTMLElement>(".location-tab-item").forEach((tab) => {
    tab.addEventListener("click", () => {
      document.querySelectorAll(".location-tab-item").forEach((t) => t.classList.remove("active"));
      tab.classList.add("active");
      load(tab.dataset.state ?? "up");
    });
  });
}
