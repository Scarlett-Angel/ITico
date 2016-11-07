<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of word_list
 *
 * @author user
 */
class controller_word_list extends common_list {

    function __construct() {
        $this->get_set( 'type', 'word_list');
        $this->get_set('location', '/controller/word_list.php');
    }
}
