<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="inner-title-wrap">
      <div class="inner-title-box">
	  <header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	  </header><!-- .entry-header -->
      </div>
    </div>

    <div id="content" class="clearfix sbfix pgsb">
        
        <div id="main" class="col620 clearfix" role="main">
				
			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

        </div> <!-- end #main -->

        <?php get_sidebar('page'); ?>

    </div> <!-- end #content -->
    
<?php endwhile; // end of the loop. ?>   
     
<?php get_footer(); ?>