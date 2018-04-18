<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Dorissimo</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/bootstrap.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.css' ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/responsive.css' ?>" type="text/css" media="screen"/>
        <link href='<?php echo "http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800" ?>' rel='stylesheet' type='text/css'>
        <link href='<?php echo "http://fonts.googleapis.com/css?family=Lobster" ?> 'rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url() . 'css/product-slider.css' ?>" type="text/css" media="screen"/>
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
                            <li><a href="<?php echo base_url() . 'signup' ?>"><font style="color: #fff; font-size: 16px;">Login | Register</font></a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
        <!--end-navbar-->

        <div class="modal fade" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content panel-danger">
                    <div class="modal-header panel-heading">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"><i class="fa fa-warning"> Ooooops!</i></h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="<?php echo site_url('shop/loginMenu'); ?>">
                            <p>You need to Login first and add the item to cart</p>
                            <br><br>
                            <div class="col-xs-5">
                                <input type="text" name="username" class="form-control" placeholder="Email or Username">
                            </div>
                            <br><br><br><br>
                            <div class="col-xs-5">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>

                            <br><br><br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="login" class="btn btn-success">Login</button><br><br>

                            &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url() . 'signup' ?>">Not yet registered? register HERE.</a>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Back</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <!-- shop-page -->
       <div class="container content">
                <div class="row">
                    <div class="col-md-9 white-bg">
                        <!-- Single Product -->
                        <form action="<?php echo base_url() . 'shop/add_cart' ?>" method="post" role="form">
                            <div class="single-product cold-md-12">
                                <?php foreach ($details as $detail): ?>
                                    <input type="hidden" name="prod_id" value="<?php echo $detail->prod_id ?>">
                                    <div class="flexslider col-md-6">
                                        <ul class="slides">
                                            <li data-thumb="<?php echo base_url() . $detail->prod_pic ?>">
                                                <img src="<?php echo base_url() . $detail->prod_pic ?>" alt=""/>
                                            </li>
                                            <li data-thumb="<?php echo base_url() . $detail->prod_pic ?>">
                                                <img src="<?php echo base_url() . $detail->prod_pic ?>" alt=""/>
                                            </li>
                                            <li data-thumb="<?php echo base_url() . $detail->prod_pic ?>">
                                                <img src="<?php echo base_url() . $detail->prod_pic ?>" alt=""/>
                                            </li>
                                            <li data-thumb="<?php echo base_url() . $detail->prod_pic ?>">
                                                <img src="<?php echo base_url() . $detail->prod_pic ?>" alt=""/>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-details col-md-6">
                                        <h1><?php echo $detail->prod_name ?></h1>
                                        <div class="col-sm-6 price">
                                            <?php
                                            if ($detail->prod_price2 == "0") {
                                                echo '<label class="radio-inline mediums">';
                                                echo '<input type="radio" checked="checked" name="type" value="whole"> ₱' . $detail->prod_price . '';
                                                echo '<input type="hidden" name="value" value="'. $detail->prod_price .'"> ';
                                                echo '</label><br><br>';
                                            } else {
                                                echo '<label class="radio-inline mediums">';
                                                echo '<input type="radio" checked="checked" name="type" value="whole"> ₱' . $detail->prod_price . '- Whole';
                                                echo '</label><br><br>';
                                                echo '<label class="radio-inline mediums">';
                                                echo '<input type="radio" name="type" value="piece"> ₱' . $detail->prod_price2 . '- Slice';
                                                echo '<input type="hidden" name="value" value="'. $detail->prod_price2 .'"> ';
                                                echo '</label>';
                                            }
                                            ?>

                                            <br><br>
                                        </div>
                                        
                                        <p style="font-size: 18px;">
                                        <?php echo $detail->prod_desc ?>
                                        </p>
                                        <?php if($detail->quantity == "0"){
                                        echo '<input type="text" disabled name="quantity" min="1" max="100" value="1" class="qty" />&nbsp;';
                                        echo '<input type="button" disabled value="+" class="btn btn-default qtyplus" field="quantity" />';
                                        echo '<input type="button" disabled value="-" class="btn btn-default qtyminus" field="quantity" />';
                                        echo '<br><br>';
                                            echo '<button data-toggle="modal" data-target="#myModal" disabled class="btn btnred"><i class="fa fa-shopping-cart"></i> Add to Cart</button>';
                                        }
                                        else if($detail->quantity >= "1"){
                                            echo '<input type="text"  name="quantity" min="1" max="100" value="1" class="qty" />&nbsp;';
                                        echo '<input type="button"  value="+" class="btn btn-default qtyplus" field="quantity" />';
                                        echo "<input type='button'  value='-' class='btn btn-default qtyminus' field='quantity' />";
                                        echo '<br><br>';
                                            echo '<button data-toggle="modal" data-target="#myModal" class="btn btnred"><i class="fa fa-shopping-cart"></i> Add to Cart</button>';
                                        }
                                        ?>
                                        
                                        <br><br>
                                        <a href="<?php echo base_url() . 'Menu' ?>" class="btn btn-success"> Back to menu</a>

                                        <hr>
                                        <div class="availability">
                                            <p>
                                                Availability:
                                            </p><?php if($detail->quantity == "0"){
                                            echo '<span>Out of Stock</span>';
                                        }
                                        else if($detail->quantity >= "1"){
                                            echo '<span>available</span>';
                                        }
                                        ?>
                                            
                <!--                        <span>Available</span>-->
                                        </div>
                                    </div>

                                    <!-- End Single Product -->
                                </div>

                            <?php endforeach; ?>
                        </form>

                    </div>
                    <div class="col-md-3 shop-sidebar" style="margin-top: -25px">
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
                <h1>Customize your own Cupcake. Try it now</h1>
            </div>
        </div>
        <!--end-prize-->
        <!--footer-->
        <div class="full-footer">

            <!--end-addres-->
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
        <script src="<?php echo 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js' ?>"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url() . 'js/libs/jquery-1.7.min.js' ?>">\x3C/script>')</script>
        <script defer src="<?php echo base_url() . 'js/jquery.flexslider.js' ?>"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails",
                    start: function(slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
        <script>
            jQuery(document).ready(function() {
                // This button will increment the value
                $('.qtyplus').click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    fieldName = $(this).attr('field');
                    // Get its current value
                    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
                    // If is not undefined
                    if (!isNaN(currentVal)) {
                        // Increment
                        $('input[name=' + fieldName + ']').val(currentVal + 1);
                    } else {
                        // Otherwise put a 0 there
                        $('input[name=' + fieldName + ']').val(0);
                    }
                });
                // This button will decrement the value till 0
                $(".qtyminus").click(function(e) {
                    // Stop acting like a button
                    e.preventDefault();
                    // Get the field name
                    fieldName = $(this).attr('field');
                    // Get its current value
                    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
                    // If it isn't undefined or its greater than 0
                    if (!isNaN(currentVal) && currentVal > 1) {
                        // Decrement one
                        $('input[name=' + fieldName + ']').val(currentVal - 1);
                    } else {
                        // Otherwise put a 0 there
                        $('input[name=' + fieldName + ' disabled]').val(0);
                    }
                });
            });

        </script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/bootstrap.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/modernizr.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.nouislider.min.js' ?>"></script>
    </body>
</html>