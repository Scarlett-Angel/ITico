<?php

function con_wordList($listID){
    include_once('wordList-model.php');
    include_once('word-model.php');
    $wordIDs = mod_word_list($listID);
    foreach($wordIDs as $wordID){
        $word_list[] = mod_word($wordID);
    }
    return $word_list[array_rand($word_list, 1)];
}
echo con_wordList(4);
