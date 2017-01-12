<?php
include_once('../sa_config.php');
if (SA_MOD_COMPLEX_LIST_DEBUG == TRUE) {
    $listID = isset($_GET['mod_complex_list']) ? $_GET['mod_complex_list'] : '';
    mod_complex_list($listID);
}
function mod_complex_list($sentenceListID){
        if (SA_MOD_COMPLEX_LIST_DEBUG == TRUE) {
         echo "<h1>mod_complex_list</h1><p>
        <ul><li><h2>
            GET id: $sentenceListID
        </h2></li>";
    }
    $query = 'SELECT complexID, type FROM complex_list_item WHERE complexListID = ?;';
    $stmt  = DB::cxn()->prepare($query);
    $stmt->bind_param("s", $sentenceListID);
    if($stmt->execute()){
        $stmt->bind_result($value, $type);
        while($row = $stmt->fetch()){
            $row_set[] = $type.$value;
        }
           if (SA_MOD_COMPLEX_LIST_DEBUG == TRUE) {
        print_r($row_set);
    }
        return $row_set;
    }
    
}
