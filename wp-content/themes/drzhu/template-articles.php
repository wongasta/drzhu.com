<?php 
/** * Dr Zhu * * Template Name: Article Page */ 
get_header();
?>

<div class="subContainer template-page template-page-articles">
	<div class="container">
		<main role="main" class="main">
			<div class="container row">
				<div class="articles-menu-container col-md-3 col-ms-3 col-xs-12">
					<h4>Articles Menu</h4>
		            <?php
					wp_nav_menu( array( 
					    'theme_location' => 'sidebar-menu', 
					    'container_class' => 'articles-nav' ) ); 
					?>
				</div>
				<div class="articles-content col-md-9 col-ms-9 col-xs-12">
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
						
						<div class="articles-mobile">
							<h4>Articles Menu</h4>
							<?php
							wp_nav_menu( array( 
								'theme_location' => 'sidebar-menu', 
								'container_class' => 'articles-nav' ) ); 
							?>
						</div>
					</section>
				</div>
			</div>
		</main>
	</div>
</div>

<?php get_footer(); ?>
