<?php
require get_template_directory() . '/inc/hooks/enqueue_style.php';
require get_template_directory() . '/inc/hooks/setup.php';
require get_template_directory() . '/inc/hooks/enqueue_scripts.php';
require_once get_template_directory() . '/inc/api/cat-api.php';

if (is_user_logged_in()) {
    add_filter('show_admin_bar', '__return_true');
}

add_action('wp_ajax_add_cat_image', 'ajax_add_cat_image');
add_action('wp_ajax_nopriv_add_cat_image', 'ajax_add_cat_image');

function ajax_add_cat_image() {
    get_and_save_cat_image();

    wp_send_json_success('Imagem adicionada com sucesso!');
}
