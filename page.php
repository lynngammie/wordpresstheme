<?php get_header();  ?>

<div class="main">
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <?php endif; ?>
    <div style="background-image:url(<?php echo $image[0]; ?>)" class="page-content">
    </div>
    </p>
      <div class="page-container start-scroll">
      <?php // Start the loop ?>
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <p class="testing" value="<?php the_title();?>">
        <p><?php the_content(); ?></p>

        <?php endwhile; // end the loop?>

        <div class="books-container">
          <img class="grid-item" src="<?php the_field('book_cover'); ?>" alt="">
          <img class="grid-item" src="<?php the_field('book_cover_2'); ?>" alt="">
          <img class="grid-item" src="<?php the_field('book_cover_3'); ?>" alt="">
          <p class="grid-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque placeat esse sint. Voluptas tempore aliquid optio cumque dolor nisi saepe quidem iste, facilis vel eveniet tenetur, maxime velit, sint, perferendis.</p>
          <img class="grid-item" src="<?php the_field('book_cover_4'); ?>" alt="">
          <img class="grid-item" src="<?php the_field('book_cover_5'); ?>" alt="">
          <img class="grid-item" src="<?php the_field('book_cover_6'); ?>" alt="">
          <p class="grid-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque placeat esse sint. Voluptas tempore aliquid optio cumque dolor nisi saepe quidem iste, facilis vel eveniet tenetur, maxime velit, sint, perferendis. Voluptas tempore aliquid optio cumque dolor nisi saepe quidem iste, facilis vel eveniet tenetur, maxime velit, sint, perferendis.</p>
          <img src="http://blog.kimhooperwrites.com/wp-content/uploads/sites/3/2015/04/book-cover-8.jpg" alt="" class="grid-item">
          <img src="https://s3.amazonaws.com/bp5-legacy/the-book-case/wp-content/uploads/2013/12/goldfinch.jpg" alt="" class="grid-item">
          <img src="http://cdn.shopify.com/s/files/1/0276/4619/products/9781770892712.jpg?v=1417792868" alt="" class="grid-item">
          <p class="grid-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque placeat esse sint. Voluptas tempore aliquid optio cumque dolor nisi saepe quidem iste, facilis vel eveniet tenetur, maxime velit, sint, perferendis.</p>
          <img src="https://nationalpostarts.files.wordpress.com/2011/05/sister.jpg" alt="" class="grid-item">
          <img src="http://cdn.shopify.com/s/files/1/0719/2207/products/9781770413184_large.jpg?v=1450451261" alt="" class="grid-item">
        </div>

    </div> <!-- /.container -->


</div> <!-- /.main -->

<?php get_footer(); ?>
