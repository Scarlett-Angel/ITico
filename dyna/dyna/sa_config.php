<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('SA_DB', "localhost");
define('SA_DBu', 'root');
define('SA_DBp', '');
define('SA_DBn', 'soup');
define('SA_URL', 'http://localhost/dynamic');
include_once('db.php');
include_once ('common/common_class.php');
include_once('common/common_list.php');
include_once('common/common_database.php');
include_once('model/word_list.php');
include_once('controller/word_list.php');
include_once('model/sentence.php');
include_once('controller/sentence.php');


include_once('model/word.php');