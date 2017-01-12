<?php
include_once('../sa_config.php');
if (SA_MOD_SENTENCE_LIST_DEBUG == TRUE) {
    $listID = isset($_GET['mod_sentence_list']) ? $_GET['mod_sentence_list'] : '';
    mod_sentence_list($listID);
}
function mod_sentence_list($listID){
    $query = 'SELECT sentenceID FROM sentence_list_item WHERE sentenceListID = ?;';
    $stmt  = DB::cxn()->prepare($query);
    $stmt->bind_param("s", $listID);
    if($stmt->execute()){
        $stmt->bind_result($value);
        while($row = $stmt->fetch()){
            $row_set[] = $value;
        }
     if (SA_MOD_SENTENCE_LIST_DEBUG == TRUE) {
        echo "<h1>mod_word_list</h1><p>
        <ul><li><h2>
            GET id: $listID
        </h2></li><li><h2>
            number of items: ". count($row_set). "
        </h2></li><li><h2>
            contents
        </h2><ul>";
        foreach ($row_set as $row){
            echo "<li><h3>
                sentence ID : $row
                </h3></li>";
        }
        echo "</ul>";
        
    }
    return $row_set;
}
}
?>