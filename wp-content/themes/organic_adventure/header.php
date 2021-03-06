<?php
/**
* The Header for our theme.
* Displays all of the <head> section and everything up till <div id="wrap">
*
* @package Adventure
* @since Adventure 1.0
*
*/
?><!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<?php if(of_get_option('enable_responsive') == '1') { ?>
<!-- Mobile View -->
<meta name="viewport" content="width=device-width">
<?php } ?>

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="Shortcut Icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">

<?php get_template_part( 'style', 'options' ); ?>

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" type="application/rss+xml" title="<?php esc_attr( bloginfo('name') ); ?> Feed" href="<?php echo home_url(); ?>/feed/">
<link rel="pingback" href="<?php echo esc_url( bloginfo('pingback_url') ); ?>">

<!-- Social Buttons -->
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>

<?php wp_head(); ?>

<script src="/js/jquery.ez-bg-resize.js" type="text/javascript" charset="utf-8"></script>
<script>
		$(document).ready(function() {
			$("body").ezBgResize({
				img     : "http://new.whereisariela.com/image/bg.jpg", // Relative path example.  You could also use an absolute url (http://...).
				opacity : 1, // Opacity. 1 = 100%.  This is optional.
				center  : true // Boolean (true or false). This is optional. Default is true.
			});
		});
	</script>

</head>

<body <?php body_class(); ?>>

<!-- BEGIN #wrap -->
<div id="wrap">

	<!-- BEGIN .container -->
	<div class="container">
	
		<!-- BEGIN #header -->
		<div id="header">
		
			<!-- BEGIN .row -->
			<div class="row">
			
				<!-- BEGIN .five columns -->
				<div class="five columns">
				
					<div class="mobile-logo">
						<?php get_template_part( 'content/custom', 'header' ); ?>
					</div>
				
				<!-- END .five columns -->
				</div>
				
				<!-- BEGIN .eleven columns -->
				<div class="eleven columns">
				
					<!-- BEGIN #navigation -->
					<nav id="navigation" class="navigation-main" role="navigation">
					
						<h1 class="menu-toggle"><?php _e( 'Menu', 'organicthemes' ); ?></h1>
			
						<?php if ( has_nav_menu( 'header-menu' ) ) {
							wp_nav_menu( array(
								'theme_location' => 'header-menu',
								'title_li' => '',
								'depth' => 4,
								'container_class' => '',
								'menu_class'      => 'menu'
								)
							);
						} else { ?>
							<ul class="menu"><?php wp_list_pages('title_li=&depth=4'); ?></ul>
						<?php } ?>
					
					<!-- END #navigation -->
					</nav>
				
				<!-- END .eleven columns -->
				</div>
				
			<!-- END .row -->
			</div>
		
		<!-- END #header -->
		</div>
		
		<!-- BEGIN .row -->
		<div class="row">
		
			<!-- BEGIN .five columns -->
			<div class="five columns">
			
				<div class="main-logo">
					<?php get_template_part( 'content/custom', 'header' ); ?>
				</div>
			
			<!-- END .five columns -->
			</div>
						
		<!-- END .row -->
		</div>