$this->uri->segment(4)
            <section id="main-content">
                <section class="wrapper">
                    <!--state overview start-->
                    

                    <div class="row">
                            <div class="col-lg-12">
                                <section class="panel">
                                    <header class="panel-heading">
                                        <a href="<?php echo base_url(); ?>orderView">List of all Pending Orders</a> | <a href="<?php echo base_url(); ?>shop/orderView/approve">List of all Approved Orders</a> | <a href="<?php echo base_url(); ?>shop/orderView/declined">List of all Declined Orders</a>
                                    </header>
                                    <div class="panel-body">
                                        <div class="adv-table">
                                            <table  class="display table table-bordered table-striped" id="example">
                                                <thead>
                                                    <tr>
                                                        <th>Customer Name</th>
                                                        <th>Order #</th>
                                                        <th>Method</th>
                                                        <th>Action</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($orders as $order): 

                                                        $userid = $order->user_id;
                                                        $query = $this->db->query("SELECT * FROM `users` WHERE `id` = $userid LIMIT 1");
                                                        $row = $query->row();
                                                        $fullname = $row->fname . " " . $row->lname;

                                                        $orderid = $order->order_id;
                                                        $query2 = $this->db->query("SELECT * FROM `order2` WHERE `order2_id` = $orderid LIMIT 1");
                                                        $row2 = $query2->row();
                                                    ?>
                                                        <tr class="gradeC">

                                                            <td><?php echo $fullname; ?></td>
                                                            <td><?php echo $order->order_id; ?></td>
                                                            <td><?php echo ucfirst($row2->method); ?></td>
                                                            <td>
                                                            <?php
                                                                if ($order->status == "pending") {
                                                            ?>
                                                            <a href="<?php echo base_url();?>shop/acceptorder/<?php echo $order->order_id; ?>" class="btn btn-success">ACCEPT</a> <a href="<?php echo base_url();?>shop/declineorder/<?php echo $order->order_id; ?>" class="btn btn-success">DECLINE</a>
                                                            <?php
                                                                } else if ($order->status == "approve") {
                                                            ?>
                                                                    <a href="<?php echo base_url();?>shop/pendingorder/<?php echo $order->order_id; ?>" class="btn btn-success">PENDING</a> <a href="<?php echo base_url();?>shop/declineorder/<?php echo $order->order_id; ?>" class="btn btn-success">DECLINE</a>
                                                            <?php
                                                                } else if ($order->status == "declined") {
                                                            ?>
                                                                    <a href="<?php echo base_url();?>shop/acceptorder/<?php echo $order->order_id; ?>" class="btn btn-success">APPROVED</a> <a href="<?php echo base_url();?>shop/pendingorder/<?php echo $order->order_id; ?>" class="btn btn-success">PENDING</a>
                                                            <?php
                                                                }
                                                            ?>


                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                    
                                                    
                                                <?php endforeach; ?>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>



                </section>
            </section><br><br><br><br><br><br>
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

            countUp(<?php echo $res?>);
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
