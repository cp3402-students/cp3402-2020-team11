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


<body <?php body_class(); ?>>

    <!-- ******************* The Navbar Area ******************* -->
<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">
<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarNavDropdown',
                        'menu_class'      => 'navbar-nav ml-auto',
                        'fallback_cb'     => '',
                        'menu_id'         => 'main-menu',
                        'depth'           => 2,
                        'walker'          => new Jazz_Walker(),
                    )
                ); ?>
            </div>
    </nav><!-- .site-navigation -->
<?php endif; ?>
</div>
<!-- #header-navbar end -->

    <h1> Testing custom header and menu/walker</h1>

<?php
