<?php
/**
 * Plugin Name: WDW Client Dashboard
 * Description: Client dashboard messaging and support tools.
 * Version: 1.0.1
 * Author: Elizabeth Frederickson
 */

add_action('wp_dashboard_setup', 'ef_add_dashboard_widget');

function ef_add_dashboard_widget() {
    wp_add_dashboard_widget(
        'ef_client_message',
        'Website Support & Management',
        'ef_dashboard_widget_content'
    );
}

function ef_dashboard_widget_content() {
    ?>
    <p><strong>Welcome!</strong></p>

    <p>This website was professionally designed and is maintained by
    <strong>Elizabeth Frederickson</strong>.</p>

    <hr>

    <p><strong>Need changes?</strong></p>

    <ul>
        <li>Content edits</li>
        <li>Image updates</li>
        <li>New pages, features, or sections</li>
        <li>Technical support</li>
    </ul>

    <p>
    Please contact:<br>
    <a href="mailto:liz@webdevweekend.com">liz@webdevweekend.com</a>
    </p>

    <hr>

    <p style="font-size:12px;color:#666;">
    Regular updates, security monitoring, and maintenance are handled automatically.
    Please avoid installing plugins or making structural changes without consultation.
    </p>
    <?php
}

// Include the Plugin Update Checker library
require 'plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updateChecker = PucFactory::buildUpdateChecker(
    'https://github.com/webdevweekend/wdw-client-dashboard/', // URL of your GitHub repo
    __FILE__, // Full path to this plugin file
    'wdw-client-dashboard' // Plugin slug, usually same as folder name
);

// Optional: use main branch for updates
$updateChecker->setBranch('main');