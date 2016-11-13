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

    public function set_shortcode($shortcode_names) {
        foreach ($shortcode_name as $name) {
            $line = 'add_shortcode("'.$name., '", function() { ob_start();';
            ob_start();
            include('/shortcode_contents/' . $name . '.php');
            $contents = ob_get_clean();
            $line .= $contents . ' return ob_get_clean();});';
            echo $line;
            eval($line);
        }
    }

    /*
     * get_set
     *      used to get or set properties within classes
     *      this is a functionality that comes with C# and is something I liked so I built something that does the same job
     *      getting and setting is contained within the same function
     *      if a value for the private property is not specified in the function call it will return the current value instead of setting it
     *
     * $property
     *      string with the name of the property to be accessed
     *
     * $var
     *      loose typed data stored in the property
     */

    public function get_set($property, $var = null) {
        if ($var === Null) {
            $line = '$result = $this->private_' . $property . ';';
            eval($line);
            return $result;
        } //$var === Null
        else {
            $line = '$this->private_' . $property . ' = $var;';
            eval($line);
        }
    }

    /*
     * error_hander
     *      writes errors to an error log file
     *
     */

    public function error_handler($error) {
        file_put_contents('../log/error_log.txt', $error . ' | time ' . time() . " | " . $this->private_location . "\n", FILE_APPEND);
    }

}
