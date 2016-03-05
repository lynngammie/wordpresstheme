<?php get_header();  ?>

<div class="main">
  <div class="container">
<!-- Add a custom hero image to the home page -->
    <div class="page-content" style="background-image:url(<?php the_field('hero_image'); ?>)">
    <!-- Add the custom fields of book cover and book excerpt to the page -->
    </div> <!-- /.container -->

    <div class="cover-gallery clearfix js-flickity" id="cover-gallery">
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
      <div class="cover clearfix">
        <img src="<?php the_field('book_cover_4'); ?>" alt="cookbook cover"/>
        <p><?php the_field('book_excerpt_4'); ?></p>
      </div>
      <div class="cover clearfix">
        <img src="<?php the_field('book_cover_5'); ?>" alt="cookbook cover"/>
        <p><?php the_field('book_excerpt_5'); ?></p>
      </div>
      <div class="cover clearfix">
        <img src="<?php the_field('book_cover_6'); ?>" alt="cookbook cover"/>
        <p><?php the_field('book_excerpt_6'); ?></p>
      </div>
    </div>

    <div class="page-content" style="background-image:url(<?php the_field('hero_image_3'); ?>)">
    </div>

    <div class="blog-container">

    <?php    

      $homeposts = array( 'posts_per_page' => 3 );

      $myposts = new WP_Query( $homeposts ); ?>

      <?php if ( $myposts->have_posts() ) : ?>
    
        <?php while ($myposts->have_posts()) : $myposts->the_post(); ?>
          
      <article class="post">  
        <div class="post-stuff">
          <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
          <p><?php the_content(); ?></p>
        </div>
        <div class="post-image">
        <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <img src="<?php echo $image[0]; ?>" alt="" />        
        <?php endif; ?>

        </div>
      </article>
           
        <?php endwhile; ?>
      <?php endif ?>
        
        <?php wp_reset_postdata(); ?>
     

    </div>

    <div class="page-content" style="background-image:url(<?php the_field('hero_image_2'); ?>)">
    </div>

    <div class="reviews-wrapper">
      <div class="reviews clearfix">
        <h3>Praise for <?php bloginfo( 'name' ); ?></h3>
        <div class="reviews-left clearfix">
          <p class="quote-1"><?php the_field('review_quote_1') ?></p>
          <p class="quote-3"><?php the_field('review_quote_3') ?></p>
          <p class="quote-5"><?php the_field('review_quote_5') ?></p>
        </div>
        <div class="reviews-right clearfix">
          <p class="quote-2"><?php the_field('review_quote_2') ?></p>
          <p class="quote-4">For some reason the php is this field isn't working so for styling purposes I am going to hard code it and fix it laterzz.</p>
          <p class="quote-6"><?php the_field('review_quote_6') ?></p>
        </div>
      </div>
    </div>
    

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>