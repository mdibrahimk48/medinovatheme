<div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <?php
                            $cell = get_option('_prefix_my_toolbar');
                            $email = get_option('_prefix_my_toolbar');
                            $social_icon = get_option('_prefix_my_toolbar');
                        ?>
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"> <?php echo $cell ['opt-cell']; ?></i></a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"> <?php echo $email ['opt-validate-email']; ?></i></a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="">
                            <i class="<?php echo $social_icon['opt-icon-class'];?>"></i>
                        </a>
                        <!-- <a class="text-body px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>