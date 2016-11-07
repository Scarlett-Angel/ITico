<?php

/* 
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */
?>
<form method="post" name="honours_settings" action="options.php">
    <?php settings_fields( 'honours-license' ); ?>
    <fieldset>
            <label for="<?php echo $this->plugin_name; ?>-licence">
                <label>License Key</label><input type="text" id="<?php echo $this->plugin_name; ?>-license" name="licenseKey" value="<?php get_option('honours-license-key",""'); ?>"/>
            </label>
        </fieldset>
        <?php submit_button(); ?>
</form>
