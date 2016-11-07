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
class model_word_list extends common_database {
    function __contstruct(){
        parent::__construct();
        $this->get_set('location','/model/word_list.php');
    }
    public function id_to_word_ids($id) {
        return $this->execute_query([$id], 'SELECT wordID FROM word_list_item WHERE wordListID = ?', 'id_to_values');
    }
    public function id_to_rand_word_id($id) {
        return $this->execute_query([$id], 'SELECT wordID FROM word_list_item WHERE wordListID = ? order by rand() limit 1', 'id_to_value');
    }

}
