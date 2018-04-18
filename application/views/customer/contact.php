<html lang="en" class=" js rgba boxshadow csstransitions">
    <head>
        <meta charset="utf-8">
        <title>Contacts | Dorissimo</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">-->
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
                    <?php foreach ($details as $detail): ?>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div style="margin-right: 37px;" align="right">
                            <font style="color: #fff; ">Welcome, <?php echo $detail->fname . " " . $detail->lname; ?></font>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="<?php echo base_url() . 'Home'; ?>"><font style="color: #fff; font-size: 16px;">Home</font></a></li>
                                <li><a href="<?php echo base_url() . 'About'; ?>"><font style="color: #fff; font-size: 16px;">about us</font></a></li>
                                <li><a href="<?php echo base_url() . 'Menu' ?>"><font style="color: #fff; font-size: 16px;">Menu</font></a></li>
                                <li class="active"><a href="<?php echo base_url() . 'Contacts' ?>"><font style="color: #fff; font-size: 16px;">Contacts</font></a></li>

                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><font style="color: #fff; font-size: 16px;">My Account <span class="caret"></span></font></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() . 'Profile' ?>">View Profile</a></li>
                                        <li><a href="<?php echo base_url() . 'CartList' ?>">Cart</a></li>
                                        <li><a href="<?php echo base_url() . 'logout' ?>">Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
            <!--end-navbar-->

            <!-- shop-page -->
            <div class="container">
                <div class="row content">
                    <div class="col-md-9" style="margin-top: 20px; margin-left: -50px">
                        <iframe scrolling="no"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d482.5254477945348!2d121.06085294857623!3d14.644382042004343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde380ff893c14cc6!2sDorissimo+Pastries!5e0!3m2!1sfil!2sph!4v1430667838003" width="840" height="600" frameborder="0" style="border:0">
                        </iframe>

                        <?php if (validation_errors()): ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <?php echo validation_errors(); ?>
                            </div>

                        <?php endif; ?>

                        <div class="row contact-all">
                            <div class="triggerAnimation animated" data-animate="fadeInLeft">
                                <form action="<?php echo base_url() . 'shop/comment'; ?>" id="contact-form" role="form" method="post">
                                    <h1>contact us</h1>
                                    <div class="text-fields">
                                        <div class="float-input">
                                            <input name="uname" id="" type="text" value="<?php echo $detail->username ?>">
                                            <span><i class="fa fa-user"></i></span>
                                        </div>
                                        <div class="float-input">
                                            <input name="email" id="" type="text" value="<?php echo $detail->email ?>">
                                            <span><i class="fa fa-envelope-o"></i></span>
                                        </div>
                                        <div class="float-input">
                                            <input name="phone" id="" type="text" value="<?php echo '00000000' ?>">
                                            <span><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                    <div class="submit-area">

                                        <div class="float-input">
                                            <input name="subject" id="" type="text" placeholder="Subject">
                                            <span><i class="fa fa-list-alt"></i></span>
                                        </div>
                                        <textarea name="comment" id="" placeholder="Message"></textarea>
                                        <input type="submit" id="" class="main-button" value="Send Now">
                                        <div id="msg" class="message">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="col-md-4 shop-sidebar" style="margin-top:18px; margin-right: -70px;">
                    <div class="sidebar-widgets">
                        <div class="row right-cal">
                            <h4>Contact Us!</h4>
                            <ul>
                                <li class="colored">
                                    <a>
                                        Dorissimo Cakes and Pastries
                                    </a><br><br>
                                    <a>
                                        122 Maginhawa St. Teachers Village<br></a><a>East,1101 Quezon City, Philippines
                                    </a>
                                </li>
                                <li class="colored">
                                    <a>Opening Time</a><br><br><a>Mon - sun<span>7:00am-10:00pm</span></a></li>
                                <li class="colored"><a><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;(02)263-1465</a></li>
                                <li class="colored"><a><i class="fa fa-envelope"></i>&nbsp;&nbsp;&nbsp;dorissimopastries@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="row right-cal">
                            <h4>Social Media</h4>
                            <ul>

                            </ul>
                            <ul>

                                <li class="colored"><a href="https://www.facebook.com/dorissimopastries"><i class="fa fa-facebook"></i>
                                        Facebook<br></a><a>Dorissimo Pastries
                                        Bakery · Café · <br></a><a>Diner
                                    </a></li>
                                <li class="colored"><a href="https://twitter.com/DorissimoPastry"><i class="fa fa-twitter"></i>
                                        Twitter</a><br><a>Dorissimo Pastries
                                    </a></li>
                                <li class="colored"><a href="https://instagram.com/dorissimopastries/"><i class="fa fa-instagram"></i>
                                        Instagram<br></a><a>dorissimopastries
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-shop-page -->
        <!-- partners box -->
        <div class="container">
        </div>
        <!--prize-->
        <div class="prize">
            <div class="container">
                <h1>win our special prize on our facebook page</h1>
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
        <script type="text/javascript" src="<?php echo base_url() . 'js/waypoint.min.js' ?>"></script>

        <script type="text/javascript" src="<?php echo base_url() . 'js/gmap3.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>
    </body>
</html>