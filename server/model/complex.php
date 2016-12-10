<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

/**
 * Description of complex
 *
 * @author user
 */
class model_complex extends common_database {
    function __contstruct() {
        parent::__construct();
        $this->get_set('location','/model/complex.php');
    }
    
    function id_to_complex_string($id){
        $word = $this->execute_query(array($id), 'SELECT value FROM complex WHERE id = ?', 1);
        return $word[0];
    }
}
