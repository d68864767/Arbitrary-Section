<?php
/*
File Name: compatibility.php
Description: This file handles the Compatibility Information section of the plugin.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Function to display Compatibility Information
function display_compatibility() {
    // Compatibility information
    $compatibility_info = 'This plugin is compatible with most WordPress themes and plugins. However, if you are running a complex setup with multiple plugins, please ensure to test thoroughly or consult with a professional.';

    // Display Compatibility Information
    echo '<div class="plugin-compatibility">';
    echo '<h2 class="compatibility-title">Compatibility Information</h2>';
    echo '<p class="compatibility-info">' . $compatibility_info . '</p>';
    echo '</div>';
}

// Add shortcode to display Compatibility Information
function compatibility_shortcode() {
    ob_start();
    display_compatibility();
    return ob_get_clean();
}
add_shortcode( 'plugin_compatibility', 'compatibility_shortcode' );

?>
