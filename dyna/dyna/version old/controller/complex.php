<?php
include_once('../sa_config.php');
if (SA_CON_COMPLEX_DEBUG == TRUE) {
    $sentenceID = isset($_GET['con_complex']) ? $_GET['con_complex'] : '';
    echo "<h1>con_sentence</h1><ul><li><h2>
            GET id: $sentenceID;
        </h2></li>";
        ($_GET['con_complex']) ? $firstWord = true:'';
    con_complex($sentenceID, $firstWord);
    
}
function con_complex($value, $firstWord){
    $values = explode(".", $value);
    $conComplexsum = count($values);
                $conComplexcount = 0;
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
                include_once('../model/complex.php');
                $complexID = explode('c', $complex);
                $complexValue = mod_complex($complexID[1]);
                $complexBits = explode('.', $complexValue);
                $complexsum = count($values);
                $complexcount = 0;
                foreach ($complexBits as $bit){
                    $bitOut = con_complex($bit, $firstWord);
                    $output = $firstWord ? firstword($bitOut) : con_complex($bitOut);
                    
                        echo $complexcount == $complexsum ? '': ' ';
                        ++$complexcount;
                        $firstWord = false;
                }
                break;
                        
                }
                }
                if (SA_CON_COMPLEX_DEBUG == TRUE) {

    echo "<li><h2>
            GET id: $sentenceID;
        </h2></li>";
       print_r($values);
       
    
}
                }

