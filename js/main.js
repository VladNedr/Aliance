const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
//  Последние два пункта кода: При клике на mobile-menu(hamburger) появляется окно.

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
  logo.style.display = "block";
  logoLight.style.display = "none";
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
  logo.style.display = "none";
  logoLight.style.display = "block";
};

const openMenu = (event) => {
  // Функция открывания меню
  menu.classList.add("is-open"); // Вешает класс is-open
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow ="hidden"; // Запрещает прокрутку сайта под меню
  lightModeOn();
};
const closeMenu = (event) => {
  // Функция закрывания меню
  menu.classList.remove("is-open"); // убирает класс is-open
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = ""; // возвращает прокрутку сайта под меню
  lightModeOff();
};

window.addEventListener("scroll", () => {
  // if (this.scrollY > 1) {
  //   navbar.classList.add("navbar-light");
  //   logo.href.baseVal = "img/sprite.svg#logo";
  // } else {
  //   navbar.classList.remove("navbar-light");
  //   logo.href.baseVal = "img/sprite.svg#logo-white";
  // }
  this.scrollY > 1 ? lightModeOn() : lightModeOff(); // Если окно прокручивается больше чем на 1px,сделай 1 условие,иначе выключи. Сокращенная запись,Того кода,что выше!
});
// fixed шапка сайта , меняет свой цвет по мере scroll по странице

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
// Если меню имеет класс is-open открой меню,если нет,то закрой!

const swiper = new Swiper(".swiper", {
  speed: 400,
  autoHeight: true,
  // loop: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 400(576)px
    400: {
      slidesPerView: 2,
    },
    // when window width is >= 768px
    768: {
      slidesPerView: 3,
    },
    // when window width is >= 1024px
    1024: {
      slidesPerView: 4,
    },
    // when window width is >= 1200px
    1200: {
      slidesPerView: 5,
    },
  },
});