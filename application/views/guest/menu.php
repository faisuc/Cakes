<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Menu | Dorissimo</title>
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
                            <li><a href="<?php echo base_url() . ' '; ?>"><font style="color: #fff; font-size: 16px;">Home</font></a></li>
                            <li><a href="<?php echo base_url() . 'about' ?>"><font style="color: #fff; font-size: 16px;">about us</font></a></li>
                            <li class="active"><a href="<?php echo base_url() . 'menu' ?>"><font style="color: #fff; font-size: 16px;">Menu</font></a></li>
                            <li><a href="<?php echo base_url() . 'contacts' ?>"><font style="color: #fff; font-size: 16px;">Contacts</font></a></li>
                            <li><a href="<?php echo base_url() . 'login' ?>"><font style="color: #fff; font-size: 16px;">Login | Register</font></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
        <!--end-navbar-->
        <script>
            <?php
            if ($err != "") {
alert("I am an alert box!");
            }
            ?>
        </script>
        <!-- shop-page -->
        <div class="container">
            <div class="row content">
                <div class="col-md-9 shop-section">
                    <div class="row">

                        <div class="col-md-20 latest">
                            <ul class="pagination-list pull-right">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                            </ul>
                            <form action="<?php echo base_url() . 'menu' ?>" method="post" role="form">
                                <ul class="pagination-list pull-left">

                                    <select name="choices" class="form-control input-md">
                                        <option value="all">All</option>
                                        <option value="cake">Cakes</option>
                                        <option value="pastries">Pastries</option>
                                    </select>

                                </ul>
                                <button type="submit" class="btn btn-default btnnnnn">Go</button>
                            </form>
                        </div>

                    </div>
                    <!--articles-->
                    <div class="row articles">
                        <?php foreach ($menus as $menu): ?>
                            <form action="<?php echo base_url() . 'shop/cartGuest/' . $menu->prod_id . '' ?>" method="post" role="form">
                                <div class="col-md-4 col-sm-6">
                                    <img src="<?php echo base_url() . $menu->prod_pic ?>" alt="">
                                    <div class="text">
                                        <a href="#"><span>
                                                <?php echo $menu->prod_name ?></span></a>
                                        <p>
                                            ₱ <?php echo $menu->prod_price ?>.00
                                        </p>
                                        <button class="btn btn-default"><i class="fa fa-shopping-cart"></i> Add to Cart</button>                     
                                    </div>
                                </div>
                            </form>
                        <?php endforeach; ?>

                    </div>

                </div>
                <!--end-articles-->
                <div class="col-md-3 shop-sidebar" style="margin-top: 39px">
                    <div class="sidebar-widgets">

                        <div class="shop-widget">
                            <h4>Categories</h4>
                            <ul class="category-shop-list">
                                <li>
                                    <a class="accordion-link" href="#">Cakes</a>
                                    <ul class="accordion-list-content">
                                        <li><a href="#">Blueberry Cheesecake</a></li>
                                        <li><a href="#">Chocolate Moose</a></li>
                                        <li><a href="#">Mango Cheesecake</a></li>
                                        <li><a href="#">Real Mango Cheesecake</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="accordion-link" href="#">Pastries</a>
                                    <ul class="accordion-list-content">
                                        <li><a href="#">Red Velvet</a></li>
                                        <li><a href="#">Cookies and Cream Cupcake</a></li>
                                        <li><a href="#">Mocha Cupcake</a></li>
                                        <li><a href="#">Chocolate Cupcake</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="shop-widget">
                            <h4>Design your own Cakes!</h4>
                            <ul class="category-shop-list">
                                <li>
                                    <a class="accordion-link" href="#">Cakes</a>

                                </li>
                                <li>
                                    <a class="accordion-link" href="#">Pastries</a>

                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--prize-->
        <div class="prize">
            <div class="container">
                <h1>100% HEALTHY FOODS. TRY ONE NOW!</h1>
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
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.nouislider.min.js' ?>"></script>
    </body>
</html>