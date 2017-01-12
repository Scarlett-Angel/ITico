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
        $this->private_type = 'word-list';
    }
    public function load_ids_from_id($var = null) {
        $model_word_list = new model_word_list;
        if ($var === null && $this->private_id !== Null) {
            $var = $this->private_list_id;
        } //$id === null && $this->private_word_id !== Null
        $word_list_ids = $model_word_list->id_to_word_ids($var);
        if ($word_list_ids !== false) {
            $this->private_word_list_ids = $word_list_ids;
        } //$word_list_ids === false
        else {
            return false;
        }
    }

    public function rand_word_from_list($var = null) {
        if ($var !== null || $this->private_word_list_ids !== Null) {
            if ($var !== null) {
                return $this->rand_word_from_parameter($var);
            } else {
                return $this->rand_word_from_property();
            }
        }
    }

    private function rand_word_from_parameter($var) {
        $model_word_list = new model_word_list;
        $model_word = new model_word;
        $word = $model_word->id_to_word($model_word_list->id_to_rand_word_id($var));
        if ($word !== false) {
            return $word;
        } else {
            return false;
        }
    }

    private function rand_word_from_property() {
        $model_word = new model_word;
        $word = $model_word->id_to_word($this->private_word_list_ids[array_rand($this->private_word_list_ids)], 1);

        if ($word !== false) {
            return $word;
        } else {
            return false;
        }
    }

}
