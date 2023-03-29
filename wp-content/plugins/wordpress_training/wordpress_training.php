<?php
/*
 * Plugin Name:       WordPress Training
 * Plugin URI:        #
 * Description:       The first training Plugin
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            TrongPhan
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       #
 * Update URI:        #
 * Text Domain:       wordpresstraining
 * Domain Path:       /languages
 */

 //Định nghĩa các hằng số plugin
define('WORDPRESS_TRAINING_PATH', plugin_dir_path(__FILE__));
define('WORDPRESS_TRAINING_URL', plugin_dir_url(__FILE__));

//Định nghĩa hành động khi kích hoạt plugin
register_activation_hook(__FILE__, 'wordpresstraining_activation');
function wordpresstraining_activation()
{
    
    //Tao csdl
    include_once WORDPRESS_TRAINING_PATH.'includes/db/migration.php';

    //Tao dl mau
    include_once WORDPRESS_TRAINING_PATH.'includes/db/seeder.php';
}


//Định nghia hành động khi tắt đi
register_deactivation_hook(__FILE__,'wordpresstraining_deactivatio');
function wordpresstraining_deactivatio()
{   global $wpdb;
     $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}orders" );
     $wpdb->query( "DROP TABLE IF EXISTS {$wpdb->prefix}order_detail" );
      //Xoa csdl

    //Xoá option
    delete_option( 'wordpresstraining_setting_options' );
}

include_once WORDPRESS_TRAINING_PATH.'includes/includes.php';