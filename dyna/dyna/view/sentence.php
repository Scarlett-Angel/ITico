<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once('../sa_config.php');
        echo '<strong>sentence_id</strong>: input list id';
        $sentence_id = isset($_GET['sentence_id']) ? $_GET['sentence_id'] : null;
        if (isset($sentence_id)) {
            $mod_sentence = new model_sentence;
            echo '<ul><li><strong>sentence id to sentence string from the model</strong><br />';
            $sentence = $mod_sentence->sentence_id_to_sentence_string($sentence_id);
            if ($sentence !== false) {
                echo $sentence;
            } else {
                echo 'can\'t find sentence string from model';
            }
            $con_sentece = new controller_sentence;
            echo '</li><li><strong>sentence string id to sentence from the controller</strong><br />';
            $sentence_string = $con_sentece->parse_sentence_string($sentence_id);
            if ($sentence_string !== false) {
                echo $sentence_string;
            } else {
                echo 'can\'t find sentence string from controller';
            }
            echo "</li><li><strong> preload sentence id and load sentence string </strong><br />";
            $sentence_preload = new controller_sentence;
            $test = $sentence_preload->load_input_string_from_id($sentence_id);
            if ($test !== false){
                echo $sentence_preload->get_set_input_string();
            }
            else{
                echo "couldn't preload sentence string from id";
            }
            echo "</li><li><strong> parse sentence from preloaded string</strong></br>";
            $test_9 = $sentence_preload->parse_sentence_string();
            if ($test_9 !== false){
                echo $test;
            }else{
                echo "couldn't parse sentence";
            }
        }
        
        ?>
    </body>
</html>
