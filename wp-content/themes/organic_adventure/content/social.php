<ul class="social-icons">
	<?php if (of_get_option('facebook_link') && of_get_option('facebook_link') != '') { ?>
		<li><a class="link-facebook" href="<?php echo of_get_option('facebook_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-facebook"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('twitter_link') && of_get_option('twitter_link') != '') { ?>
		<li><a class="link-twitter" href="<?php echo of_get_option('twitter_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-twitter"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('linkedin_link') && of_get_option('linkedin_link') != '') { ?>
		<li><a class="link-linkedin" href="<?php echo of_get_option('linkedin_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-linkedin"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('skype_link') && of_get_option('skype_link') != '') { ?>
		<li><a class="link-skype" href="<?php echo of_get_option('skype_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-skype"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('plus_link') && of_get_option('plus_link') != '') { ?>
		<li><a class="link-google" href="<?php echo of_get_option('plus_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-googleplus"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('pinterest_link') && of_get_option('pinterest_link') != '') { ?>
		<li><a class="link-pinterest" href="<?php echo of_get_option('pinterest_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-pinterest"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('github_link') && of_get_option('github_link') != '') { ?>
		<li><a class="link-github" href="<?php echo of_get_option('github_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-github"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('instagram_link') && of_get_option('instagram_link') != '') { ?>
		<li><a class="link-instagram" href="<?php echo of_get_option('instagram_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-instagram-2"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('youtube_link') && of_get_option('youtube_link') != '') { ?>
		<li><a class="link-youtube" href="<?php echo of_get_option('youtube_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-youtube"></span></a></li>
	<?php } ?>
	<?php if (of_get_option('email_link') && of_get_option('email_link') != '') { ?>
		<li><a class="link-email" href="mailto:<?php echo of_get_option('email_link'); ?>" target="_blank"><span aria-hidden="true" class="organicon-envelop"></span></a></li>
	<?php } ?>
</ul>