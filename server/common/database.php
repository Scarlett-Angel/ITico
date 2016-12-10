<?php

/*
 * DB
 *      database connection object to be used by all models
 */

class DB {

    private static $mysqli;

    static function cxn() {
        if (!self::$mysqli) {
            self::$mysqli = new mysqli(SA_DB, SA_DBu, SA_DBp, SA_DBn);
        }
        return self::$mysqli;
    }

}

/*
 * common_database
 *      used to store generic actions and properties that are used amongst all model classes
 *      all other model classes are extended from this class
 */

class common_database extends common_class {

    /**
     * Sets the location of the file into the location property for error reporting
     */
    function __construct() {
        $this->get_set('location', '/common/database.php');
    }

    /**
     * $input_array 
     *      array of inputs to bind to the parameters in the query
     * $query
     *      string containing query to be executed with ? standing in place of the values taken from $input array
     */
     function execute_query($input_array, $query, $return_columns) {
        /*
         * statement will return true if database connection is successfully created.
         */
        
        if ($stmt = DB::cxn()->prepare($query)) {
            /*
             * create these variables as empty strings so that they can be prepended/appended to
             */
            $bind_param_type = '';
            $bind_param_param = '';
            /*
             * cycle through each input in the input array in order to create the correct parameter bind statement for the query
             */
            foreach ($input_array as $index => $input) {

                $bind_param_type = $bind_param_type . 's';
                /*
                 * if the index is greater than 0 then the statement will need a comma to seperate the input array parameters
                 */
                $bind_param_param . $index > 0 ? ',' : '';
                $bind_param_param = $bind_param_param . '$input_array[' . $index . ']';
            }
            /*
             * binding statement examples below
             * 1 parameter  - bind_param('s',$parameter1)
             * 2 parameter - bind_param('ss', $parameter1, $parameter2)
             * 3 parameter - bind_param('sss', $parameter1, $parameter2, $parameter3)
             */
            $bind_param_statement = ' $stmt->bind_param(\'' . $bind_param_type . '\',' . $bind_param_param . ');';
            eval($bind_param_statement);
            $stmt->execute();
            $bind_result_param = '';
            $i = 0;

            while ($i < $return_columns) {
                /*
                 * if requested return columns is greater than 0 then the statement will need a comma to seperate bound result variables
                 */
                $bind_result_param . $i > 0 ? ',' : '';
                $bind_result_param = $bind_result_param . '$col' . $i;
                $i++;
            }
            $bind_statement = '$stmt->bind_result(' . $bind_result_param . ');';
         
            eval($bind_statement);
            /*
             * create the statement to put all the returning values into an array
             */
            $row_set_statement = '$row_set[] = array(';
            $i = 0;
            while ($i < $return_columns) {
                $row_set_statement . $i > 0 ? ',' : '';
                $row_set_statement = $row_set_statement . '$col' . $i;
                $i++;
                $row_set_statement .= $i == $return_columns ? ');' : '';
            }
            while ($row = $stmt->fetch()) {
                eval($row_set_statement);
            }
           // return $row_set;
            return isset($row_set) ? $row_set : false;
        }
    }

}
