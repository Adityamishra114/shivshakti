<?php
/**
 * Blocksy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Blocksy
 */

if (version_compare(PHP_VERSION, '5.7.0', '<')) {
	require get_template_directory() . '/inc/php-fallback.php';
	return;
}

require get_template_directory() . '/inc/init.php';

function custom_sticky_header_script() {
    ?>
    <script>
        jQuery(document).ready(function($) {
            var header = $('.ekit-template-content-markup.ekit-template-content-header.ekit-template-content-theme-support');
            var prevScrollPos = $(window).scrollTop();

            $(window).scroll(function() {
                var currentScrollPos = $(window).scrollTop();

                if (prevScrollPos > currentScrollPos) {
                    // Scrolling up, make the background white
                    header.css('background-color', '#ffffff');
                } else {
                    // Scrolling down, make the background transparent
                    header.addClass('transparent-bg');
                }

                prevScrollPos = currentScrollPos;
            });
        });
    </script>
    <?php
}
add_action('wp_footer', 'custom_sticky_header_script');