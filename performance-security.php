<?php
/*
File Name: Performance and Security
Description: This file provides details about the plugin's performance impact on WordPress sites and any security measures taken.
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function display_performance_security_info() {
    ?>
    <div class="performance-security-info">
        <h2>Performance and Security</h2>
        <p>
            Our plugin is designed to have minimal impact on your WordPress site's performance. We understand the importance of speed and efficiency, so we've optimized our code to ensure it runs as smoothly as possible.
        </p>
        <p>
            In terms of security, we've implemented several measures to protect your site. Our plugin is regularly updated to address any potential vulnerabilities and we follow best practices in coding to prevent any security issues.
        </p>
        <p>
            Please note that while we strive to ensure the highest level of security, it's important to keep your WordPress installation, themes, and plugins up-to-date to maintain a secure environment.
        </p>
    </div>
    <?php
}
add_action( 'init', 'display_performance_security_info' );
?>
</h2>