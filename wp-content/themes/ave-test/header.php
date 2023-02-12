<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Favicon-->
      <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <?php the_custom_logo(); ?>
            <div class="col-6 col-md-4">
              <?php echo do_shortcode( '[ivory-search id="38" title="AJAX Search Form"]' ); ?>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-md-3 col-6 collapse navbar-collapse" id="navbarNav">
               <?php
                  wp_nav_menu( array(
                    'theme_location'    => 'main-menu',
                    'depth'             => 2,
                    'container'         => false,
                    'menu_class'        => 'nav navbar-nav ml-auto',
                  ) );
                  ?>
            </div>
         </div>
      </nav>
      </header>