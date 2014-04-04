<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="inner-title-wrap">
      <div class="inner-title-box">
	  <header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<?php wp_jurist_posted_on(); ?>
		</div><!-- .entry-meta -->
	  </header><!-- .entry-header -->
      </div>
    </div>

    <div id="content" class="clearfix sbfix">
        
        <div id="main" class="col620 clearfix" role="main">

				<?php get_template_part( 'content', 'single' ); ?>

				<?php wp_jurist_content_nav( 'nav-below' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
				?>

        </div> <!-- end #main -->

        <?php get_sidebar(); ?>

    </div> <!-- end #content -->
<?php endwhile; // end of the loop. ?>        
<?php get_footer(); ?>