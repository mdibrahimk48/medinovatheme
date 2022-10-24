<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Testimonial</h5>
                <h1 class="display-4">Patients Say About Our Services</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">

                <?php
                    // the query (for Post Loop)

                    $args = array(
                        'post_type' => 'customtestimonial'
                    );

                    $the_query = new WP_Query( $args ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                        $image_url;
                        // Image Location.
                        if ( has_post_thumbnail() ) {
                            $image_url = get_the_post_thumbnail_url(get_the_ID());
                        }
                        else {
                            $image_url = get_bloginfo('stylesheet_directory') .'/img/about.jpg"';
                        }

                        ?>

                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-5">
                                <img class="img-fluid rounded-circle mx-auto" src="<?php echo $image_url; ?>" alt="">
                                <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                    <i class="fa fa-quote-left fa-2x text-primary"></i>
                                </div>
                            </div>
                            <p class="fs-4 fw-normal"><?php the_content(); ?></p>
                            <hr class="w-25 mx-auto">
                            <h3><?php the_title(); ?></h3>
                                <?php
                                    $postid = $the_query->post->ID;

                                    $icon_class = get_post_meta($postid, 'profession', true);
                                    ?>
                                        <h5 class="fw-normal text-primary mb-3"><?php echo $icon_class; ?></h5>
                                    <?php

                                    // CMB2 Field Repeatable Fields
                                    $entries = get_post_meta( $postid, 'tcompany', true );
                                    if($entries){
                                        foreach ( (array) $entries as $key ) {
                                            ?>
                                                <h6 class="fw-normal text-primary mb-3"><?php echo $key; ?></h6>
                                            <?php
                                        }
                                    }
                                ?>
                        </div>

                        <?php endwhile; ?>
                        <!-- end of the loop -->

                        <!-- pagination here -->

                        <?php wp_reset_postdata(); ?>

                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif;
                    // End the query (for Post Loop)

                    ?>
                    </div>
                </div>
            </div>
        </div>
</div>