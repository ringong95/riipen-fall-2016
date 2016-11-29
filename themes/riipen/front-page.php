<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php echo do_shortcode('[wp_posts_carousel template=”style.css” post_types=”post,page” all_items=”10″ show_only=”id” exclude=”” posts=”” ordering=”asc” categories=”” relation=”and” tags=”” show_title=”true” show_created_date=”true” show_description=”false” allow_shortcodes=”false” show_category=”true” show_tags=”false” show_more_button=”true” show_featured_image=”true” image_source=”thumbnail” image_height=”100″ image_width=”100″ items_to_show_mobiles=”1″ items_to_show_tablets=”2″ items_to_show=”4″ slide_by=”1″ margin=”5″ loop=”true” stop_on_hover=”true” auto_play=”true” auto_play_timeout=”1200″ auto_play_speed=”800″ nav=”true” nav_speed=”800″ dots=”true” dots_speed=”800″ lazy_load=”false” mouse_drag=”true” mouse_wheel=”true” touch_drag=”true” easing=”linear” auto_height=”true” custom_breakpoints=””
		]'); ?>

		<section class="hero">
			<div class="headline">
				<div class="headline-wrap">
					<h2>Riipen your life</h2>
					<p>Where talent and industry meet</p>
				</div>
			</section>
			<section class="stats">
				<ul>
					<li>
						<h2>42%</h2>
						<p>of new university graduates are under employed.</p>
					</li>
					<li>
						<h2>92%</h2>
						<p>of Teachers say their students are ready for the job market after graduation.</p>
					</li>
					<li>
						<h2>18%</h2>
						<p>Employers say 18% of students are ready for the job market after graduation</p>
					</li>
				</ul>
				<p class="double-border">"Why aren't students being evaluated on their school work by industry as well?"</p>
			</section>
			<section class="about">
				<p>Riipen is a web platform that partners with post-secondary schools from around the globe. We enable meaningful in-class project-based experimential learning that mutually benefits all parties involved.</p>
				<ul>
					<li>Talent increases skill</li>
					<li>Educators enrich their curriculim</li>
					<li>Organizations build their talent pool</li>
				</ul>
			</section>
			<section class="difference">
				<h2>Riipen want's to make a difference</h2>
				<p>and it's simple</p>
				<ol>
					<li>You sign up</li>
					<li>Create your dashboard</li>
					<li>Customize your profile</li>
					<li>Participate in projects</li>
				</ol>
				<p>Take the opportunity to discover what it's like to be a Riipened...</p>
      </section>
			<section class="testimonial">
			</section>
			<?php dynamic_sidebar( 'carousels' ); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_footer(); ?>
