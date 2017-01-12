<?php
/**
 *Send a list ID number as string or int in order to return array full of word IDs
 **/
function mod_wordList($listID){
    $conn = new mysqli('localhost','root','','soup');
    $query = "SELECT wordID FROM wordList_item WHERE wordListID = ?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $listID);
    if($stmt->execute()){
        $stmt->bind_result($word);
        while($row = $stmt->fetch()){
            $row_set[] = $word;
        }
    }
    return $row_set;
}

