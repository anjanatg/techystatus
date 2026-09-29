// Loads shared parts (header, navbar, footer) into every page.
// Use the same line on every page, whatever folder it is in:
//   <div data-include="partials/header.html"></div>
// Needs a local server (e.g. VS Code "Live Server"); it won't work by double-clicking the file.

// The site root is two folders above this file (assets/js/include.js)
const SITE_ROOT = new URL("../../", document.currentScript.src);

// Apply the saved theme straight away ("light" or "dark") so the page does not flash
document.documentElement.setAttribute("data-bs-theme", localStorage.getItem("theme") || "light");

document.addEventListener("DOMContentLoaded", async () => {
  for (const place of document.querySelectorAll("[data-include]")) {
    const file = place.dataset.include.replace(/^(\.\.\/)+/, ""); // ignore any leading ../
    const response = await fetch(new URL(file, SITE_ROOT));
    place.innerHTML = await response.text();
    fixLinks(place);
  }
  setupThemeToggle();
  markActiveLink();
});

// Links inside the shared files are written from the site root
// (for example "pcandmobile/ios.html"). Make them work from any folder.
function fixLinks(place) {
  place.querySelectorAll("a[href]").forEach((link) => {
    const href = link.getAttribute("href");
    if (/^(#|[a-z]+:|\/)/i.test(href)) return; // skip #, http:, mailto:, /...
    link.setAttribute("href", new URL(href, SITE_ROOT).href);
  });
}

// Highlights the menu link that matches the current page
function markActiveLink() {
  const current = normalize(location.pathname);
  const folder = current.slice(0, current.lastIndexOf("/") + 1);

  document.querySelectorAll(".navbar a[href]").forEach((link) => {
    if (link.getAttribute("href") === "#") return;
    if (normalize(new URL(link.href).pathname) !== current) return;

    link.classList.add("active");

    // If it is inside a dropdown, highlight the dropdown title too
    const menu = link.closest(".dropdown-menu");
    if (menu) menu.previousElementSibling.classList.add("active");
  });

  // Landing pages such as development/index.html are not in the menu,
  // so highlight the dropdown whose links live in the same folder.
  if (folder === SITE_ROOT.pathname) return;
  document.querySelectorAll(".navbar .dropdown").forEach((dropdown) => {
    const sameFolder = [...dropdown.querySelectorAll(".dropdown-item")]
      .some((item) => new URL(item.href).pathname.startsWith(folder));
    if (sameFolder) dropdown.querySelector(".dropdown-toggle").classList.add("active");
  });
}

function normalize(path) {
  return path.endsWith("/") ? path + "index.html" : path;
}

// Moon / sun button in the header: switch between light and dark mode
function setupThemeToggle() {
  const button = document.getElementById("theme-toggle");
  if (!button) return;

  showThemeIcon(button);

  button.addEventListener("click", (event) => {
    event.preventDefault();
    const next = document.documentElement.dataset.bsTheme === "dark" ? "light" : "dark";
    document.documentElement.setAttribute("data-bs-theme", next);
    localStorage.setItem("theme", next);
    showThemeIcon(button);
  });
}

// Moon in light mode, sun in dark mode
function showThemeIcon(button) {
  const isDark = document.documentElement.dataset.bsTheme === "dark";
  button.querySelector("i").className = isDark ? "bi bi-sun-fill" : "bi bi-moon-fill";
}