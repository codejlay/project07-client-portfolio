<?php
/**
 * The header for our theme.
 *
 * @package paw_ux_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>


		<div id="page" class="hfeed site">
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="container">
					<div class="navigation-inner">
						<div class="logo-wrapper">
							<div class="logo">
								<div class="logo-inner">
									<h1>paw_ux</h1>
								</div>
							</div>
						</div>

						<div class="nav-wrapper">
							<div class="nav-selection">
								<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
							</div>
						</div>
					</div>
				</div>
			</nav><!-- #site-navigation -->
			
		<!-- </header>#masthead -->

		<div id="content" class="site-content">
