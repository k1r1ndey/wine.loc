<?php


session_set_cookie_params(20);
session_start();
if(  !isset(  $_SESSION['count']  )  )  $_SESSION['count']  =  0;
$_SESSION['count']++;





/*
  Template Name: Main Page Template
 *
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">





        <div class="container-fluid">

<!--            <div class="row">-->
<!--                --><?php //get_template_part("template-parts/menu");?>
<!--            </div>-->
<!--            <div class="row">-->
<!--                --><?php //get_template_part("template-parts/bootstrap");?>
<!--            </div>-->
          <div class="row">
               <?php get_template_part("template-parts/slider")?>
         </div>
            <div class="">
                <?php get_template_part("template-parts/how_is_works");?>
            </div>
            <div class="row no-gutter">
                <?php get_template_part("template-parts/start_test");?>
            </div>
            <div class="row">
                <?php get_template_part("template-parts/instagram_photos");?>
            </div>
        </div>

    </main>
</div>

<?php

if(isset($_SESSION['count']) && $_SESSION['count'] == 1) {
    my_get_template_part('template-parts/modal', ['message' => 'Я модальное окно №1']);
}
get_footer();

