<div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Our Doctors</h5>
                <h1 class="display-4">Qualified Healthcare Professionals</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative">

            <?php
                    // the query (for Post Loop)

                    $args = array(
                        'post_type' => 'customteam'
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
                        <!-- HTML Code Design -->
                        <div class="team-item">
                            <div class="row g-0 bg-light rounded overflow-hidden">
                                <div class="col-12 col-sm-5 h-100">
                                    <img class="img-fluid h-100" src="<?php echo $image_url; ?>" style="object-fit: cover;">
                                </div>
                                <div class="col-12 col-sm-7 h-100 d-flex flex-column">
                                    <div class="mt-auto p-4">
                                        <h3><?php the_title(); ?></h3>
                                        <?php
                                            $postid = $the_query->post->ID;
                                            $profession = get_post_meta($postid, 'profession', true);

                                            $groupentries = get_post_meta( $postid, 'cteam', true );
                                        ?>
                                        <h6 class="fw-normal fst-italic text-primary mb-4"><?php echo $profession; ?></h6>
                                        <p class="m-0"><?php the_content(); ?></p>
                                    </div>
                                    <div class="d-flex mt-auto border-top p-4">
                                        <?php
                                    // CMB2 Field Repeatable Fields
                                if($groupentries){
                                    foreach ( (array) $groupentries as $key ) {
                                        ?>
                                            <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="<?php echo $key['iconurl'];?>"><i class="<?php echo $key['iconclass'];?>"></i></a>
                                        <?php
                                    }
                                }
                                ?>
                                        <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                                    </div>
                                </div>
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