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
		<section class="intro" id="home">
			<div class="container">
				<div class="intro-details">
					<div class="intro-details-inner">
						<div class="intro-name">
							<h2><?php echo ( CFS()->get('intro_name')); ?></h2>
							
						</div>

						<div class="intro-description">
							<p><?php echo ( CFS()->get('intro_description')); ?></p>
						</div>
					</div>
				
					<div class="homepage-image">
						<?php $intro_images = CFS()->get('intro_images');
						foreach ($intro_images as $image) : 
						?>
						<div class="homepage-image-inner">
							<?php echo '<img src="'.$image["intro_image"].'"/>'; ?>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>

			<div class="chevron-scroll">
				<div class="chevron-scroll-inner">
					<a href="#my_work"><i class="fa fa-chevron-down"></i></a>
				</div>
			</div>
		</section>

		<section class="my-work-content" id="my_work">
			<div class="container">
				<div class="title-box">
					<div class="title-box-inner">
						<h3>my_work</h3>
					</div>
				</div>

				<ul class="work-type-blocks">
					<?php
						$j = 0; 
						$query = new WP_Query( array( 'post_type' => 'project' ) ); 
					?>
					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
						<li class="work-type-block-wrappers <?php echo (++$j % 2 == 0) ? 'evenpost' : 'oddpost'; ?>">
							<div class="work-image-container">
								<div class="work-skew-container">
									<div class="work-skew" id="custom-bg" style= "background-image: url( <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url ?>); background-repeat:no-repeat; background-size:cover;">
										<div class="work-slicer">
										</div>	
									</div>
								</div>
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

		<section class="skills-content" id="skills">
			<div class="container">
				<div class="title-box">
					<div class="title-box-inner">
						<h3>skills</h3>
					</div>
				</div>
				
				<ul class="grid-4_sm-2_xs-1 skill-type-blocks">
					<?php 
						$query = new WP_Query( array( 'post_type' => 'skill' ) ); 
					?>
					<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
					<li class="skill-type-block-wrappers col">
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
					
					<!-- <a href="#" onClick="window.open('http://www.redacademy.com', '_blank')"> -->
					<!-- <a href="#" onClick="window.open('<?php $link = cfs()->get('resume_link'); ?>', '_blank')"> -->
						<a href="#" onClick="window.open('<?php echo $cfs->get('resume_link'); ?>', '_blank')">
						<!-- <?php echo $cfs->get('linkedin'); ?> -->
						<div class="resume-inner-left">View Resume</div>

						<div class="resume-inner-right">
							<img src="<?php bloginfo('template_url'); ?>/images/PDF_icon.png" alt="PDF Icon"/>
						</div>
					</a>
				</div>
			</div>
		</section>

		<section class="about-content" id="about">
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
					
					<div class="image-container clearfix">
						<div class="image-01">
							<div class="image-01-inner">
								<div class="skew-container">
									<div class="skew-right" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/pw_pic.jpg); background-repeat:no-repeat; background-size:cover;">
										<div class="slicer-right">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="image-02 clearfix">
							<?php $about_secondary_images = CFS()->get('about_secondary_images');
							foreach ($about_secondary_images as $image) : 
							?>
							<div class="image-02-inner">
							<?php echo '<img src="'.$image["secondary_image"].'"/>'; ?>
								<!-- <img src= "<?php echo get_template_directory_uri() ?>/images/pw_bass.png" alt="Paul Profile Image"> -->
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

<?php get_footer(); ?>


<!-- !!!***TEST AREA***!!! -->


						
									


<!-- <div class="test-container">
	<div class="test-container-l">
	</div>	
	<div class="test-container-r">
	</div>	
</div> -->
<!-- <div class="image-container">
	<div class="skew-container">
		<div class="skew-left">
			<div class="slicer-left">
			</div>
		</div>
		
		<div class="skew-right" style="background-image:url(<?php echo get_template_directory_uri() ?>/images/pw_pic.jpg); background-repeat:no-repeat; background-size:cover;">
			<div class="slicer-right">
			</div>
		</div>
	</div>
</div> -->



