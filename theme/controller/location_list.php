<?php

/*
 * Copyright (C) Itico Ltd. - All Rights Reserved
 * Unauthorised copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 * Written by Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */

/**
 * Description of location
 *
 * @author user
 */
class controller_location_list extends common_list {

    function __construct() {
        parent::__construct();
        /*
         * $properties
         *      array of strings to declare the properties to be set for the class
         */
        $properties = ['css_path', 'location_list_visibility', 'county_list', 'town_list', 'page_url'];
        /*
         * call function from common_class to set the properties
         */
        $this->set_class_properties($properties);

        $this->get_set('css_path', '/css/location_list.css');
        $this->get_set('location_list_visibility', 100);
        $this->get_set('location', '/view/location_list.php');
    }

    function set_country($var) {
        $this->get_set('id', $var);
    }

    function set_county($var) {
        $this->get_set('id', $var);
        $mod_location_list = new model_location_list();
        $this->get_set('list_values', $mod_location_list->towns_from_county($var));
    }
 function set_location_list($var) {
        foreach($var as $var){
            $row_set[] = [$var];
        }
        $this->get_set('list_values', $row_set);
 }
    function set_css_file($var) {
        $this->get_set('css_path', '/css/ ' . $var);
    }

    function set_visbility($var) {
        $this->get_set('location_list_visibility', $var);
    }

    function view_location_list() {
        $return_string = '<link rel="stylesheet" type="text/css" href="' . dyna_URL . $this->get_set('css_path') . '">';
        $return_string .= '<div class="location_list">';
        $list_items = $this->get_set('list_values');
        print_r($list_items);
        foreach ($list_items as $item) {
            if (rand(1, 100) <= $this->get_set('location_list_visibility')) {
                $return_string.= '<a href="?location=' . urlencode($item[0]) . '">' . $item[0] . '</a>';
            }
        }
        $return_string .='</div>';
        return $return_string;
    }

}
