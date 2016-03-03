<?php get_header();  ?>

<div class="main">
  <div class="container">
<!-- Add a custom hero image to the home page -->
    <div class="page-content" style="background-image:url(<?php the_field('hero_image'); ?>)">
    <!-- Add the custom fields of book cover and book excerpt to the page -->
    </div> <!-- /.container -->

    <div class="cover-gallery clearfix">
      <div class="cover clearfix">
        <img src="<?php the_field('book_cover'); ?>" alt="cookbook cover"/>
        <p><?php the_field('book_excerpt'); ?></p>
      </div>
      <div class="cover clearfix">
        <img src="<?php the_field('book_cover_2'); ?>" alt="cookbook cover"/>
        <p><?php the_field('book_excerpt_2'); ?></p>
      </div>
      <div class="cover clearfix">
        <img src="<?php the_field('book_cover_3'); ?>" alt="cookbook cover"/>
        <p><?php the_field('book_excerpt_3'); ?></p>
      </div>
    </div>

    <div class="blog-container">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        hello?
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div>

    <div class="reviews">
      <div class="reviews-left">
        <p class="quote-1"><?php the_field('review_quote_1') ?></p>
        <p class="quote-3"><?php the_field('review_quote_3') ?></p>
        <p class="quote-5"><?php the_field('review_quote_5') ?></p>
      </div>
      <div class="reviews-right">
        <p class="quote-2"><?php the_field('review_quote_2') ?></p>
        <p class="quote-4"><?php the_field('review_quote_4') ?></p>
        <p class="quote-6"><?php the_field('review_quote_6') ?></p>
      </div>
    </div>
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>