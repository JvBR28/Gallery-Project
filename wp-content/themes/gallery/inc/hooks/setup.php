<?php
function meu_tema_setup() {
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'menu_principal' => __('Menu Principal', 'meu-tema')
    ));
}
add_action('after_setup_theme', 'meu_tema_setup');
