<?php get_header();  ?>

<div class="main">
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <?php endif; ?>
    <div style="background-image:url(<?php echo $image[0]; ?>)" class="page-content">
    </div>
      <div class="page-container start-scroll">
      <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <!-- <h2><?php  
          $title = get_the_title();
          echo $title;?></h2> -->

          <p><?php the_content(); ?></p>

        <?php endwhile; // end the loop?>
        <div class="books-container">
          <img src="<?php the_field('book_cover'); ?>" alt="">
          <img src="<?php the_field('book_cover_2'); ?>" alt="">
          <img src="<?php the_field('book_cover_3'); ?>" alt="">
          <img src="<?php the_field('book_cover_4'); ?>" alt="">
          <img src="<?php the_field('book_cover_5'); ?>" alt="">
          <img src="<?php the_field('book_cover_6'); ?>" alt="">
        </div>

    </div> <!-- /.container -->


</div> <!-- /.main -->

<?php get_footer(); ?>