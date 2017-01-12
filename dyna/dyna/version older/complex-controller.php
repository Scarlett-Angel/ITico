<?php
con_complex('c1');
function con_complex($value){
        switch(substr($value, 0,1)){
                case 'c':
                include_once('complex-model.php');
                $var = explode ('c', $value);
                $complexString = mod_complex($var[1]);
                echo $var[1];
                echo $complexString;
                break;
            case 'w':
                include_once('word-model.php');
                $wordID = explode('w', $value);
                $word = mod_word($wordID[1]);
                echo $word;
                break;
            case 'l':
                include_once ('wordList-controller.php');
                $wordListID = explode('l', $value);
                $word = con_wordList($wordListID[1]);
                echo $wordListID[1];
                echo $word;
                break;
            case 'v':
                include_once('word-model.php');
                $var = explode('v', $value);
                echo '[[sa_var]'. mod_word($var[1]) .']';
                break;
        
        }
}
 