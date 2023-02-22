<?php 
/*
*This template for displaying the header
 */
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<!--Header Area-->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top d-inline-block">
      <div class="container-fluid">
        <!--<a class="navbar-brand text-success" href="index.html"><img src="<?php /* echo get_template_directory_uri();*/ ?> /resources/img/logo.png" alt=""></a>-->
        <a class="navbar-brand text-success" href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('shakil_logo'); ?>" alt=""></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse justify-content-end" id="navMenu">
          <?php wp_nav_menu(array(
              'theme_location' => 'main_menu', 
              'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
              'before'     => '<li class="nav-item">',
		      'after'      => '</li>',
		      'link_before'=> '<a class="nav-link" href="#">',
		      'link_after' => '</a>',
          )); ?>

          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>

      </div>
   </nav>
</header>