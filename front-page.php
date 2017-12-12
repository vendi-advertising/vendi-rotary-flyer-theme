<?php
get_header();

?>

    <div id="main-content">
    	<div class="main-content-region">
			<div class="front-page-column">
				<div class="flyer-image-container">
					<a href="<?php echo get_stylesheet_directory_uri(); ?>/images/Rotary-Ads-and Announcements-3X3-FINAL.png">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Rotary-Ads-and Announcements-3X3-FINAL.png" alt="rotary flyer screenshot"/>
					</a>
				</div>
			</div><!--
			--><div class="front-page-column">
				<div class="front-page-copy-region">
					<h1> Welcome to Rotary News Wheel </h1>
					<p> Share an announcement or ad with your Rotary community. Ads are displayed during Thursday Rotary meetings and on our website. Posting an ad is as easy as posting to Facebook or Twitter. </p>
					<ol>
						<li> Log in </li>
						<li> Select a date or dates for the ad to run </li>
						<li> Create your ad
							<ul>
								<li> Headline and text </li>
								<li> Headline, text and image/logo</li>
								<li> Image file as the entire ad (2.25 x 2.25)</li>
							</ul>
						</li>
						<li> Preview and approve</li>
					</ol>
					<p>
						Your Rotary account will be charged $5 per ad post. You may place up to 9 ads at one time. First come, first served; limit of 9 ads per week!
					</p>
				</div>
				<a class="steps-button" href="<?php echo wp_login_url(); ?>">
					Log in
				</a>
			</div>
        </div>
	</div><!-- #main-content -->

<?php
get_footer();
