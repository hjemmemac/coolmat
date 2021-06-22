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

	<main id="primary" class="site-main">

			<!-- our Hero element goes her
			todo: make it dynamic, we'll hard code it to begin with -->
			<div class="hero">
				<div class="hero-inner container">
					<h1 class="hero-text">	
						<!-- here we used the template tag to grab the site name -->
						<span class="hero-sitename"> <?php bloginfo('name');?> </span> 
						fried seaweed roll </h1>
						<p class="hero-description">	
						<span class="magenta"> 꿀맛은 새로운 맛 추억 분식집입니다 </p>
				</div>
			</div>

		<!--  our intro element   todo: make it dynamic-->
			<div class="intro" id="intro">
				<div class="intro-inner">
					<h2 class="intro-title"> 꿀맛을 소개합니다	</h2>
						<p class="intro-description"> 
							한국이 힘들었을때 생긴 분식. <BR>
이제 온 국민이 사랑하는 분식.<BR>
꿀맛은 남녀노소를 떠나 <BR>
새로운 맛의 추억을 드리기 위해<BR>
생긴 웰비잉 분식집 입니다.<BR>
						</p>
				</div>
				
			</div>


<div class="food-title" id="food"> menu	 </div>

			<div class="grid">
		
<?php
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


				<div class="visit-title" id="locations"> 오시는 길 	 </div>
				
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
					상호
				</h3>
				<h2>
					꿀맛(
				</h2>

				<h3>
					주소 
				</h3>
				<h2>
					강서구 염창동 284-10,<br>
					서울특별시
				</h2>

				<h3>
					전화번호
				</h3>
				<h2>
					02-9999-9999
 				</h2>

				<h3>
					오시는 길 
				</h3>
				<h2>
				9호선 증미역 3번출구에서 약 200미터정도 내려오시면 좌편에
				꿀맛을 보실수 있습니다.
				</h2>

			</div>
		</div>
	</div>
</div>
				


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();