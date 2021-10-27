<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title() ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_class' => 'menu'
            )
        )
        ?>
    </header>