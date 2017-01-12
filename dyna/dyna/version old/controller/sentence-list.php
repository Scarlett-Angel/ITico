<?php
include_once('../sa_config.php');
$bit = isset($_GET['con_sentence_list']) ? $_GET['con_sentence_list'] : '';
    $mode = isset($_GET['con_sentence_list_mode']) ? $_GET['con_sentence_list_mode'] : '';
    $vis = isset($_GET['con_sentence_list_visibility']) ? $_GET['con_sentence_list_visibility'] : '';
if (SA_CON_SENTENCE_LIST_DEBUG == TRUE) {
    
    echo "<h1>con_sentence_list</h1><ul><li><h2>
            GET id: $bit;
        </h2></li>
        <li><h2>
            mode: $mode;
        </h2></li>
        <li><h2>
            visibility: $vis;
        </h2></li>";
        
        con_sentence_list($bit, $mode, $vis);
}
/**
     *mode 1: a list of sentences with no preferred order
     *mode 2: a list of sentences with sequential order
     *mode 3: return 1 random sentence
     */
function con_sentence_list($sentenceListID, $mode, $visibility){
    include_once('../model/sentence-list.php');
    include_once('sentence.php');
    $sentences = mod_sentence_list($sentenceListID);
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