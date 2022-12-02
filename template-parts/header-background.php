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
    <title> <?= $page_title ?> - Aliance Production</title>
  </head>
  <body>
    <div class="mobile-menu">
      <ul class="mobile-menu-nav">
        <li class="mobile-menu-nav-item">
          <a href="/about.php" class="mobile-menu-link">О компании</a>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="/contracts.php" class="mobile-menu-link">Контрактное производство</a>
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
              <a href="./agtech-avtohim.php" class="mobile-submenu-link">Автохимия AP</a>
            </li>
          </ul>
        </li>
        <li class="mobile-menu-nav-item">
          <a href="./news.php" class="mobile-menu-link">Новости</a>
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
    <nav class="navbar navbar-light"> 
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
            <a href="./about.php" class="navbar-nav-link">О компании</a>
          </li>
          <li class="navbar-nav-item">
            <a href="./contracts.php" class="navbar-nav-link">Контрактное производство</a>
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
        <button class="button navbar-button" data-toggle="modal" data-target="#feedback-modal">
            <svg class="button-icon" width="24px" height="24px">
            <use href="img/sprite.svg#phone"></use>
          </svg>
          <span class="button-text">Получить консультацию</span>
        </button>
    </nav>
    <header class="header-blog">
      <div class="header-about-content header-blog-background">
        <div class="container ">
          <div class="seporator"></div>
          <div class="blog-background-content">
            <h1 class="header-blog-title header-blog-title-white"><?= $page_title ?></h1>
            <ul class="breadcrumbs">
              <li class="breadcrumbs-list"><a href="/index.php" class="breadcrumbs-link breadcrumbs-link-white ">Главная</a></li>
              <li class="breadcrumbs-list"><a href="/blog.php" class="breadcrumbs-link breadcrumbs-link-white ">Блог</a></li>
              <li class="breadcrumbs-list"><a href="#" class="breadcrumbs-link breadcrumbs-link-white"><?= $page_title ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>