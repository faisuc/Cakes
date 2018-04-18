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
                                <a class="active"href="javascript:;" >
                                    <i class="glyphicon glyphicon-gift"></i>
                                    <span>Manage Products</span>
                                </a>
                                <ul class="sub">
                                    <li><a  href="<?php echo base_url() . 'shop/addItem'?>">Add product</a></li>
                                    <li class="active" ><a  href="<?php echo base_url() . 'shop/viewProd'?>">View products</a></li>
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
          
                <!--sidebar end-->
                <section id="main-content">
                    <section class="wrapper site-min-height">
                        <!-- page start-->
                        <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <h4>List of all Products</h4>
                                    </header>
                                    <div class="panel-body">
                                        <div class="adv-table">
                                            <table  class="display table table-bordered table-striped" id="example">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Description</th>
                                                        <th>Date</th>
                                                        <th>Price(Whole)</th>
                                                        <th>Price(Piece)</th>
                                                        <th>Stocks</th>
                                                        <th>Category</th>
                                                        <th>Image</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($products as $product): ?>
                                                        <tr class="gradeC">

                                                            <td><?php echo $product->prod_name; ?></td>
                                                            <td><?php echo $product->prod_desc; ?></td>
                                                            <td><?php echo $product->prod_date; ?></td>
                                                            <td><?php echo $product->prod_price; ?></td>
                                                            <td><?php echo $product->prod_price2; ?></td>
                                                            <td><?php echo $product->quantity; ?></td>
                                                            <td><?php echo $product->category; ?></td>
                                                            <td class="centex hidden-phone"><a href="#" data-toggle="modal" data-target="<?php echo '#modal' . $product->prod_id ?>">View Image</a></td>
                                                        </tr>
                                                    </tbody>
                                                    
                                                    <?php
                                                    echo '<div class="modal fade" id="modal' . $product->prod_id . '" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
                                                    echo '<div class="modal-dialog modal-lg">';
                                                    echo '<div class="modal-content">';
                                                    echo '<div class="modal-header">';
                                                    echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                                                    echo '<h4 class="modal-title" id="myModalLabel">' . $product->prod_name . '</h4>';
                                                    echo '</div>';
                                                    echo '<div class="modal-body">';
                                                    echo '<img src="' . base_url($product->prod_pic) . '">';
                                                    echo '</div>';
                                                    echo '<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
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
                        <!-- page end-->
                    </section>
                </section><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                <!--footer start-->
            <?php endforeach ?>
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
        <script type="text/javascript" language="javascript" src="<?php echo base_url('admin/assets/advanced-datatable/media/js/jquery.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/bootstrap.min.js') ?>"></script>
        <script class="include" type="text/javascript" src="<?php echo base_url('admin/js/jquery.dcjqaccordion.2.7.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/jquery.scrollTo.min.js') ?>"></script>
        <script src="<?php echo base_url('admin/js/jquery.nicescroll.js') ?>" type="text/javascript"></script>
        <script type="text/javascript" language="javascript" src="<?php echo base_url('admin/assets/advanced-datatable/media/js/jquery.dataTables.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('admin/assets/data-tables/DT_bootstrap.js') ?>"></script>


<!--        <script src="<?php //echo base_url('admin/js/jquery.js')   ?>"></script>
<script src="<?php //echo base_url('admin/js/jquery-1.8.3.min.js')   ?>"></script>







<script src="<?php //echo base_url('admin/js/jquery.sparkline.js')   ?>" type="text/javascript"></script>
<script src="<?php //echo base_url('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')   ?>"></script>
<script src="<?php //echo base_url('admin/js/owl.carousel.js')   ?>" ></script>
<script src="<?php //echo base_url('admin/js/jquery.customSelect.min.js')   ?>" ></script>
<script src="<?php //echo base_url('admin/js/respond.min.js')   ?>" ></script>-->

        <!--common script for all pages-->
        <script src="<?php echo base_url('admin/js/common-scripts.js') ?>"></script>

        <!--script for this page-->
<!--        <script src="<?php //echo base_url('admin/js/sparkline-chart.js')   ?>"></script>
        <script src="<?php //echo base_url('admin/js/easy-pie-chart.js')   ?>"></script>
        <script src="<?php //echo base_url('admin/js/count.js')   ?>"></script>-->



        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                $('#example').dataTable({
                    "aaSorting": [[4, "desc"]]
                });
            });
        </script>

    </body>
</html>
