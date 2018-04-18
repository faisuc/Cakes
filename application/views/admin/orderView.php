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
                                                <a href="<?php echo base_url() . 'notification/' . $row['field'] . '/' . $row['notif_id']; ?>">
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
                                <a href="<?php echo base_url() . 'AdminPage' ?>">
                                    <i class="glyphicon glyphicon-home"></i>
                                    <span>Home</span>
                                </a>
                            </li>

                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span>Manage Users</span>
                                </a>
                                <ul class="sub">

                                    <li><a  href="<?php echo base_url() . 'shop/edituser' ?>">View/ Edit all users</a></li>
                                    <li><a  href="<?php echo base_url() . 'shop/adduser' ?>">Add user account</a></li>

                                </ul>
                            </li>

                            <li class="sub-menu">
                                <a href="javascript:;" >
                                    <i class="glyphicon glyphicon-gift"></i>
                                    <span>Manage Products</span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="<?php echo base_url() . 'shop/addItem' ?>">Add product</a></li>
                                    <li><a  href="<?php echo base_url() . 'shop/viewProd' ?>">View products</a></li>
                                    <li><a  href="<?php echo base_url() . 'shop/editProd' ?>">Update products</a></li>

                                </ul>
                            </li>

                            <li class="sub-menu">
                                <a class="active" href="<?php echo base_url() . 'orderView' ?>">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Orders</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a  href="<?php echo base_url() . 'inventory' ?>">
                                    <i class="glyphicon glyphicon-book"></i>
                                    <span>Inventory</span>
                                </a>
                            </li>
                            <li class="sub-menu">
                                <a  href="<?php echo base_url() . 'SalesReport' ?>">
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
                                    <li><a  href="<?php echo base_url() . 'ManageContent/Home' ?>">Home</a></li>
                                    <li><a  href="<?php echo base_url() . 'ManageContent/AboutUs' ?>">About Us</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- sidebar menu end-->
                    </div>
                </aside>
                <!--sidebar end-->
                <!--main content start-->

                <!--sidebar end-->
            <?php endforeach; ?>
            <section id="main-content">
                <section class="wrapper">
                    <!--state overview start-->

                    <div class="row">
                        <div class="col-lg-12">
                            <section class="panel">
                                <header class="panel-heading">
                                    <a href="<?php echo base_url(); ?>orderView">List of all Pending Orders</a> | <a href="<?php echo base_url(); ?>shop/orderView/approved">List of all Approved Orders</a> | <a href="<?php echo base_url(); ?>shop/orderView/declined">List of all Declined Orders</a>
                                </header>
                                <div class="panel-body">
                                    <div class="adv-table">
                                        <table class="display table table-bordered table-striped" id="example">
                                            <thead>
                                                <tr>
                                                    <th>Customer Name</th>
                                                    <th>Order #</th>
                                                    <th>Transaction #</th>
                                                    <th>Method</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($orders as $order):
                                                    $userid = $order->user_id2;
                                                    $query = $this->db->query("SELECT * FROM `users` WHERE `id` = $userid LIMIT 1");
                                                    $row = $query->row();
                                                    $fullname = $row->fname . " " . $row->lname;

                                                    $orderid = $order->order_id2;
                                                    $query2 = $this->db->query("SELECT * FROM `order2` WHERE `order2_id` = $orderid LIMIT 1");
                                                    $row2 = $query2->row();
                                                    ?>
                                                    <tr class="gradeC">
                                                        <td><?php echo $fullname; ?></td>
                                                        <td><?php echo $order->order_id2; ?></td>
                                                        <td><?php echo ucfirst($row2->trans_no); ?></td>
                                                        <td><?php echo ucfirst($row2->method); ?></td>
                                                        <td>
                                                            <?php
                                                            if ($order->status2 == "pending") {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>shop/acceptorder/<?php echo $order->order_id2; ?>" class="btn btn-success">ACCEPT</a>
                                                                <a href="<?php echo base_url(); ?>shop/declineorder/<?php echo $order->order_id2; ?>" class="btn btn-danger">DECLINE</a>
                                                                <a data-toggle="modal" data-target="<?php echo '#modal' . $orderid ?>" class="btn btn-info">DETAILS</a>
                                                                <?php
                                                            } else if ($order->status2 == "approved") {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>shop/pendingorder/<?php echo $order->order_id2; ?>" class="btn btn-warning">PENDING</a>
                                                                <a href="<?php echo base_url(); ?>shop/declineorder/<?php echo $order->order_id2; ?>" class="btn btn-danger">DECLINE</a>
                                                                <a data-toggle="modal" data-target="<?php echo '#modal' . $orderid ?>" class="btn btn-info">DETAILS</a>
                                                                <?php
                                                            } else if ($order->status2 == "declined") {
                                                                ?>
                                                                <a href="<?php echo base_url(); ?>shop/acceptorder/<?php echo $order->order_id2; ?>" class="btn btn-success">APPROVE</a>
                                                                <a href="<?php echo base_url(); ?>shop/pendingorder/<?php echo $order->order_id2; ?>" class="btn btn-warning">PENDING</a>
                                                                <a data-toggle="modal" data-target="<?php echo '#modal' . $orderid ?>" class="btn btn-info">DETAILS</a>
                                                                <?php
                                                            }
                                                            ?>


                                                        </td>
                                                    </tr>
                                                </tbody>
                                                <?php
                                                echo '<div class="modal fade" id="modal' . $orderid . '" >';
                                                echo '<div class="modal-dialog modal-lg">';
                                                echo '<div class="modal-content panel-info">';
                                                echo '<div class="modal-header panel-heading">';
                                                echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                                                echo '<h4 class="modal-title">Order Details</h4>';
                                                echo '</div>';
                                                echo '<div class="modal-body">';
                                                echo '<b>Customer Name:</b> ' .$fullname . '<br><br>';
                                                echo '<b>Order Type:</b> ' .ucfirst($row2->method) . '<br><br>';
                                                echo '<b>Order Number:</b> ' .$order->order_id2 . '<br><br>';
                                                echo '<b>Transaction Number:</b> ' .ucfirst($row2->trans_no) . '<br><br>';
                                                echo '<b>Contact Number:</b> ' .ucfirst($row2->mobile) . '<br><br>';
                                                echo '<b>Address:</b> ' .ucfirst($row2->address) . '<br><br>';
                                                echo '</div>';
                                                echo '<div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal">Close</button>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                echo '</div>';
                                                ?>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </section>


                        </div>

                    </div>
                </section>
            </section>



        </section>
        <br><br><br><br><br><br>
        <!--main content end-->
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
    <script type="text/javascript">
        function countUp(count)
        {
            var div_by = 10,
                    speed = Math.round(count / 20),
                    $display = $('.count'),
                    run_count = 1,
                    int_speed = 60;

            var int = setInterval(function() {
                if (run_count < div_by) {
                    $display.text(speed * run_count);
                    run_count++;
                } else if (parseInt($display.text()) < count) {
                    var curr_count = parseInt($display.text()) + 1;
                    $display.text(curr_count);
                } else {
                    clearInterval(int);
                }
            }, int_speed);
        }

        countUp(<?php echo $res ?>);
    </script> 
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
