<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package docker
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

            <div class="row footer-list">
                <div class="col-3">1</div>
                <div class="col-3"><span id="two"><?php echo get_theme_mod( 'true_footer_copyright_text_2'); ?></span></div>
                <div class="col-3"><span id="copyright"><?php echo get_theme_mod( 'true_footer_copyright_text' ); ?></span></div>
                <div class="col-3"> <?php echo date( 'Y' ) /* выводим текущий год */ ?> <?php echo get_bloginfo( 'title' ); /* выводим название сайта */ ?></div>
            </div>

            <div class="row footer-credo">
                <div class="col-12">

                    <div class="credo float-right">
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'docker' ) ); ?>">
                            <?php
                            /* translators: %s: CMS name, i.e. WordPress. */
                            printf( esc_html__( 'Proudly powered by %s', 'docker' ), 'WordPress' );
                            ?>
                        </a>
                        <span class="sep " > | </span>
                        <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf( esc_html__( 'Theme: %1$s by %2$s.', 'docker' ), 'docker', '<a href="http://underscores.me/">Underscores.me</a>' );
                        ?>
                    </div>


                </div>
            </div>











		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
