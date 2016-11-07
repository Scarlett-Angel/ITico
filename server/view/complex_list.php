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
            echo '<li><strong> complex id list from model</strong><br/>';
            $model_complex_list = new model_complex_list;
            $complex_ids = $model_complex_list->id_to_complex_list_ids($list_id);
            if ($complex_ids !== false) {
                print_r($complex_ids);
            } else {
                echo 'model_word_list cant find that list';
            }
            echo '</li><li><strong>random word id from model</strong><br/>';
            $complex_id = $model_complex_list->id_to_rand_complex_id($list_id);
            if ($complex_id !== false) {
                echo $complex_id;
            } else {
                echo 'model_word_list cant find that list';
            }
            echo '</li></ul><ul><li><strong>sets the list id property first with get_set</strong><br/>';
            $con_word_set = new controller_word_list;
            $con_word_set->get_set_id($list_id);
            echo $con_word_set->get_set_id();
            echo '<ul><li><strong>load the id list from set list id property</strong> <br/>';
           $con_word_set->load_ids_from_id();
           $class_preloaded_ids = $con_word_set->get_set_list_ids();
            print_r($class_preloaded_ids);

            echo '</li><li><strong>returns a random word.</strong> <br/>';
            $con_word_list = new controller_word_list;
            $con_word_list->get_set_id($list_id);
            $con_word_list->load_ids_from_id();
            $test_2 = $con_word_list->rand_value_from_list();
            if ($test_2 !== false) {
                print_r($test_2);
            } else {
                echo 'can\'t get random word';
            }

            echo '</ul></ul><ul><li><strong>load the list id from parameter</strong><br/>';
            $con_word_list->load_ids_from_id($list_id);
            print_r($con_word_list->get_set_list_ids());
            echo '</li><li><strong>get random word from list by parameter</strong><br/>';
            $test_3 = $con_word_list->rand_value_from_list($list_id);
            if ($test_3 !== false) {
                echo $test_2;
            } else {
                echo 'can\'t get random word';
            }
        }
        ?>
    </body>
</html>
