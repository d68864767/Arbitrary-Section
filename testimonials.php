<?php
/*
File Name: Testimonials
Description: This file is used to display user testimonials or reviews.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Function to fetch and display testimonials
function display_testimonials() {
    // Fetch testimonials from the database or an external source
    // This is a placeholder and should be replaced with actual data fetching code
    $testimonials = array(
        array(
            'name' => 'John Doe',
            'testimonial' => 'This plugin is amazing! It has helped me improve my website\'s SEO significantly.'
        ),
        array(
            'name' => 'Jane Smith',
            'testimonial' => 'I love this plugin! It\'s easy to use and very effective.'
        ),
        // Add more testimonials as needed
    );

    // Display the testimonials
    echo '<div class="testimonials">';
    foreach ($testimonials as $testimonial) {
        echo '<div class="testimonial">';
        echo '<p class="testimonial-text">' . $testimonial['testimonial'] . '</p>';
        echo '<p class="testimonial-name">- ' . $testimonial['name'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
}

// Add a shortcode to display the testimonials
// This allows the testimonials to be displayed anywhere on the site using the [display_testimonials] shortcode
function register_testimonials_shortcode() {
    add_shortcode('display_testimonials', 'display_testimonials');
}
add_action('init', 'register_testimonials_shortcode');

?>
