<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

/**
 * Description of complex_list
 *
 * @author user
 */
class model_complex_list extends common_database {

    function __contstruct() {
        $this->private_location = '/model/complex_list.php';
    }

    public function id_to_complex_list_ids($id) {
        return $this->id_to_values($id, 'SELECT id FROM complex_list_item WHERE complexListID = ?');
    }

    public function id_to_rand_complex_id($id) {
        return $this->id_to_value($id, 'SELECT id FROM complex_list_item WHERE complexListID = ? order by rand() limit 1');
    }

    public function id_to_complex_id_string($id) {
        return $this->id_to_values_2_col($id, 'SELECT type, complexID FROM complex_list_item WHERE id = ?');
    }

}

