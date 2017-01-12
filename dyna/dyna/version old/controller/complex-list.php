<?php
include_once('../sa_config.php');
if (SA_CON_COMPLEX_LIST_DEBUG == TRUE) {
    $bit = isset($_GET['con_complex_list']) ? $_GET['con_complex_list'] : '';
    echo "<h1>con_complex_list</h1><ul><li><h2>
            GET id: $bit;
        </h2></li>";
        
        con_complex_list($bit);
}
function con_complex_list($bit){
    include_once('../model/complex-list.php');
    $bits = mod_complex_list($bit);
    $returned = $bits[array_rand($bits,1)];
    if (SA_CON_COMPLEX_LIST_DEBUG == TRUE) {
    $bit = isset($_GET['con_complex_list']) ? $_GET['con_complex_list'] : '';
    echo "<li><h2>
            chosen: $returned;
        </h2></li>";
        

}
    return $bits[array_rand($bits,1)];
}

