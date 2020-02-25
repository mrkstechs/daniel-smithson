<?php
/*

@package daniel-smithson

    ============================
        ABOUT PAGE
    ============================
*/

function about_settings(){
    // Reg settings to the group
    register_setting('about-settings-group' , 'dsa_first_video' );
    register_setting('about-settings-group' , 'dsa_second_video' );

    // About Section
    add_settings_section( 'ds-about-videos', 'YouTube Video', 'about_video', 'ds_about_options' );

    // Add Settings field
    add_settings_field( 'about-vid-0', 'Video', 'about_vid_0', 'ds_about_options', 'ds-about-videos');
    add_settings_field( 'about-vid-1', 'Video', 'about_vid_1', 'ds_about_options', 'ds-about-videos');
}

// Videos
function about_video(){
    echo '<span class="description">Change the YouTube videos displayed on the page</span>';
}
function about_vid_0(){
    $vid0 = esc_attr(get_option( 'dsa_first_video'));
    echo '<input type="text" name="dsa_first_video" value="'. $vid0 .'" placeholder="e.g. h88K-78a-cw" /><p class="description">Input the YouTube Link ID <em>its the bit after watch?v= in the address bar</em></p>';
}
function about_vid_1(){
    $vid1 = esc_attr(get_option( 'dsa_second_video'));
    echo '<input type="text" name="dsa_second_video" value="'. $vid1 .'" placeholder="e.g. h88K-78a-cw"/><p class="description">Input the YouTube Link ID <em>its the bit after watch?v= in the address bar</em></p>';
}