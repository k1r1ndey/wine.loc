<?php
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('showposts=6' . '&post_type=work' . '&order=ASC');

?>

<div class="container">
<!--    <img src="https://img.icons8.com/windows/32/000000/wine-glass.png">-->






    <!-- КАК ЭТО РАБОТАЕТ !-->


    <div class="hiw__inner">

        <div class="hiw__title">Как это работает?</div>

        <div class="row">
            <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                $arr   = get_field( 'photo', $post->ID);
                $photo = $arr['url'];
                ?>

                <div class="col-md-4">
                <div class="item__inner">
                <div class="item">
                    <img src="<?php echo $photo ?>" class="item__img">
                    <div class="item__title"><?php echo get_field('title')."<br>"; ?></div>
                    <div class="item__info"><?php echo get_field('text')."<br>"; ?></div>

                </div>
                </div>
            </div>
            <?php endwhile; ?>



     </div>





</div>

</div>
