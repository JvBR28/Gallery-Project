<?php
require get_template_directory() . '/inc/hooks/enqueue_style.php';
require get_template_directory() . '/inc/hooks/setup.php';
require get_template_directory() . '/inc/hooks/enqueue_scripts.php';
require_once get_template_directory() . '/inc/api/cat-api.php';
require_once get_template_directory() . '/inc/hooks/ajax-functions.php';

if (is_user_logged_in()) {
    add_filter('show_admin_bar', '__return_true');
}