<!doctype html>
<html lang="en">
    
    <!-- Page Title -->
    <title>.::  <?php bloginfo( 'name' ); ?>  ::.</title>
    <meta property="og:title" content=".::Shahidul Islam::.">
    <!-- Place favicon.ico in the root directory -->
<!--     <link href="favicon.ico" rel="shortcut icon"> -->
    <!-- Google Fonts css-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900" rel="stylesheet">
    <!--Reset normalize css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/normalize.css">
    <!--Reset main css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/main.css">
    <!-- Bootstrap css -->
    <link href="<?php echo get_template_directory_uri()?>/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Font Awesome icon css-->
    <link href="<?php echo get_template_directory_uri()?>/assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <!-- Animate css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/animate.min.css">
    <!-- fancyBox css-->
    <link href="<?php echo get_template_directory_uri()?>/assets/css/magnific-popup.css" rel="stylesheet" media="screen">
    <!-- Ionicons icon css-->
    <link href="<?php echo get_template_directory_uri()?>/assets/css/ionicons.min.css" rel="stylesheet" media="screen">
    <!-- Component css-->
    <link href="<?php echo get_template_directory_uri()?>/assets/css/component.css" rel="stylesheet" media="screen">
    <!-- hover-css3 css-->
    <link href="<?php echo get_template_directory_uri()?>/assets/css/hover-css3.css" rel="stylesheet" media="screen">
    <!-- Custom css -->
    <link href="<?php echo get_template_directory_uri()?>/assets/css/custom.css" rel="stylesheet" media="screen">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/responsive.css">
    <!--Modernizr Js-->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <link rel="stylesheet" href=" <?php bloginfo('stylesheet_url' ); ?>">
        <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Start Css3 Preloader  -->
    <section class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </section>
    <!-- End Css3 Preloader  -->
    <!--Start Header Section -->
    <header>
        <nav id="main-nav" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="navbar-header">
                            <!--start Responsive Menu -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNav">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--End Responsive Menu  -->
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <!--start Navigation  -->
                        <div class="navbar-collapse collapse" id="topNav">
                            <ul class="nav navbar-nav navbar-center topNav">
                                <li class="active"><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#service">Services</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#review">Review</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                        <!--End Navigation  -->
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!--End Header Section -->
   


   <!-- Here Slider -->
    <!--Start Banner Section  -->
    <section class="century_bg_one " id="home">
        <div id="particles-js"></div>
        <div class="parallax"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center_title">
                        <div class="author_img">
                           
                                        <?php
        global $post;

            $args = array( 'posts_per_page' => -1, 'post_type'=> 'slider-photo');
            $myposts = get_posts( $args );

        foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Portfolio Item -->                             
                                            
  <?php the_post_thumbnail('slider-photo-thumb',//eta function pic thum thekey asce...
// ekhane class add kora hoyece.........
                                            array('class'=>'slider-photo',

                                            )); ?>
                             
                            <!-- //Portfolio Item// -->
      

        <?php endforeach; ?>


                        </div>
                        <div class="typing-title">
                            <span>corporate websites</span>
                            <span>e-commerce sites</span>
                            <span>web portals</span>
                            <span>landing pages</span>
                            <span>email templates</span>
                            <span>PSD to HTML5</span>
                        </div>
                        <h2>Hi, I am Shahidul Islam. I design & build</h2>
                        <h2><span class="typed-title"></span></h2>
                        <a href="#contact">
                            <div class="hvr-grow-shadow">Yes, I'm Available For Hire</div>
                        </a>
                        <div class="author_networks">
                            <ul>
                                <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-twitter" ></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-github"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-youtube-play"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Banner Section -->