<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AHL99
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

		endwhile; // End of the loop.
		?>

			<section>
			<h1>
			<?php 
				if (function_exists('get_field')):
					if (get_field('headline')):
						the_field('headline');
					endif;
				endif;
			?>
			</h1>
			<?php 
				if (function_exists('get_field')):
					if (get_field('tagline')):
						the_field('tagline');
					endif;
				endif;
			?>
			<?php 
				if (function_exists('get_field')):
					if (get_field('quote_button')):
						the_field('quote_button');
					endif;
				endif;
			?>
			</section>

			<section class="home-content">
				<article>
				<?php 
				if (function_exists('get_field')):
					if (get_field('subhead1')):
						the_field('subhead1');
					endif;
				endif;
				?>
				<div>
				<?php 
				if (function_exists('get_field')):
					if (get_field('content1')):
						the_field('content1');
					endif;
				endif;
				?>
				</div>
				<div>
				</div>
				</article>

				<article>
				<?php 
				if (function_exists('get_field')):
					if (get_field('subhead2')):
						the_field('subhead2');
					endif;
				endif;
				?>
				<div>
				<?php 
				if (function_exists('get_field')):
					if (get_field('content2')):
						the_field('content2');
					endif;
				endif;
				?>
				</div>
				</article>
			
			
			</section>

			<section class="home-services">
				<h2>Our Services</h2>
			</section>

			<section class="testimonials">
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
