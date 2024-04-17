<?php

/**
 * Enqueue scripts and styles.
 */
// Remove admin footer
add_filter('admin_footer_text', '__return_empty_string', 11);
add_filter('update_footer', '__return_empty_string', 11);
remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

// Remove Jquery migrate
function deregister_qjuery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
    }
}

add_action('wp_enqueue_scripts', 'deregister_qjuery');

// Disable pingback
function disable_pingback(&$links) {
    foreach ($links as $l => $link)
        if (0 === strpos($link, get_option('home')))
            unset($links[$l]);
}

add_action('pre_ping', 'disable_pingback');

// Disable dashicons from front end
function wpdocs_dequeue_dashicon() {
    if (current_user_can('update_core')) {
        return;
    }
    wp_deregister_style('dashicons');
}

add_action('wp_enqueue_scripts', 'wpdocs_dequeue_dashicon');

// Remove Emoji css
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Remove Block Library
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action('wp_enqueue_scripts', 'remove_block_css', 100);

function remove_block_css() {
    wp_dequeue_style('wp-block-library'); // WordPress core
    wp_dequeue_style('wp-block-library-theme'); // WordPress core
    wp_dequeue_style('wc-block-style'); // WooCommerce
    wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
}
