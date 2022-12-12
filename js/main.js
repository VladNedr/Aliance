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
  document.body.style.overflow = "hidden"; // Запрещает прокрутку сайта под меню
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

let currentModal; // Текущее модальное окно
let modalDialog; // Белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // Окно с предупреждением

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // Переключатели модальных окон
modalButtons.forEach((button) => {
  // Клик по переключателю
  button.addEventListener("click", (event) => {
    event.preventDefault();
    /* Определяем текущее открытое окно */
    currentModal = document.querySelector(button.dataset.target);
    // открываем текущее окно
    currentModal.classList.toggle("is-open");
    // назначаем диалоговое окно
    modalDialog = currentModal.querySelector(".modal-dialog");
    // отслеживаем клик по окну и пустым областям
    currentModal.addEventListener("click", (event) => {
      // елси клик в пустую белую область (не диалог)
      if (!event.composedPath().includes(modalDialog)) {
        // закрываем окно
        currentModal.classList.remove("is-open");
      }
    });
  });
});
// ловим событие нажатия на кнопки
document.addEventListener("keyup", (event) => {
  //  проверяем что это ECAPE и текущее окно открыто
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    // закрываем текущее окно
    currentModal.classList.toggle("is-open");
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
        rule: "minLength",
        value: 2,
        errorMessage: "Минимально 2 символа",
      },
      {
        rule: "maxLength",
        value: 15,
        errorMessage: "Максимально 15 символов",
      },
      {
        rule: "customRegexp",
        value: /^[A-Za-zА-Яа-яЁё\s]+$/,
        errorMessage: "Неверный формат имени",
      },
    ])
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
      {
        rule: "minLength",
        value: 18,
        errorMessage: "Неверно набран номер",
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
            if (currentModal) {
              currentModal.classList.remove("is-open");
            }
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            // отслеживаем клик по окну и пустым областям
            currentModal.addEventListener("click", (event) => {
              // елси клик в пустую белую область (не диалог)
              if (!event.composedPath().includes(modalDialog)) {
                // закрываем окно
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert("Ошибка. Текста ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formData);
    });
});

// При клике на кнопку в окне благодарности, возвращает на страницу!
let modalThanksButton = document.querySelector(".modal-thanks-button");
modalThanksButton.addEventListener("click", (event) => {
  window.location.reload();
});


/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9 */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 ( */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});
