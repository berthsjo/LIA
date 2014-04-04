
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content post-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'wp-jurist' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
    
    <?php if (get_theme_mod('wp_jurist_author_bio') ) : ?>
    <!--BEGIN .author-bio-->
	<div class="author-bio clearfix">        
		<?php 
		$author_avatar = get_avatar( get_the_author_meta('email'), '75' );
		if ($author_avatar) : ?>
        	<div class="author-thumb"><?php echo $author_avatar; ?></div>
        <?php endif; ?>
        
        <div class="author-info">
        	<?php $author_posts_url = get_author_posts_url( get_the_author_meta( 'ID' )); ?> 
            <h4 class="author-title"><?php _e('Written by ', 'wp-jurist'); ?><a href="<?php echo esc_url($author_posts_url); ?>" title="<?php printf( __( 'View all posts by %s', 'wp-jurist' ), get_the_author() ) ?>"><?php the_author(); ?></a></h4>
            <?php $author_desc = get_the_author_meta('description');
			if ( $author_desc ) : ?>
            <p class="author-description"><?php echo $author_desc; ?></p>
            <?php endif; ?>
            <?php $author_url = get_the_author_meta('user_url');
			if ( $author_url ) : ?>
            <p><?php _e('Website: ', 'wp-jurist') ?><a href="<?php echo $author_url; ?>"><?php echo $author_url; ?></a></p>
            <?php endif; ?>
        </div>
    </div>
	<!--END .author-bio-->
    <?php endif; ?>

	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'wp-jurist' ) );
				if ( $categories_list && wp_jurist_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( '<span class="meta-cat"></span> %1$s', 'wp-jurist' ), $categories_list ); ?>
			</span>

			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'wp-jurist' ) );
				if ( $tags_list ) :
			?>
			<span class="tag-links">
				<?php printf( __( '<span class="meta-tag"></span> %1$s', 'wp-jurist' ), $tags_list ); ?>
			</span>

			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', 'wp-jurist' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
    <div class="post-divider navi"></div>
</article><!-- #post-<?php the_ID(); ?> -->

