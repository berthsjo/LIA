<?php
/*
 * The template for displaying archive pages.
 */
?>

<?php get_header(); ?>
<div id="content">

	<?php if (have_posts()) : $count = 0; ?>
		<?php if (is_category()) { ?>
			<h4 class="page-title"><?php _e('Archive', 'shipyard'); ?> | <?php echo single_cat_title(); ?></h4> 
		<?php } elseif (is_day()) { ?>
			<h4 class="page-title"><?php _e('Daily Archives', 'shipyard'); ?> | <?php echo get_the_date(); ?></h4>
		<?php } elseif (is_month()) { ?>
			<h4 class="page-title"><?php _e('Monthly Archives', 'shipyard'); ?> | <?php echo get_the_date('F Y'); ?></h4>
		<?php } elseif (is_year()) { ?>
			<h4 class="page-title"><?php _e('Yearly Archives', 'shipyard'); ?> | <?php echo get_the_date('Y'); ?></h4>
		<?php } elseif (is_author()) { ?>
			<h4 class="page-title"><?php _e('Author Archives', 'shipyard'); ?></h4>
		<?php } elseif (is_tag()) { ?>
			<h4 class="page-title"><?php _e('Tag Archives', 'shipyard'); ?> | <?php echo single_tag_title('', true); ?></h4>
	<?php } ?>

            
	<?php while (have_posts()) : the_post(); $count++; ?>
		<h4 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php _e('Permalink to ', 'shipyard'); ?><?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>

		<h5 class="postmetadata"><?php _e('Posted on ', 'shipyard'); ?><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a> | <?php _e('By ', 'shipyard'); ?> 
		<?php the_author_posts_link(); ?> <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : echo '|'; ?>
		<?php comments_popup_link( __( 'Leave a response', 'shipyard' ), __( '1 response', 'shipyard' ), __( '% responses', 'shipyard' ) ); ?><?php endif; ?></h5>

	<?php if ( has_post_thumbnail() ) { 
		the_post_thumbnail(); 
	} 	?>

	<?php the_excerpt(); ?>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.', 'shipyard'); ?></p>
		<?php endif; ?>
				
<div class="post-nav">
	<div class="nav-prev"><?php next_posts_link(__( '&laquo; Older posts', 'shipyard' )) ?></div>
	<div class="nav-next"><?php previous_posts_link(__( 'Newer posts &raquo;', 'shipyard' )) ?></div>
</div>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>