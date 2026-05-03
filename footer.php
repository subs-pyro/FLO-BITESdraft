<?php
<<<<<<< HEAD
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php
	astra_content_after();

	astra_footer_before();

	astra_footer();

=======
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<?php astra_content_bottom(); ?>
	</div><!-- ast-container -->
	</div><!-- #content -->
<?php
	astra_content_after();
	astra_footer_before();
?>

<footer class="site-footer">
    <div class="footer-top">
        <div class="footer-column brand-col">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/main-logo.png" class="footer-main-logo" alt="FloBites">
            <p class="footer-tagline">Nourishing women's wellness through every phase of life with science-backed seed-cycling rituals.</p>
        </div>

        <div class="footer-column">
            <h4>SHOP</h4>
            <ul class="footer-links">
                <li><a href="#">THE Combo 6</a></li>
                <li><a href="#">THE Dark Indulgence</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>LEARN</h4>
            <ul class="footer-links">
                <li><a href="#">Ingredients</a></li>
                <li><a href="#">Blogs</a></li>
            </ul>
        </div>

        <div class="footer-column">
            <h4>SUPPORT</h4>
            <ul class="footer-links">
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Shipping & Returns</a></li>
            </ul>
            <div class="footer-socials">
                <!-- Placeholders -->
                <div class="social-placeholder"></div>
                <div class="social-placeholder"></div>
                <div class="social-placeholder"></div>
                <div class="social-placeholder"></div>
                <div class="social-placeholder"></div>
            </div>
        </div>
    </div>

    <hr class="footer-divider">

    <div class="footer-bottom">
        <div class="footer-the-logo">
            <img src="http://flobites-local.local/wp-content/uploads/2026/05/FBTHE_Logos-3.png" alt="THE">
        </div>
        <div class="footer-copyright">
            <p>© 2026 THE HORMONE ESSENTIALS. ALL RIGHTS RESERVED</p>
        </div>
        <div class="footer-legal">
            <a href="#">PRIVACY POLICY</a>
            <a href="#">TERMS & CONDITIONS</a>
        </div>
    </div>
</footer>

<?php
>>>>>>> b0764e8 (Revamp: Added custom FAQ, Blog, CTA, and new Footer sections)
	astra_footer_after();
?>
	</div><!-- #page -->
<?php
	astra_body_bottom();
	wp_footer();
?>
	</body>
</html>
