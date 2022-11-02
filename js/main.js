const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
//  Последние два пункта кода: При клике на mobile-menu(hamburger) появляется окно.


window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo";
  } else {
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo-white";
  }
});
//  JS - fixed шапка сайта , меняет свой цвет по мере scroll по странице

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.toggle('is-open');
});
//  Тоже относится к hamburger, при клике выводит мобильное меню!