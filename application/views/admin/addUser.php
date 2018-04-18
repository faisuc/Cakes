<?php $loa = $this->session->userdata('levelofaccess'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>Administrator Panel</title>

        <!-- Bootstrap core CSS -->
        <link href="<?php echo base_url('admin/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('admin/css/bootstrap-reset.css') ?>" rel="stylesheet">
        <!--external css-->
        <link href="<?php echo base_url('admin/assets/font-awesome/css/font-awesome.css') ?>" rel="stylesheet" />
        <link href="<?php echo base_url('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') ?>" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="stylesheet" href="<?php echo base_url('admin/css/owl.carousel.css') ?>" type="text/css">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('admin/css/style.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('admin/css/style-responsive.css') ?>" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>


        <?php foreach ($details as $detail): ?>
            <section id="container" >
                <!--header start-->
                <header class="header white-bg">
                    <div class="sidebar-toggle-box">
                        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Menu"></div>
                    </div>
                    <!--logo start-->
                    <a href="#" class="logo">Welcome, <span>Administrator</span></a>
                    <!--logo end-->
                    <div class="nav notify-row" id="top_menu">
                        <!--  notification start -->
                        <ul class="nav top-menu">
                            <!-- settings start -->
                            
                            <!-- inbox dropdown end -->
                            <!-- notification dropdown start-->
                            <li id="header_notification_bar" class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                                    <i class="fa fa-bell-o"></i>
                                    <span class="badge bg-warning">
                                        <?php
                                            $query = $this->db->query("SELECT COUNT(`id`) as `notifs` FROM `notifications` WHERE `read` = 'no'");
                                            $row = $query->row();
                                            echo $row->notifs;
                                        ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu extended notification">
                                    <div class="notify-arrow notify-arrow-yellow"></div>
                                    <li>
                                        <p class="yellow">You have <?php echo $row->notifs; ?> new notifications</p>
                                    </li>
                                    
                                    <?php
                                        if ($row->notifs > 0) {

                                            $query = $this->db->query("SELECT * FROM `notifications` WHERE `read` = 'no'");

                                            foreach ($query->result_array() as $row) {
                                    ?>
                                            <li>
                                                <a href="<?php echo base_url() . 'notification/' . $row['field'] . '/' . $row['notif_id'];?>">
                                                    <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                                                    <?php echo $row['notification']; ?>
                                                    <span class="small italic"><!--10 mins--></span>
                                                </a>
                                            </li>
                                    <?php
                                            }
                                        }
                                    ?>
                                </ul>
                            </li>
                            <!-- notification dropdown end -->
                        </ul>
                        <!--  notification end -->
                    </div>
                    <div class="top-nav ">
                        <!--search & user info start-->
                        <ul class="nav pull-right top-menu">
                            <li>
                                <input type="text" class="form-control search" placeholder="Search">
                            </li>
                            <!-- user login dropdown start-->
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <img alt="" src="img/avatar1_small.jpg">
                                    <span class="username"><?php echo $detail->fname . " " . $detail->lname; ?></span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <div class="log-arrow-up"></div>
                                    <li><a href="<?php echo base_url("AdminLogin"); ?>"><i class="fa fa-key"></i> Log Out</a></li>
                                </ul>
                            </li>
                            <!-- user login dropdown end -->
                        </ul>
                        <!--search & user info end-->
                    </div>
                </header>
                <!--header end-->
                <!--sidebar start-->
               <aside>
                    <div id="sidebar"  class="nav-collapse ">
                        <!-- sidebar menu start-->
                        <ul class="sidebar-menu" id="nav-accordion">
                            <li>
                                <a href="<?php echo base_url() . 'shop/indexAdmin' ?>">
                                    <i class="glyphicon glyphicon-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>

                            <li class="sub-menu">
                                <a class="active"href="javascript:;" >
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>Manage Users</span>
                                </a>
                                <ul class="sub">
                                    
                                    <li><a  href="<?php echo base_url() . 'shop/edituser' ?>">View/ Edit all users</a></li>
                                    <li class="active"><a  href="<?php echo base_url() . 'shop/adduser' ?>">Add user account</a></li>
                                    
                                </ul>
                            </li>

                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="glyphicon glyphicon-gift"></i>
                                    <span>Manage Products</span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="<?php echo base_url() . 'shop/addItem'?>">Add product</a></li>
                                    <li><a  href="<?php echo base_url() . 'shop/viewProd'?>">View products</a></li>
                                    <li><a  href="<?php echo base_url() . 'shop/editProd'?>">Update products</a></li>

                                </ul>
                            </li>

                            <li class="sub-menu">
                                <a  href="<?php echo base_url() . 'orderView'?>">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a  href="<?php echo base_url() . 'inventory'?>">
                                    <i class="glyphicon glyphicon-book"></i>
                                    <span>Inventory</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a  href="<?php echo base_url() . 'SalesReport'?>">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                    <span>Sales Report</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="fa fa-folder"></i>
                                    <span>Manage Content</span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="<?php echo base_url() . 'ManageContent/Home'?>">Home</a></li>
                                    <li><a  href="<?php echo base_url() . 'ManageContent/AboutUs'?>">About Us</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- sidebar menu end-->
                    </div>
                </aside>
                <!--sidebar end-->
                <!--main content start-->
          
            <section id="main-content">
                <section class="wrapper">
                    <?php
            if (validation_errors()) {
                echo '<div class="alert alert-warning alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
                      . form_error('fname', 'lname', 'email', 'gender', 'username', 'password') .'</div>';
            }
            
            ?>
                    <form action="<?php echo base_url() . 'shop/create_member2'; ?>" method="post" role="form">
                    <div class="form-group col-xs-4">
                        <h3>Personal Information</h3>
                        <input type="text" class="form-control" name="fname" placeholder="First Name"><br>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name"><br>
                        <input type="text" class="form-control" name="address" placeholder="Address"><br>
                        <input type="email" class="form-control" name="email" placeholder="Email Address"><br>
                        <label>Birthday</label>
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="date" class="form-control" name="date">
                        </div>
                    </div>
                        
                        <br>
                    <label>Gender</label><br>
                    <label class="radio-inline">
                        <input type="radio" checked="checked" name="gender" value="Male"> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="Female"> Female
                    </label><br><br>
                    <label>User Type</label>
                    <div class="row">
                        <div class="col-xs-6">
                            <select name="type" class="form-control col-xs-1">
                                <option value="2">Customer</option>
                                <option value="1">Administrator</option>
                                <option value="3">Staff</option>
                            </select> 
                        </div>
                    </div>
                    <br><br>

                    <button type="submit" class="btn btn-success">Add User</button>
                    <br><br><br><br>
                    </div>
                    <div class="form-group col-xs-4">
                        <h3>Login Information</h3>
                        <input type="text" class="form-control" name="username" placeholder="Username"><br>
                        <input type="password" class="form-control" name="password" placeholder="Password"><br><br>
                    </div>
                    </form>
                </section>
            </section>
            <?php endforeach;?>
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    2015 &copy; Techfour Catalyst Development Group.
                    <a href="#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url('admin/js/jquery.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/jquery-1.8.3.min.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/bootstrap.min.js') ?>"></script>
        <script class="include" type="text/javascript" src="<?php echo base_url('admin/js/jquery.dcjqaccordion.2.7.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/jquery.scrollTo.min.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/jquery.nicescroll.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('admin/js/jquery.sparkline.js') ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/owl.carousel.js') ?>" ></script>
        <script src="<?php echo base_url('admin/js/jquery.customSelect.min.js') ?>" ></script>
        <script src="<?php echo base_url('admin/js/respond.min.js') ?>" ></script>

        <!--common script for all pages-->
        <script src="<?php echo base_url('admin/js/common-scripts.js') ?>"></script>

        <!--script for this page-->
        <script src="<?php echo base_url('admin/js/sparkline-chart.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/easy-pie-chart.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/count.js') ?>"></script>

        <script>

            //owl carousel

            $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true,
                    autoPlay: true

                });
            });

            //custom select box

            $(function() {
                $('select.styled').customSelect();
            });

        </script>

    </body>
</html>
