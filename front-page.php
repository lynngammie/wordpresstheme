<?php get_header();  ?>

<div class="main">
  <div class="container">
<!-- Add a custom hero image to the home page -->
    <div class="page-content" style="background-image:url(<?php the_field('hero_image'); ?>)">
    <!-- Add the custom fields of book cover and book excerpt to the page -->
      <div class="cover_gallery">
        <?php the_field('book_cover'); ?>
        <?php the_field('book_excerpt'); ?>
      </div>


      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>