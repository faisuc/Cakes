<html lang="en" class=" js rgba boxshadow csstransitions">
    <head>
        <meta charset="utf-8">
        <title>Home | Dorissimo</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/bootstrap.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.css' ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/flexslider.css" type="text/css' ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/responsive.css' ?>" type="text/css" media="screen">
        <link href='<?php echo "http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800" ?>' rel='stylesheet' type='text/css'>
        <link href='<?php echo "http://fonts.googleapis.com/css?family=Lobster" ?> 'rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--top-strip-->

        <!--end-top-strip-->
        <!--navbar-->
        <div class="container header">
            <nav id="myNavbar" class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="<?php echo base_url() . 'images/logo1.png' ?>" alt="logo"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo base_url() . ' '; ?>"><font style="color: #fff; font-size: 16px;">Home</font></a></li>
                            <li><a href="<?php echo base_url() . 'about' ?>"><font style="color: #fff; font-size: 16px;">about us</font></a></li>
                            <li><a href="<?php echo base_url() . 'menu' ?>"><font style="color: #fff; font-size: 16px;">Menu</font></a></li>
                            <li><a href="<?php echo base_url() . 'contacts' ?>"><font style="color: #fff; font-size: 16px;">Contacts</font></a></li>
                            <li><a href="<?php echo base_url() . 'login' ?>"><font style="color: #fff; font-size: 16px;">Login | Register</font></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
        <!--end-navbar-->
        <!--flex-slider-->
        <div class="main-flexslider">
            <ul class="slides">
                <li class="slides flex-active-slide" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2;"><img src="<?php echo base_url() . 'images/slide-07.jpg' ?>" alt="slide 01" draggable="false">
                    <div class="slide-caption">
                        <h2>Dorissimo</h2>
                        <h2>Baked from the Heart</h2>
                        <h2><a href="#">SEE OUR OFFER</a></h2>
                    </div>
                </li>
                <li class="slides" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><img src="<?php echo base_url() . 'images/slide-03.jpg' ?>" alt="slide 01" draggable="false">
                    <div class="slide-caption">
                        <h2>Visit us!</h2>
                        <h2></h2>
                        <h2><a href="#">Learn More</a></h2>
                    </div>
                </li>
                <li class="slides" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><img src="<?php echo base_url() . 'images/slide-05.jpg' ?>" alt="slide 01" draggable="false">
                    <div class="slide-caption">
                        <h2>Follow us!</h2>
                        <h2>on our social media sites</h2>
                        <h2><a href="#"></a></h2>
                    </div>
                </li>
                <li class="slides" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;"><img src="<?php echo base_url() . 'images/slide-04.jpg' ?>" alt="slide 01" draggable="false">
                    <div class="slide-caption">
                        <h2>Create your own</h2>
                        <h2>Personalized Cakes!</h2>
                        <h2><a href="#">Try it now!</a></h2>
                    </div>
                </li>
            </ul>
            <ul class="flex-direction-nav"><li><a class="flex-prev" href="#"></a></li><li><a class="flex-next" href="#"></a></li></ul></div>
        <!--end-flex-slider-->
        <!--Icon Blocks-->
        <div class="container">
            <div class="icon-blocks">
                <div class="col-md-4">
                    <p>
                        <i class="fa fa-group"></i>personalized shop
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <i class="fa fa-bell"></i>email notification
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        <i class="fa fa-heart"></i>Healthy Products
                    </p>
                </div>
            </div>
        </div>
        <!--end Icon Blocks-->
        <!--articles-->

        
        <div class="container">
            <h1><?=$title?></h1>
            <p>
                <?=$content?>
            </p>
        </div>
        <!--end-articles-->
        <!--prize-->
        <div class="prize">
            <div class="container">
                <h1>CUSTOMIZE YOUR OWN CAKE. TRY IT NOW</h1>
            </div>
        </div>
        <!--end-prize-->
        <!--footer-->
        <div class="full-footer">

            <div class="container">
                <div class="row bottom-strip">
                    <div class="col-md-6 rights">
                        <p>
                            &copy; Techfour Catalyst Development Group 2015
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <!--end-footer-->
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/bootstrap.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/modernizr.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.flexslider-min.js' ?>"></script>
        <script type="text/javascript">
            // jQuery
            (function($) {
                "use strict";
                $(document).ready(function() {
                    // Main Slider
                    $('.main-flexslider').flexslider({
                        directionNav: true,
                        controlNav: false,
                        animation: "fade",
                        slideshowSpeed: 7000,
                        prevText: "",
                        nextText: "",
                    });
                });
            })(jQuery);
        </script>

    </body></html>