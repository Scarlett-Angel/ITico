<?php

function mod_sentence($sentenceID){
    $conn = new mysqli('localhost', 'root','','soup');
    $query = 'SELECT value FROM sentence WHERE id = ?;';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $sentenceID);
    if($stmt->execute()){
        $stmt->bind_result($value);
        while($row = $stmt->fetch()){
            return $value;
        }
    }
}