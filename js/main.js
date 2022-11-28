const navbar = document.querySelector(".navbar");
const logoLight = document.querySelector(".logo-light");
const logo = document.querySelector(".logo");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");
//  Последние два пункта кода: При клике на mobile-menu(hamburger) появляется окно.
const isFront = document.body.classList.contains("front-page");

const lightModeOn = (event) => {
  navbar.classList.add("navbar-light");
};
const lightModeOff = (event) => {
  navbar.classList.remove("navbar-light");
};

const changeNavHeight = (height) => {
  navbar.style.height = height;
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
  this.scrollY > 1 ? changeNavHeight("4.5rem") : changeNavHeight("5.875rem"); // Если окно прокручивается больше чем на 1px,сделай 1 условие,иначе выключи. Сокращенная запись,Того кода,что выше!
  if (isFront) {
    this.scrollY > 1 ? lightModeOn() : lightModeOff();
  }
});
// fixed шапка сайта , меняет свой цвет по мере scroll по странице

mMenuToggle.addEventListener("click", (event) => {
  event.preventDefault();
  menu.classList.contains("is-open") ? closeMenu() : openMenu();
});
// Если меню имеет класс is-open открой меню,если нет,то закрой!

const swiper = new Swiper(".swiper", {
  speed: 400,
  // autoHeight: true,
  // loop: true,
  slidesPerView: 1,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    // when window width is >= 400(576)px
    425: {
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
const swiperBlog = new Swiper(".blog-slider", {
  speed: 400,
  slidesPerView: 1,
  loop: true,
  spaceBetween: 30,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
  },  
});

// const modal = document.querySelector(".modal");
// const modalToggle = document.querySelectorAll("[data-toggle=modal]");
// const modalClose = document.querySelector(".modal-close");
// console.log(modalToggle);
// modalToggle.forEach((element) => {
//   element.addEventListener("click", (event) => {
//     event.preventDefault();
//     modal.classList.add("is-open");
//   });
// });
// modalClose.addEventListener("click", (event) => {
//   event.preventDefault();
//   modal.classList.remove("is-open");
// });
//  1 способ открытия и закрытие модального окна

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener("click", (event) => {
  if (
    event.target.dataset.toggle == "modal" ||
    event.target.parentNode.dataset.toggle == "modal" ||
    (!event.composedPath().includes(modalDialog) &&
      modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});
document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
  // Закрытие модального окна с помощью кнопки Escape 
});

const forms = document.querySelectorAll("form"); // собираем формы
forms.forEach((form) => {
  const validation = new JustValidate(form, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=username]", [
      {
        rule: "required",
        errorMessage: "Укажите Имя",
      },
      {
        rule: "maxLength",
        value: 30,
        errorMessage: "Максимально 30 символов",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // Наша форма
      const formData = new FormData(thisForm); // данные из нашей формы
      const ajaxSend = (formData) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formData,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            alert("Форма отправлена!");
          } else {
            alert( "Ошибка. Текста ошибкиЖ " .response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});