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
class controller_sentence {

    private $private_first_word;

    private function get_set_first_word($first_word = null) {
        if ($first_word === Null) {
            return $this->private_first_word;
        } //$firstWord === Null
        else {
            $this->private_first_word = $first_word;
        }
    }





    public function parse_sentence_string($sentence_id = null) {
        if ($sentence_id === null && $this->private_input_string !== null) {
            $string = $this->private_input_string;
        }
        if ($sentence_id !== null) {
           
            $mod_sentence = new model_sentence;
            $string = $mod_sentence->sentence_id_to_sentence_string($sentence_id);
        }
        if ($string !== false) {
            ob_start();
            $values = explode('.', $string);
            $this->get_set_first_word(true);
            $sum = count($values);
            $count = 0;
            foreach ($values as $value) {
                switch (substr($value, 0, 1)) {
                    case 'w':
                        $word = $this->parse_word($value);
                        echo $word !== false ? $word : ' couldn\'t find word ';
                        break;
                    case 'l':
                        $word = $this->parse_list($value);
                        echo $word !== false ? $word : ' couldn\'t get word from list ';
                        break;
                    /* case 'c':
                      include_once('complex-list.php');
                      $complexListID = explode('c', $value);
                      $complex = con_complex_list($complexListID[1]);

                      switch (substr($complex, 0, 1)) {
                      case 'l';
                      include_once ('word-list.php');
                      $wordListID = explode('l', $complex);
                      $word = con_word_list($wordListID[1]);
                      echo $firstWord ? firstWord($word) : $word;
                      break;
                      case 'c':
                      include_once('../model/complex.php');
                      $complexID = explode('c', $complex);
                      $complexValue = mod_complex($complexID[1]);
                      include_once('complex.php');
                      $complexBits = explode('.', $complexValue);
                      $complexsum = count($values);
                      $complexcount = 0;
                      foreach ($complexBits as $bit) {
                      con_complex($bit, $firstWord);
                      ++$complexcount;
                      echo $complexcount == $complexsum ? '' : ' ';
                      $firstWord = false;
                      }

                      break; */
                }
                ++$count;
                echo $count == $sum ? '' : ' ';
                $this->private_first_word = false;
            }
            echo ". ";
        } else {
            return false;
        }
    }

    private function capitalise_first_word($word) {
        $firstLetter = strtoupper(substr($word, 0, 1));
        echo substr_replace($word, $firstLetter, 0, 1);
    }

    



}
