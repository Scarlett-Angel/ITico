function con_sentence($sentenceID){
    ob_start();
    include_once ('sentence-model.php');
    $value = mod_sentence($sentenceID);
    $values = explode(".", $value);
    $firstWord = true;
    $sum = count($values);
    $count = 0;
    foreach($values as $key =>$value){
        switch(substr($value, 0,1)){
            case 'w':
                include_once('word-model.php');
                $wordID = explode('w', $value);
                $word = mod_word($wordID[1]);
                echo $firstWord ? firstWord($word) : $word;
                break;
            case 'l';
                include_once ('wordList-controller.php');
                $wordListID = explode('l', $value);
                $word = con_wordList($wordListID[1]);
                echo $firstWord ? firstWord($word) : $word;
                break;
        }
        ++$count;
        echo $count == $sum ? '': ' ';
        $firstWord = false;
    }
    echo ". ";
    return ob_get_clean();
}
function firstWord($word){
    $firstLetter = strtoupper(substr($word, 0,1));
    return substr_replace($word, $firstLetter,0,1);
}