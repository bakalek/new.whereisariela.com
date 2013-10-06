jQuery(function() {
	jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() != 0) {
			jQuery('#toTop').fadeIn();	
		} else {
			jQuery('#toTop').fadeOut();
		}
	});
 
	jQuery('#toTop').click(function() {
		jQuery('body,html').animate({scrollTop:0},800);
	});	
	jQuery(".post_format_image a").append('<span class="hover_overlay"><i class="icon-zoom-in"></a></span>').fancybox();
	jQuery(".post_format_image a").fancybox();
	jQuery(".lightbox_img").append('<span class="hover_overlay"><i class="icon-zoom-in"></a></span>');
	jQuery(".lightbox_img").fancybox();
	jQuery(".lightbox_img").hover(
		function(){
			jQuery(this).find('.hover_overlay').animate({opacity:0.6}, 400)
			jQuery(this).find('.icon-zoom-in').animate({opacity: 0.3, fontSize:61, marginTop:-6, marginLeft:-23 }, 400)
		},
		function(){
			jQuery(this).find('.hover_overlay').animate({opacity:0}, 400)
			jQuery(this).find('.icon-zoom-in').animate({opacity: 0, fontSize:800, marginTop:10, marginLeft:-300 }, 400)
		}
	)

});