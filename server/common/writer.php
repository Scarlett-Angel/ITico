<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

/**
 * Description of common_complex
 *
 * @author user
 */
class common_writer extends common_class {

    private $private_input_string;

    public function get_set_input_string($input_string = null) {
        if ($input_string === Null) {
            return $this->private_input_string;
        } //$firstWord === Null
        else {
            $this->private_input_string = $input_string;
        }
    }

    public function load_input_string_from_id($sentence_id) {
        $mod_sentence = new model_sentence;
        $string = $mod_sentence->sentence_id_to_sentence_string($sentence_id);
        if ($string !== false) {
            $this->private_input_string = $string;
        } else {
            return false;
        }
    }

    private function parse_word($value) {
        $mod_word = new model_word;
        $wordID = explode('w', $value);
        $word = $mod_word->id_to_word($wordID[1]);
        if ($word !== false) {
            return $this->get_set_first_word() ? $this->capitalise_first_word($word) : $word;
        } else {
            return false;
        }
    }

    private function parse_list($value) {
        $con_word_list = new controller_word_list;
        $word_list_id = explode('l', $value);
        $word = $con_word_list->rand_word_from_list($word_list_id[1]);
        if ($word !== false) {
            return $this->get_set_first_word() ? $this->capitalise_first_word($word) : $word;
        } else {
            return false;
        }
    }

}
