<section class="contact">
			
				<article>
				<h2>Contact Us</h2>
				<div class="contact-content">
					<div class="contact-info">
					<?php 
						if (function_exists('get_field')):
							if (get_field('contact_description', 12)):
								the_field('contact_description', 12);
							endif;
						endif;
						?>
					
					<table>
						<tr>
							<td><i class="far fa-envelope"></i></td>
							<td><?php 
						if (function_exists('get_field')):
							if (get_field('email', 12)):
								the_field('email', 12);
							endif;
						endif;
						?></td>
						</tr>
						<tr>
							<td><i class="fas fa-phone-square"></i></td>
							<td><?php 
						if (function_exists('get_field')):
							if (get_field('phone', 12)):
								the_field('phone', 12);
							endif;
						endif;
						?></td>
						</tr>
						<tr>
							<td><i class="fas fa-map-marker-alt"></td>
							<td><?php 
						if (function_exists('get_field')):
							if (get_field('address', 12)):
								the_field('address', 12);
							endif;
						endif;
						?></td>
						</tr>

					</table>
					
					
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
					</div>
				</article>
			</section>