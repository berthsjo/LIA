<?php 
/**
 * Template Name: Alt_Homepage, w/ Gallery Slider
 * Description: Alternative homepage template that displays gallery images as slider.
 */
get_header(); ?>
	
    <?php if( has_shortcode( $post->post_content, 'gallery' ) ) : ?>

	<div id="slide-wrap">

            
            <div id="load-cycle"></div>
              <div class="cycle-slideshow" <?php 
				  	if ( get_theme_mod('wp_jurist_slider_effect') ) {
						echo 'data-cycle-fx="' . wp_kses_post( get_theme_mod('wp_jurist_slider_effect') ) . '" data-cycle-tile-count="10"';
					} else {
						echo 'data-cycle-fx="scrollHorz"';
					}
				  ?> data-cycle-slides="> div.slides" <?php
                  	if ( get_theme_mod('wp_jurist_slider_timeout') ) {
						$slider_timeout = wp_kses_post( get_theme_mod('wp_jurist_slider_timeout') );
						echo 'data-cycle-timeout="' . $slider_timeout . '000"';
					} else {
						echo 'data-cycle-timeout="5000"';
					}
				  ?> data-cycle-prev="#sliderprev" data-cycle-next="#slidernext">

            <?php while ( have_posts() ) : the_post();  ?>
            
            <?php 
			  		$gallery = get_post_gallery( $post, false );
					$ids = explode( ",", $gallery['ids'] );
					
					foreach( $ids as $id ) {
						$title = get_post_field('post_title', $id);
						$meta = get_post_field('post_excerpt', $id);
						$link = wp_get_attachment_url( $id );
						$image  = wp_get_attachment_image( $id, "full");	

			?>
            <div class="slides">  
            
              
              <div id="post-<?php the_ID(); ?>" <?php post_class('post-theme'); ?>>
              
                  <div class="slide-thumb"><?php echo $image; ?></div>
   					
              </div>
              
              <?php if ( $meta || $title ) : ?>
              <div class="slide-copy-wrap">
              	<div class="slide-copy caption">
                  <?php if ( $title ) : ?>
                   <h2 class="slide-title"><?php echo $title; ?></h2>
                  <?php endif; ?>
                  <?php echo $meta; ?>	
                </div>
              </div>
              <?php endif; ?>
            
            </div><!-- .slides -->  
            <?php } ?>
            
            
            
 			<?php endwhile; ?>
            
            <?php wp_reset_postdata(); ?>
            
            <div class="slidernav">
                <a id="sliderprev" href="#" title="<?php _e('Previous', 'wp-jurist'); ?>"><?php _e('&lt;', 'wp-jurist'); ?></a>
                <a id="slidernext" href="#" title="<?php _e('Next', 'wp-jurist'); ?>"><?php _e('&gt;', 'wp-jurist'); ?></a>
            </div>

          </div>


    </div><!-- #slider-wrap -->
    
    <?php endif; ?>
    
    <?php while ( have_posts() ) : the_post(); ?>
    
      <div class="intro-copy-box">
        <?php get_template_part( 'content', 'intro' ); ?>
      </div>
      
    <?php endwhile; // end of the loop. ?>
    
    
    <?php if ( is_active_sidebar( 'sidebar-alt' ) ) : ?>

      <div id="alt-sidebar-wrap" class="clearfix">
        <div id="alt-sidebar" class="widget-area" role="complementary">
        	<?php dynamic_sidebar('sidebar-alt'); ?>
        </div>
      </div>
    	
    <?php endif; ?>
    

    <div id="content" class="alt-home-cont clearfix">
        
        <div id="main" class="col620 clearfix" role="main">
        
        	<?php 
				if ( get_query_var('paged') ) {
                        $paged = get_query_var('paged');
                } elseif ( get_query_var('page') ) {
                        $paged = get_query_var('page');
                } else {
                        $paged = 1;
                }
				$alt_args  = array(
					'ignore_sticky_posts' => 1,
					'paged' => $paged
				);
				$alt_posts = new WP_Query($alt_args);
			?>

			<?php if ( $alt_posts->have_posts() ) : ?>
            
            <h2 class="latest-title"><?php _e('Latest News', 'wp-jurist') ?></h2>

				<?php /* Start the Loop */ ?>
				<?php while ( $alt_posts->have_posts() ) : $alt_posts->the_post(); ?>
				 
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'alt-homepage' );
					?>
				  	
				<?php endwhile; ?>
                

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

        <?php get_sidebar(); ?>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>