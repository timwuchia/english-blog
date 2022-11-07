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
    <div class="footer-logo"><h2>English Blog</h2></div>
    <div class="site-legal">
        <a href="/terms">條款</a> | <a href="/privacy-policy">隱私</a>
        <p class="no-margin">&copy; All rights reserverd</p>
    </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>