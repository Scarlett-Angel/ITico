<?php

/*
 * common_class
 *      used to store generic actions and properties that are used amongst all other controller or model classes
 *      all other common classes are extended from this class
 *      the eval function used in this class is quite dangerous and could potentially be exploited
 *      if accessed by an intruder it could run injected php code
 */

class common_class {
    /*
     * private_id
     *      used to store the id of what is being requested from the database
     */

    private $private_id;
    /*
     * private_type
     *      in some cases it is useful to know the type of class that is calling common functions
     */
    private $private_type;
    /*
     * private_location
     *      used in error handler reporting in order to located which file caused the error
     */
    private $private_location;

    /*
     * set_class_properties
     *      this function is called by other class in order to register their properties for the get_set.
     *
     * $properties
     *      array of string with the name of the property to be created
     */

   function set_class_properties($properties) {
        foreach ($properties as $property) {
            $line = '$this->private_' . $property . ' = null;';
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

    function get_set($property, $var = null) {
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

    function error_handler($error) {
        file_put_contents('../log/error_log.txt', $error . ' | time ' . time() . " | " . $this->private_location . "\n", FILE_APPEND);
    }

}
