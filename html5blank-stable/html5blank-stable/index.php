<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

			<div class="torrid-pic">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>img/baby-doll.jpg" alt="img" class="img">
				</a>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
