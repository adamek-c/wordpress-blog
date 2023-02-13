<?php get_header(); ?>

<div class="container">

  <section>
      <div class="entrance">
        <h1 class="entrance__title"><span class="entrance__title__span">Blogo</span> blog podróżniczy</h1>
        <p class="entrance__text">Blog jest poswięcony podróżowaniu. Przedstawiam kilka miejsc w które warto się wybrać</p>
      </div>
  </section>

  <section>
    <div class="box">
      <div class="introduce">
        <h2 class="introduce__title">Kim jestem?</h2>
        <p class="introduce__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores labore similique nihil accusantium, ullam quos beatae corporis cumque tempora consequatur culpa ducimus qui exercitationem facilis eveniet ex at, illum vero! Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores labore similique nihil accusantium, ullam quos beatae corporis cumque tempora consequatur culpa ducimus qui exercitationem facilis eveniet ex at, illum vero!
        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
      </div>
      <img class="box__img" src="<?php echo get_theme_file_uri('assets/img/me.jpg')?>" alt="Jan Kowalski, który siedzi i ogląda piękny krajobraz">
    </div>
  </section>

  <section>
    <div class="counter">
      <div>
        <h5 class="counter__amout" data-count="time"><span id ="one"></span> tys</h5> 
        <span class="counter__text">Przemierzonych km</span>
      </div>
      <div>
        <h5 class="counter__amout" data-count="time"><spna id ="two"></spna></h5>
        <span class="counter__text">Odwiedzonych miejsc na świecie</span>
      </div>
      <div>
       <h5 class="counter__amout" data-count="time"><span id ="three"></span></h5>
       <span class="counter__text">Nowo poznanych przyjaciół</span>
      </div>
      <div>
        <h5 class="counter__amout" data-count="time"><span id ="four"></span> tys</h5>
        <span class="counter__text">Godziny w drodze</span>
      </div>
    </div>
  </section>

  <section>
    <div class="slider">
      <h2 class="slider__title">Najpiękniejsze miejsca według mnie</h2>
      <div class="slider__container">
        <div class="slider__container__item"></div>
        <div class="slider__container__item" style="background-color: orange;"></div>
        <div class="slider__container__item" style="background-color: red;"></div>
        <div class="slider__container__item" style="background-color: pink;"></div>
        <div class="slider__container__item" style="background-color: purple;"></div>
      </div>
      <div class="slider__arrows">
        <span class="slider__arrows__item slider__arrows__item--left" data-left="left-arrow">
          <svg width="45" height="12" viewBox="0 0 45 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.46967 5.46967C0.176777 5.76256 0.176777 6.23744 0.46967 6.53033L5.24264 11.3033C5.53553 11.5962 6.01041 11.5962 6.3033 11.3033C6.59619 11.0104 6.59619 10.5355 6.3033 10.2426L2.06066 6L6.3033 1.75736C6.59619 1.46447 6.59619 0.989592 6.3033 0.696699C6.01041 0.403806 5.53553 0.403806 5.24264 0.696699L0.46967 5.46967ZM45 5.25L1 5.25V6.75L45 6.75V5.25Z" fill="#0C1213"/>
          </svg>
        </span>
        <span class="slider__arrows__item slider__arrows__item--right" data-right="right-arrow">
          <svg width="45" height="12" viewBox="0 0 45 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M44.5303 6.53033C44.8232 6.23744 44.8232 5.76256 44.5303 5.46967L39.7574 0.696699C39.4645 0.403806 38.9896 0.403806 38.6967 0.696699C38.4038 0.989592 38.4038 1.46447 38.6967 1.75736L42.9393 6L38.6967 10.2426C38.4038 10.5355 38.4038 11.0104 38.6967 11.3033C38.9896 11.5962 39.4645 11.5962 39.7574 11.3033L44.5303 6.53033ZM0 6.75H44V5.25H0V6.75Z" fill="#0C1213"/>
          </svg>
        </span>
      </div>
    </div>
  </section>

  <section>
    <div class="follow">
      <h2 class="follow__title">Follow me on instagram</h2>
      <div class="follow__collections">
        <img class="follow__collections__img" src="<?php echo get_theme_file_uri('assets/img/andy.jpg')?>" alt="Andy">
        <img class="follow__collections__img" src="<?php echo get_theme_file_uri('assets/img/aten.jpg')?>" alt="Ateny">
        <img class="follow__collections__img" src="<?php echo get_theme_file_uri('assets/img/grece.jpg')?>" alt="Grecja">
        <img class="follow__collections__img" src="<?php echo get_theme_file_uri('assets/img/kanion.jpg')?>" alt="Kanion">
        <img class="follow__collections__img" src="<?php echo get_theme_file_uri('assets/img/sahara.jpg')?>" alt="Sahara">
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>