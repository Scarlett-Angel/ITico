<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

/**
 * Description of location
 *
 * @author user
 */
class model_location_list extends common_database {

    function __contstruct() {
        parent::__construct();
        $this->get_set('location', '/model/location.php');
    }

    public function towns_from_county($id) {
        $towns = $this->execute_query(array($id), 'SELECT Town from uk_towns where County=?', 1);
        return $towns;
    }

}
