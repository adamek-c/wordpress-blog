<?php get_header(); ?>

  <div class="container">
    <div class="single-post">
      <div class="single-post__content">
        <?php get_template_part('template-parts/single-post');?>
      </div>
       <aside class="sidebar">
        <?php get_sidebar('sidebar-places'); ?>
      </aside>
    </div>
    <?php get_template_part('template-parts/social'); ?>
  </div>


<?php get_footer(); ?>