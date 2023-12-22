// target the button using the data attribute we added earlier
const button = document.querySelector("[data-theme-toggle]");

button.addEventListener("click", () => {
  let  currentThemeSetting = localStorage.getItem('theme')
  const newTheme = currentThemeSetting === "dark" ? "light" : "dark";

  document.querySelector("html").setAttribute("data-theme", newTheme);

  // update in local storage
  localStorage.setItem("theme", newTheme);

  // update the currentThemeSetting in memory
  currentThemeSetting = newTheme;
});

const LoadTheme = () => {
    let  currentThemeSetting = localStorage.getItem('theme')
    document.querySelector("html").setAttribute("data-theme", currentThemeSetting || 'light');
}