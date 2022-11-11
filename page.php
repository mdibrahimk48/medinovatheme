<?php

get_header();

    get_template_part('template-part/content', 'toolbar');

    get_template_part('template-part/content', 'navbar');

    ?>
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"><?php echo the_title(); ?></h5>
     <?php



get_footer();

?>