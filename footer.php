<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<footer>
    <div class="footer-logo">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo100x100.png'?>" alt="">
    </div>
    <div class="site-legal">
        <a href="/privacy-policy">隱私政策</a>
        <p class="no-margin">&copy; All rights reserved. 版權所有，禁止擅自轉貼節錄</p>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>