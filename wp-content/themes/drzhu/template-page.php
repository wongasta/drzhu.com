<?php 
/** * Dr Zhu * * Template Name: Single Page */ 
get_header();
?>

<div class="subContainer template-page">
	<div class="container">
		<main role="main" class="main">
			<section>
				<h1><?php the_title(); ?></h1>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
				<?php else: ?>
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
				<?php endif; ?>
			</section>
		</main>
	</div>
</div>

<?php get_footer(); ?>
