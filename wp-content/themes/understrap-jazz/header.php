<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
    <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<div id="site-header-menu" class="site-header-menu">
<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <nav id="site-navigation" class="main-navigation" role="navigation">
    <?php wp_nav_menu(
        array(
            'theme_location'  => 'primary',
            'menu_class'      => 'navbar-nav ml-auto',
            'menu_id'         => 'main-menu',
            'walker'          => new Jazz_Walker()
        )
    ); ?>

<?php endif; ?>

    <h1> Testing custom header and menu/walker</h1>

<?php
