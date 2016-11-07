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
        $this->private_location = '/model/complex.php';
    }
    
    function id_to_complex_string($id){
         return $this->id_to_value($id, 'SELECT value FROM complex WHERE id = ?');
    }
}
