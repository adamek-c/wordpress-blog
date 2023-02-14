<?php get_header(); ?>

  <div class="container">
   <div class="blog">
      <div class="blog__content">
        <?php 
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $blogposts = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 7,
            'post_status' => 'publish',
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => $paged,
          ));

          if($blogposts->have_posts()) : ?>
            <?php  
              while($blogposts->have_posts()) : $blogposts->the_post() ?>
              <div class="blog__content__info">
                <?php the_post_thumbnail('post-thumbnails_xl'); ?>
                <div>
                  <h4 class="blog__content__info__title"><?php the_title(); ?></h4>
                  <p class="blog__content__info__text"><?php  echo wp_trim_words(get_the_content(), 18); ?></p>
                  <a class="blog__content__info__link" href="<?php the_permalink(); ?>">Czytaj Dalej</a>
                </div>
              </div>
              <?php endwhile; ?>
              <div class="blog__content__paginate">
                <?php 
                  $big = 999999999; 
                
                  echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $blogposts->max_num_pages,
                    'prev_text' => '<<',
                    'next_text' => '>>',

                  ) );
                ?>
              </div>
           <?php ?>
            <?php wp_reset_postdata(); ?>
            <?php endif;
          ?>
      </div>
      <?php get_sidebar();?>
    </div> 
  </div>

<?php get_footer(); ?>
