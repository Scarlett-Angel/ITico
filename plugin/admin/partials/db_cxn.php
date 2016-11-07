<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

/**
 * Description of db_cxn
 *
 * @author user
 */
class DB {

    private static $mysqli;

    private function __construct() {
        
    }

//no instantiation

    static function cxn() {
        if (!self::$mysqli) {
            self::$mysqli = new mysqli(SA_DB, SA_DBu, SA_DBp, SA_DBn);
        }
        return self::$mysqli;
    }

}
