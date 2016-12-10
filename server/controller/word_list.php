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
        $this->get_set('location', '/controller/word_list.php');
    }
    
    function random_word($id=null){
        $model_world_list = new model_word_list;
        $mod_word = new model_word;
       return  $mod_word->id_to_word($model_world_list->id_to_rand_word_id($id));
        
    }
    function load_list($id=null){
        
    }
}
