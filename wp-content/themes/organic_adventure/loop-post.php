<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if (isset($_POST['featurevid'])){ $custom = get_post_custom($post->ID); $featurevid = $custom['featurevid'][0]; } ?>

<!-- BEGIN .single-holder -->
<div class="single-holder">

	<!-- BEGIN .intro -->
	<div class="intro">
	
		<h1 class="headline"><?php the_title(); ?></h1>
		
		<div class="post-author">
			<p class="align-left"><i class="icon-time"></i> &nbsp;<?php _e("Posted on", 'organicthemes'); ?> <?php the_time(__("F j, Y", 'organicthemes')); ?> <?php _e("by", 'organicthemes'); ?> <?php esc_url ( the_author_posts_link() ); ?></p>
			<p class="align-right"><i class="icon-comment"></i> &nbsp;<a class="scroll" href="<?php the_permalink(); ?>#comments"><?php comments_number(__("Comment", 'organicthemes'), __("1 Comment", 'organicthemes'), '% Comments'); ?></a></p>
		</div>
	
	<!-- END .intro -->
	</div>
	
	<?php if(of_get_option('display_feature_post') == '1') { ?>
		<?php if ( get_post_meta($post->ID, 'featurevid', true) ) { ?>
			<div class="feature-vid"><?php echo get_post_meta($post->ID, 'featurevid', true); ?></div>
		<?php } else { ?>
			<?php if ( has_post_thumbnail()) { ?>
				<div class="feature-img"><?php the_post_thumbnail( 'featured-large' ); ?></div>
			<?php } ?>
		<?php } ?>
	<?php } ?>
	
	<!-- BEGIN .article -->
	<div class="article">
	
		<?php the_content(); ?>
	
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
		
		<!-- BEGIN .post-navigation -->
		<div class="post-navigation">
			<div class="previous-post"><?php previous_post_link('&larr; %link'); ?></div>
			<div class="next-post"><?php next_post_link('%link &rarr;'); ?></div>
		<!-- END .post-navigation -->
		</div>
	
	<!-- END .article -->
	</div>
	
	<?php if(of_get_option('display_social_post') == '1') { ?>
	<div class="social">
		<div class="like-btn">
			<div class="fb-like" href="<?php the_permalink(); ?>" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
		</div>
		<div class="tweet-btn">
			<a href="http://twitter.com/share" class="twitter-share-button"
			data-url="<?php the_permalink(); ?>"
			data-via="<?php echo of_get_option('twitter_user'); ?>"
			data-text="<?php the_title(); ?>"
			data-related=""
			data-count="horizontal"><?php _e("Tweet", 'organicthemes'); ?></a>
		</div>
		<div class="plus-btn">
			<g:plusone size="medium" annotation="bubble" href="<?php the_permalink(); ?>"></g:plusone>
		</div>
	</div>
	<?php } ?>
	
	<!-- BEGIN .post-meta -->
	<div class="post-meta">
		<p><i class="icon-reorder"></i> &nbsp;<?php _e("Category:", 'organicthemes'); ?> <?php the_category(', '); ?> &nbsp; &nbsp; <i class="icon-tags"></i> &nbsp;<?php _e("Tags:", 'organicthemes'); ?> <?php the_tags(''); ?></p>
	<!-- END .post-meta -->
	</div>

<!-- END .single-holder -->
</div>

<?php comments_template('',true); ?>

<div class="clear"></div>

<?php endwhile; else: ?>

<p><?php _e("Sorry, no posts matched your criteria.", 'organicthemes'); ?></p>

<?php endif; ?>