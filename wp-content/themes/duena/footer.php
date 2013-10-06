<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package duena
 */
?>
			</div>
		</div>
	</div><!-- #main -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<div class="footer-text">
					<?php 
					$footer_text = esc_attr(of_get_option('footer_text'));
					if ('' != $footer_text) {
						echo stripslashes(htmlspecialchars_decode($footer_text));
					} else { ?>
						<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'duena' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'duena' ), 'WordPress' ); ?></a>
					<?php } ?>
				</div>
				<?php if ('true' == of_get_option('footer_menu')) {
					wp_nav_menu( array( 
						'container'       => 'ul', 
		                'menu_class'      => 'footer-menu', 
		                'menu_id'         => 'footer-nav',
		                'depth'           => 0,
		                'theme_location' => 'footer' 
					) ); 
				}
				?>
				<div class="clear"></div>
				<div id="toTop"><i class="icon-chevron-up"></i></div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- .page-wrapper -->
<?php
	$sf_delay = esc_attr( of_get_option('sf_delay') );
	$sf_f_animation = esc_attr( of_get_option('sf_f_animation') );
	$sf_sl_animation = esc_attr( of_get_option('sf_sl_animation') );
	$sf_speed = esc_attr( of_get_option('sf_speed') );
	$sf_arrows = esc_attr( of_get_option('sf_arrows') );
	if ('' == $sf_delay) {$sf_delay = 1000;}
	if ('' == $sf_f_animation) {$sf_f_animation = 'show';}
	if ('' == $sf_sl_animation) {$sf_sl_animation = 'show';}
	if ('' == $sf_speed) {$sf_speed = 'normal';}
	if ('' == $sf_arrows) {$sf_arrows = 'false';}

?>
<script type="text/javascript">
	// initialise plugins
	jQuery(function(){
		// main navigation init
		jQuery('.navbar_inner > ul').superfish({
			delay:       <?php echo $sf_delay; ?>, 		// one second delay on mouseout 
			animation:   {opacity:"<?php echo $sf_f_animation; ?>", height:"<?php echo $sf_sl_animation; ?>"}, // fade-in and slide-down animation
			speed:       '<?php echo $sf_speed; ?>',  // faster animation speed 
			autoArrows:  <?php echo $sf_arrows; ?>,   // generation of arrow mark-up (for submenu)
			dropShadows: false
		});
		jQuery('.navbar_inner > div > ul').superfish({
			delay:       <?php echo $sf_delay; ?>, 		// one second delay on mouseout 
			animation:   {opacity:"<?php echo $sf_f_animation; ?>", height:"<?php echo $sf_sl_animation; ?>"}, // fade-in and slide-down animation
			speed:       '<?php echo $sf_speed; ?>',  // faster animation speed 
			autoArrows:  <?php echo $sf_arrows; ?>,   // generation of arrow mark-up (for submenu)
			dropShadows: false
		});
	});
	jQuery(function(){
	  var ismobile = navigator.userAgent.match(/(iPad)|(iPhone)|(iPod)|(android)|(webOS)/i)
	  if(ismobile){
	  	jQuery('.navbar_inner > ul').sftouchscreen();
	  	jQuery('.navbar_inner > div > ul').sftouchscreen();
	  }
	});
</script>
<!--[if (gt IE 9)|!(IE)]><!-->
<script type="text/javascript">
	jQuery(function(){
		jQuery('.navbar_inner > ul').mobileMenu();
	  	jQuery('.navbar_inner > div > ul').mobileMenu();
	})
</script>
<!--<![endif]-->
<?php wp_enqueue_script('bootstrap-custom', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0'); ?>
<?php wp_footer(); ?>
<?php
if ( of_get_option('footer_ga') ) {
	?>
	<script type="text/javascript">
	<?php
		echo stripslashes( of_get_option('footer_ga') );
	?>
	</script>
	<?php
}
?>
</body>
</html>