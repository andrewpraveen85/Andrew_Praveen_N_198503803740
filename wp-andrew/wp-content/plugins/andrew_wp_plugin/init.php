<?php
//    global $wpdb;
/*
 * Plugin Name:       Andrew WP Plugin
 * Plugin URI:        http://wp-andrew/
 * Description:       Andrew WP Plugin
 * Version:           1.0.0
 * Author:            Andrew Praveen. N
 * Author URI:        https://www.linkedin.com/in/andrew-praveen-n/
 * License:           GPL-2.0+
 */
add_action('wp_ajax_saveData', 'wp_ajax_saveData_callBack');

add_action('admin_menu', 'andrew_wp_plugin_menu');

function andrew_wp_plugin_menu() {
    add_menu_page('Andrew WP Plugin WYSWYG Editor', //page title
            'Andrew WP Plugin', //menu title
            'manage_options', //capabilities
            'andrew_wp_plugin_page', //menu slug
            'andrew_wp_plugin_page', //function
            'dashicons-plugins-checked'
    );
}

function andrew_wp_plugin_page() {
    echo file_get_contents(str_replace('//', '/', dirname(__FILE__)) . '/dashboard.php');
}

add_shortcode( 'wyswyg-display', 'wyswyg_shortcode' );

function wyswyg_shortcode( $atts ) {
    global $wpdb;
    $tablename = $wpdb->prefix.'plugin';
    $result = $wpdb->get_results("SELECT body FROM ".$tablename." WHERE id=1;");
    
    return $result[0]->body;
}

function wp_ajax_saveData_callBack() {
    global $wpdb;
    $tablename = $wpdb->prefix.'plugin';
    $data=array('body' => $_POST['body']);
    $rowCount = $wpdb->get_var("SELECT count(*) FROM ".$tablename." WHERE id=1;");
    $result;
    if($rowCount== 0){
        $result = $wpdb->insert( $tablename, $data);
    }else{
        $result = $wpdb->update( $tablename, $data, array( 'id' => 1 ), $format = null, $where_format = null );
    }
    echo $result;
}
