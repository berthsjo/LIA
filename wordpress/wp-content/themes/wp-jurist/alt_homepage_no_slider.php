<?php 
/**
 * Template Name: Alt_Blog, NO Slider
 * Description: Alternative homepage template without slider, but displays a welcome/intro text above the mason style post layout.
 */
get_header(); ?>

	 <?php while ( have_posts() ) : the_post(); ?>
      <div class="intro-copy-box">
        <?php get_template_part( 'content', 'intro' ); ?>
      </div>
    <?php endwhile; // end of the loop. ?>
    <?php wp_reset_postdata(); ?>

    <div id="content" class="clearfix">
        
        <div id="main" class="clearfix" role="main">
        
        	<?php 
				if ( get_query_var('paged') ) {
                        $paged = get_query_var('paged');
                } elseif ( get_query_var('page') ) {
                        $paged = get_query_var('page');
                } else {
                        $paged = 1;
                }
				
				$args = array(
					'ignore_sticky_posts' => 1,
					'paged' => $paged
				);
				$alt_posts = new WP_Query($args);
			?>
            
			<?php if ( $alt_posts->have_posts() ) : ?>
            	<div id="grid-wrap" class="clearfix">
				<?php /* Start the Loop */ ?>
				<?php while ( $alt_posts->have_posts() ) : $alt_posts->the_post(); ?>
				  	<div <?php post_class('grid-box'); ?>>
                    <?php if ( has_post_thumbnail()) : ?>
                    <div class="imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full' ); ?></a></div>
                    
                <?php else : ?>
                <?php
                    $postimgs =& get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC' ) );
                    if ( !empty($postimgs) ) {
                        $firstimg = array_shift( $postimgs );
                        $th_image = wp_get_attachment_image( $firstimg->ID, 'full', false );
                     ?>
                        <div class="imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php echo $th_image; ?></a></div>
                        
                <?php } ?>
                <?php endif; ?>
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
				  	</div>
				<?php endwhile; ?>
                
                </div>

				<?php if (function_exists("wp_jurist_custom_pagination")) {
							wp_jurist_custom_pagination(); 
				} elseif (function_exists("wp_jurist_content_nav")) { 
							wp_jurist_content_nav( 'nav-below' );
				}?>
                
                <?php wp_reset_postdata(); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'wp-jurist' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content post-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp-jurist' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

        </div> <!-- end #main -->

        <?php // get_sidebar(); ?>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>