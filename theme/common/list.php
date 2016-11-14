<?php

/*
 * common_list
 *      used to store generic actions and properties that are used amongst list type controller classes
 *      all other list type controller classes are extended from this class
 */

class common_list extends common_class {

    function __construct() {
        /*
         * $properties
         *      array of strings to declare the properties to be set for the class
         */
        $properties = ['list_ids', 'list_values', 'type'];
        /*
         * call function from common_class to set the properties
         */
        $this->set_class_properties($properties);
        /*
         * set location for error reporting
         */
        $this->get_set('location', '/common/list.php');
    }

    /*
     * load_ids_from_id
     *      when a new instance of the class is created id the of the list can be used in two ways
     *      manualy set the id using the get_set function for the id property, 
     *      then use the lost_ids_from_id to load the private property for the list_ids in a seperate action
     *      otherwise, directly pass the id into the function as a parameter and load the private property for the list_ids in a single action
     * $var
     *      set this propertie to pass the list id as a paremeter and overide the private property id
     */


    private function load_list_from_id($var = null) {
        /*
         * load the extended class type into a local variable
         */
        $class_type = $this->get_set('type');
        switch ($class_type) {
            case 'word_list' :
                /*
                 * iff an id has already been set, load it it into a local variable
                 * if not the value will be NULL
                 */
                $con_id = $this->get_set('id');
                /*
                 * check to see that the parameter $var has not been set
                 * and that the private property id has a value and is not NULL
                 */
                if ($var === null && isset($con_id)) {
                    /*
                     * replace the var parameter with the value of the id private property 
                     */
                    $var = $con_id;
                } else {
                    $error = "cannot load ids from id because id has not been set";
                    $this->error_handler($error);
                    return false;
                }
                /*
                 * retrieve the ids of all of the words in the word list
                 */
                $model_word_list = new model_word_list;
                $word_list_ids = $model_word_list->id_to_word_ids($var);
                if ($word_list_ids !== false) {
                    /*
                     * if the word list exists and has word ids int he list 
                     * set to the private property for the list of ids
                     */
                    $this->get_set('list_values', $word_list_ids);
                } //$word_list_ids === false
                else {
                    $error = "word list with id of $var does not have any words or does not exist";
                    $this->error_handler($error);
                    return false;
                }
                break;
        }
    }

    /*
     * rand_value_from_list
     *      when a new instance of the class is created is can get a random value out of the list in two ways
     *      manualy set the list_ids using the get_set function for the list_ids property, 
     *      then use the rand_value_from_list to return a value in a seperate action
     *      otherwise, directly pass the list id into the function as a parameter and return a value in a single action
     * $var
     *      used to directly pass the list id parameter to the rand_value_from_list
     */

    public function rand_value_from_list($var = null) {
        /*
         * loads the list_ids private  property value into local variable $list_ids using get_set
         * when the property is initialised on class construction it is set with the value of null
         */
        $list_ids = $this->get_set('list_ids');
        /*
         * Check that at least one of the passed variable or  private class property has been set
         */
        if ($var !== null || $list_ids !== Null) {
            /*
             * give priority to the pass variable over the private property
             */
            if ($var !== null) {
                return $this->rand_value_from_parameter($var);
            } else {
                return $this->rand_value_from_property();
            }
        }
    }

    /*
     * rand_value_from_parameter
     *      the class probably hasn't been loaded with the ids of the words in the list using load_ids_from_id
     *      the database is directly queried for a random word from the list
     */

    private function rand_value_from_parameter($var) {
        /*
         * loads the list type from the property into a local variable $type
         */
        $type = $this->get_set('type');
        switch ($type) {
            case 'word-list':
                $model_word_list = new model_word_list;
                $model_word = new model_word;
                /*
                 * $word
                 *      string containing the random word from the list
                 * $model_word->id_to_word()
                 *      returns a word from the word id as a parameter
                 * $model_word_list->id_to_rand_word_id()
                 *      returns a word id from the list id as a parameter
                 */
                $word = $model_word->id_to_word($model_word_list->id_to_rand_word_id($var));
                if ($word !== false) {
                    return $word;
                } else {
                    $error = "Either world list doesnt exists, the word list doesnt contain any word ids or the word id does not identify a word";
                    $this->error_handler($error);
                }
        }
    }

    /*
     * rand_value_from_property
     */

    private function rand_value_from_property() {
        $class_type = $this->get_set('type');
        switch ($class_type) {
            case 'word_list':
                $model_word = new model_word;
                $id_array = $this->get_set('list_ids');
                $word = $model_word->id_to_word($id_array[array_rand($id_array)]);
                break;
        }

        if ($word !== false) {
            return $word;
        } else {
            return false;
        }
    }
    

}
