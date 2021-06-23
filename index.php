<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coolmat
 */

get_header();
?>

<div id="primary" class="content-area">
  <main id="main" class="site-main">

			<!-- our Hero element goes her
			todo: make it dynamic, we'll hard code it to begin with -->
			
		<?php query_posts('posts_per_page=1&category_name=menu&orderby=rand'); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<div class="hero">
				<div class="hero-inner container">
					<h1 class="hero-text">	
						<!-- here we used the template tag to grab the site name -->
						<span class="hero-sitename"> <?php bloginfo('name');?> </span> 
						fried seaweed roll </h1>
						<p class="hero-description">	
						<span class="magenta"> <?php bloginfo('name');?> </span> 꿀맛은 새로운 맛 추억 분식집입니다. </p>
				</div>
			</div>

		<!--  our intro element   todo: make it dynamic-->
			<div class="intro" id="intro">
				<div class="intro-inner">
					<h2 class="intro-title"> Introducing <?php bloginfo('name');?> 	</h2>
						<p class="intro-description"> 
							street food that was born in tough times. street food that everybody loves.<br> <span class="yellow"><?php bloginfo('name');?>  </span> is on a mission to provide future flavor nostalgia of street food for men, women, children, grandpas and grandmas.
							we only use the best ingredients.
						</p>
				</div>
				
			</div>


<div class="food-title" id="food"> menu	 </div>

			<div class="grid">
		
<?php
//here we make sure to override our query otherwise the one
//from above will still be used in this loop
query_posts('posts_per_page=20&category_name=menu');

	if ( have_posts() ) :
/* Start the Loop */
				
/*dette er hentet fra https://wordpress.stackexchange.com/questions/20789/print-current-post-index-number-within-loop  --- endret test fra $post_is til item_number*/
	$item_number = 1;

	while ( have_posts() ) :
				the_post();

/*
 * Include the Post-Type-specific template for the content.
 * If you want to override this in a child theme, then include a file
 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
 */

			get_template_part( 'template-parts/content', get_post_type() );
    			
// this increments the number
		$item_number++;

	endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

		endif; 			
			?>			
				</div>


				<div class="visit-title" id="locations"> directions to cool mat	 </div>
				
	<div class="locations" id="directions">

<!-- Hvis de utvider, så kan de legge inn hver av restautantene her --> 
		<div class="location grid">
				
				<div class="map">
					<div class="map-inner">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3162.953374435938!2d126.86218631531143!3d37.55616227979976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9c03c38738ad%3A0x1eff909f2c04315c!2s284-10%20Yeomchang-dong%2C%20Gangseo-gu%2C%20Seoul%2C%20South%20Korea!5e0!3m2!1sen!2sno!4v1624275369025!5m2!1sen!2sno" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
				</div>

				<div class="location-info">
					<div class="location-description">
						<h3>
					Business Name
				</h3>
				<h2>
					<?php bloginfo('name');?>	
				</h2>

				<h3>
					Address
				</h3>
				<h2>
					284-10 Yeomchang-dong, Gangseo-gu, Seoul 
				</h2>

				<h3>
					Phone number
				</h3>
				<h2>
					02-9999-9999
 				</h2>

				<h3>
					Directions
				</h3>
				<h2>
					Get out of gate 3 and walk straight down for about
					200 meters. You will see Cool Mat on your left. 
				</h2>

			</div>
		</div>
	</div>
</div>
				


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();