<?php
/**
 * The template for displaying the footer.
 *
 * @package paw_ux_Theme
 */

?>

			</div><!-- #content -->
			
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<div class="social">
						<div class="social-inner">
							<div class="social-01">
								<i class="fa fa-envelope"></i>

								<div class="social-01-inner">
									<!-- <a href="mailto:paw.uxd@gmail.com">E-mail: paw.uxd@gmail.com</a> -->
									<a href="mailto:paw.uxd@gmail.com">E-mail: <?php echo $cfs->get('email_address'); ?></a>
								</div>
							</div>
							
							<div class="social-02">
								<i class="fa fa-linkedin-square"></i>
								
								<div class="social-02-inner">
									<!-- <a href="https://ca.linkedin.com/in/pawux">LinkedIn</a>	 -->
									<!-- <a href="<?php $link = CFS()->get( 'linkedin' ); ?>">LinkedIn</a> -->
									<!-- <a href="<?php echo $cfs->get('linkedin'); ?>">LinkedIn</a> -->
									<a href="#" onClick="window.open('<?php echo $cfs->get('linkedin'); ?>', '_blank')">LinkedIn</a>
								</div>
							</div>
						</div>
					</div>

					<div class="copyright">
						<p>&copy; 2015. Design by Paul Anthony Wilson.</p>
					</div>
					<!-- </div> -->
					<div class="footer-accent">
					</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

	<?php wp_footer(); ?>

	</body>
</html>
