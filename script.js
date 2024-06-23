// Toggle class active

const navbarNav = document.querySelector(".my-navbar-nav");
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Klik Di luar
const Menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!Menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});
