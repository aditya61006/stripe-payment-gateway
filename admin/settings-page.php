<?php

if (!defined('ABSPATH')) {
    exit;
}

function stripe_payment_admin_menu() {
    add_menu_page(
        'Stripe Settings',
        'Stripe Settings',
        'manage_options',
        'stripe-settings',
        'stripe_settings_page',
        'dashicons-admin-generic'
    );
}

add_action('admin_menu', 'stripe_payment_admin_menu');

function stripe_settings_page() {
    ?>
    <div class="wrap">
    <h1>Stripe Settings</h1>

    <form method="post">
        <table class="form-table">
            <tr>
                <th>Publishable Key</th>
                <td>
                    <input type="text" name="stripe_publishable_key" class="regular-text">
                </td>
            </tr>

            <tr>
                <th>Secret Key</th>
                <td>
                    <input type="password" name="stripe_secret_key" class="regular-text">
                </td>
            </tr>
        </table>

        <button type="submit" class="button button-primary">
            Save Settings
        </button>
    </form>
</div>
    <?php
}