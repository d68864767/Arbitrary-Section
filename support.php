<?php
/*
File Name: support.php
Description: This file handles the Support section of the plugin.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Function to display Support
function display_support() {
    // Support information
    $support_info = 'For support, please visit our <a href="http://yourwebsite.com/support" target="_blank">Support Page</a>. Here you can find a dedicated support forum, a FAQ section, and a direct contact form.';

    // Display Support
    echo '<div class="plugin-support">';
    echo '<h2 class="support-title">Support</h2>';
    echo '<p class="support-info">' . $support_info . '</p>';
    echo '</div>';
}

// Add shortcode to display Support
function support_shortcode() {
    ob_start();
    display_support();
    return ob_get_clean();
}
add_shortcode( 'plugin_support', 'support_shortcode' );

?>
