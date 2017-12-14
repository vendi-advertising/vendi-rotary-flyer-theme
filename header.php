<!DOCTYPE html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<?php
$user = wp_get_current_user();
if(!is_front_page() && 0 == $user->ID )
{
     auth_redirect();
 }

wp_head();

?>
</head>
<body <?php body_class(); ?>>

<?php

do_action( 'vendi/rotary-flyer/body-header' );
