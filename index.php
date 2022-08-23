<?php get_header() ?>



<!-- Start About Me Section -->
<section id="about" class="about-me">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="about-me-title text-center">
                    <h2>About Me</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="about_me_details text-justify">
                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => 1, 'post_type'=> 'about-me');
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>
                    <!-- Portfolio Item -->
                    <h2><?php the_title(); ?></h2>
                    <!-- //Portfolio Item// -->
                    <?php the_content() ?>
                    <?php endforeach; ?>
                    
                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => 1, 'post_type'=> 'resume');
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>
                    <!-- Portfolio Item -->
                    <a target="blink" href="<?php the_title(); ?>"> <button type="button" class="btn btn-primary">Download Resume</button></a>
                    <!-- //Portfolio Item// -->
                    <?php endforeach; ?>
                    
                </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <div class="skills_section" id="skills">
                    <!-- Start Skill -->
                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => -1, 'post_type'=> 'skills-bar');
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) : setup_postdata($post); ?>
                    <!-- Portfolio Item -->
                    <h2></h2>
                    <div class="skill wow fadeIn" data-wow-delay="0.2s">
                        <h4><?php the_content() ?></h4>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_title(); ?>" aria-valuemin="0" aria-valuemax="100" data-width="<?php the_title(); ?>%">
                                <span class="percent"><?php the_title(); ?>%</span>
                            </div>
                        </div>
                    </div>
                    <!-- //Portfolio Item// -->
                    <?php endforeach; ?>
                    <!-- End Skill -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start About Me Section -->
<!-- Start Service Section -->
<section id="service" class="services">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="services-title text-center">
                    <h2>What I Offer ?</h2>
                    <p>My Regular Services!</p>
                </div>
            </div>
        </div>
        <div class="row text-justify">
            <?php
            global $post;
            $args = array( 'posts_per_page' => -1, 'post_type'=> 'services');
            $myposts = get_posts( $args );
            foreach( $myposts as $post ) : setup_postdata($post); ?>
            <!-- Portfolio Item -->
            <div class="col-md-4 col-sm-6">
                <div class="serviceBox">
                    <h3 class="title"><?php the_title(); ?></h3>
                    <div class="service-content">
                        <p class="description">
                            <?php the_content() ?>
                        </p>
                        <?php
                        $service_icon = get_post_meta($post->ID, 'service_icon', true);
                        ?>
                        
                        <?php if ($service_icon) : ?>
                        <div class="service-icon fa fa-<?php echo $service_icon; ?>"></div>
                        
                        <?php else : ?>
                        No slogan available
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
            <!-- //Portfolio Item// -->
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- End Service Section -->
<!-- Start project_count_area Section -->
<section class="project_count_area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="single_project border_dash">
                    <div class="icon_area">
                        <i class="fa fa-stack-overflow"></i>
                    </div>
                    <div class="count_area">
                        <h2><span class="counter">1120</span>+</h2>
                        <p>Files Created</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="single_project border_dash">
                    <div class="icon_area">
                        <i class="fa fa-code"></i>
                    </div>
                    <div class="count_area">
                        <h2><span class="counter">444</span><span class="code_space">k</span>+</h2>
                        <p>Lines Of Code</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="single_project border_dash">
                    <div class="icon_area">
                        <i class="fa fa-lightbulb-o"></i>
                    </div>
                    <div class="count_area">
                        <h2><span class="counter">30</span>+</h2>
                        <p>Award Winning</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="single_project">
                    <div class="icon_area">
                        <i class="fa fa-smile-o" aria-hidden="true"></i>
                    </div>
                    <div class="count_area">
                        <h2><span class="counter">50</span>+</h2>
                        <p>Happy Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End project_count_area Section -->





