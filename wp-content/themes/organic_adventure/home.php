<?php
/**
* This template is used to display the home page.
*
* @package Adventure
* @since Adventure 1.0
*
*/
get_header(); ?>
		
<!-- BEGIN .home-slider -->
<div class="home-slider">

	<?php get_template_part( 'content/featured', 'slider' ); ?>
	
<!-- END .home-slider -->
</div>

<!-- BEGIN .row -->
<div class="row">
	
	<!-- BEGIN .homepage -->
	<div class="homepage">

	<?php if (of_get_option('display_home_page') == '1') { ?>
		
		<!-- BEGIN .sixteen columns -->
		<div class="sixteen columns">
		
			<!-- BEGIN .featured-page -->
			<div class="featured-page">
			
				<?php get_template_part( 'content/home', 'page' ); ?>
				
			<!-- END .featured-page -->
			</div>
		
		<!-- END .sixteen columns -->
		</div>
	
	<?php } ?>
	<?php if (of_get_option('display_home_posts') == '1') { ?>
	
		<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
	
			<!-- BEGIN .five columns -->
			<div class="five columns">
			
				<?php get_sidebar('left'); ?>
				
			<!-- END .five columns -->
			</div>
		
			<!-- BEGIN .eleven columns -->
			<div class="eleven columns">
			
				<!-- BEGIN .home-news -->
				<div class="home-news">
				
					<?php get_template_part( 'content/home', 'post' ); ?>
				
				<!-- END .home-news -->
				</div>
			
			<!-- END .eleven columns -->
			</div>
		
		<?php else : ?>
		
			<!-- BEGIN .sixteen columns -->
			<div class="sixteen columns">
			
				<!-- BEGIN .home-news -->
				<div class="home-news">
				
					<?php get_template_part( 'content/home', 'post' ); ?>
				
				<!-- END .home-news -->
				</div>
			
			<!-- END .sixteen columns -->
			</div>
			
		<?php endif; ?>

	<?php } ?>

	<!-- END .homepage -->
	</div>

<!-- END .row -->
</div>

<?php get_footer(); ?>