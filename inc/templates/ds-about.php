<h1>Change Settings for the About Page</h1>
<?php settings_errors(); ?>
<em>Aka the page called daniel in the navigation menu<em>
<form method="post" action="options.php">
    <?php settings_fields( 'about-settings-group' ); ?>
    <?php do_settings_sections( 'ds_about_options' ); ?>
    <?php submit_button() ?>
</form>