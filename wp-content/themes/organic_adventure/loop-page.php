<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if ( has_post_thumbnail()) { ?>
	<a class="feature-img banner" href="<?php the_permalink(); ?>" rel="bookmark" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'organicthemes' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail( 'featured-large' ); ?></a>
<?php } ?>

<div class="article">

	<h1 class="headline"><?php the_title(); ?></h1>
	
	<?php the_content(__("Read More", 'organicthemes')); ?>
	
	<?php wp_link_pages(array(
		'before' => '<p class="page-links"><span class="link-label">' . __('Pages:', 'organicthemes') . '</span>',
		'after' => '</p>',
		'link_before' => '<span>',
		'link_after' => '</span>',
		'next_or_number' => 'next_and_number',
		'nextpagelink' => __('Next', 'organicthemes'),
		'previouspagelink' => __('Previous', 'organicthemes'),
		'pagelink' => '%',
		'echo' => 1 )
	); ?>
	
	<div class="clear"></div>
	<?php edit_post_link(__("(Edit)", 'organicthemes'), '', ''); ?>

</div>

<?php endwhile; else: ?>

<div class="article">
	<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>
</div>

<?php endif; ?>