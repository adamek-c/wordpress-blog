<?php get_header(); ?>

  <div class="container">
    <div class="single-post">
      <div class="single-post__content">
        <?php 
          if(have_posts()) :
            while(have_posts()) : the_post() ?>
              <h1 class="single-post__content__title"><?php the_title(); ?></h1>
              <?php the_post_thumbnail('large'); ?>
              <div class="single-post__content__text">
                <?php the_content(); ?>
              </div>
            <?php endwhile;
          endif; 
        ?>
      </div>
      <div>
        <?php get_sidebar('sidebar-1'); ?>
      </div>
    </div>
  </div>


<?php get_footer(); ?>