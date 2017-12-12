<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php
// Probably not needed anymore
// $user = wp_get_current_user();
// if(!is_front_page() && 0 == $user->ID )
// {
//     auth_redirect();
// }

wp_head();

?>
</head>
<body <?php body_class(); ?>>
	<!-- begin header -->
    <div id="header" role="banner">
    	<div class="header-region">
            <div class="header-wrapper">
                <h1> Rotary Club of La Crosse </h1>
                <h2> NEWS WHEEL </h2>
                <img class="logo" src="<?php echo VENDI_BASE_THEME_URL; ?>/images/Rotary_Gear.png" alt="Rotary News Wheel Logo" />
            </div>
            <div class="lower-ribbon">
                <div class="header-wrapper">
                    <p> Share an announcement with your Rotary community </p>
                </div>
            </div>
		</div>
    </div>
    <!-- end header -->
