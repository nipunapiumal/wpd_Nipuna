
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a style="color:#222 !important;" href="<?php echo esc_url( __( 'https://wordpress.org/', 'wpd_nipuna' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'wpd_nipuna' ), 'Nipuna' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wpd_nipuna' ), 'wpd_nipuna', '<a href="#" style="color:#222 !important;">wpd_Nipuna</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
