<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

	<div class="inner-title-wrap">
      <div class="inner-title-box">
	  <header class="entry-header">
            <h1 class="page-title"><?php
                printf( __( 'Kategori: %s', 'wp-jurist' ), '<span>' . single_cat_title( '', false ) . '</span>' );
            ?></h1>

            <?php
                $category_description = category_description();
                if ( ! empty( $category_description ) )
                    echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
            ?>
        </header>
      </div>
    </div>
    
    <div id="content" class="clearfix sbfix pgsb">
        
        <div id="main" class="col620 clearfix" role="main">

			

				

				<?php /* Adds Odd/Even Classes */
				$i=0;
				$class=array('odd','even'); ?>
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
                  <div class="<?php echo $class[$i++%2]; ?>">
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', 'archive' );
					?>
                  </div>
				<?php endwhile; ?>

				<?php if (function_exists("wp_jurist_pagination")) {
							wp_jurist_pagination(); 
				} elseif (function_exists("wp_jurist_content_nav")) { 
							wp_jurist_content_nav( 'nav-below' );
				}?>
                
            </div> <!-- end #main -->

        <?php get_sidebar(); ?>

    </div> <!-- end #content -->

<?php else : ?>
            
   <div id="content" class="clearfix">
        
        <div id="main" class="col620 clearfix" role="main">

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'wp-jurist' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content post-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp-jurist' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
		</div> <!-- end #main -->

        <?php get_sidebar(); ?>

    </div> <!-- end #content -->
			   
<?php endif; ?>
 
<?php get_footer(); ?>