<!-- Start Portfolio Section-->
<section class="portfolio_area" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="portfolio-title text-center">
                    <h2>My Recent Works</h2>
                </div>
            </div>
        </div>
        <!-- Start Portfolio Filter -->
        <div class="row">
            <div class="col-lg-12">
                
                <div class="portfolio_filters  text-center">
                    <div class="portfolio_cat">
                        <ul>
                            <li class="active_cat" data-filter="*"> All</li>
                            <li data-filter=".web">Web Design</li>
                            <li data-filter=".wordpress">Wordpress</li>
                            <li data-filter=".php">PHP</li>
                            <li data-filter=".codelgniter">CodeIgniter</li>
                            <li data-filter=".laravel">Laravel</li>
							<li data-filter=".apk">Android Apk</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <!--  End Portfolio Filter  -->

        <div class="row">
            <div class="grid">


   <?php
                global $post;
                $args = array( 'posts_per_page' => -1, 'post_type'=> 'recent-work');
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
                
                  <!-- Start Content -->
                <div class="col-md-4 col-sm-6 <?php the_title() ?> grid-item">
                    <a href="#portfolio">
                        <div class="coursebox">
                            <div class="coursebox-top">
                                <?php the_post_thumbnail('recent-work-item-thumb',//eta function pic thum thekey asce...
                                    // ekhane class add kora hoyece.........
                                    array('class'=>'',
                                    )); ?>
                            </div>
                            <h3><?php the_content() ?></h3>

                            
                        </div>
                    </a>
                </div>
                <!-- End Content --> 
              
                <?php endforeach; ?>



              
             
            </div>
        </div>





    </div>
</section>
<!-- End Portfolio Section -->




<!-- Start developer_talent -->
<section class="developer_talent">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hidden-c">
                    <div class="left_side">
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="right_side">
                    <h2>developer talent resource - {{blog}}</h2>
                    <p> We can determine what technologies developers use, where in the world they’re located, and what skills they’re proficient in. You’ll get access to the community, relevancy to your audience, and more qualified candidates. No one else has direct access to this quality and quantity of data on developers.
                    </p>
                    <br>
                        <p>We can determine what technologies developers use, where in the world they’re </p>
                        <p>We can determine what technologies developers use, where in the world they’re </p>
                   
                    <a target="blink" class="right_side_btn" href="#">Talk to an Expert</a>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End developer_talent -->




<!-- Start Project Links Section -->
<section class="works_link">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="works_link-title text-center" id="">
                    <h2>My Recent Completed Project</h2>
                </div>
            </div>
        </div>
        <div class="row">
               <?php
                global $post;
                $args = array( 'posts_per_page' => -1, 'post_type'=> 'completed-work');
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
                <!-- Start Content -->
            <div class="col-md-4 col-sm-6">
            <?php
$completed_work_link = get_post_meta($post->ID, 'completed_work_link', true);
?>

<?php if ($completed_work_link) : ?>

<a target="blink" href="<?php echo$completed_work_link; ?>">

<?php endif; ?>
                
                    <div class="coursebox">
                        <div class="coursebox-top">
                           <?php the_post_thumbnail('completed-work-item-thumb',//eta function pic thum thekey asce...
                                    // ekhane class add kora hoyece.........
                                    array('class'=>'',
                                    )); ?>
                        </div>
                        <h3><?php the_title() ?></h3>
                        <div class="coursebox-bottom">
                         <p><?php the_content() ?></p>
                        </div>
                        <div class="coursebox-bt">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/asdfas.png">
                        </div>
                    </div>
                </a>
            </div>
            <!-- End Content -->
            
                <?php endforeach; ?>
           
            
            
        </div>
    </div>
</section>
<!-- End Project Links Section -->







<!-- Start Help area Section -->
<section class="help_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="help-title text-center ">
                    <h3>Want to work together?</h3>
                    <h4>I'm currently accepting new projects and would love to hear about yours. Please take a few minutes to tell me about it.</h4>
                    <a href="#contact">
                        <button class="button "><span>GET STARTED </span></button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Help area Section -->
<!-- Start Review Section -->
<section class="review_section" id="review">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="review-title text-center">
                    <h2>Review</h2>
                    <p>What Say My Clients!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="clients_review">
                    <div id="myCarousel" class="carousel restart-carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                           <!--  <li data-target="#myCarousel" data-slide-to="0" class="active"><img src="<?php// echo get_template_directory_uri()?>/assets/images/clients/02.jpg" alt="Rifat Partho" class="img-responsive"></li>
                            <li data-target="#myCarousel" data-slide-to="1"><img src="<?php //echo get_template_directory_uri()?>/assets/images/clients/03.jpg" alt="Tahin Ahmed" class="img-responsive"></li>
                            <li data-target="#myCarousel" data-slide-to="2"><img src="<?php // echo get_template_directory_uri()?>/assets/images/clients/01.jpg" alt="Syed Delwar Hussain" class="img-responsive"></li>
                            <li data-target="#myCarousel" data-slide-to="3"><img src="<?php //echo get_template_directory_uri()?>/assets/images/clients/01.jpg" alt="Syed Delwar Hussain" class="img-responsive"></li>
                         -->
