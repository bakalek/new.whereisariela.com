<?php if (is_home() || is_front_page() ) { ?>

	<?php $adventure_logo = adventure_get_logo_url(); if ( ! empty( $adventure_logo ) ) { ?>
		<h1 id="custom-header" class="home-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( adventure_get_logo_url() ); ?>" alt="<?php esc_attr( bloginfo('name') ); ?>" /><?php bloginfo( 'name' ); ?></a></h1>
	<?php } else { ?>
		<div id="masthead" class="home-logo">
			<h1 class="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a></span></h1>
			<h2 class="site-description"><?php echo wp_kses_post( get_bloginfo( 'description' ) ); ?></h2>
		</div>
	<?php } ?>
	
<?php } else { ?>

	<?php $adventure_logo = adventure_get_logo_url(); if ( ! empty( $adventure_logo ) ) { ?>
		<p id="custom-header" <?php $header_image = get_header_image(); if ( is_page() && ! empty( $header_image ) || is_category() && ! empty( $header_image ) || is_single() && ! empty( $header_image ) || is_page_template('template-image.php') ) { ?> class="logo-overlay"<?php } ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( adventure_get_logo_url() ); ?>" alt="<?php esc_attr( bloginfo('name') ); ?>" /><?php bloginfo( 'name' ); ?></a></p>
	<?php } else { ?>
		<div id="masthead" <?php $header_image = get_header_image(); if ( is_page() && ! empty( $header_image ) || is_category() && ! empty( $header_image ) || is_single() && ! empty( $header_image ) || is_page_template('template-image.php') ) { ?> class="logo-overlay"<?php } ?>>
			<h4 class="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_kses_post( get_bloginfo( 'name' ) ); ?></a></span></h4>
			<h5 class="site-description"><?php echo wp_kses_post( get_bloginfo( 'description' ) ); ?></h5>
		</div>
	<?php } ?>

<?php } ?>