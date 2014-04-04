
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	   
    
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
    	<?php if ( has_post_thumbnail()) : ?>
            <div class="imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array(150, 125) ); ?></a></div>       
    	<?php endif; ?>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
    
    <?php if ( has_post_thumbnail()) : ?>
       	<div class="profile-thumb-mobile"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full' ); ?></a></div>
    <?php else :?>
        <div class="profile-thumb-mobile pdefault"></div>
   	<?php endif; ?>
    
    <?php 
	  $job_title = get_post_meta( $post->ID, 'job_title', true ); 
	  $phone_number = get_post_meta( $post->ID, 'phone_number', true );
	  $linkedin = get_post_meta( $post->ID, 'linkedin', true );
	  $twitter = get_post_meta( $post->ID, 'twitter', true );
	  $facebook = get_post_meta( $post->ID, 'facebook', true );
	  $googlep = get_post_meta( $post->ID, 'googlep', true );
	  $mailto = get_post_meta( $post->ID, 'email', true );
	  $avvo = get_post_meta( $post->ID, 'avvo', true );
	?>
    
	<div class="entry-content post-content people-info">
    	<?php if ( ! empty($job_title) ) : ?>
        	<div class="people-job"><?php echo $job_title; ?></div>
        <?php endif; ?>
        
        <?php if ( ! empty($phone_number) ) : ?>
        	<div class="people-phone"><?php echo $phone_number; ?></div>
        <?php endif; ?>
        
        <div id="social-media" class="clearfix">
			<?php if ( ! empty($linkedin) ) : ?>
            <a href="<?php echo esc_url($linkedin); ?>" class="social-li"><?php _e('LinkedIn', 'wp-jurist') ?></a>
            <?php endif; ?>
            
            <?php if ( ! empty($twitter) ) : ?>
            <a href="<?php echo esc_url($twitter); ?>" class="social-tw"><?php _e('Twitter', 'wp-jurist') ?></a>
            <?php endif; ?>
            
            <?php if ( ! empty($facebook) ) : ?>
            <a href="<?php echo esc_url($facebook); ?>" class="social-fb"><?php _e('Facebook', 'wp-jurist') ?></a>
            <?php endif; ?>
            
            <?php if ( ! empty($googlep) ) : ?>
            <a href="<?php echo esc_url($googlep); ?>" class="social-gp"><?php _e('Google+', 'wp-jurist') ?></a>
            <?php endif; ?>
            
            <?php if ( ! empty($avvo) ) : ?>
            <a href="<?php echo esc_url($avvo); ?>" class="social-av"><?php _e('Avvo', 'wp-jurist') ?></a>
            <?php endif; ?>
            
            <?php if ( ! empty($mailto) ) : ?>
            <a href="mailto:<?php echo sanitize_email($mailto); ?>" class="social-em"><?php _e('Mailto', 'wp-jurist') ?></a>
            <?php endif; ?>
        </div>
        
        <div class="post-divider clearfix"></div>
        
        <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-jurist' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'wp-jurist' ), 'after' => '</div>' ) ); ?>
        
	</div><!-- .entry-content -->
	<?php endif; ?>
	
    <?php if ( ! ( is_home() || is_archive() ) ) : ?>
	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'wp-jurist' ) );
				if ( $categories_list && wp_jurist_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'wp-jurist' ), $categories_list ); ?>
			</span>
			<span class="sep"> | </span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'wp-jurist' ) );
				if ( $tags_list ) :
			?>
			<span class="tag-links">
				<?php printf( __( 'Tagged %1$s', 'wp-jurist' ), $tags_list ); ?>
			</span>
			<span class="sep"> | </span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>


	</footer><!-- #entry-meta -->
    <?php endif; ?>
    
</article><!-- #post-<?php the_ID(); ?> -->
