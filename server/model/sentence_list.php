<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

/**
 * Description of sentence_list
 *
 * @author user
 */
class model_sentence_list {
        function __contstruct(){
        $this->private_location = '/model/sentence_list.php';
    }
    public function id_to_sentence_ids($id) {
        return $this->id_to_values($id, 'SELECT sentenceID FROM sentence_list_item WHERE sentenceListID = ?');
    }
    public function id_to_rand_sentence($id) {
        return $this->id_to_value($id, 'SELECT sentenceID FROM sentence_list_item WHERE sentenceListID = ? order by rand() limit 1');
    }

}
