<?php
	// Loop through posts
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
?>
	<section id="post-<?php the_ID(); ?>" <?php post_class( 'post cf' ); ?>>
		<!-- Post Header -->	
		<header class="post-header">
			<p class="post-date">
				<?php
					if ( strlen( get_the_title() ) > 0 ) :
						the_time( 'F j, Y' );
					else: // No title
				?>
					<a href="<?php the_permalink(); ?>"><?php the_time( 'F j, Y' ); ?></a>
				<?php
					endif;
				?>
			</p>
			<aside class="post-author">
				<figure class="author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
				</figure>
				<p class="author-name">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'display_name' ); ?></a>
				</p>
			</aside>
		</header>

		<article class="post-content">
			<section class="post-title-wrap cf <?php echo ( has_post_thumbnail() ) ? 'post-title-wrap-featured-image' : 'post-title-wrap-no-image'; ?>">
				<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</section>

			<?php sds_featured_image( true ); ?>

			<?php
				// Show the excerpt if the post has one
				if ( has_excerpt() )
					the_excerpt();
				else
					the_content();
			?>
		</article>

		<a href="<?php the_permalink(); ?>" class="more-link post-button"><?php _e( 'Continue Reading', 'socialize' ); ?></a>
	</section>
<?php
		endwhile;
	else : // No posts
?>
	<section class="no-results no-posts no-search-results post">
		<?php sds_no_posts(); ?>
	</section>
<?php endif; ?>