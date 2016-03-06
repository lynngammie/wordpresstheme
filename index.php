<?php get_header(); ?>

<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
  <div style="background-image:url(<?php echo $url; ?>)" class="page-content">
  </div>

<div class="main">
  <div class="posts-page-container">

    <div class="posts-container">
  		<?php while ( have_posts() ) : the_post(); ?>
				  <div class="post-stuff blog-stuff">
				    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4> 
				    <?php if (has_post_thumbnail( $post->ID ) ): ?>
				    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				    <img src="<?php echo $image[0]; ?>" alt="" />
				    <p><?php the_content(); ?></p>
				  </div>
				          
				  <?php endif; ?>

			
  		<?php endwhile; // end of the loop. ?>

    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>