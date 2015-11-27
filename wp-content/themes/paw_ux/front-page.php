<?php
/**
 * The main front-page file.
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
					<!-- <img src="images/image_blank_500x450.png"/> -->
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

				<?php 
				$query = new WP_Query( array( 'post_type' => 'skill' ) ); ?>


				<?php if($query->have_posts() ) : while($query->have_posts() ) : $query->the_post(); ?>
				       
				     <p><?php echo get_the_post_thumbnail(get_the_id(), 'large') ?></p>
				        <p><?php echo get_the_title(get_the_ID()); ?></p>
				         <p><?php echo ( CFS()->get('skill_description')); ?></p> 

				<?php endwhile; endif; wp_reset_postdata(); ?>


				<div class="resume">
					<button>View Resume</button>
				</div>
				</div>
				</div>
			</section>
		</div>
	</div>

<?php get_footer(); ?>


