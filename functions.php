<?php

/**
 * Enable ACF 5 early access
 * Requires at least version ACF 4.4.12 to work
 */
define('ACF_EARLY_ACCESS', '5');

//Setup some theme-level constants to make life easier elsewhere
define( 'VENDI_BASE_THEME_FILE', __FILE__ );
define( 'VENDI_BASE_THEME_PATH', dirname( __FILE__ ) );
define( 'VENDI_BASE_THEME_URL',  get_bloginfo( 'template_directory' ) );



//Remove extra HTTP headers send by WordPress
add_filter(
            'wp_headers',
            function( $headers, $context )
            {
                unset( $headers[ 'X-Pingback' ] );
                return $headers;
            },
            9999,
            2
        );

//This code is called at theme boot up
add_action(
            'after_setup_theme',
            function()
            {

                //Add featured image support
                add_theme_support( 'post-thumbnails' );

                //Register some menus
                register_nav_menus(
                                    array(
                                            'main_nav'          => 'Primary navigation',
											'footer_nav'        => 'Footer navigation',
                                            //'responsive_nav'    => 'Responsive navigation',
                                        )
                                );

                //Remove a bunch of things from the HTML head tags
                remove_action( 'wp_head',               'rsd_link');
                remove_action( 'wp_head',               'wlwmanifest_link');
                remove_action( 'wp_head',               'wp_generator');
                remove_action( 'wp_head',               'feed_links', 2 );
                remove_action( 'wp_head',               'feed_links_extra', 3 );
                remove_action( 'wp_head',               'wp_shortlink_wp_head' );

                //Emoji
                remove_action( 'wp_head',               'print_emoji_detection_script', 7 );
                remove_action( 'wp_print_styles',       'print_emoji_styles' );
                remove_filter( 'the_content_feed',      'wp_staticize_emoji' );
                remove_filter( 'comment_text_rss',      'wp_staticize_emoji' );
                remove_filter( 'wp_mail',               'wp_staticize_emoji_for_email' );

                remove_action( 'wp_head',               'index_rel_link');
                remove_action( 'wp_head',               'parent_post_rel_link');
                remove_action( 'wp_head',               'start_post_rel_link');
                remove_action( 'wp_head',               'adjacent_posts_rel_link_wp_head');
                remove_action( 'wp_head',               'noindex');
                remove_action( 'wp_head',               'rel_canonical');


                remove_theme_support( 'automatic-feed-links' );

                //Remove another HTTP Header
                remove_action( 'template_redirect', 'wp_shortlink_header', 11 );
            }
        );

//Load CSS and JavaScript
add_action(
            'wp_enqueue_scripts',
            function()
            {

                /*****************
                 *  Parent Theme *
                 *****************/

                if( is_dir( get_template_directory() . '/css/' ) )
                {
                    //Load each CSS file that starts with three digits followed by a dash in numerical order
                    foreach( glob( get_template_directory() . '/css/[0-9][0-9][0-9]-*.css' ) as $t )
                    {
                        wp_enqueue_style(
                                            basename( $t, '.css' ) . '-p-style',
                                            get_template_directory_uri() . '/css/' . basename( $t ),
                                            null,
                                            filemtime( get_template_directory() . '/css/' . basename( $t ) ),
                                            'screen'
                                        );
                    }
                }

                if( is_dir( get_template_directory() . '/js/' ) )
                {
                    //Load each JS file that starts with three digits followed by a dash in numerical order
                    foreach( glob( get_template_directory() . '/js/[0-9][0-9][0-9]-*.js' ) as $t )
                    {
                        wp_enqueue_script(
                                            basename( $t, '.js' ) . '-p-style',
                                            get_template_directory_uri() . '/js/' . basename( $t ),
                                            null,
                                            filemtime( get_template_directory() . '/js/' . basename( $t ) ),
                                            true
                                        );
                    }
                }
            }
        );

add_action(
            'login_enqueue_scripts',
            function()
             {
                ?>
                <style type="text/css">
                    #login h1 a, .login h1 a {
                        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/Rotary_ads_login_page_image_transparent.png);
                        height:169px;
                        width:240px;
                        background-size: 240px 169px ;
                        background-repeat: no-repeat;
                        padding-bottom: 30px;
                    }
                </style>
                <?php
            }
        );

add_filter(
            'login_headerurl',
            function()
            {
                return home_url();
            }
        );

add_filter(
            'login_headertitle',
            function()
            {
                return 'Rotary News Wheel';
            }
        );
