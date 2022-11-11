<?php

get_header();

    get_template_part('template-part/content', 'toolbar');

    get_template_part('template-part/content', 'navbar');

    //Single Page Head
    ?>
        <div class="signle_page_title">
            <div class="single_page_title_left">
                <h3><?php echo the_title(); ?>:</h3>
            </div>
            <div class="single_page_title_right">
                <h6><a href="<?php echo site_url(); ?>"><i>Home / </i></a><?php echo the_title(); ?></h6>
            </div>
        </div>
     <?php



get_footer();

?>

<style>
    .signle_page_title {
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }
</style>