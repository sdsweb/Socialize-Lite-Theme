	</div>

	<!-- Footer -->
		<footer id="footer">
			<div class="in">	
				<section class="footer-widgets-container">
					<section class="footer-widgets">
						<?php sds_footer_sidebar(); // Footer (3 columns) ?>
					</section>
				</section>

				<section class="copyright-area">
					<?php sds_copyright_area_sidebar(); ?>
				</section>
			</div>

			<section class="copyright">
				<div class="in">
					<p class="copyright-message">
						<?php sds_copyright( 'Socialize Lite' ); ?>
					</p>
				</div>
			</section>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>