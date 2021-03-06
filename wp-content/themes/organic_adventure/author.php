<?php
/**
* This template is used to display author information, when clicking on an authors name.
*
* @package Adventure
* @since Adventure 1.0
*
*/
get_header(); ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<!-- BEGIN .row -->
	<div class="row">
	
		<!-- BEGIN .eleven columns -->
		<div class="eleven columns">
		
			<!-- BEGIN .postarea single-holder -->
			<div class="postarea single-holder">
			
				<!-- BEGIN .article -->
				<div class="article">
			
					<?php the_post(); ?>
			
					<h1 class="headline"><?php echo esc_html( get_the_author() ); ?></h1>
			
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), 120 ); ?>
					</div>
					
					<!-- BEGIN .author-column -->
					<div class="author-column">
					
						<?php $website = get_the_author_meta( 'user_url' ); ?>
						<?php if ( ! empty( $website ) ) : ?>
							<h6><?php _e("Website:", 'organicthemes'); ?></h6>
							<p><a href="<?php echo esc_url( $website ); ?>" rel="bookmark" title="<?php esc_attr_e("Link to author page", 'organicthemes'); ?>" target="_blank"><?php echo esc_url( $website ); ?></a></p>
						<?php endif; ?>
			
						<?php $description = get_the_author_meta( 'description' ); ?>
						<?php if ( ! empty( $description ) ) : ?>
							<h6><?php _e( "Profile:", 'organicthemes' ); ?></h6>
							<p><?php echo wp_kses_post( $description ); ?></p>
						<?php endif; ?>
						
						<?php rewind_posts(); ?>
						
						<?php if ( have_posts() ) : ?>
						
						<h6><?php printf( __( 'Posts by %1$s:', 'organization'), get_the_author() );  ?></h6>
						
						<ul class="author-posts">
							<?php while ( have_posts() ) : the_post(); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						</ul>
						
						<div class="pagination">
							<?php echo adventure_get_pagination_links(); ?>
						</div><!-- END .pagination -->
			
						<?php else: ?>
							<p><?php _e("No posts by this author.", 'organization'); ?></p>
						<?php endif; ?>
					
					<!-- END .author-column -->
					</div>
				
				<!-- END .article -->
				</div>
			
			<!-- END .postarea single-holder -->
			</div>
	
		<!-- END eleven columns -->
		</div>
	
		<!-- BEGIN .five columns -->
		<div class="five columns">

			<?php get_sidebar( 'page' ); ?>
		
		<!-- END .four columns -->
		</div>

	<!-- END .row -->
	</div>
	
<!-- END .post class -->
</div>

<?php get_footer(); ?>