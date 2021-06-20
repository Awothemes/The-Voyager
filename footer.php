<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Voyager
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info row">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'thevoyager' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'thevoyager' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'thevoyager' ), 'The Voyager', '<a href="'.esc_url( __( 'https://awothemes.pro/', 'thevoyager' ) ).'" rel="nofollow designer">'.esc_html__( 'AwoThemes', 'thevoyager' ).'</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
