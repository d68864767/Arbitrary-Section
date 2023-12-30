<?php
/*
File Name: Screenshots
Description: This file is used to display the screenshots of the plugin's interface and key features.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function display_screenshots() {
    // Define the directory path where your screenshots are stored
    $screenshot_dir = plugin_dir_url( __FILE__ ) . 'assets/screenshots/';

    // Define your screenshots with their respective file names
    $screenshots = array(
        'screenshot-1.jpg',
        'screenshot-2.jpg',
        'screenshot-3.jpg',
        // Add more screenshots as needed
    );

    // Start output buffering
    ob_start();

    echo '<div class="plugin-screenshots">';

    // Loop through each screenshot
    foreach ( $screenshots as $screenshot ) {
        // Generate the URL for each screenshot
        $screenshot_url = $screenshot_dir . $screenshot;

        // Display the screenshot
        echo '<div class="screenshot">';
        echo '<img src="' . esc_url( $screenshot_url ) . '" alt="Screenshot of plugin">';
        echo '</div>';
    }

    echo '</div>';

    // Get the buffered content
    $output = ob_get_clean();

    // Return the content
    return $output;
}

// Use this function in the appropriate place in your plugin, for example in a shortcode or widget
// echo display_screenshots();
?>
