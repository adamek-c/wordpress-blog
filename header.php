<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <?php wp_head(); ?>
  </head>
  <body>

    <header>
    <nav>
      <div>
        <a href="<?php echo site_url('') ?>">Hello</a>

        <?php 
          wp_nav_menu(array(
            'theme_location' => 'main-menu',
          ));
        ?>
      </div>
    </nav>
  </header>
  

  
