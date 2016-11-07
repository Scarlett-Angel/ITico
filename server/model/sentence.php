<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of sentence
 *
 * @author user
 */
class model_sentence extends common_database {

    function __contstruct() {
        $this->private_location = '/model/sentence.php';
    }

    public function id_to_sentence_string($id) {
        return $this->id_to_value($id, 'SELECT value FROM sentence WHERE id = ?');
    }

}
