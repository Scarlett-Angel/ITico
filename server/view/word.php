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
        $word = new model_word;
        echo '<ul><li><strong>word_id</strong> send word id to model and return a word<br/>';
      // echo isset($_GET['word_id']) ? $word->id_to_word($_GET['word_id']) : 'cant find word to match that id';
        echo '</li></ul>';
        echo $word->id_to_word($_GET['word_id']);
        ?>
    </body>
</html>
