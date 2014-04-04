
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wp-jurist' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <div class="entry-meta">
			<?php wp_jurist_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content post-content">
      <?php if ( has_excerpt() ) : ?>
        	<?php the_excerpt(); ?>
        <?php else : ?>
        	<?php echo wp_jurist_excerpt(25); ?>
        <?php endif; ?>
	</div><!-- .entry-content -->
	
    
</article><!-- #post-<?php the_ID(); ?> -->
