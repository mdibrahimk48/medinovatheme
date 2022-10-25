<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Medical Packages</h5>
                <h1 class="display-4">Awesome Medical Programs</h1>
            </div>
            <div class="owl-carousel price-carousel position-relative" style="padding: 0 45px 45px 45px;">

            <?php
                    // the query (for Post Loop)

                    $args = array(
                        'post_type' => 'customprice'
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

                        <!-- //// -->

                        <div class="bg-light rounded text-center">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="<?php echo $image_url; ?>" alt="">
                                <div class="position-absolute w-100 h-100 top-50 start-50 translate-middle rounded-top d-flex flex-column align-items-center justify-content-center" style="background: rgba(29, 42, 77, .8);">
                                    <h3 class="text-white"><?php the_title(); ?></h3>
                                    <h1 class="display-4 text-white mb-0">
                                    <?php
                                        $postid = $the_query->post->ID;

                                        $yearly_price = get_post_meta($postid, 'price', true);
                                    ?>
                                        <small class="align-top fw-normal" style="font-size: 22px; line-height: 45px;">$</small><?php echo $yearly_price; ?><small class="align-bottom fw-normal" style="font-size: 16px; line-height: 40px;">/ Year</small>
                                    </h1>
                                </div>
                            </div>
                            <div class="text-center py-5">

                            <?php
                                // CMB2 Field Repeatable Fields
                                $entries = get_post_meta( $postid, 'pservices', true );
                                if($entries){
                                    foreach ( (array) $entries as $key ) {
                                        ?>
                                            <p><?php echo $key; ?></p>
                                        <?php
                                    }
                                }
                            ?>
                                <a href="" class="btn btn-primary rounded-pill py-3 px-5 my-2">Apply Now</a>
                            </div>
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