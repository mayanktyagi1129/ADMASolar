const STORAGE_KEY = "adma_theme";

const sunIcon = `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line></svg>`;
const moonIcon = `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;

export function setTheme(theme: "light" | "dark"): void {
  document.documentElement.setAttribute("data-theme", theme);
  localStorage.setItem(STORAGE_KEY, theme);
  document.querySelectorAll(".theme-toggle-btn").forEach((btn) => {
    btn.innerHTML = theme === "dark" ? sunIcon : moonIcon;
  });
}

export function initTheme(): void {
  const stored = localStorage.getItem(STORAGE_KEY);
  setTheme(stored === "dark" ? "dark" : "light");
  document.addEventListener("click", (event) => {
    const target = event.target as HTMLElement | null;
    if (!target?.closest(".theme-toggle-btn")) return;
    const current = document.documentElement.getAttribute("data-theme") === "dark" ? "dark" : "light";
    setTheme(current === "dark" ? "light" : "dark");
  });
}
