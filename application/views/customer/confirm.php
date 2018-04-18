<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Payment | Dorissimo</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/bootstrap.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.css' ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/responsive.css' ?>" type="text/css" media="screen"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800"  rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Lobster" rel='stylesheet' type='text/css'>
    </head>
    <body>

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
                                <li><a href="<?php echo base_url() . 'Contacts' ?>"><font style="color: #fff; font-size: 16px;">Contacts</font></a></li>

                                <li class="dropdown active">
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
            <div class="container checking-area">
                <div class="row">
                    <div class="col-md-9 checkout-accordion">
                        <div class="col-md-12 white-bg">
                            <div class="bs-example">
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">1. Billing Information</a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse">
                                            <div class="panel-body pb2">
                                                <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                                    <div class="col-lg-10 check-name">
                                                        <div>
                                                            <form action="Shipping_Information" method="post" >
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        Full Name<br><br>
                                                                        <input type="text" name="fullname" class="form-control" value="<?php echo $detail->lname . ', ' . $detail->fname; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <br><br>Email Address<br><br>
                                                                        <input type="text"  class="form-control" value="<?php echo $detail->email; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <br><br>Billing Address<br><br>
                                                                        <input name="billaddress" type="text"  class="form-control" value="<?php echo $detail->address ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <div class="col-sm-12">
                                                                        <br><br>Contact Number<br><br>
                                                                        <input type="text"  class="form-control" value="<?php echo $detail->mobile; ?>">
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="marginn btn btn-success"><i class="fa fa-arrow-right"></i> Next</button>
                                                           
                                                            </form>
                                                            <br><br>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                     <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">2. Shipping Information</a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body pb2">
                                                <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                                    <div class="col-lg-10 check-name">
                                                        <div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" value="option1" checked="">
                                                                    My Billing and Shipping Addresses are the same </label><br><br>
                                                                <input type="text" class="form-control" value="<?php echo $detail->address; ?>">
                                                            </div>
                                                            <div class="radio">
                                                                <label>
                                                                    <input type="radio" name="optionsRadios" value="option1">
                                                                    Use Another Address </label><br><br>
                                                                <input type="text" class="form-control" placeholder="Shipping Address">
                                                            </div>

                                                            <form action="Billing_Information">
                                                                <button class="btn btn-warning"><i class="fa fa-arrow-left"></i> Back</button>
                                                            </form>
                                                            <form class="backnext"action="Shipping_Information">
                                                                <button class="btn btn-success"><i class="fa fa-arrow-right"></i> Next</button>
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">3. Payment Method</a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                                    <p>
                                                        Please select the preferred payment method to use on this order.
                                                    </p>
                                                    <div>
                                                        <div class="radio">
                                                            <label>
                                                                <input id="paypal" type="radio" name="optionsRadios" onChange="disablefield();" value="option1" checked="">
                                                                Paypal </label><br><br>
                                                            <input name="emailadd" id="eadd" type="email" class="form-control" placeholder="Email"><br>
                                                            <input name="passwor" id="passw" type="password" class="form-control" placeholder="Password"><br>
                                                            <button name="loginn" id="loginn"class="btn btn-info">Login</button>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input id="bank" type="radio" name="optionsRadios" onChange="disablefield();" value="option1">
                                                                Bank to Bank </label><br><br>
                                                            <br>
                                                            Bank Type<br><br>
                                                            <select disabled = 'disabled' name="selectt" id="select" class="form-control">
                                                                <option></option>
                                                                <option disabled>-----------</option>
                                                                <option>BPI</option>
                                                                <option>BDO</option>
                                                                <option>Land Bank</option>
                                                            </select><br>
                                                            Upload Image of Transaction<br><br>
                                                            <input disabled = 'disabled' name="selectt" id="upload" type="file" class="form-control" name="userfile"><br>
                                                            <br>
                                                            or
                                                            <br><br>
                                                            <input disabled = 'disabled' name="trans" id="transaction" type="text" placeholder="Enter Transaction number" class="form-control"/>
                                                        </div>
                                                        <form action="Shipping_Information">
                                                            <button class="btn btn-warning"><i class="fa fa-arrow-left"></i> Back</button>
                                                        </form>
                                                        <form class="backnext"action="Confirm_Order">
                                                            <button class="btn btn-success"><i class="fa fa-arrow-right"></i> Next</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">4. Confirm Order</a>
                                            </h4>
                                        </div>
                                        <div id="collapseSix" class="panel-collapse collapse in panel-body">
                                            <div class="col-md-12 checkout-cart">
                                                <div class="sixteen columns">
                                                    <!-- Cart -->
                                                    <table class="table cart-table responsive-table">
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    Item
                                                                </th>
                                                                <th>
                                                                    Description
                                                                </th>
                                                                <th>
                                                                    Price
                                                                </th>
                                                                <th>
                                                                    Quantity
                                                                </th>
                                                                <th>
                                                                    Total
                                                                </th>
                                                                <th>
                                                                </th>
                                                            </tr>
                                                            <!-- Item #3 -->
                                                            <?php foreach ($orders as $order): ?>
                                                                <tr>

                                                                    <td>
                                                                        <img src="<?php echo base_url() . 'images/product2-small.jpg' ?> " alt=""/>
                                                                    </td>
                                                                    <td class="cart-title">
                                                                        <?php echo $order->prod_name ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if ($order->type == "whole") {
                                                                            echo $order->prod_price;
                                                                        } else if ($order->type == "piece") {
                                                                            echo $order->prod_price2;
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <form action='#'>
                                                                            <div class="qtyminus">
                                                                            </div>
                                                                            <input type='text' name="quantity" value='<?php echo $order->qty ?>' class="qty"/><br>
                                                                            <div class="qtyplus">
                                                                            </div>
                                                                        </form>
                                                                    </td>
                                                                    <td class="cart-total">
                                                                        <?php
                                                                        if ($order->type == "piece") {
                                                                            echo $total = $order->prod_price2 * $order->qty;
                                                                        } else if ($order->type == "whole") {
                                                                            echo $total = $order->prod_price * $order->qty;
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td><a href="<?php echo base_url() . 'shop/deleteOrder3/' . $order->order_id . '' ?>"><i class="fa fa-times"></i> REMOVE</a></td>
                                                                </tr>
                                                            <?php endforeach; ?>                                
                                                        </tbody>
                                                    </table><br><br>
                                                </div>
                                                <div class="taxat">
                                                    <div class="col-md-18 taxes nopadding">
                                                        <ul>
                                                            <br><br>
                                                            <div class="col-lg-10 cart-totals" style="margin-top: -10px; margin-left: -14px;">
                                                                <table class="table cart-table test">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>
                                                                                Account Information
                                                                            </th>
                                                                            <td style="width: 500px; height: auto;">
                                                                                Name: <?php echo $_POST['fullname'];?><br>
                                                                                Email: Email<br>
                                                                                Contact Number: 00000000
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th style="width: 450px; height: auto;">
                                                                                Billing &amp; Shipping Information
                                                                            </th>
                                                                            <td>
                                                                                Billing Address: Address
                                                                                Shipping Address: Address
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>
                                                                                Order Total
                                                                            </th>
                                                                            <td>
                                                                                <strong>$178.00</strong>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <form action="Payment_Method">
                                                                    <button class="btn btn-default"><i class="fa fa-arrow-left"></i> Back</button>
                                                                </form>
                                                                <form class="backnext" action="Payment_Method">
                                                                    <button class="btn btnred"><i class="fa fa-gift"></i> Checkout</button>
                                                                </form>
                                                            </div>
                                                        </ul>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                
            </div>
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
            <div class="container-full">
                <div class="container info">
                    <div class="row">
                        <div class="col-md-4 addres">
                            <img src="images/footer-logo.png" alt="logo">
                            <h6>Delicio Webshop,LLC</h6>
                            <p>
                                South Washington Street 828,Washington,USA
                            </p>
                            <p>
                                Phone 0123 456 789/0123 456 788
                            </p>
                        </div>
                        <div class="col-md-2 account">
                            <h4>my Account</h4>
                            <ul>
                                <li><a href="#">cart</a></li>
                                <li><a href="#">checkout</a></li>
                                <li><a href="#">my accout</a></li>
                            </ul>
                        </div>
                        <div class="col-md-2 assistance">
                            <h4>Informations</h4>
                            <ul>
                                <li><a href="#">costumer assistance</a></li>
                                <li><a href="#">delivery informations</a></li>
                                <li><a href="#">international shipping</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 about">
                            <h4>about us</h4>
                            <p>
                                Lorem ipsum dolor sit amet,consectetur adipiscing elit. in non vestibulum massa,sit amet bibendum eros. in accumsan dignissin.lorem ipsum dolor sit amet vestibulum massa,sit amet bibendum eros. in accumsan dignissin.lorem ipsum dolor sit amet
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-addres-->
            <div class="container">
                <div class="row bottom-strip">
                    <div class="col-md-6 rights">
                        <p>
                            Delicio Webshop-Responsive themeforest theme 2014
                        </p>
                    </div>
                    <div class="col-md-6 social">
                        <ul>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-asterisk"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--end-footer-->
        <script src="<?php echo base_url() . 'js/jquery-1.11.0.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/lightbox.js' ?>"></script>
        <script>
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-2196019-1']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>

        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/bootstrap.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/modernizr.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.nouislider.min.js' ?>"></script>
    </body>
</html>