<?php
 $i=0; 
global $post;
$args = array( 'posts_per_page' => -1, 'post_type'=> 'review');
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Start Content -->

<li data-target="#myCarousel" data-slide-to="<?php echo $i++; ?>" class="">
    
<?php the_post_thumbnail('review-item-thumb',//eta function pic thum thekey asce...
// ekhane class add kora hoyece.........
array('class'=>'img-responsive',
)); ?>

</li>


<!-- End Content -->

<?php endforeach; ?>

                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
<?php
global $post;
$args = array( 'posts_per_page' => -1, 'post_type'=> 'review');
$myposts = get_posts( $args );
foreach( $myposts as $post ) : setup_postdata($post); ?>
<!-- Start Content -->

<div class="item ">

 <p> <?php the_content() ?></p>
 <h2>__<?php the_title() ?>__ <br><span>
<?php
$review_author_title = get_post_meta($post->ID, 'review_author_title', true);
?>

<?php if ($review_author_title) : ?>

<?php echo $review_author_title; ?>

<!-- Owner-Perfect Evento -->
                                
<?php endif; ?>
                                </span></h2>
</div>




                               
<!-- End Content -->

<?php endforeach; ?>

<script type="text/javascript">
    
    jQuery("documnet").ready(function (){
       
            jQuery("div.carousel div.item:first-child").addClass("active")
            jQuery("#myCarousel ol.carousel-indicators li:first-child").addClass("active")
       
    });

</script> 

                           <!--  <div class="item active">
                                <p> Having my website created by Razib, The professionalism and individualism of the customer service I received from Razib are unparalleled.</p>
                                <h2>__Rifat Partho__ <br><span>Owner-Perfect Evento</span></h2>
                            </div>
                            <div class="item">
                                <p>We have been looking for an intuitive tool like this for a while and this is just what we needed. Highly Recommended.</p>
                                <h2>__Tahin Ahmed__ <br><span>CEO of Computer Factor</span></h2>
                            </div>
                            <div class="item">
                                <p>Overall very pleased with Razib. He did everything we asked in a timely matter. I will definitely be recommending him to other companies. Thanks for such good work.</p>
                                <h2>__Syed Delwar Hussain__ <br><span>District Coordinator at ICT Division, Bangladesh</span></h2>
                            </div> 
                            <div class="item">
                                <p>Overall very pleased with Razib. He did everything we asked in a timely matter. I will definitely be recommending him to other companies. Thanks for such good work.</p>
                                <h2>__Syed Delwar Hussain__ <br><span>District Coordinator at ICT Division, Bangladesh</span></h2>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Review Section -->
<!-- Start Contact Section -->

<?php require_once'contact.php';?>

<!-- 
<section class="contact_section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-title text-center">
                    <h2>contact me</h2>
                    <p>Want to discuss a project? Just fill in the form below and I’ll get back to you ASAP!</p>
                </div>
            </div>
        </div>
        <div class="row contact_padding">
            <div class="col-md-offset-1 col-md-10">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="info_icon">
                            <span><i class="fa fa-map-marker"></i></span>
                        </div>
                        <div class="info_details">
                            <p>Address:</p>
                            <h4>Bogra, Rajshahi, Bangladesh</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="info_icon">
                            <span><i class="fa fa-mobile"></i></span>
                        </div>
                        <div class="info_details">
                            <p>Phone:</p>
                            <a href="tel:+8801793330005"><h4>+880179 333 0005</h4></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="contact_info">
                        <div class="info_icon">
                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <div class="info_details">
                            <p>Email:</p>
                            <a href="mailto:bdkoder@gmail.com"><h4>bdkoder@gmail.com</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-8">
                    <div class="style_form">
                        <form id="myform" method="POST" action="" class="form-inline">
                            <div class="row input_padding">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="name_input">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your Name..." required/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="email_input">
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Your Email..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row input_padding">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="subject_input">
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row input_padding">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="message_input">
                                        <textarea rows="6" name="message" id="exampleTextarea" class="form-control" placeholder="How can I help?" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row input_padding">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="submit_input">
                                        <button type="submit" name="submit" id="submit" class="btn btn-default">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Contact Section -->
<?php get_footer() ?>