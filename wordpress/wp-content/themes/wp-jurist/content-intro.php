
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	
    <?php if($post->post_content != "") : ?>
	<div class="entry-content post-content">
		<?php echo wp_jurist_excerpt(9999); ?>
	</div><!-- .entry-content -->
    <?php endif; ?>
    
</article><!-- #post-<?php the_ID(); ?> -->
