<?php

/* 
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */
include_once('sidebar-list.php');
include_once('nail-salon-glasgow.php');
include_once('sa_config.php');
$shortcode_names = array('nail-salon-glasgow');
$shortcode_builder = new shortcode_builder();
$shortcode_builder->set_shortcode($shortcode_names);