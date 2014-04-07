<?php
/*
 * This template is used for the display of 404 (Not Found) errors.
 */

get_header(); ?>
	<section class="content-wrapper 404-content cf">
		<article class="content cf">
			<section class="404-error no-posts post">
				<article class="post-content">
					<h1 title="404 Error" class="page-title"><?php _e( '404 Error', 'socialize' ); ?></h1>
					<p><?php _e( 'We apologize but something when wrong while trying to find what you were looking for. Please use the navigation below to navigate to your destination.', 'socialize' ); ?></p>

					<section id="search-again" class="search-again search-block no-posts no-search-results">
						<p><?php _e( 'Search:', 'socialize' ); ?></p>
						<?php echo get_search_form(); ?>
					</section>

					<?php sds_sitemap(); ?>
				</article>
			</section>
		</article>

		<?php get_sidebar(); ?>
	</section>

<?php get_footer(); ?>