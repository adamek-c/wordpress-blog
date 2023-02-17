<div class="blog__content__info">
  <?php the_post_thumbnail('post-thumbnails_xl'); ?>
    <div>
      <h4 class="blog__content__info__title"><?php the_title(); ?></h4>
      <p class="blog__content__info__text"><?php  echo wp_trim_words(get_the_content(), 18); ?></p>
      <a class="blog__content__info__link" href="<?php the_permalink(); ?>">Czytaj Dalej</a>
  </div>
</div>