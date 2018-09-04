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

			<section class="hero">
				<div class="banner">
					<img src="<?php bloginfo('template_directory');?>/images/hero-img.png" alt="banner">
				</div>
				<article>
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
					<a class="quote" href="">
					<?php 
						if (function_exists('get_field')):
							if (get_field('quote_button')):
								the_field('quote_button');
							endif;
						endif;
					?>
					</a>
				</article>
			</section>
			
			

			<section class="home-content">
				<article>
					<h2>
						<?php 
						if (function_exists('get_field')):
							if (get_field('subhead1')):
								the_field('subhead1');
							endif;
						endif;
						?>
					</h2>
				
				<div>
				
					<?php 
					if (function_exists('get_field')):
						if (get_field('content1')):
							the_field('content1');
						endif;
					endif;
					?>
				
				</div>
			
				</article>
				</section>
					
				<section class="separate"></section>

				<section class="home-services">
				<h2>Our Services</h2>
				<article>
					<div>
						<?php 
							if (function_exists('get_field')):
								if (get_field('service_image1')):
									echo '<img src="';
									the_field('service_image1');
									echo '" alt="Road Freight">	';
								endif;
							endif;
						?>
						
						<h3>
						<?php 
						if (function_exists('get_field')):
							if (get_field('service1')):
								the_field('service1');
							endif;
						endif;
						?>
						</h3>
					
					</div>
				
					<div>
					<?php 
						if (function_exists('get_field')):
								if (get_field('service_image2')):
									echo '<img src="';
									the_field('service_image2');
									echo '" alt="">	';
								endif;
							endif;
						?>
						


						<h3>
							<?php 
							if (function_exists('get_field')):
								if (get_field('service2')):
									the_field('service2');
								endif;
							endif;
							?>
						</h3>
					</div>
					<div>

						<?php 
							if (function_exists('get_field')):
								if (get_field('service_image3')):
									echo '<img src="';
									the_field('service_image3');
									echo '" alt="">	';
								endif;
							endif;
						?>
						
						<h3>
						<?php 
						if (function_exists('get_field')):
							if (get_field('service3')):
								the_field('service3');
							endif;
						endif;
						?>
					</h3>
						
					</div>
					
				</article>
				<p><a href="">View all services ></a></p>
			</section>

				<section class="home-content hc2">
				<h2>
					<?php 
					if (function_exists('get_field')):
						if (get_field('subhead2')):
							the_field('subhead2');
						endif;
					endif;
					?>
				</h2>
				<article>
				
				<div>
					<?php 
					if (function_exists('get_field')):
						if (get_field('content2')):
							the_field('content2');
						endif;
					endif;
					?>
				
				</div>
				<aside>
				<?php 
					if (function_exists('get_field')):
							if (get_field('image2')):
								echo '<img src="';
								the_field('image2');
								echo '" alt="Who We Are">	';
							endif;
						endif;
					?>
				</aside>

					
				</article>
			
			
			</section>

			<section class="separate"></section>
						
			<section><h2 class="testimonal-title">What People Are Saying</h2></section>
			<section class="testimonials">
			
				<article>
				<i class="fas fa-quote-left"></i>
					<div>
					<?php 
						if (function_exists('get_field')):
							if (get_field('testimonial1')):
								the_field('testimonial1');
							endif;
						endif;
						?>
						<p>
						<?php 
						if (function_exists('get_field')):
							if (get_field('testimonial_person1')):
								the_field('testimonial_person1');
							endif;
						endif;
						?>
						</p>
					</div>
					<div>
					<?php 
						if (function_exists('get_field')):
							if (get_field('testimonial2')):
								the_field('testimonial2');
							endif;
						endif;
						?>
					<p>
						<?php 
						if (function_exists('get_field')):
							if (get_field('testimonial_person2')):
								the_field('testimonial_person2');
							endif;
						endif;
						?>
						</p>
					</div>
					<i class="fas fa-quote-right"></i>
				</article>
				
			</section>

			<section class="contact">
				<article>
					<h2>Contact Us</h2>
					<div class="contact-info">
					<p>
					Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
					</p>
					<aside>
					<i class="far fa-envelope"></i>
					
					<p>
					<?php 
						if (function_exists('get_field')):
							if (get_field('email', 12)):
								the_field('email', 12);
							endif;
						endif;
						?>
					</p>
					</aside>
					<aside>
					<i class="fas fa-phone-square"></i>
					<p>
					<?php 
						if (function_exists('get_field')):
							if (get_field('phone', 12)):
								the_field('phone', 12);
							endif;
						endif;
						?>
					</p>
					</aside>
					<aside><i class="fas fa-map-marker-alt"></i> <p>
					<?php 
						if (function_exists('get_field')):
							if (get_field('address', 12)):
								the_field('address', 12);
							endif;
						endif;
						?>
					</p></a>
					
					</div>
					
					<div class="contact-form">
					<?php 
						if (function_exists('get_field')):
							if (get_field('contact_form', 12)):
								the_field('contact_form', 12);
							endif;
						endif;
						?>
					</div>
				</article>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
