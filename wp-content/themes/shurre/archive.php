<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ShUrRe
 */

 get_header(); ?>
  <div class="row">
  <div id="primary" class="content-area col s12 m8 l9">
  <main id="main" class="site-main" role="main">

  <?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'content', 'single' ); ?>

  <?php the_post_navigation(); ?>

  <?php
  // If comments are open or we have at least one comment, load up the comment template
  if ( comments_open() || get_comments_number() ) :
  comments_template();
  endif;
  ?>

  <?php endwhile; // end of the loop. ?>

  </main><!-- #main -->
  </div><!-- #primary -->

 <?php get_sidebar(); ?>
 </div>
 <?php get_footer(); ?>