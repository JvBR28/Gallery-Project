<?php
// Função para obter uma nova imagem da API e salvar no banco de dados

function get_and_save_cat_image() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'gallery_images';

    // Fazer a requisição para a API
    $response = wp_remote_get('https://api.thecatapi.com/v1/images/search');
    if (is_wp_error($response)) {
        return;
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);

    if (!empty($data) && isset($data[0]['id'], $data[0]['url'])) {
        $image_id = $data[0]['id'];
        $url = $data[0]['url'];

        // Verificar se a imagem já existe no banco de dados
        $exists = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM $table_name WHERE image_id = %s", $image_id));
        if (!$exists) {
            $wpdb->insert($table_name, [
                'image_id' => $image_id,
                'url' => $url,
            ]);
        }
    }
}
