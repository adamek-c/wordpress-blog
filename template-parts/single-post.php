  <?php 
    if(have_posts()) :
      while(have_posts()) : the_post() ?>
        <h1 class="single-post__content__title"><?php the_title(); ?></h1>
          <?php 
            if(get_field('time_read')) { ?>
              <span class="single-post__content__time">Time read <strong><?php echo get_field('time_read'); ?></strong> min</span>
            <?php }
          ?>
        <?php the_post_thumbnail('large'); ?>
        <div class="single-post__content__text">
          <?php the_content(); ?>
        </div>
      <?php endwhile;
    endif; 
  ?>
    