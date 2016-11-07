<?php
/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

/**
 * Description of word
 *
 * @author user
 */ 
class model_word extends common_database{
    function __contstruct(){
        parent::__construct();
        $this->get_set('location','/model/word.php');
    }
    public function id_to_word($id) {
        $word = $this->execute_query([$id], 'SELECT word FROM word WHERE id = ?', 2);
        return $word[0];
    }
}
