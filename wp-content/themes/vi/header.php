<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title><?php bloginfo('description'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700,800" rel="stylesheet">
    <script src="https://use.fontawesome.com/825d01d0f3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="wrapper">
      <header>
        <a href="index.html">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/vi_logo.png" alt="Video Institute Logo">
        </a>
      </header>
        <?php wp_nav_menu(array(
      'theme_location'	=> 'primary',
      'container'				=> 'nav',
      'container_id'		=> 'menu',
            'container_class' => 'container nav-container'
        ));
        // This block above displays the primary menu. We can manage these links in the WP-Admin>Appearance>Menus.
        ?>
