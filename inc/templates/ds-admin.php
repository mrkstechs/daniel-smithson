<h1>Nav Settings Settings</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields( 'ds-settings-group' ); ?>
    <?php do_settings_sections( 'daniel_smithson' ); ?>
    <?php submit_button() ?>
</form>