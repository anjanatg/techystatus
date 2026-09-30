// Moon / sun button in the header: switch between light and dark mode.
// The saved theme is applied in the layout <head>, so the page does not flash.

document.addEventListener("DOMContentLoaded", () => {
  const button = document.getElementById("theme-toggle");
  if (!button) return;

  showIcon(button);

  button.addEventListener("click", (event) => {
    event.preventDefault();
    const next = document.documentElement.dataset.bsTheme === "dark" ? "light" : "dark";
    document.documentElement.setAttribute("data-bs-theme", next);
    localStorage.setItem("theme", next);
    showIcon(button);
  });
});

// Moon in light mode, sun in dark mode
function showIcon(button) {
  const isDark = document.documentElement.dataset.bsTheme === "dark";
  button.querySelector("i").className = isDark ? "bi bi-sun-fill" : "bi bi-moon-fill";
}