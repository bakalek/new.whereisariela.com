<?php $featured_page = 'false' != of_get_option('featured_page'); if ( ! empty( $featured_page ) ) { ?>

<?php $recent = new WP_Query('page_id='.of_get_option('featured_page')); while($recent->have_posts()) : $recent->the_post(); ?>

<!-- BEGIN .eleven columns -->
<div class="eleven columns">

	<div class="article">
		<h2 class="title"><?php the_title(); ?></h2>
		<?php the_excerpt(); ?>
	</div>
	
	<div class="home-social">
		<div class="title"><?php _e("Follow Me", 'organicthemes'); ?></div>
		<?php get_template_part( 'content/social' ); ?>
	</div>

<!-- END .eleven columns -->
</div>

<!-- BEGIN .five columns -->
<div class="five columns">

	<?php if ( has_post_thumbnail()) { ?>
		<div class="feature-img"><?php the_post_thumbnail( 'featured-square' ); ?></div>
	<?php } else { ?>
		<div class="feature-img"><img src="<?php echo get_template_directory_uri(); ?>/images/default-profile.jpg" alt="<?php the_title(); ?>" /></div>
	<?php } ?>

<!-- END .five columns -->
</div>

<?php endwhile; ?>

<?php } ?>