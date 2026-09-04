import { bindWizardCalculator, bindZunCalculator } from "./calculator";
import { renderLayout } from "./layout";
import { initTheme } from "./theme";
import {
  initContactForm,
  initFaq,
  initHeroSwipe,
  initIndiaMap,
  initNavbarScroll,
  initScrollAnimations,
} from "./ui";

function boot(): void {
  const page = document.body.dataset.page ?? "home";
  renderLayout(page);
  initTheme();
  initNavbarScroll();
  initScrollAnimations();
  initHeroSwipe();
  bindZunCalculator();
  bindWizardCalculator();
  initContactForm();
  initFaq();
  initIndiaMap();
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", boot);
} else {
  boot();
}
