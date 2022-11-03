<div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <?php
                            $config = get_option('_prefix_my_toolbar');
                        ?>
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"> <?php echo $config ['opt-cell']; ?></i></a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"> <?php echo $config ['opt-validate-email']; ?></i></a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <?php
                        // Loop For Icon
                        if($config['opt-social']){
                            foreach($config['opt-social'] as $social_field){
                                ?>
                                    <a class="text-body px-2" href="<?php echo $social_field['opt-social-url'];?>">
                                        <i class="<?php echo $social_field['opt-social-icon'];?>"></i>
                                    </a>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>