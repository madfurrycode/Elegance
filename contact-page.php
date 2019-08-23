<?php 
/**
 * Template Name: Contact Page
 * 
 * Elegance Enqueue Stylesheets & Scripts
 * @package Elegance
 * @author Tristan Elliott
 * 
 * ------
 * Visit for more information
 * https://developer.wordpress.org/themes/template-files-section/page-template-files/
 * 
 */

get_header();
?>

    <div class="container">
		<?php if ( is_user_logged_in() ): ?>
		<div class="alert alert-primary shadow-sm alert-dismissible fade show" role="alert">
			<a href="https://contactform7.com/docs/">Contact Form 7 Enabled Page!</a>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<div class="col-md-4 col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php else: ?>
		<div class="row">
			<div class="col-md-8 col-lg-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">

					<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
					?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<div class="col-md-4 col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<?php endif; ?>
	</div>

<?php 
get_footer();