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
<div>
    <div>
	<!-- #content -->

<!--	<footer id="colophon" class="site-footer">-->
<!--		<div class="site-info">-->
<!---->
<!--            <div class="row footer-list">-->
<!--                <div class="col-3">1</div>-->
<!--                <div class="col-3">2</div>-->
<!--                <div class="col-3"><span id="copyright">--><?php //echo get_theme_mod( 'true_footer_copyright_text' ); ?><!--</span></div>-->
<!--                <div class="col-3"> --><?php //echo date( 'Y' )  ?><!-- --><?php //echo get_bloginfo( 'title' );  ?><!--</div>-->
<!--            </div>-->
<!---->
<!--            <div class="row footer-credo">-->
<!--                <div class="col-12">-->
<!---->
<!--                    <div class="credo float-right">-->
<!--                        <a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'docker' ) ); ?><!--">-->
<!--                            --><?php
//
//                            printf( esc_html__( 'Proudly powered by %s', 'docker' ), 'WordPress' );
//                            ?>
<!--                        </a>-->
<!--                        <span class="sep"> | </span>-->
<!--                        --><?php
//
//                        printf( esc_html__( 'Theme: %1$s by %2$s.', 'docker' ), 'docker', '<a href="http://underscores.me/">Underscores.me</a>' );
//                        ?>
<!--                    </div>-->
<!---->
<!---->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--		</div><!-- .site-info-->
<!--	</footer><!-- #colophon -->
<!--</div><!-- #page -->
</div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-2 name">
                inWine, 2019
            </div>
            <div class="col-md-7 tag">
                <a href="#" class="links">Как мы работаем</a>
                <a href="#" class="links">О нас</a>
                <a href="#" class="links">Вступить в клуб</a>
                <a href="#" class="links">FAQ</a>
                <a href="#" class="links">Контакты</a>
                <a href="#" class="links">Блог</a>
            </div>
            <div class="col-md-2 private">
                © 2019 ‐ Все права защищены
            </div>
        </div>
    </div>
</footer>


<?php wp_footer(); ?>

</body>
</html>