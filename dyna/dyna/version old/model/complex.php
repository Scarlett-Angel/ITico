<?php
include_once('../sa_config.php');
if (SA_MOD_COMPLEX_DEBUG == TRUE) {
    $sentenceID = isset($_GET['mod_complex']) ? $_GET['mod_complex'] : '';
    

        echo "<h1>mod_complex</h1><p>
        <ul><li><h2>
            GET id: $sentenceID
        </h2>";
        mod_complex($sentenceID);
}
function mod_complex($complexID){
    $query = 'SELECT value FROM complex WHERE id = ?;';
    $stmt  = DB::cxn()->prepare($query);
    $stmt->bind_param("s", $complexID);
    if($stmt->execute()){
        $stmt->bind_result($value);
        while($row = $stmt->fetch()){
            $output = $value;
        }    
        
    }
      if (SA_MOD_COMPLEX_DEBUG == TRUE) {
echo "
        <li><h2>
            complex value: $output
        </h2>";
}
return $output;
}
