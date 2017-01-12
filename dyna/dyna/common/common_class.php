<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of common_class
 *
 * @author user
 */
class common_class {

    private $private_id;

    public function get_set_id($var = null) {
        if ($var === Null) {
            return $this->private_id;
        } //$var === Null
        else {
            $this->private_id = $var;
        }
    }

    private $private_type;

    public function get_set_type($var = null) {
        if ($var === Null) {
            return $this->private_type;
        } //$var === Null
        else {
            $this->private_type = $var;
        }
    }

    private $private_location;

    public function get_set_location($var = null) {
        if ($var === Null) {
            return $this->private_location;
        } //$var === Null
        else {
            $this->private_location = $var;
        }
    }

    private function error_handler($error) {
        file_put_contents('../log/error_log.txt', $error . 'time ' . time() . " " . $this->private_location . "\n", FILE_APPEND);
    }

}
