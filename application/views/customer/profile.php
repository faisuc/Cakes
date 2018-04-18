<html lang="en" class=" js rgba boxshadow csstransitions"><head>
        <meta charset="utf-8">
        <title>Profile | Dorissimo</title>
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
            <!-- shop-page -->
            <div class="container checking-area">

                <div class="row">
                    <div class="col-md-12 checkout-accordion">
                        <div class="col-md-12 white-bg">

                            <div class="">

                                <div class="">
                                    <div class="panel-group" id="accordion">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a ><center>Account Information</center></a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse in panel-body">
                                                <div class="panel-body pb2">
                                                    <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                                        <section id="about-us">
                                                            <div class="container">

                                                                <div class="team">
                                                                    <div class="row clearfix">
                                                                        <div class="col-md-12 col-sm-3">	
                                                                            <div class="single-profile-bottom wow fadeInDown">
                                                                                <div class="media">
                                                                                    <div class="pull-left">
                                                                                        
                                                                                        <?php if($detail->gender == "Male"){
                                                                                            echo '<img class="media-object" src="'. base_url() . 'images/member2.jpg' .'">';
                                                                                        }
                                                                                        else  if($detail->gender == "Female"){
                                                                                            echo '<img class="media-object" src="'. base_url() . 'images/member3.jpg' .'">';
                                                                                        }?>
<!--                                                                                        <a href="#"><img class="media-object" src="<?php //echo base_url() . 'images/member2.jpg' ?>" alt=""></a>-->
                                                                                    </div>
                                                                                    <div class="verticalLine">
                                                                                        <font style="color: #666; font-size: 23px;">Personal Information</font><br><br>
                                                                                        <i class="fa fa-home"></i>&nbsp;&nbsp;Lives in <?php echo $detail->address ?><br><br>
                                                                                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;Email: <?php echo $detail->email ?><br><br>
                                                                                        <i class="fa fa-gift"></i>&nbsp;&nbsp;Birthday: <?php $bday = $detail->birthday;
                    echo date("F d, Y", strtotime($bday));
                        ?><br><br>
                                                                                        <i class="fa fa-mobile"></i>&nbsp;&nbsp;Mobile Number: <?=$detail->mobile?><BR><BR>
                                                                                        <button class="btn btnred" style="margin-top: 5px;"><i class="fa fa-user"></i>  <a class="aa" href="<?php echo base_url() . 'shop/editprof/' . $detail->id ?>">Update Info</a></button>
                                                                                    </div><br><br>
                                                                                </div><!--/.media -->
                                                                                <font style="color: #666; font-size: 23px;"><?php echo $detail->fname . " " . $detail->lname; ?></font>
                                                                                <h5><?php
                                                                                    $type1 = $detail->type;
                                                                                    if ($type1 == "1") {
                                                                                        $type2 = "administrator";
                                                                                    } else if ($type1 == "2") {
                                                                                        $type2 = "Customer";
                                                                                    }
                                                                                    echo $type2;
                                                                                    ?></h5><br>
                                                                                <ul class="tag clearfix">
                                                                                    <button class="btn btn-info" style="margin-top: 5px;"><i class="fa fa-shopping-cart"></i>  <a href="<?php echo base_url() . 'shop/cartView2'; ?>">View Cart</a></button>&nbsp;&nbsp;&nbsp;&nbsp;

                                                                                </ul>   


                                                                            </div>



                                                                        </div><!--/.col-lg-4 -->

                                                                    </div> <!--/.row -->
                                                                </div><!--section-->
                                                            </div><!--/.container-->
                                                        </section><!--/about-us-->
                                                    </div>
                                                </div>
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

        <div class="container checking-area2">

            <div class="row">
                <div class="col-md-12 checkout-accordion">
                    <div class="col-md-12 white-bg">

                        <div class="">

                            <div class="">
                                <div class="" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a ><center>ORDER status</center></a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse collapse in">
                                            <div class="panel-body pb2">
                                                <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                                    <section id="about-us">
                                                        <div class="container">
                                                            <table class="table cart-table responsive-table">
                <tr>
                    <th>
                         ORDER NO.
                    </th>
                    <th>
                         Description
                    </th>
                    <th>
                         Quantity
                    </th>`
                    <th>
                         TOTAL
                    </th>
                    <th>
                         TYPE
                    </th>
                    <th>
                         STATUS
                    </th>
                    <th>
                         
                    </th>
                </tr>

                <?php foreach ($orders as $order): 
                    $query = $this->db->query("SELECT * FROM `cart` WHERE `product_id2` = " . $order->product_id2);
                    $row = $query->row();
                ?>
                    <tr>
                        <td><?=$order->order_id2?></td>
                         <td><?=$order->prod_name?></td>
                          <td><?=$order->qty2?></td>
                           <td><?=$order->total2?></td>
                            <td><?=$order->type2?></td>
                            <td><?=$order->status2?></td>
                             <td>&nbsp;</td>
                    </tr>
                <?php endforeach; ?>
                
                </table>
                                                        </div><!--/.container-->
                                                    </section><!--/about-us-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>                
        </div>


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