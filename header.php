<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php cinema24_navbar_before();?>
<nav id="site-navbar" class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">

    <?php cinema24_navbar_brand();?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarDropdown">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'navbar',
          'container'       => false,
          'menu_class'      => '',
          'fallback_cb'     => '__return_false',
          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto %2$s">%3$s</ul>',
          'depth'           => 2,
          'walker'          => new cinema24_walker_nav_menu()
        ) );
      ?>

      <?php cinema24_navbar_search();?>
    </div>

  </div>
</nav>
<?php cinema24_navbar_after();?>
