<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
	
    <div class="inner-title-wrap">
      <div class="inner-title-box tprof">
      <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header><!-- .entry-header -->
      </div>
    </div>
        
    <div id="profile-info-wrap clearfix">
    
        <div id="content" class="clearfix">
        	<?php if ( has_post_thumbnail()) : ?>
       			<div class="profile-thumb col300"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full' ); ?></a></div>
            <?php else :?>
            	<div class="profile-thumb pdefault col300"></div>
   			<?php endif; ?>
            
            <div id="main" class="col620 clearfix pcont" role="main">
    
                <?php get_template_part( 'content', 'single-people' ); ?>
    
                <?php wp_jurist_content_nav( 'nav-below' ); ?>
    
            </div> <!-- end #main -->
    
        </div> <!-- end #content -->
    
    </div>
    
<?php endwhile; // end of the loop. ?>
    
<?php get_footer(); ?>