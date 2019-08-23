<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Elegance
 */

?>

	</div><!-- #content -->

	<footer class="site-footer">
		<div class="site-info">
			<div class="container">
				<a href="<?php echo esc_url( __( 'https://tristanelliott.co.za/', 'elegance' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'generate' ), 'WordPress' );
				?>
				</a>
				<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'elegance' ), 'Elegance', '<a href="http://tristanelliott.co.za">Tristan Elliott</a>' );
				?>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
