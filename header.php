<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <?php wp_head(); ?>
</head>
<body>

  <header>
    <nav>
      <div class="container">
        <div class="nav__menu">
          <a class="nav__menu__logo" href="<?php echo site_url('') ?>">Blogo</a>

          <?php 
            wp_nav_menu(array(
              'theme_location' => 'main-menu',
            ));
          ?>
        </div>
      </div>
    </nav>
  </header>
  <main>
