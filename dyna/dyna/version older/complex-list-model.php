<?php

function mod_complexList($sentenceListID){
    $conn = new mysqli('localhost', 'root','','soup');
    $query = 'SELECT complexID, type FROM complex_list_item WHERE complexListID = ?;';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $sentenceListID);
    if($stmt->execute()){
        $stmt->bind_result($value, $type);
        while($row = $stmt->fetch()){
            $row_set[] = $type.'.'.$value;
        }
        return $row_set;
    }
    
}
