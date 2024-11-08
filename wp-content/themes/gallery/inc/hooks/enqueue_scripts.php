<?php
function theme_enqueue_scripts() {
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap', [], null);

    wp_enqueue_script('phosphor-icons', 'https://unpkg.com/phosphor-icons', [], null, true);
}

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
