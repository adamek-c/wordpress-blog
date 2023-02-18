  <?php 
    if(have_posts()) :
      while(have_posts()) : the_post() ?>
        <h1 class="single-post__content__title"><?php the_title(); ?></h1>
          <?php 
             if(get_field('time_read')) { ?>
              <span class="single-post__content__time">Time read <strong><?php echo get_field('time_read'); ?></strong> min</span>
            <?php }
            if('post' === get_post_type()) { ?>
            <div class="single-post__content__category">
              <?php
                $categorys = get_the_category();
                if ($categorys) {
                  foreach($categorys as $tag) {
                    echo '#'. $tag->name . ' '; 
                  }
                }
              ?>
              </div>
              <div class="single-post__content__tags">
                <?php
                  $posttags = get_the_tags();
                  if ($posttags) {
                    foreach($posttags as $tag) {
                      echo '#'. $tag->name . ' '; 
                    }
                  }
                ?>
              </div>
            <?php }
            if(get_field('price_place')) { ?>
              <span><strong>|</strong></span>
              <span class="single-post__content__time">Cost <strong><?php echo get_field('price_place'); ?></strong> PLN</span>
            <?php }
          ?>
        <?php the_post_thumbnail('large'); ?>
        <div class="single-post__content__text">
          <?php the_content(); ?>
        </div>
      <?php endwhile;
    endif; 
  ?>
    