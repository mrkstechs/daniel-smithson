<?php
/*

@package daniel-smithson

    ============================
        ADMIN ENQUEUE FUNCTIONS
    ============================
*/

function ds_load_admin_scripts( $hook ){
    switch ($hook) {
        case 'toplevel_page_daniel_smithson':
            wp_register_style( 'ds_admin', get_template_directory_uri(). '/inc/css/ds.admin.css', array(), '1.0.0', 'all' );
            wp_enqueue_style('ds_admin');

            wp_enqueue_media (); //trigger the use of the wp media uploader

            wp_register_script( 'ds_admin_script', get_template_directory_uri(). '/inc/js/ds.admin.js', array('jquery'), '1.0.0', true );
            wp_enqueue_script('ds_admin_script');
            break;
        case 'daniel_page_ds_about_options':
            wp_register_style( 'ds_about', get_template_directory_uri(). '/inc/css/ds.about.css', array(), '1.0.0', 'all' );
            wp_enqueue_style( 'ds_about');

            wp_register_script( 'ds_about_script', get_template_directory_uri(). '/inc/js/ds.about.js', array('jquery'), '1.0.0', true );
            wp_enqueue_script('ds_about_script');
            break;
        default:
            return;
            break;
    }
}

add_action( 'admin_enqueue_scripts', 'ds_load_admin_scripts' );