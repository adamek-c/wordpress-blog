
  <?php if(is_active_sidebar('sidebar-1')) : ?>
    <?php dynamic_sidebar('sidebar-1');?>
  <?php else : ?>
    <aside>
      <div>
        <h3 class>3 miejsca które warto zwiedzić</h3>
        <ul>
          <?php 
            $specificsPosts = new WP_Query(array(
              'post_type' => 'post',
              'post__in' => array(15,45,39),
              'post_status' => 'publish',
            ));

            if($specificsPosts->have_posts()): 
              while($specificsPosts->have_posts()) : $specificsPosts->the_post(); ?> 
                <li>
                  <a href="<?php the_permalink() ?>">
                    <?php 
                      if(has_post_thumbnail()) :
                        the_post_thumbnail('post-thumbnails');
                      endif;
                    ?>
                    <h5><?php the_title(); ?></h5>
                  </a>
                </li>
              <?php endwhile; ?>
              <?php  wp_reset_postdata(); ?>
            <?php endif; 
          ?>
        </ul>
      </div>
      <div>
        <h5>Kategorie</h5>
        <ul>
          <?php 
            wp_list_categories(array(
              'orderby' => 'name',
              'title_li' => ''
            ));
          ?>
        </ul>
      </div>
    </aside>
<?php endif; ?>

