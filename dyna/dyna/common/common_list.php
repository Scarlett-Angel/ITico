<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of common_list
 *
 * @author user
 */
class common_list extends common_class {

    private $private_list_ids;

    public function get_set_list_ids($var = null) {
        if ($var === Null) {
            return $this->private_list_ids;
        } //$var === Null
        else {
            $this->private_list_ids = $var;
        }
    }

    private $private_list_contents;

    public function get_set_list_contents($var = null) {
        if ($var === Null) {
            return $this->private_list_contents;
        } else {
            $this->private_list_contents = $var;
        }
    }


}
