<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package applab
 */

?>
<!-- ===============================
    Footer
    ================================ -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="footerlogo">
						<?php if (get_field('logo_text', 'option' )) { ?>
                        	<a href="<?php get_site_url(); ?>"><?php echo get_field('logo_text', 'option' ); ?></a>
						<?php } else { ?>
							<a href="<?php get_site_url(); ?>"><span>App</span>Lab</a>
						<?php }  ?>
                    </div>
                </div>
                <div class="col-sm-12">
					<?php 
						$defaults = array(
					        'menu'            => 'footer_menu',
					        'container'       => 'ul',
					        'container_class' => '',
					        'container_id'    => '',
					        'menu_class'      => 'footerMenu',
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
                <div class="col-sm-12">
                    <ul class="socialMenu">
						<?php $facebook = get_field('facebook', 'option');
						if($facebook) { ?>
                        <li><a href="javascript:;"><i class="fa fa-facebook"></i></a></li>
						<?php } ?>
						<?php $twitter = get_field('twitter', 'option');
						if($twitter) { ?>
                        <li><a href="javascript:;"><i class="fa fa-twitter"></i></a></li>
						<?php } ?>
						<?php $slack = get_field('slack', 'option');
						if($slack) { ?>
                        <li><a href="javascript:;"><i class="fa fa-slack"></i></a></li>
						<?php } ?>
						<?php $github = get_field('github', 'option');
						if($github) { ?>
                        <li><a href="javascript:;"><i class="fa fa-github"></i></a></li>
						<?php } ?>
						<?php $instagram = get_field('instagram', 'option');
						if($instagram) { ?>
                        <li><a href="javascript:;"><i class="fa fa-instagram"></i></a></li>
						<?php } ?>
						<?php $linkedin = get_field('linkedin', 'option');
						if($linkedin) { ?>
                        <li><a href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
						<?php } ?>
                        
                    </ul>
                </div>
                <div class="col-sm-12">
					<?php $copyright = get_field('copyright', 'option');
					if($copyright) { ?>
                    <div class="copyright"><?php echo $copyright; ?></div>
					<?php } ?>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

</body>
</html>
