<?php
function mod_complex($complexID){
    $conn = new mysqli('localhost', 'root','','soup');
    $query = 'SELECT value FROM complex WHERE id = ?;';
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $complexID);
    if($stmt->execute()){
        $stmt->bind_result($value);
        while($row = $stmt->fetch()){
            return
            $value;
        }
    }
    else{
        echo "no";
    }
}
mod_complex('1');