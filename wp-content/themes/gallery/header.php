<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="flex justify-center items-center p-4 border-b border-gray-400 bg-gray-50">
    <div>
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.png" alt="Logo AUTO" class="h-10">
        </a>
    </div>
</header>

