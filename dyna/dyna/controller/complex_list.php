<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of complex_list
 *
 * @author user
 */
class controller_complex_list {

    //put your code here
    /*
     * function con_complex_list($bit){
      include_once('../model/complex-list.php');
      $bits = mod_complex_list($bit);
      $returned = $bits[array_rand($bits,1)];
      if (SA_CON_COMPLEX_LIST_DEBUG == TRUE) {
      $bit = isset($_GET['con_complex_list']) ? $_GET['con_complex_list'] : '';
      echo "<li><h2>
      chosen: $returned;
      </h2></li>";


      }
      return $bits[array_rand($bits,1)];
      }
     * */
    private $private_complex_list_id;

    public function get_set_complex_list_id($id = null) {
        if ($id === Null) {
            return $this->private_complex_list_id;
        } //$id === Null
        else {
            $this->private_complex_list_id = $id;
        }
    }

    private $private_complex_list_ids = array();

    public function get_set_complex_list_ids($ids = null) {
        if ($ids === Null) {
            return $this->private_complex_list_ids;
        } //$id === Null
        else {
            $this->private_word_complex_list_ids = $ids;
        }
    }

    private $private_word_list_words;

    public function get_set_complex_list_strings($words = null) {
        if ($words === Null) {
            return $this->private_complex_list_strings;
        } else {
            $this->private_complex_list_strings = $words;
        }
    }

    public function load_ids_from_id($list_id = null) {
        $model_complex_list = new model_complex_list;
        if ($list_id === null && $this->private_list_id !== Null) {
            $list_id = $this->private_list_id;
        } //$id === null && $this->private_word_id !== Null
        $word_list_ids = $model_word_list->id_to_word_ids($list_id);
        if ($word_list_ids !== false) {
            $this->private_word_list_ids = $word_list_ids;
        } //$word_list_ids === false
        else {
            return false;
        }
    }

    public function rand_word_from_list($list_id = null) {
        if ($list_id !== null || $this->private_word_list_ids !== Null) {
            if ($list_id !== null) {
                return $this->rand_word_from_parameter($list_id);
            } else {
                return $this->rand_word_from_property();
            }
        }
    }

    private function rand_word_from_parameter($list_id) {
        $model_word_list = new model_word_list;
        $model_word = new model_word;
        $word = $model_word->id_to_word($model_word_list->id_to_rand_word_id($list_id));
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
