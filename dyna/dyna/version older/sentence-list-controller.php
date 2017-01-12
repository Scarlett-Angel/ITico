<?php

function con_sentenceList($listID){
    include_once('sentence-list-model.php');
    include_once('sentence-controller.php');
    $sentenceIDs = mod_sentenceList($listID);
    foreach($sentenceIDs as $sentenceID){
        $sentence_list[] = con_sentence($sentenceID);
    }
    
    $sentence_list[array_rand($sentence_list, 1)];
}


