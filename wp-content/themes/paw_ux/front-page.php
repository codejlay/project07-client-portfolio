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
				<div class="intro-details">
					<div class="intro-details-inner">
						<div class="intro-name">
							<h2>Hi, my_name is Paul</h2>
						</div>

						<div class="intro-description">
							<p>I’m a User Experience Designer based out of Vancouver, Canada. Lorem ipsum dolor sit amet.</p>
						</div>
					</div>
				
					<div class="homepage-image">
						<img src="<?php bloginfo('template_url'); ?>/images/image_blank_500x450.png" alt="Paul Portfolio Home Image" />
					</div>
				</div>
			</div>

			<div class="chevron-scroll">
				<i class="fa fa-chevron-down"></i>
			</div>
		</section>
			<section class="my-work-content">
				<div class="container">
					<div class="title-box">
						<div class="title-box-inner">
							<h3>my_work</h3>
						</div>
					</div>

					<ul class="work-type-blocks">
						<?php $query = new WP_Query( array( 'post_type' => 'project' ) ); ?>
						<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
							<li class="work-type-block-wrappers <?php echo (++$j % 2 == 0) ? 'evenpost' : 'oddpost'; ?>">
								<div class="work-image">
									<?php echo get_the_post_thumbnail(get_the_id(), 'large') ?>
								</div>
								<div class="work-details">
									<div class="work-title">
										<p><?php echo get_the_title(get_the_ID()); ?></p>
									</div> 

									<div class="work-description">
										<p><?php echo ( CFS()->get('project_description')); ?></p> 
									</div>

									<div class="work-link">
										<p><?php echo ( CFS()->get('case_study')); ?></p>
									</div>
								</div>
							</li>
						<?php endwhile; endif; wp_reset_postdata(); ?>
					</ul>
				</div>
			</section>

		<section class="skills-content">
			<div class="container">
				<div class="title-box">
					<div class="title-box-inner">
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


				<div class="software">
					<p><?php echo $cfs->get('software_title'); ?></p>
					<div class="software-details">
						
					
						<div class="design-wrapper">
							<div class="design-title">
								<?php echo $cfs->get('design_title'); ?>
							</div>

							<div class="design-description">
								<?php echo $cfs->get('design_description'); ?>
							</div>
						</div>
						
						<div class="prototyping-wrapper">
							<div class="prototyping-title">
								<?php echo $cfs->get('prototyping_title'); ?>
							</div>

							<div class="prototyping-description">
								<?php echo $cfs->get('prototyping_description'); ?>
							</div>
							</div>
						</div>
					
					</div>
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
		</section>

		<section class="about-content">
			<div class="container">
				<div class="title-box">
					<div class="title-box-inner">
						<h3>about</h3>
					</div>
				</div>

				<div class="about-container">
					<div class="about-description">
						<p><?php echo esc_html(CFS()->get('about_description')); ?></p>
					</div>

					<div class="wrapper-image">	
						<!-- 	<div class="image-container">
								<div class="skew-container">
									<div class="skew-right">
										<img src= "<?php echo get_template_directory_uri() ?>/images/pw_profile_imageJuly2015.png" alt="Paul Profile Image">
										<div class="slicer-right">
											<div class="image-01">
												<img src= "<?php echo get_template_directory_uri() ?>/images/pw_profile_imageJuly2015.png" alt="Paul Profile Image">
											</div>
										</div>
									</div>
								</div>
							</div> -->

						<div class="image-01">
							<img src= "<?php echo get_template_directory_uri() ?>/images/pw_profile_imageJuly2015.png" alt="Paul Profile Image">
						</div>

						<div class="image-02">
							<img src= "<?php echo get_template_directory_uri() ?>/images/pw_bass.png" alt="Paul Profile Image">
							<!-- <?php echo esc_html(CFS()->get('about_secondary_image')); ?> -->
							<!-- <p><?php echo $cfs->get('about_secondary_image'); ?></p> -->
						</div>
					</div>	
				</div>
			</div>
		</section>
	</div>
</div>

<?php get_footer(); ?>


<!-- <div class="container">
	<div class="skew-container">
		<div class="skew-left">
			<div class="slicer-left">
			</div>
		</div>

		<div class="skew-right">
			<div class="slicer-right">
			</div>
		</div>
	</div>
</div> -->

