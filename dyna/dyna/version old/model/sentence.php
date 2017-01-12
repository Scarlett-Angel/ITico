<?php
include_once('../sa_config.php');
if (SA_MOD_SENTENCE_DEBUG == TRUE) {
    $sentenceID = isset($_GET['mod_sentence']) ? $_GET['mod_sentence'] : '';
    mod_sentence($sentenceID);
}
function mod_sentence($sentenceID){
    $query = 'SELECT value FROM sentence WHERE id = ?;';
    $stmt = DB::cxn()->prepare($query);
    $stmt->bind_param("s", $sentenceID);
    if($stmt->execute()){
        $stmt->bind_result($sentence);
        while($row = $stmt->fetch()){
            $sentence = $sentence;
        }
    }
     if (SA_MOD_SENTENCE_DEBUG == TRUE) {
        echo "<h1>mod_sentence</h1><p>
        <ul><li><h2>
            GET id: $sentenceID
        </h2></li><li><h2>
            contents: $sentence
        </h2></li><ul>";

    }
    return $sentence;
}

?>