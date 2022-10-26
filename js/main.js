const navbar = document.querySelector(".navbar");
window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
  } else {
    navbar.classList.remove("navbar-light");
  }
});
//  JS - fixed шапка сайта , меняет свой цвет по мере scroll по странице