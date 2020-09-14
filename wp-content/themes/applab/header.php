<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package applab
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php $favicon = get_field('favicon', 'option');
	if ($favicon){ ?>
    	<link rel='shortcut icon' href='<?php echo $favicon['url']; ?>' type='image/x-icon' />
	<?php } else { ?>
		<link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/assets/image/favicon.png' type='image/x-icon' />
	<?php } ?>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- ===============================
    HEADER
    ================================ -->
    <section class="siteheader" id="home">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="logo">
						<a href="<?php echo get_site_url(); ?>">
						<?php 
						$logo= '';
						$header_logo_text = get_field('header_logo_text', 'option'); 
						$header_logo_image = get_field('header_logo_image', 'option'); 
						if ($header_logo_text) {
							$logo = $header_logo_text;
						} elseif ($header_logo_image) {
							$logo = $header_logo_image['url'];
						} else {
							$logo = '<span>App</span>Lab';
						}
						echo $logo;
						?>
                        </a>
                    </div>
                    <div class="mobileMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-9">                    
                    <div class="menuwrapper">
                        <div class="menuclose">
                            <span></span>
                            <span></span>
                        </div>
						<?php 
						$defaults = array(
					        'menu'            => 'main_menu',
					        'container'       => 'ul',
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'mainmenu',
					        'menu_id'         => '',
					        'echo'            => true,
					        'fallback_cb'     => 'wp_page_menu',
					        'before'          => '',
					        'after'           => '',
					        'link_before'     => '',
					        'link_after'      => '',
					        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					        'item_spacing'    => 'preserve',
					        'depth'           => 0,
					        'walker'          => '',
					        'theme_location'  => '',
					    );
						wp_nav_menu($defaults);
						?>                        
                    </div>
                </div>
            </div>
        </div>
    </section>