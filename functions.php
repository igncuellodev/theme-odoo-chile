<?php

function mi_landing_assets() {

    wp_enqueue_style(
        'mi-landing-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'mi_landing_assets');