<?php

/* 
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once('../sa_config.php');
         echo '<ul><li><strong>complex_id</strong> send complex id to model and return a complex string<br/>';
        $complex_id = isset($_GET['complex_id']) ? $_GET['complex_id'] : null;
        if (isset($complex_id)) {
            $mod_complex = new model_complex;
            $complex_string = $mod_complex->id_to_complex_string($complex_id);
             if ($complex_string !== false) {
            echo $complex_string;
            } else {
                echo 'can\'t find complex string string from model';
            }
        }
        ?>
    </body>
</html>