<?php

function add_cat_image() {
    get_and_save_cat_image();
    wp_send_json_success(['message' => 'Imagem adicionada com sucesso!']);
}

add_action('wp_ajax_add_cat_image', 'add_cat_image');
add_action('wp_ajax_nopriv_add_cat_image', 'add_cat_image');
