<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       scarlett-angel.com
 * @since      1.0.0
 *
 * @package    Honours_project_admin
 * @subpackage Honours_project_admin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Honours_project_admin
 * @subpackage Honours_project_admin/admin
 * @author     Stephen Mclaughlin <admin@scarlett-angel.co.uk>
 */
class Honours_project_admin_Admin {

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */
    public function __construct($plugin_name, $version) {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Honours_project_admin_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Honours_project_admin_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/honours_project_admin-admin.css', array(), $this->version, 'all');
         wp_enqueue_style('jquery-ui-css', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css');
         wp_enqueue_style('local-jquery-ui-css', plugin_dir_url(__FILE__) . 'css/jquery-ui.min.css');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts() {

        /**
         * This function is provided for demonstration purposes only.
         *
         * An instance of this class should be passed to the run() function
         * defined in Honours_project_admin_Loader as all of the hooks are defined
         * in that particular class.
         *
         * The Honours_project_admin_Loader will then create the relationship
         * between the defined hooks and the functions defined in this
         * class.
         */
        wp_enqueue_script('jquery');

        wp_enqueue_script('jquery-ui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js');

        wp_enqueue_script('local-jquery-ui', plugin_dir_url(__file__) . 'js/jquery-ui.min.js');
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/honours_project_admin-admin.js', array('jquery'), $this->version, false);
    }

    public function add_word_page() {
        add_menu_page('Honours', 'Honours', 'manage_options', 'honours', array($this, 'display_honours_page'),'','3.0');
        add_submenu_page('honours','Sentence', 'Sentence', 'manage_options', 'word', array($this, 'display_sentence_page'),'','1.0');
        add_submenu_page('honours', 'Builder', 'Builder','manage_options','builder', array($this, 'display_builder_page'),'','1.0');
    }

    public function display_honours_page() {
        include_once('partials/honours_page.php');
    }
    public function display_builder_page(){
        include_once('partials/builder.php');
    }
    public function display_sentence_page() {
        include_once('partials/sentence_page.php');
    }

}
