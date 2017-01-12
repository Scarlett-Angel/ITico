<?php
include_once('../sa_config.php');
$word = new model_word;
echo isset($_GET['word_id']) ? $word->id_to_word($_GET['word_id']) : '';
?>