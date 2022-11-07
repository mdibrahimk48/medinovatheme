    <div class="container-fluid py-5">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <?php
                            $config = get_option('_prefix_my_options');
                            $string_converter_about = $config['opt-about-details'];
                            $string_converter_about_services = $config['opt-aboutservicefield'];
                        ?>
                        <img class="position-absolute w-100 h-100 rounded" src="<?php echo $string_converter_about['opt-aboutimage']['url']; ?>" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5"><?php echo $string_converter_about['opt-abouttitle']; ?></h5>
                        <h1 class="display-4"><?php echo $string_converter_about['opt-aboutheading']; ?></h1>
                    </div>
                    <p><?php echo $string_converter_about['opt-aboutdescription']; ?></p>
                    <div class="row g-3 pt-3">

                    <!-- Group Fields in CodeStar Framework -->
                    <?php
                        if($config['opt-aboutservicefield']){
                            foreach($config['opt-aboutservicefield'] as $about_field){
                            ?>
                                <div class="col-sm-3 col-6">
                                    <div class="bg-light text-center rounded-circle py-4">
                                        <i class="<?php echo $about_field['opt-about-icon-class']; ?>"></i>
                                        <h6 class="mb-0"><?php echo $about_field['opt-about-title1']; ?><small class="d-block text-primary"><?php echo $about_field['opt-about-title2']; ?></small></h6>
                                    </div>
                                </div>
                            <?php
                            }
                        }
                    ?>
                        <!-- <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-user-md text-primary mb-3"></i>
                                <h6 class="mb-0">Qualified<small class="d-block text-primary">Doctors</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-procedures text-primary mb-3"></i>
                                <h6 class="mb-0">Emergency<small class="d-block text-primary">Services</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-microscope text-primary mb-3"></i>
                                <h6 class="mb-0">Accurate<small class="d-block text-primary">Testing</small></h6>
                            </div>
                        </div>
                        <div class="col-sm-3 col-6">
                            <div class="bg-light text-center rounded-circle py-4">
                                <i class="fa fa-3x fa-ambulance text-primary mb-3"></i>
                                <h6 class="mb-0">Free<small class="d-block text-primary">Ambulance</small></h6>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>