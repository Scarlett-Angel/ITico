<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of db
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
