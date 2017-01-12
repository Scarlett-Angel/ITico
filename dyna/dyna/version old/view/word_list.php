<?php
include_once('../sa_config.php');
echo '<strong>list_id</strong>: input list id';
$list_id =  isset($_GET['list_id']) ? $_GET['list_id'] : null;
if (isset($list_id)){
    echo '<ul>';
    echo '<li><strong>word id list from model</strong><br/>';
    $model_word_list = new model_word_list;
    $word_ids = $model_word_list->id_to_word_ids($list_id);
    if ($word_ids !== false){
        print_r($word_ids);
    }
    else {
        echo 'model_word_list cant find that list';
    }
    echo '</li><li><strong>random word id from model</strong><br/>';
    $model_word_list = new model_word_list;
    $word_id = $model_word_list->id_to_rand_word_id($list_id);
    if ($word_id !== false){
        echo $word_id;
    }
    else {
        echo 'model_word_list cant find that list';
    }
    echo '</li></ul><ul><li><strong>sets the list id first with get_set</strong><br/>';
    $con_word_list = new controller_word_list;
    $id_is_set = $con_word_list->get_set_list_id($list_id);
    if ($id_is_set !== false){
        echo '<ul><li><strong>load the id list from set list id</strong> <br/>';
        $test = $con_word_list->load_ids_from_id();
        if ($test !== false){
            print_r($con_word_list->get_set_word_list_ids());
        }
        else{
            echo 'could\'t load list from id';
        }
        echo '</li><li><strong>get random word from list with pre set list id</strong> <br/>';
        $con_word_list = new controller_word_list;
        $con_word_list->get_set_list_id($list_id);
        $test = $con_word_list->rand_word_from_list();
        if($test !== false){
            echo $test;
        }
        else{
            echo 'can\'t get random word';
        }
    }
    else {
        echo 'controller_word_list cant set the id';
    }
}
?>
