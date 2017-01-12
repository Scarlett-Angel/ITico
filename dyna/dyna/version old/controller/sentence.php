<?php
include_once('../sa_config.php');
if (SA_CON_SENTENCE_DEBUG == TRUE) {
    $sentenceID = isset($_GET['con_sentence']) ? $_GET['con_sentence'] : '';
    echo "<h1>con_sentence</h1><ul><li><h2>
            GET id: $sentenceID;
        </h2></li>";
    con_sentence($sentenceID);
}
function con_sentence($sentenceID){
    include_once('../model/sentence.php');
    $value = mod_sentence($sentenceID);
    if (SA_CON_SENTENCE_DEBUG == TRUE) {
    echo "<li><h2>
            value: $value;
        </h2></li>";
}
    $values = explode(".", $value);
    $firstWord = true;
    $sum = count($values);
    $count = 0;
    foreach($values as $value){
        switch(substr($value, 0,1)){
            case 'w':
                include_once('../model/word.php');
                $wordID = explode('w', $value);
                $word = mod_word($wordID[1]);
                echo $firstWord ? firstWord($word) : $word;
                break;
            case 'l':
                include_once ('word-list.php');
                $wordListID = explode('l', $value);
                $word = con_word_list($wordListID[1]);
                echo $firstWord ? firstWord($word) : $word;
                break;
            case 'c':
                include_once('complex-list.php');
                $complexListID = explode('c', $value);
                $complex = con_complex_list($complexListID[1]);
                
                switch(substr($complex, 0,1)){
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
                        foreach ($complexBits as $bit){
                             con_complex($bit, $firstWord);
                            ++$complexcount;
                                echo $complexcount == $complexsum ? '': ' ';
                                $firstWord = false;
                        }

                            break;
                }
            }
        ++$count;
        echo $count == $sum ? '': ' ';
        $firstWord = false;
    }
    echo ". ";
}
function firstWord($word){
    $firstLetter = strtoupper(substr($word, 0,1));
    echo substr_replace($word, $firstLetter,0,1);
}
