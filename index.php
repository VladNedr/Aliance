<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css" />
    <title>Aliance Production</title>
  </head>
  <body class="front-page">
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="/about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="contracts.php" class="mobile-menu-link">Контрактное производство</a>
          <ul class="mobile-submenu">
            <li class="mobile-submenu-item">
              <a href="./avtohim.php" class="mobile-submenu-link">Автомобильная химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Бытовая химия</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Дезинфицирующие средства</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
            </li>
            <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./trademarks.php" class="mobile-menu-link">Собственные марки</a>
          <ul class="mobile-submenu">
              <li class="mobile-submenu-item">
              <a href="./agtech-avtohim.php" class="mobile-submenu-link">Автохимия AG-Tech</a>
            </li>
              <li class="mobile-submenu-item">
              <a href="#" class="mobile-submenu-link">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="#" class="mobile-menu-link">Новости</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./contacts.php" class="mobile-menu-link">Контакты</a>
        </li>
      </ul>
      <a href="tel:74996861014" class="mobile-phone">+7 (499) 686-10-14</a>
      <div class="mobile-info">
        <svg class="map-icon" width="16px" height="16px">
          <use href="img/sprite.svg#map"></use>
        </svg>
        <address class="mobile-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
      </div>
      <div class="mobile-info">
        <svg class="messages-icon" width="16px" height="16px">
          <use href="img/sprite.svg#messages"></use>
        </svg>
        <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">a.dragunov@tdaliance.ru</a>
      </div>
      <div class="mobile-social">
        <a href="#" class="mobile-social-link">
          <svg class="vk-icon" width="16px" height="16px">
            <use href="img/sprite.svg#vk"></use>
          </svg>
        </a>
        <a href="#" class="mobile-social-link">
          <svg class="instagram-icon" width="16px" height="16px">
            <use href="img/sprite.svg#instagram"></use>
          </svg>
        </a>
      </div>
    </div>
    <nav class="navbar"> 
      <div class="mobile-menu-toggle">
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
        <div class="mobile-menu-line"></div>
      </div>
        <a href="./" class="navbar-logo">
          <svg class="logo-svg logo-light" width="140px" height="44px">
            <use href="img/sprite.svg#logo-light"></use>
          </svg>
          <svg class="logo-svg logo-dark" width="140px" height="44px">
            <use href="img/sprite.svg#logo"></use>
          </svg>
        </a>
        <ul class="navbar-nav">
          <li class="navbar-nav-item">
            <a href="/about.php" class="navbar-nav-link">О компании</a>
          </li>
          <li class="navbar-nav-item">
            <a href="/contracts.php" class="navbar-nav-link">Контрактное производство</a>
          </li>
          <li class="navbar-nav-item">
            <a href="./trademarks.php" class="navbar-nav-link">Собственные торговые марки</a>
          </li>
          <li class="navbar-nav-item">
            <a href="#" class="navbar-nav-link">Новости</a>
          </li>
          <li class="navbar-nav-item">
            <a href="./contacts.php" class="navbar-nav-link">Контакты</a>
          </li>
        </ul>
        <div class="navbar-phone">
          <svg class="phone-svg" width="24px" height="24px">
            <use href="img/sprite.svg#phone"></use>
          </svg>
          <a href="tel:+7496861014" class="navbar-phone-link">+7 (499) 686-10-14</a>
        </div>
        <button class="button navbar-button" data-toggle="modal" data-target="#feedback-modal" >
            <svg class="button-icon" width="24px" height="24px">
            <use href="img/sprite.svg#phone"></use>
          </svg>
          <span class="button-text">Получить консультацию</span>
        </button>
    </nav>
      <!-- /.navbar -->
    <header class="header header-image">
      <div class="container">
        <div class="header-content">
          <div class="seporator"></div>
          <h1 class="header-title">Комплексное обеспечение товарами и расходными материалами бизнеса</h1>
          <p class="header-text">Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.</p>
          <button class="button header-button" data-toggle="modal" data-target="#feedback-modal" >Подробнее о компании</button>
        </div>
          <!-- /.header-content -->

        <!-- основной болок слайдера -->
        <div class="swiper">
          <!-- Обертка слайдера -->
          <ul class="swiper-wrapper header-features">
            <!-- Slides -->
            <li class="swiper-slide header-features-item">
              <svg class="time-svg" width="28px" height="28px">
                <use href="img/sprite.svg#time"></use>
              </svg> 
              <p class="header-features-text">Непрерывная работа  c 2017 года</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="document-svg" width="28px" height="28px">
                <use href="img/sprite.svg#document"></use>
              </svg>
              <p class="header-features-text">Вся продукция сертифицирована</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="people-svg" width="28px" height="28px">
                  <use href="img/sprite.svg#people"></use>
              </svg>
              <p class="header-features-text">Контроль качества на всех этапах</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="cars-svg" width="28px" height="28px">
                <use href="img/sprite.svg#car"></use>
              </svg>
              <p class="header-features-text">Возможны поставки по всей России</p>
            </li>
            <li class="swiper-slide header-features-item">
              <svg class="runs-svg" width="28px" height="28px">
                <use href="img/sprite.svg#runs"></use>
              </svg>
              <p class="header-features-text">Оперативное производство</p>
            </li>
          </ul>

          <!-- кнопки навигации -->
          <div class="slider-buttons">
            <div class="slider-button-prev">
              <svg class="arrow-prev" width="36px" height="24px">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
                <svg class="arrow-next" width="36px" height="24px">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </header>
    <!-- /.header -->

    <section class="section section-light">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title">Cхема работы</h2>

        <div class="swiper ">
          <!-- Additional required wrapper -->
          <ol class="swiper-wrapper steps">
            <!-- Slides -->
            <li class="swiper-slide steps-item">
              <span class="steps-number">01</span>
              <h3 class="steps-title">Знакомство</h3>
              <p class="steps-text">Безусловно, сплочённость команды профессионалов позволяет оценить значение форм воздействия.</p>
              <a  class="button-link" data-toggle="modal" data-target="#feedback-modal">Оставить заявку</a>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-number">02</span>
              <h3 class="steps-title">Заключение <br> договора</h3>
              <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.</p>
            </li>
            <li class="swiper-slide steps-item">
              <span class="steps-number">03</span>
              <h3 class="steps-title">Производство</h3>
              <p class="steps-text">А также стремящиеся вытеснить традиционное производство, нанотехнологии функционально разнесены на независимые элементы.</p>
            </li>
              <li class="swiper-slide steps-item">
              <span class="steps-number">04</span>
              <h3 class="steps-title">Доставка</h3>
              <p class="steps-text">В частности, экономическая повестка сегодняшнего дня говорит о возможностях приоритизации  разума над эмоциями.</p>
              </li>
          </ol>
          <!-- If we need navigation buttons -->
          <div class="steps-buttons  ">
            <div class="slider-button-prev ">
              <svg class="arrow-prev" width="36px" height="24px">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="slider-button-next">
                <svg class="arrow-next" width="36px" height="24px">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- /.section-steps -->

    <?php $block_title = "Контрактное Производсвто";
     include_once('./template-parts/production-block.php')?>

    <?php $brand_title = "Собственные торговые марки";
     include_once('./template-parts/brands-blocks.php')?>

    <section class="section founder">
      <img src="img/founder_bg.jpg" alt="founder" class="founder-photo">
      <div class="container">
        <div class="founder-content-wrapper">
          <div class="founder-content">
            <div class="seporator"></div>
            <h2 class="section-title founder-title">Отношение к делу <br> и к клиентам</h2>
            <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия. <br> <br>
            А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.
            </p>
            <a href="./about.php" class="button-link">Подробнее о компании</a>
          </div>
        </div> 
      </div>
    </section>
    <!--/ section founder -->
    <section class="section clients">
      <div class="container">
        <div class="seporator"></div>
        <div class="clients-wrapper">
          <div class="clients-content">
            <h2 class="section-title clients-title">Производим аэрозольную продукцию для разных сфер</h2>
            <ul class="clients-list">
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#him"></use>
                </svg>
                Химические производства
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#auto"></use>
                </svg>
                Автомойки
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#eat"></use>
                </svg>
                Пищевая продукция
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#brush"></use>
                </svg>
                Лаки и краски
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#cosmetic"></use>
                </svg>
                Косметические средства
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#car-cosmetic"></use>
                </svg>
                Автомобильная косметика
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#shirt"></use>
                </svg>
                Косметика по уходу за одеждой
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#boots"></use>
                </svg>
                Косметика по уходу за обувью
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#bricks"></use>
                </svg>
                Строительные материалы
              </li>
              <li class="clients-list-item">
                <svg class="clients-list-logo" width="30px" height="30px">
                  <use href="img/sprite.svg#more"></use>
                </svg>
                И многих других
              </li>
            </ul>
          </div>
          <div class="clients-logo-list">
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
            <a class="clients-logo-item"><img src="img/clients-logo-color.png" alt="clients logo" class="clients-logo"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- /.section clients -->
    <section class="section blog">
      <div class="container">
        <div class="seporator"></div>
        <h2 class="section-title blog-title">Блог экспертов в области производства</h2>
        <!-- Slider main container -->
        <div class="swiper blog-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <a href="./modern-methodology.php" class="swiper-slide blog-card">
              <img src="img/blog/laboratory.png" alt="lab" class="blog-card-image">
              <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
              <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
            </a>
            <a href="./modern-methodology.php" class="swiper-slide blog-card">
              <img src="img/blog/piping.png" alt="piping" class="blog-card-image">
              <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
              <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
            </a>
          </div>
          <!-- If we need navigation buttons -->
          <div class="blog-slider-footer">
            <a href="./blog.php" class="button-link">Весь блог</a>
            <div class="blog-buttons">
            <div class="blog-button-prev ">
              <svg class="arrow-prev" width="36px" height="24px">
                <use href="img/sprite.svg#arrow-prev"></use>
              </svg>
            </div>
            <div class="blog-button-next ">
                <svg class="arrow-next" width="36px" height="24px">
                <use href="img/sprite.svg#arrow-next"></use>
              </svg>
            </div>
            </div>
          </div>
        </div>
      </div>
      <!--/ container  -->
    </section> 
    <!--/ section-blog -->

    <?php include_once('./template-parts/footer.php');?>