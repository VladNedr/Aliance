<?php
$page_title = 'Контакты';
include_once('./template-parts/header-page.php');?>
    <div class="container">
      <div class="footer-top">
        <a href="tel:+74996861014" class="footer-phone">+7 (999) 686-10-14</a>
        <div class="footer-info">
          <svg class="map-icon" width="16px" height="16px">
            <use href="img/sprite.svg#map"></use>
          </svg>
          <address class="footer-info-address">г. Мосвка, Холодильный пер. 4к1с8</address>
        </div>
        <div class="footer-info">
          <svg class="messages-icon" width="16px" height="16px">
            <use href="img/sprite.svg#messages"></use>
          </svg>
          <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">a.dragunov@tdaliance.ru</a>
        </div>
        <div class="footer-social">
          <a href="#" class="footer-social-link">
            <svg class="vk-icon" width="16px" height="16px">
            <use href="img/sprite.svg#vk"></use>
            </svg>
          </a>
          <a href="#" class="footer-social-link">
            <svg class="instagram-icon" width="16px" height="16px">
              <use href="img/sprite.svg#instagram"></use>
            </svg>
          </a>
        </div>
      </div>
      <iframe class="footer-maps" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2689.94769308195!2d37.623095254921424!3d55.70857351208129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sru!4v1669970501286!5m2!1sru!2sru" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
<?php include_once('./template-parts/footer.php');?>