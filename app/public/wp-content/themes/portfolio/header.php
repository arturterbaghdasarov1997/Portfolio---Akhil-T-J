<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'portfolio' ); ?></a>

    <header id="masthead" class="site-header portfolio-header <?php echo is_user_logged_in() ? 'logged-in' : '' ?> ">
        <div class="container">
            <div class="header-content">
                <nav id="site-navigation" class="main-navigation portfolio-navigation">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'     => 'header-menu',
                                'container'      => false, // Remove the <ul> container
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Customize the wrapper for menu items
                                'walker'         => new WPDocs_Walker_Nav_Menu(), // Use a custom walker to add the active class
                            )
                        );
                    ?>
                </nav><!-- #site-navigation -->
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu">
                    <label for="menu">
                        <span class="hamburger-menu-icon">&#9776;</span>
                    </label>
                    <div class="sidebar-nav">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu-mobile',
                                    'menu_class'     => 'header-menu',
                                    'container'      => false, // Remove the <ul> container
                                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Customize the wrapper for menu items
                                    'walker'         => new WPDocs_Walker_Nav_Menu(), // Use a custom walker to add the active class
                                )
                            );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->

    <?php
    // Custom walker class to add the 'active' class to the current menu item
    class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {
        public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
            $output .= sprintf( "\n<li class='nav-item %s'><a href='%s'>%s</a>", ( $item->current || $item->current_item_ancestor ) ? 'active' : '', $item->url, $item->title );
        }
    }
    ?>