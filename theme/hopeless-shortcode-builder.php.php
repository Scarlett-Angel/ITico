<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

class shortcode_builder {
    /*
     * set_class_properties
     *      this function is called by other class in order to register their properties for the get_set.
     *
     * $shortcode_names
     *      array of string with the name of the property to be created
     */

    public function set_shortcode($shortcode_name) {
        foreach ($shortcode_name as $name) {
            $line = 'add_shortcode("'.$name.'", function() { ob_start();';
            ob_start();
            include('shortcodes_contents/' . $name . '.php');
            $contents = ob_get_clean();
            $line .= "'$contents'" . '<?php return ob_get_clean();});';
        
           eval($line);
        }
    }

}
