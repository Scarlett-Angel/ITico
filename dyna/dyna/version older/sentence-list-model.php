<?php

function mod_sentenceList($sentenceListID){
    $conn = new mysqli('localhost', 'root','','soup');
    $query = 'SELECT sentenceID FROM sentence_list_item WHERE sentenceListID = ?;';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $sentenceListID);
    if($stmt->execute()){
        $stmt->bind_result($value);
        while($row = $stmt->fetch()){
            $row_set[] = $value;
        }
        return $row_set;
    }
}
