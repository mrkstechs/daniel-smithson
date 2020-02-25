<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Daniel_Smithson
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <?php if (is_page( 'about' )) : ?>
        <script type="text/javascript">
            var vid0 = '<?php echo esc_attr(get_option( 'dsa_first_video')); ?>';
            var vid1 = '<?php echo esc_attr(get_option( 'dsa_second_video')); ?>';
        </script>
    <?php endif ?>
</head>

<body <?php body_class(); ?>>
<div id="privacy-notice">
    <p>By using this site you agree to our <a href="<?php echo bloginfo( 'privacy-policy' ); ?>">privacy policy</a></p>
    <div id="pp-btn">
        <span>OK</span>
    </div>
</div>
<div id="page" class="site">
	<header id="masthead" class="site-header">
        <div class="header_items">
            <a href="<?php echo bloginfo('url'); ?>">
                <div id="logo-wrap">
                    <p>Daniel</p>
                    <div id="logo-img">
                        <img src="<?php echo esc_attr( get_option('logo_image') ); ?>" alt="Daniel Smithson, drummer for hire in London" />
                    </div>
                    <p>Smithson</p>
                </div>
            </a>
            <ul class="connect">
                <li>
                    <a href="https://www.facebook.com/<?php echo esc_attr(get_option( 'facebook_handle'));?>" target="_blank">
                        <svg version="1.1" id="fb-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                            <path id="facebook" d="M17.6,30c-2,0-3.9,0-5.9,0c0-4.4,0-8.7,0-13.1c-1.6,0-3.1,0-4.7,0c0-1.8,0-3.6,0-5.5c1.6,0,3.1,0,4.7,0
                                c0-0.2,0-0.3,0-0.4c0-1.3,0-2.6,0-3.8c0-1.3,0.2-2.6,0.9-3.8C13.5,1.6,15,0.6,17,0.2c1.3-0.3,2.5-0.2,3.8-0.1c0.7,0.1,1.4,0.1,2,0.2
                                c0.1,0,0.2,0.1,0.2,0.2C23,2,23,3.5,23,5c-0.2,0-0.4,0-0.5,0c-0.9,0-1.9,0-2.8,0.1c-1.2,0.2-2,1-2.1,2.2c-0.1,1.4,0,2.7,0,4.1
                                c1.7,0,3.4,0,5.2,0c-0.3,1.8-0.6,3.7-0.8,5.5c-1.5,0-2.9,0-4.4,0C17.6,21.3,17.6,25.6,17.6,30z"/>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/<?php echo esc_attr(get_option( 'instagram_handle'));?>" target="_blank">
                        <svg version="1.1" id="insta-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                            <g id="insta">
                                <path id="XMLID_50_" d="M15,30c-2.3-0.1-4.5-0.1-6.8-0.2c-2.7-0.2-5.1-1.2-6.7-3.6c-1-1.4-1.4-3.1-1.4-4.8c0-4.3-0.1-8.6,0-12.9
                                    c0-2.2,0.7-4.2,2.2-5.8c1.4-1.4,3-2.3,5-2.5C9.9,0.1,12.5,0,15.2,0c2.3,0,4.6,0,6.9,0.2c3,0.2,5.3,1.6,6.8,4.3c0.7,1.3,1,2.7,1,4.1
                                    c0.1,3.5,0.1,7,0.1,10.6c0,1.7,0,3.4-0.5,5c-1,3-3,4.8-6,5.4c-1.6,0.4-3.3,0.3-4.9,0.3C17.3,30,16.1,29.9,15,30C15,30,15,30,15,30z
                                    M27.3,13.7c-0.1-1.5-0.1-3.9-0.3-6.2c-0.2-2.3-1.5-3.8-3.8-4.4c-1.4-0.4-2.8-0.4-4.2-0.4c-2.8,0-5.6,0-8.5,0
                                    c-1.4,0-2.8,0.1-4.2,0.5C4.8,3.7,3.7,4.8,3.2,6.4c-0.5,1.4-0.5,2.9-0.5,4.3c0,2.1,0,4.2,0,6.3c0,1.9,0,3.8,0.3,5.7
                                    c0.4,2,1.5,3.5,3.5,4c1.1,0.3,2.3,0.4,3.4,0.5c2.3,0.1,4.7,0.1,7,0.1c1.8,0,3.7,0,5.5-0.3c1.7-0.3,3.1-1.1,4-2.6
                                    c0.6-1,0.7-2.2,0.8-3.3C27.3,18.9,27.3,16.7,27.3,13.7z"/>
                                <path id="XMLID_43_" d="M14.9,22.6c-4.2,0-7.6-3.5-7.6-7.7c0-4.3,3.5-7.7,7.7-7.7c4.2,0,7.7,3.5,7.6,7.7
                                    C22.6,19.3,19.2,22.7,14.9,22.6z M15,10c-2.8,0-5,2.2-5,5c0,2.7,2.3,5,5,5c2.8,0,5-2.2,5-5C20,12.2,17.7,10,15,10z"/>
                                <path id="XMLID_42_" d="M24.8,7c0,1-0.8,1.8-1.8,1.8c-1,0-1.8-0.8-1.8-1.8c0-1,0.8-1.8,1.8-1.8C24,5.2,24.8,6,24.8,7z"/>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="mailto:<?php echo esc_attr(get_option( 'email_address')); ?>">
                        <svg version="1.1" id="mail-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 30 30" style="enable-background:new 0 0 30 30;" xml:space="preserve">
                            <g id="mail">
                                <path id="top" d="M15,3.8c4,0,8,0,12,0c1.4,0,2.6,0.8,2.9,2.1C30,6.5,30,7.2,30,7.8c0,0.7-0.6,1.1-1.1,1.4c-3.1,2.3-6.3,4.7-9.5,7
                                    c-0.9,0.7-1.8,1.3-2.7,1.9c-1.1,0.8-2.3,0.8-3.5,0c-1.1-0.8-2.2-1.6-3.3-2.4c-3.1-2.3-6.1-4.6-9.2-6.8C0.2,8.6,0,8.1,0,7.5
                                    c0-0.5,0-0.9,0.1-1.4C0.2,4.8,1.4,3.8,3,3.8C7,3.8,11,3.8,15,3.8z"/>
                                <path id="bottom" d="M15,26.2c-4,0-7.9,0-11.9,0c-1,0-1.9-0.3-2.5-1.2C0.2,24.6,0,24,0,23.4c0-3.9,0-7.8,0-11.7
                                    c0-0.2,0.1-0.5,0.2-0.6c0.1-0.1,0.4,0,0.6,0.2c3.4,2.5,6.8,5.1,10.3,7.6c0.7,0.5,1.6,1,2.4,1.4c1.4,0.6,2.7,0.4,3.9-0.4
                                    c1.1-0.7,2.1-1.4,3.1-2.1c2.9-2.2,5.9-4.3,8.8-6.5c0.1-0.1,0.4-0.1,0.5-0.1c0.1,0,0.2,0.3,0.2,0.4c0,4,0,7.9,0,11.9
                                    c0,1.5-1.2,2.7-2.6,2.7c-1.7,0-3.4,0-5.1,0C19.9,26.2,17.4,26.2,15,26.2z"/>
                            </g>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
        <div class="menu_wrap">
            <svg version="1.1" id="menu-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="-612 381 55 40" style="enable-background:new -612 381 55 40;" xml:space="preserve">
                <style type="text/css">
                    .st0{fill:#CDCDCD;}
                </style>
                <g>
                    <rect x="-612" y="381" class="st0" width="55" height="8"/>
                    <rect x="-612" y="397" class="st0" width="55" height="8"/>
                    <rect x="-612" y="413" class="st0" width="55" height="8"/>
                </g>
            </svg>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">