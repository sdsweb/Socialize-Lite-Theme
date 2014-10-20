<?php
	global $multipage;

	// Loop through posts
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
?>
	<section id="post-<?php the_ID(); ?>" <?php post_class( 'post cf' ); ?>>
		<!-- Post Header -->	
		<header class="post-header">
			<p class="post-date">
				<?php the_time( 'F j, Y' ); ?>
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
				<h1 class="post-title"><?php the_title(); ?></h1>
			</section>

			<?php sds_featured_image(); ?>

			<?php the_content(); ?>

			<section class="clear"></section>

			<?php edit_post_link( __( 'Edit Page', 'socialize' ) ); // Allow logged in users to edit ?>

			<section class="clear"></section>

			<?php if ( $multipage ) : ?>
				<section class="single-post-navigation single-post-pagination wp-link-pages">
					<?php wp_link_pages(); ?>
				</section>
			<?php endif; ?>

			<?php if ( $post->post_type !== 'attachment' ) : // Post Meta Data (tags, categories, etc...) ?>
				<section class="post-meta">
					<?php sds_post_meta(); ?>
				</section>
			<?php endif ?>
		</article>
		<?php sds_single_post_navigation(); ?>
	</section>

	<section id="post-author" class="cf">
		<header class="author-header">
			<figure class="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?>
				</figure>
			<h4><?php echo get_the_author_meta( 'display_name' ); ?></h4>
			<a href="<?php echo get_the_author_meta( 'user_url' ); ?>"><?php echo get_the_author_meta( 'user_url' ); ?></a>
		</header>
		<p><?php echo get_the_author_meta( 'description' ); ?></p>
		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php _e( 'View more posts from this author', 'socialize' ); ?></a>
	</section>

	<section class="clear"></section>

	<section class="after-posts-widgets <?php echo ( is_active_sidebar( 'after-posts-sidebar' ) ) ? 'after-posts-widgets-active widgets' : 'no-widgets'; ?>">
		<?php sds_after_posts_sidebar(); ?>
	</section>
<?php
		endwhile;
	endif;
?>