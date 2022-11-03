<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php
        $config = get_option('_prefix_my_options');
        $string_converter_site_details = $config['opt-site-details'];
    ?>
    <title><?php echo $string_converter_site_details['opt-customtitle']; ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <?php wp_head(); ?>


    <style id="wp-custom-css">
		.navbar-expand-lg .navbar-collapse {
            display: grid !important; 
            justify-content: end !important
        }
        .w-100 {
            height: 300px!important;
        }		
    </style>
</head>