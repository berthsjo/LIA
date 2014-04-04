
<div class="vid-wrapper">
	<?php 
    $content = trim( get_the_content() );
    echo wp_jurist_featured_video( $content );
    ?>
</div>

<article id="post-<?php the_ID(); ?>">
	
	<header class="entry-header">
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wp-jurist' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_jurist_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
    
    
	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
    	<?php if ( has_post_thumbnail()) : ?>
            <div class="imgthumb"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( array(150, 125) ); ?></a></div>       
    	<?php endif; ?>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content post-content">
      	<?php if ( has_excerpt() ) : ?>
        	<?php the_excerpt(); ?>
        <?php else : ?>
        	<?php echo wp_jurist_excerpt(25); ?>
        <?php endif; ?>
	</div><!-- .entry-content -->
	<?php endif; ?>
    
</article><!-- #post-<?php the_ID(); ?> -->
