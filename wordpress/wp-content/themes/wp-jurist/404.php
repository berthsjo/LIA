<?php get_header(); ?>

	<div class="inner-title-wrap">
      <div class="inner-title-box">
	  <header class="entry-header">
        <h1 class="entry-title"><?php _e( 'Error 404 - Page Not Found', 'wp-jurist' ); ?></h1>
      </header>
      </div>
    </div>

    <div id="content" class="clearfix sbfix pgsb">
        
        <div id="main" class="col620 clearfix" role="main">

			<article id="post-0" class="post error404 not-found">
				

				<div class="entry-content post-content">
					<h3><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'wp-jurist' ); ?></h3>
                    <?php get_search_form(); ?>
                    
                    <div class="post-divider"></div>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                    
                    <div class="post-divider"></div>

					<div class="widget">
						<h2 class="widget-title"><?php _e( 'Most Used Categories', 'wp-jurist' ); ?></h2>
						<ul>
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
						</ul>
					</div>
                    
                    <div class="post-divider"></div>

					<?php
					/* translators: %1$s: smilie */
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'wp-jurist' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>
                    
                    <div class="post-divider"></div>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

        </div> <!-- end #main -->

        <?php get_sidebar(); ?>

    </div> <!-- end #content -->
        
<?php get_footer(); ?>