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
        echo '<strong>list_id</strong>: input list id';
        $list_id = isset($_GET['list_id']) ? $_GET['list_id'] : null;
        if (isset($list_id)) {
            echo '<ul>';
            echo '<li><strong>(mode 1) word id list from model</strong><br/>';
            $model_word_list = new model_word_list;
            $word_ids = $model_word_list->id_to_word_ids($list_id);
            if ($word_ids !== false) {
                print_r($word_ids);
            } else {
                echo 'model_word_list cant find that list';
            }
            echo '</li><li><strong>random word id from model</strong><br/>';
            $word_id = $model_word_list->id_to_rand_word_id($list_id);
            if ($word_id !== false) {
                echo $word_id;
            } else {
                echo 'model_word_list cant find that list';
            }
            echo '</li></ul><ul><li><strong>sets the list id property first with get_set</strong><br/>';
            $con_word_list = new controller_word_list;
            $id_is_set = $con_word_list->get_set_list_id($list_id);
            if ($id_is_set !== false) {
                echo '<ul><li><strong>load the id list from set list id property</strong> <br/>';
                $test_1 = $con_word_list->load_ids_from_id();
                if ($test_1 !== false) {
                    print_r($con_word_list->get_set_word_list_ids());
                } else {
                    echo 'could\'t load list from id';
                }
                echo '</li><li><strong>returns a random word.</strong> <br/>';
                $con_word_list = new controller_word_list;
                $con_word_list->get_set_list_id($list_id);
                $con_word_list->load_ids_from_id();
                $test_2 = $con_word_list->rand_word_from_list();
                if ($test_2 !== false) {
                    print_r($test_2);
                } else {
                    echo 'can\'t get random word';
                }
            } else {
                echo 'controller_word_list cant set the id';
            }
            echo '</ul></ul><ul><li><strong>load the list id from parameter</strong><br/>';
            $con_word_list->load_ids_from_id($list_id);
            print_r($con_word_list->get_set_word_list_ids());
            echo '</li><li><strong>get random word from list by parameter</strong><br/>';
           $test_3 = $con_word_list->rand_word_from_list($list_id);
            if ($test_3 !== false) {
                    echo $test_2;
                } else {
                    echo 'can\'t get random word';
                }
        }
            ?>
    </body>
</html>
