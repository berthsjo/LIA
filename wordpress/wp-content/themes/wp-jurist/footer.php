
	</div><!-- #container -->

	<div class="push"></div>

</div><!-- #wrapper -->

<footer id="colophon" role="contentinfo">
    <div id="site-generator">

        <?php echo __('&copy; ', 'wp-jurist') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
        <?php if ( (is_front_page() && ! is_paged()) || (is_page_template('alt_homepage_no_slider.php') && is_front_page() && ! is_paged()) || (is_page_template('alt_homepage_with_gallery.php') && is_front_page() && ! is_paged()) || (is_page_template('alt_homepage_with_slider.php') && is_front_page() && ! is_paged()) || (is_page_template('people-profile-template.php') && is_front_page() && ! is_paged()) ) : ?>
        <?php _e('- Powered by ', 'wp-jurist'); ?><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wp-jurist' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'wp-jurist' ); ?>"><?php _e('WordPress' ,'wp-jurist'); ?></a>
        <?php _e(' and ', 'wp-jurist'); ?><a href="<?php echo esc_url( __( 'http://wpdevshed.com/', 'wp-jurist' ) ); ?>"><?php _e('WP Dev Shed', 'wp-jurist'); ?></a>
        <?php endif; ?>
        <?php wp_jurist_footer_nav(); ?>
        
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>