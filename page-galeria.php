<?php get_header(); ?>

  <section>
    <div class="container">
      <div class="gallery">
        <?php 
          $blogposts = new WP_Query(array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
            ));

          if($blogposts->have_posts()) : ?>
          <?php
            while($blogposts->have_posts()) : $blogposts->the_post(); ?>
              <div class="gallery__item" data-gallery="modal" >
                <?php the_post_thumbnail();  ?>
              </div>
          <?php endwhile;
          endif;  
        ?>
      </div>
    </div>
  </section>

  <section>
    <div class="modal">
      <span class="modal__close">
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.418419 0.418419C0.976311 -0.139473 1.88083 -0.139473 2.43872 0.418419L10 7.9797L17.5613 0.418419C18.1192 -0.139473 19.0237 -0.139473 19.5816 0.418419C20.1395 0.976311 20.1395 1.88083 19.5816 2.43872L12.0203 10L19.5816 17.5613C20.1395 18.1192 20.1395 19.0237 19.5816 19.5816C19.0237 20.1395 18.1192 20.1395 17.5613 19.5816L10 12.0203L2.43872 19.5816C1.88083 20.1395 0.976311 20.1395 0.418419 19.5816C-0.139473 19.0237 -0.139473 18.1192 0.418419 17.5613L7.9797 10L0.418419 2.43872C-0.139473 1.88083 -0.139473 0.976311 0.418419 0.418419Z" fill="white"/>
        </svg>
      </span>
      <div class="modal__picture">
        <img src="" alt="">
      </div>
    </div>
  </section>

<?php get_footer(); ?>
