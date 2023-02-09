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
        <h5 class="counter__amout">900 tyś</h5>
        <span class="counter__text">Przemierzonych km</span>
      </div>
      <div>
        <h5 class="counter__amout">20</h5>
        <span class="counter__text">Odwiedzonych miejsc na świecie</span>
      </div>
      <div>
       <h5 class="counter__amout">300</h5>
       <span class="counter__text">Nowo poznanych przyjaciół</span>
      </div>
      <div>
        <h5 class="counter__amout">180 tyś</h5>
        <span class="counter__text">Godziny w drodze</span>
      </div>
    </div>
  </section>

  <section>
    <div class="slider">
      <h2 class="slider__title">Najpiękniejsze miejśca według mnie</h2>
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