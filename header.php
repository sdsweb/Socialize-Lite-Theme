<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html><!--<![endif]-->
	<head>
		<?php wp_head(); ?>
	</head>

	<body <?php language_attributes(); ?> <?php body_class(); ?>>
		<!-- Header	-->
		<header id="header" class="cf">
			<div class="in">
				<section class="logo-box <?php echo ( is_active_sidebar( 'header-call-to-action-sidebar' ) ) ? 'logo-box-header-cta': 'logo-box-no-header-cta'; ?> <?php echo ( ! is_active_sidebar( 'header-call-to-action-sidebar' ) && ! has_nav_menu( 'top_nav' ) ) ? 'logo-box-full-width': false; ?>">
					<?php sds_logo(); ?>
					<?php sds_tagline(); ?>
				</section>

				<aside class="header-widget-container <?php echo ( ! is_active_sidebar( 'header-call-to-action-sidebar' ) && ! has_nav_menu( 'top_nav' ) ) ? 'header-widget-container-no-margin': false; ?>">
					<?php if( has_nav_menu( 'top_nav' ) ) : // Top Navigation Area ?>
						<nav class="top-nav">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'top_nav',
									'container' => false,
									'menu_class' => 'top-nav secondary-nav menu',
									'menu_id' => 'top-nav'
								) );
							?>
						</nav>
						<section class="clear"></section>
					<?php endif; ?>

					<?php if ( is_active_sidebar( 'header-call-to-action-sidebar' ) ) : ?>
						<section class="header-cta-container header-call-to-action">
							<?php sds_header_call_to_action_sidebar(); // Header CTA Sidebar ?>
						</section>
					<?php endif; ?>
				</aside>
			</div>

			<!-- main nav	-->
			<nav class="primary-nav-container">
				<div class="in">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary_nav',
							'container' => false,
							'menu_class' => 'primary-nav menu',
							'menu_id' => 'primary-nav',
							'fallback_cb' => 'sds_primary_menu_fallback'
						) );
					?>
				</div>

				<button class="mobile-nav-button">
					<img src="<?php echo get_template_directory_uri(); ?>/images/menu-icon-large.png" alt="<?php esc_attr_e( 'Toggle Navigation', 'socialize' ); ?>" />
					<img class="close-icon" src="<?php echo get_template_directory_uri(); ?>/images/close-icon-large.png" alt="<?php esc_attr_e( 'Close Navigation', 'socialize' ); ?>" />
					<?php _e( 'Navigation', 'socialize' ); ?>
				</button>
				<?php soc_mobile_menu(); ?>
			</nav>
		</header>

		
		<div class="in">