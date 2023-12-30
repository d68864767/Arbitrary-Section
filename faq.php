<?php
/*
File Name: faq.php
Description: This file handles the Frequently Asked Questions section of the plugin.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Function to display FAQs
function display_faqs() {
    $faqs = array(
        array(
            'question' => 'What languages does the AI support?',
            'answer' => 'The AI supports multiple languages. Please refer to the documentation for a complete list.'
        ),
        array(
            'question' => 'Can I customize the plugin?',
            'answer' => 'Yes, the plugin offers several customization options. Please refer to the documentation for more details.'
        ),
        array(
            'question' => 'How does the plugin handle SEO requirements?',
            'answer' => 'The plugin has built-in SEO optimization features. Please refer to the documentation for more details.'
        ),
        // Add more FAQs as needed
    );

    // Display FAQs
    echo '<div class="plugin-faqs">';
    foreach ( $faqs as $faq ) {
        echo '<div class="faq-item">';
        echo '<h2 class="faq-question">' . $faq['question'] . '</h2>';
        echo '<p class="faq-answer">' . $faq['answer'] . '</p>';
        echo '</div>';
    }
    echo '</div>';
}

// Add shortcode to display FAQs
function faq_shortcode() {
    ob_start();
    display_faqs();
    return ob_get_clean();
}
add_shortcode( 'plugin_faqs', 'faq_shortcode' );

?>
