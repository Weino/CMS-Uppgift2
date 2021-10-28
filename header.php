<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title() ?>MyPage</title>
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
        <div class="main-wrapper">
            <header class="page-title">
                <h1 class="title"><?php the_title(); ?></h1>
            </header>
        </div>
    </header>