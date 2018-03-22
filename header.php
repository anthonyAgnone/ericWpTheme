<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		        <!--=============== css  ===============-->	

		<?php wp_head(); ?>


	</head>
	<body <?php body_class(); ?>>
        <!--================= loader ================-->
        <div class="loader-holder">
            <div class="cssload-speeding-wheel"></div>
        </div>
        <!--================= loader end ================-->
        <!--================= Main   ================-->
        <div id="main">
            <!--================= Header ================-->
            <header class="main-header">
                <a href="<?php echo home_url(); ?>" class="logo-holder"><img src="http://localhost/ericWP/wp-content/uploads/2018/03/logo.png" alt=""></a>
                <!-- nav-button -->
                <div class="nav-button-wrap">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="nav-holder">
                    <nav class="scroll-nav">
                        <ul>
                            <li><a class="scroll-link" href="#sec1">Home</a></li>
                            <li><a class="scroll-link" href="#sec2">About</a></li>
                            <li><a class="scroll-link" href="#sec7">Services</a></li>
                            <li><a class="scroll-link" href="#sec8">Clients</a></li>
                            <li><a class="scroll-link" href="#sec9">Contact</a></li>
                            <li><a class="scroll-link" href="#sec9"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                            <li><a class="scroll-link" href="#sec9"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                            <li><a class="scroll-link" href="#sec9"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="show-share isShare">
					<a class="scroll-link" href="#sec9"><i class="fa fa-envelope" aria-hidden="true"></i>Contact</a>
				</div>

            </header>
