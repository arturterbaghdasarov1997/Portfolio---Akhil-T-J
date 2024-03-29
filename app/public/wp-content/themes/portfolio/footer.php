<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

<footer id="colophon" class="site-footer pc">
    <div class="site-info">
        <?php
            echo "<span>All Rights Reserved</span>";
            echo '<img src="' . get_template_directory_uri() . '/assets/images/copyright.png" alt="Copyright">';
            echo "<span>2021 akhiltj</span>";
            echo '<img src="' . get_template_directory_uri() . '/assets/images/heart.png" alt="Heart">';
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
