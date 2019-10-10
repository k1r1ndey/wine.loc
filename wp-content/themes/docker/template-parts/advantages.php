<?php
$wp_query= null;
$wp_query = new WP_Query();
$wp_query->query('showposts=4' . '&post_type=advantages' . '&order=ASC');

?>

    <div class="col-md-12">
    <div class="adv__title">
        Преимущества винного клуба
    </div>
    </div>
<div class="row">
    <?php while ($wp_query->have_posts()) : $wp_query->the_post();
    $arr   = get_field( 'photo', $post->ID);
    $photo = $arr['url'];
    ?>

    <div class="col-md-3">
        <div class="adv__inner">
            <div class="adv__item"><img src="<?php echo $photo ?>" class="adv_icon" alt=""></div>
            <div class="item_adv_text"><?php echo get_field('title')."<br>"; ?></div>
        </div>
        </div>
        <?php endwhile; ?>
</div>




