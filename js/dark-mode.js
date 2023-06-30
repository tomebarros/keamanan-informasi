// dark-mode
const themeToggleBtn = document.querySelector("#theme-toggle");
const theme = localStorage.getItem("theme");

if (theme) {
  document.body.classList.add(theme);
  themeToggleBtn.classList.remove("fa-moon");
  themeToggleBtn.classList.add("fa-sun");
}
themeToggleBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");

  if (document.body.classList.contains("dark-mode")) {
    localStorage.setItem("theme", "dark-mode");
    themeToggleBtn.classList.remove("fa-moon");
    themeToggleBtn.classList.add("fa-sun");
  } else {
    localStorage.removeItem("theme");
    themeToggleBtn.classList.add("fa-moon");
    themeToggleBtn.classList.remove("fa-sun");
  }
});
