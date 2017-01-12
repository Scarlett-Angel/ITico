<?php
class DB {
    private static $mysqli;
    private function __construct(){} //no instantiation

    static function cxn() {
        if( !self::$mysqli ) {
            self::$mysqli = new mysqli(SA_DB,SA_DBu,SA_DBp,SA_DBn);
        }
        return self::$mysqli;
    }
}   
?>