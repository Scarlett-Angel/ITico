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
class model_sentence {

    public function sentence_id_to_sentence_string($sentenceID) {
        $query = 'SELECT value FROM sentence WHERE id = ?;';
        $stmt = DB::cxn()->prepare($query);
        $stmt->bind_param("s", $sentenceID);
        if ($stmt->execute()) {
            $stmt->bind_result($sentence);
            while ($row = $stmt->fetch()) {
                $sentence = $sentence;
            }
        }
        return isset($sentence) ? $sentence : false;
    }

}
