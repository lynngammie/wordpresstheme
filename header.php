<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
  <link href='https://fonts.googleapis.com/css?family=Cutive+Mono|Roboto+Mono:400,400italic,300italic,300|Josefin+Sans:400,700,400italic' rel='stylesheet' type='text/css'>

</head>


<body <?php body_class(); ?>>

<header>
  <div class="container">
    <nav>
      <div class="logo">
        <!-- <img src="images/book.png" alt=""> -->
        <img src=" <?php the_field('header_icon'); ?>" alt="">
        <h1>
          <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
            <?php bloginfo( 'name' ); ?>
          </a>
          <h2><?php bloginfo('description'); ?></h2>
        </h1>
      </div>
      <div class="menus">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'menu-left',
        )); ?>
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'menu-right',
        )); ?>
      </div>
    </nav>
  </div> <!-- /.container -->
</header><!--/.header-->

<!-- Icon created by Leadway Global LLC for the Noun Project -->

