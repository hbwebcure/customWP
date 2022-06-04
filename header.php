<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <main>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CBD
 */
$header_scripts = get_field('header_scripts', 'option');
$body_scripts = get_field('body_scripts', 'option');
$theme_color = get_field('theme_color', 'option') ? get_field('theme_color', 'option') : '#ffffff'; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="theme-color" content="<?=$theme_color;?>">
    <!-- Favicons - use https://realfavicongenerator.net/ and place in /favicons -->
    <?php wp_head(); ?>
    <?= $header_scripts; ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?= $body_scripts; ?>
<nav class="nav">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
        <img src="<?php the_field('logo_hd','option'); ?>" alt="<?php bloginfo('name'); ?>">
    </a>
    <button class="navbar-toggler" onclick="this.classList.toggle('active')">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
    <?php if ( has_nav_menu( 'main-menu' ) ){ ?>
        <div class="collapsible justify-content-center align-items-center">
            <ul class="nav-links">
                <?php wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'container'      => '',
                    'depth'          => 1,
                    'items_wrap'     => '%3$s'
                ) );
                if(!empty(get_field('button_text_hd','option'))){ ?>
                    <li class="button-link-container">
                        <button>
                            <a class="button-link" href="<?php the_field('button_link_hd','option'); ?>">
                                <?php the_field('button_text_hd','option'); ?>
                            </a>
                        </button>
                    </li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</nav>