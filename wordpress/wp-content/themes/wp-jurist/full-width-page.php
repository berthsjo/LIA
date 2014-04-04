<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 */
get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="inner-title-wrap">
      <div class="inner-title-box">
	  <header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	  </header><!-- .entry-header -->
      </div>
    </div>

    <div id="content" class="clearfix full-width-content">
        
        <div id="main" class="clearfix" role="main">

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

		</div>
        
	</div>
    
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>