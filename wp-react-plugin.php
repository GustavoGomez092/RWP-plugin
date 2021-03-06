<?php
/*
Plugin Name: RWP Plugin
Description: React WordPress Plugin
Version: 0.0.1
Author: Gustavo Gomez
Author URI: https://github.com/GustavoGomez092
*/

class WP_React_Plugin {

    protected $plugin_options_page = '';

    /**
     * Class constructor
     */
    public function __construct() {
      require('plugin_options.php');
    }

    /**
     * Initialize hooks.
     */
    public function init() {

      add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_frontend_scripts' ) );
    }

    public function enqueue_frontend_scripts($hook) {

      //wp_enqueue_script('react');
      //wp_enqueue_script('react-dom');

      // add react and react-dom from core
      $dep = ''; //['wp-element'];
      $handle = 'wp-react-plugin-';

      // enqueue development or production React code
      if(file_exists(dirname(__FILE__) . "/dist/main.js")) {
        $handle .= 'prod';
        wp_enqueue_script( $handle, plugins_url( "/dist/main.js", __FILE__ ), ['wp-element'], '0.1', true );
      } else {
        $handle .= 'dev';
        wp_enqueue_script( $handle, 'http://localhost:3000/assets/main.js', ['wp-element'], '0.1', true );
      }
    }
}

$wp_react_plugin = new WP_React_Plugin();
$wp_react_plugin->init();