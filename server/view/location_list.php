<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */
include_once('../sa_config.php');
$county = isset($_GET['location']) ? $_GET['location'] : '';
$county = urldecode($county);
$con_location_list = new controller_location_list();
$con_location_list->set_county('West Dunbartonshire');
?>
<h1><?php echo $county ?> </h1>

<?php echo $con_location_list->view_location_list(); ?>

<?php $con_location_list ->set_location_list(['location_1','location_2','location_3']);?>
<?php echo $con_location_list->view_location_list(); ?>
