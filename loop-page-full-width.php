<?php
	global $multipage; // Used to determine if the current post has multiple pages

	// Loop through posts
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
?>
	<section id="post-<?php the_ID(); ?>" <?php post_class( 'post cf' ); ?>>
		<article class="post-content">
			<section class="post-title-wrap cf <?php echo ( has_post_thumbnail() ) ? 'post-title-wrap-featured-image' : 'post-title-wrap-no-image'; ?>">
				<h1 class="post-title"><?php the_title(); ?></h1>
			</section>

			<?php sds_featured_image( false, 'soc-1128x530' ); // Full width featured image ?>

			<?php the_content(); ?>

			<section class="clear"></section>

			<?php edit_post_link( __( 'Edit Page', 'socialize' ) ); // Allow logged in users to edit ?>

			<section class="clear"></section>

			<?php if ( $multipage ) : ?>
				<section class="single-post-navigation single-post-pagination wp-link-pages">
					<?php wp_link_pages(); ?>
				</section>
			<?php endif; ?>
		</article>
	</section>
<?php
		endwhile;
	endif;
?>