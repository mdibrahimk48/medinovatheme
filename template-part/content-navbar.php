    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <?php
                    $config = get_option('_prefix_my_options');
                    $string_converter_sitename = $config['opt-site-name'];
                ?>
                <a href="index.html" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>Medinova</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_class' => 'navbar-nav ms-auto py-0'
                    ));
                ?>
                    <!-- <ul class="navbar-nav ms-auto py-0">
                            <li class="nav-item">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                            <a href="about.html" class="nav-item nav-link">About</a>
                            </li>
                            <li class="nav-item">
                            <a href="service.html" class="nav-item nav-link">Service</a>
                            </li>
                            <li class="nav-item">
                            <a href="price.html" class="nav-item nav-link">Pricing</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Blog Grid</a></li>
                                <li><a class="dropdown-item" href="#">Blog Detail</a></li>
                                <li><a class="dropdown-item" href="#"> Testimonial</a></li>
                                <li><a class="dropdown-item" href="#">Appointment</a></li>
                                
                                <li><a class="dropdown-item" href="#">The Team</a></li>
                    </ul> -->
                </div>
            </nav>
        </div>
    </div>