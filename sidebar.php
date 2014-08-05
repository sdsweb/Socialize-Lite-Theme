<?php
	global $sds_theme_options;

	// Primary Sidebar
	if ( ! isset( $sds_theme_options['body_class'] ) || ( ! empty( $sds_theme_options['body_class'] ) && $sds_theme_options['body_class'] !== 'cols-1' ) ) :
?>
		<!-- Page Sidebar-->
		<aside class="sidebar">
			<?php
				// Primary Sidebar
				if ( is_active_sidebar( 'primary-sidebar' ) ) :
					sds_primary_sidebar();
				// Social Media Fallback
				else :
			?>
				<section class="widget">
					<?php sds_social_media(); ?>
				</section>
			<?php
				endif;
			?>
		</aside>
<?php
	endif;

	// Secondary Sidebar
	if ( isset( $sds_theme_options['body_class'] ) && ! empty( $sds_theme_options['body_class'] ) && strpos( $sds_theme_options['body_class'], 'cols-3' ) !== false ) :
?>
		<aside class="secondary-sidebar">
			<?php sds_secondary_sidebar(); // Secondary Sidebar ?>
		</aside>
<?php
	endif;
?>