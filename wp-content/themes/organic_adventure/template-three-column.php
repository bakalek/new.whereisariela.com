<?php
/**
Template Name: Three Column
*
* This template is used to display three column pages featuring two sidebars.
*
* @package Adventure
* @since Adventure 1.0
*
*/
get_header(); ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="page-<?php the_ID(); ?>">

	<?php $header_image = get_header_image(); if ( ! empty( $header_image ) ) { ?>
		<div class="feature-img page-header"><img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo('name'); ?>" /></div>
	<?php } ?>
	
	<!-- BEGIN .row -->
	<div class="row<?php if ( ! empty( $header_image ) ) { ?> header-active<?php } ?>">
	
		<!-- BEGIN .three columns -->
		<div class="three columns">
		
			<?php get_sidebar('left'); ?>
			
		<!-- END .three columns -->
		</div>
		
		<!-- BEGIN .eight columns -->
		<div class="eight columns">

			<!-- BEGIN .postarea single-holder -->
			<div class="postarea single-holder">
			
				<?php get_template_part( 'loop', 'page' ); ?>
			
			<!-- END .postarea single-holder -->
			</div>
		
		<!-- END .eight columns -->
		</div>
		
		<!-- BEGIN .five columns -->
		<div class="five columns">
		
			<?php get_sidebar(); ?>
			
		<!-- END .five columns -->
		</div>
	
	<!-- END .row -->
	</div>
	
<!-- END .post class -->
</div>

<?php get_footer(); ?>