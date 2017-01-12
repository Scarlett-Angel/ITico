<?php
/**
 *Send a string or integer containing the wordID to return the word value
 */
function mod_word($wordID){

    $conn = new mysqli('localhost','root','','soup');
    $query = 'SELECT word FROM word WHERE id = ?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s",$wordID);
    if($stmt->execute()){
        $stmt->bind_result($word);
        while($row = $stmt->fetch()){
            return $word;
        }
    }
}