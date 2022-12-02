<?php
$page_title = 'Блог';
include_once('./template-parts/header-page.php');?>
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
          <div class="blog-slider-footer fixed-justify">
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