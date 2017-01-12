<?php

function con_complexList($listID){
    include_once('complex-list-model.php');
    include_once('complex-controller.php');
    $complexStrings = mod_complexList($listID);
  echo $complexStrings[array_rand($complexStrings, 1)];
}

