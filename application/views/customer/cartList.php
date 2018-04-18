<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>delicio</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/bootstrap.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.css' ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/responsive.css' ?>" type="text/css" media="screen"/>
        <link href='<?php echo "http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800" ?>' rel='stylesheet' type='text/css'>
        <link href='<?php echo "http://fonts.googleapis.com/css?family=Lobster" ?> 'rel='stylesheet' type='text/css'>
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
                                <li class="active"><a href="<?php echo base_url() . 'Menu' ?>"><font style="color: #fff; font-size: 16px;">Menu</font></a></li>
                                <li><a href="<?php echo base_url() . 'Contacts' ?>"><font style="color: #fff; font-size: 16px;">Contacts</font></a></li>

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
            <div class="container checking-area">
                <div class="row">
                    <div class="col-lg-15 cart-area">
                        <form action='<?php echo base_url() . 'Payment' ?>' method="post">
                            <div class="sixteen columns cart-section oflow">
                                <!-- Cart -->
                                <table class="table cart-table responsive-table">
                                    <tr>
                                        <th>
                                            Item No.
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

                                        </th>
                                        <th>

                                        </th>
                                        <th>
                                            Total
                                        </th>
                                    </tr>
                                    <!-- Item #2 -->
                                    <?php foreach ($orders as $order): ?>
                                        <tr>

                                            <td>
                                                <?php echo $order->prod_id ?>
                                            </td>
                                            <td class="cart-title">
                                                <?php echo $order->prod_name ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($order->type2 == "whole") {
                                                    echo $order->prod_price;
                                                } else if ($order->type2 == "piece") {
                                                    echo $order->prod_price2;
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <input type="number" name="quant" min="0" max="100" value="<?php echo $order->qty2 ?>" class="qty" />&nbsp;

                                            </td>

                                        <div class="modal fade" id="<?php echo 'modal' . $order->prod_id . '' ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel"><?php echo $order->prod_name ?></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="<?php echo base_url() . $order->prod_pic ?>">
                                                    </div>
                                                    <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <td><a data-toggle="modal" data-target="<?php echo '#modal' . $order->prod_id ?>"><i class="fa fa-eye"></i> View Image</a></td>
                                        <td><a href="<?php echo base_url() . 'shop/deleteOrder/' . $order->order_id2 . '' ?>"><i class="fa fa-times"></i> REMOVE</a></td>
                                        <td class="cart-total">
                                            <?php
                                            if ($order->type2 == "piece") {
                                                $total = $order->prod_price2 * $order->qty2;
                                                echo '₱' . number_format($total, 2);
                                            } else if ($order->type2 == "whole") {
                                                $total = $order->prod_price * $order->qty2;
                                                echo '₱' . number_format($total, 2);
                                            }
                                            ?>
                                        </td>
                                        </tr>
                                        <input type="hidden" name="prodid_" value="<?php echo $order->prod_id ?>">;
                                        <input type="hidden" name="userid_" value="<?php echo $order->user_id2 ?>">;
                                    <?php endforeach; ?>       
                                </table>
                                <p class="phhh">TOTAL: <?php
                                    $this->db->select('SUM(total2) as tot');
                                    $this->db->where('user_id2', $detail->id);
                                     $this->db->where('status2', 'cart');
                                    $q = $this->db->get('cart');
                                    $row = $q->row();
                                    $sum = $row->tot;
                                    echo '₱' . number_format($sum, 2);
                                    ?></p>
                            </div>

                            <div class="taxat">
                                <div class="col-md-6 taxes nopadding">
                                    <a href="<?php echo base_url() . 'Menu' ?>" class="backnext btn btn-success">Back</a>
                                    <button type="submit" class="backnext2 btn btn-default">Proceed to Payment</button>                        
                                </div>
                            </div>

                        </form>
                    <?php endforeach; ?>
                </div>
                <!-- Sidebar -->

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
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/jquery.nouislider.min.js"></script>
    </body>
</html>