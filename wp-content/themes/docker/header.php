<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package docker
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="<?php echo get_template_directory_uri();?>/js/jquery.validate.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/custom.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/custom.css">


	<?php wp_head(); ?>
</head>
<div class="kirill-menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light bot col-lg-12">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse xd" id="navbar-content">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1', // Defined when registering the menu
                'menu_id'        => 'primary-menu',
                'container'      => false,
                'depth'          => 2,
                'menu_class'     => 'navbar-nav ml-auto dima',
                'walker'         => new Bootstrap_NavWalker(), // This controls the display of the Bootstrap Navbar
                'fallback_cb'    => 'Bootstrap_NavWalker::fallback', // For menu fallback
            ) );
            ?>
        </div>
    </nav>
</div>


