<?php
/*

@package daniel-smithson

    ============================
        ADMIN PAGE
    ============================
*/
require_once( get_template_directory() . '/inc/inc/function-about.php' );
add_action( 'admin_menu', 'daniel_smithson_add_admin_page');
function daniel_smithson_add_admin_page(){
    
    // Generate Admin Page for Theme
    add_menu_page( 'DS Theme Options', 'Daniel', 'manage_options', 'daniel_smithson', 'ds_nav_option_page', 'dashicons-admin-generic', 66 );

    // Generate Admin Sub Pages for Theme
    add_submenu_page( 'daniel_smithson', 'DS Nav Options', 'Nav', 'manage_options', 'daniel_smithson', 'ds_nav_option_page' );
    add_submenu_page( 'daniel_smithson', 'About Page Settings', 'About', 'manage_options', 'ds_about_options', 'ds_about_page' );

    // Activate custom settings
    add_action( 'admin_init', 'ds_custom_settings');
    add_action('admin_init', 'about_settings');
}
// Template Functions
function ds_nav_option_page(){
    require_once( get_template_directory() . '/inc/templates/ds-admin.php' );
}
function ds_about_page(){
    require_once( get_template_directory() . '/inc/templates/ds-about.php' );
}

function ds_custom_settings(){
    //General
    //register settings to a group
    register_setting( 'ds-settings-group', 'logo_image');
    register_setting( 'ds-settings-group', 'first_image');
    register_setting( 'ds-settings-group', 'second_image');
    register_setting( 'ds-settings-group', 'third_image');
    register_setting( 'ds-settings-group', 'instagram_handle', 'ds_sanitize_handle');
    register_setting( 'ds-settings-group', 'facebook_handle', 'ds_sanitize_handle');
    register_setting( 'ds-settings-group', 'email_address');
    register_setting( 'ds-settings-group', 'text_one');
    register_setting( 'ds-settings-group', 'text_two');
    register_setting( 'ds-settings-group', 'prof_text_one');
    register_setting( 'ds-settings-group', 'prof_text_two');
    // Reg settings to the group
    register_setting('about-settings-group' , 'video_0' );
    register_setting('about-settings-group' , 'video_1' );

    add_settings_section( 'ds-social-options', 'Social Media Options', 'ds_social_options', 'daniel_smithson' ); // add setting section
    add_settings_field( 'ds-logo-image', 'Logo Image', 'ds_logo_image', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-first-image', 'First Image', 'ds_first_image', 'daniel_smithson', 'ds-social-options' );// add_field_to_section
    add_settings_field( 'ds-second-image', 'Second Image', 'ds_second_image', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-third-image', 'Third Image', 'ds_third_image', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-social-facebook', 'Facebook', 'ds_social_facebook', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-social-instagram', 'Instagram', 'ds_social_instagram', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-social-email', 'Email Address', 'ds_social_email', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-text-one', 'Text Area 1', 'ds_text_one', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-text-two', 'Text Area 2', 'ds_text_two', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-prof-text-one', 'Profession 1', 'ds_prof_text_one', 'daniel_smithson', 'ds-social-options' );
    add_settings_field( 'ds-prof-text-two', 'Profession 2', 'ds_prof_text_two', 'daniel_smithson', 'ds-social-options' );

}

// Social Options
function ds_social_options(){
    echo '<span class="description">Customize your social media settings</span>';
}

function ds_logo_image(){
    $logo_img = esc_attr( get_option('logo_image') );
    echo '<input type="button" class="button button-secondary" id="logo-btn" value="Upload Image For the Logo" /><input type="hidden" id="logo-image" class="image" name="logo_image" value="'. $logo_img. '"/>';
}

function ds_first_image(){
    $first_img = esc_attr( get_option( 'first_image' ) );
    echo '<input type="button" class="button button-secondary" id="first-btn" value="Upload First Image" /><input type="hidden" id="first-image" class="image" name="first_image" value="'. $first_img. '"/>';
}

function ds_second_image(){
    $second_img = esc_attr( get_option( 'second_image' ) );
    echo '<input type="button" class="button button-secondary" id="second-btn" value="Upload Second Image" /><input type="hidden" id="second-image" class="image" name="second_image" value="'. $second_img. '"/>';
}

function ds_third_image(){
    $third_img = esc_attr( get_option( 'third_image' ) );
    echo '<input type="button" class="button button-secondary" id="third-btn" value="Upload Third Image" /><input type="hidden" id="third-image" class="image" name="third_image" value="'. $third_img. '"/>';
}

function ds_social_facebook(){
    $facebook = esc_attr(get_option( 'facebook_handle'));
    echo '<input type="text" name="facebook_handle" value="'. $facebook .'" placeholder="Facebook Username"/> <p class="description">Input your Facebook username</p>';
}
function ds_social_instagram(){
    $instagram = esc_attr(get_option( 'instagram_handle'));
    echo '<input type="text" name="instagram_handle" value="'. $instagram .'" placeholder="Instagram Username"/> <p class="description">Input your Instagram username</p>';
}
function ds_social_email(){
    $email = esc_attr(get_option( 'email_address'));
    echo '<input type="text" name="email_address" value="'. $email .'" placeholder="Booking Email Address"/> <p class="description">Input the email address you want to use for managing bookings</p>';
}
function ds_text_one(){
    $text1 = esc_attr(get_option( 'text_one'));
    echo '<input type="text" name="text_one" value="'. $text1 .'" placeholder="A simple paragraph"/> <p class="description">A simple paragraph to display on the homepage</p>';
}
function ds_text_two(){
    $text2 = esc_attr(get_option( 'text_two'));
    echo '<input type="text" name="text_two" value="'. $text2 .'" placeholder="A simple paragraph"/> <p class="description">A simple paragraph to display on the homepage</p>';
}
function ds_prof_text_one(){
    $profText1 = esc_attr(get_option( 'prof_text_one'));
    echo '<input type="text" name="prof_text_one" value="'. $profText1 .'" placeholder="e.g. Drummer"/> <p class="description">Name one profession/service, to display on homepage</p>';
}
function ds_prof_text_two(){
    $profText2 = esc_attr(get_option( 'prof_text_two'));
    echo '<input type="text" name="prof_text_two" value="'. $profText2 .'" placeholder="e.g. Drummer"/> <p class="description">Name one profession/service, to display on homepage</p>';
}
// About Section
// Sanitization Settings
function ds_sanitize_handle($input){
    $output = sanitize_text_field( $input );
    $output = str_replace('@', '', $output);
    return $output;
}

