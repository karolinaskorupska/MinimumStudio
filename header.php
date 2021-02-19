<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Meta -->

    <meta name="description" content="Minimum Studio" />
    <meta name="keywords" content="minimum studio" />
    <!-- put the path to the icon here -->
    <link rel="favicon" href="#" />

    
    <?php wp_head(); ?>

  </head>
  <body>
    <div class="container">
      <div class="header">
        <header>
          <div class="header__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/minimum_logo.png" alt="logo Minimum Studio">
          </div>
          <div clas="header__navigation">
            <div class="header__navigation navigation">
              <nav>
                  <?php 
                    wp_nav_menu(
                      array(
                        'menu' => 'header',
                        'container' =>'',
                        'theme_location' => 'header',
                        'items_wrap'=> '<ul id="" class="header__navigation navigation__ul">%3$s</ul>'
                      )
                    );
                  ?>
                </nav>
            </div> 
            <div class="header__navigation button">BUTTON</div>
          </div>
        </header>
      </div>