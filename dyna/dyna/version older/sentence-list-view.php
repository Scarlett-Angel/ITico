<?php
/**
     *mode 1: a list of sentences with no preferred order
     *mode 2: a list of sentences with sequential order
     *mode 3: return 1 random sentence
     */
function view_sentence_list($sentenceListID, $mode, $visibility){
    include_once('sentence-list-model.php');
    include_once('sentence-controller.php');
    $sentences = mod_sentenceList($sentenceListID);
    switch($mode){
        case 1:
            rand_list($sentences, $visibility);
            break;
        case 2:
            seq_list($sentences, $visibility);
            break;
        case 3:
            rand_list_single($sentences, $visibility);
            break;
    }
}
function rand_list($sentences, $visibility){
    $DoneSentences = array();
    $alldone = count($DoneSentences);
    $count = count($sentences);
    While( $alldone < $count){
        $rand = rand(0, $count -1);
        while (in_array($rand,$DoneSentences)){
            $rand = rand(0, $count -1);
        }
        $DoneSentences[] = $rand; 
        echo rand(0,100) <= $visibility ? con_sentence($sentences[$rand]) : '';
        $alldone = count($DoneSentences);
    }
}
function seq_list($sentences, $visibility){
    foreach($sentences as $sentence){
        echo rand(0,100) <= $visibility ? con_sentence($sentence) : '';
    }
}
function rand_list_single($sentences, $visibility){    
    echo rand(0,100) <= $visibility ? con_sentence($sentences[array_rand($sentences, 1)]) : '';
    
}
view_sentence_list(1, rand(1,3), rand(80,100));