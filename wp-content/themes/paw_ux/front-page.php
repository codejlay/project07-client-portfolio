<?php
/**
 * The main front-page file.
 * Template Name: Main Page
 *
 * @package paw_ux_Theme
 */

get_header(); ?>

<div class="site-content">
	<div class="content-area">
		<section class="intro">
			<div class="container">
				<h2>Hi, my_name is Paul</h2>
				<p>I’m a User Experience Designer based out of Vancouver, Canada. Lorem ipsum dolor sit amet.</p>
				<div class="homepage-image">
					<img src="<?php bloginfo('template_url'); ?>/images/image_blank_500x450.png" alt="Paul Portfolio Home Image" />
				</div>
			</section>

			<section class="my-work-content">
				<div class="container">
					<div class="title-box">
						<div>
							<h3>my_work</h3>
						</div>
					</div>

					<?php 
					$query = new WP_Query( array( 'post_type' => 'project' ) ); ?>


					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<p><?php echo get_the_post_thumbnail(get_the_id(), 'large') ?></p>
					<p><?php echo get_the_title(get_the_ID()); ?></p>  
					<p><?php echo ( CFS()->get('project_description')); ?></p> 
					<p><?php echo ( CFS()->get('case_study')); ?></p>

				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</section>

		<section class="skills-content">
			<div class="container">
				<div class="title-box">
					<div>
						<h3>skills</h3>
					</div>
				</div>
				
				<ul class="skill-type-blocks">
					<?php $query = new WP_Query( array( 'post_type' => 'skill' ) ); ?>
					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<li class="skill-type-block-wrappers">
						<div class="skills-image">
							<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>
						</div>

						<div class="skills-title">
							<p><?php echo get_the_title(get_the_ID()); ?></p>
						</div>

						<div class="skills-description">
							<p><?php echo ( CFS()->get('skill_description')); ?></p> 
						</div>
					</li>
					<?php endwhile; endif; wp_reset_postdata(); ?>
				</ul>

			<div class="resume">
				<!-- <button> -->
					<a href="#" onClick="window.open('http://www.redacademy.com', '_blank')">
						<div class="resume-inner-left">
							View Resume 
						</div>
						<div class="resume-inner-right">
							<img src="<?php bloginfo('template_url'); ?>/images/PDF_icon.png" alt="PDF Icon"/>
						</div>
					</a>
				<!-- </button> -->
			</div>
		</div>
	</div>
</section>

<section class="about-content">
	<div class="container">
		<div class="title-box">
			<div>
				<h3>about</h3>
			</div>
		</div>

		<div class="about-container">
			<div class="about-description">
				<p><?php echo esc_html(CFS()->get('about_description')); ?></p>
			</div>

			<div class="wrapper-image">
				<div class="image-01">
					<img src= "<?php echo get_template_directory_uri() ?>/images/pw_profile_imageJuly2015.png" alt="Paul Profile Image">
					<!-- <?php echo esc_html(CFS()->get('about_primary_image')); ?> -->
				</div>

				<div class="image-02">
					<img src= "<?php echo get_template_directory_uri() ?>/images/pw_bass.png" alt="Paul Profile Image">
					<!-- <?php echo esc_html(CFS()->get('about_secondary_image')); ?> -->
				</div>
			</div>	
		</div>
	</section>
</div>
</div>

<?php get_footer(); ?>


