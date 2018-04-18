<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Signup! | Dorissimo</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/bootstrap.css' ?>" media="screen">
        <?php echo link_tag("css/bootstrap-datetimepicker.css") ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css' ?>" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.css' ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/flexslider.css" type="text/css' ?>" media="screen">
        <link rel="stylesheet" href="<?php echo base_url() . 'css/responsive.css' ?>" type="text/css" media="screen">
        <link href='<?php echo "http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800" ?>' rel='stylesheet' type='text/css'>
        <link href='<?php echo "http://fonts.googleapis.com/css?family=Lobster" ?> 'rel='stylesheet' type='text/css'>
    </head>
    <style>
        .error_msg{
            background-color : #ff0042; 

        }
    </style>
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
                            <li><a href="<?php echo base_url() . 'menu' ?>"><font style="color: #fff; font-size: 16px;">Menu</font></a></li>
                            <li><a href="<?php echo base_url() . 'contacts' ?>"><font style="color: #fff; font-size: 16px;">Contacts</font></a></li>
                            <li class="active"><a href="<?php echo base_url() . 'login' ?>"><font style="color: #fff; font-size: 16px;">Login | Register</font></a></li>
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
                <div class="col-md-12 checkout-accordion">
                    <div class="col-md-12 white-bg">
                        <div class="panel-body">

                            <div class="">
                                <div class="panel-group" id="accordion">
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="<?php echo base_url() . 'login'?>">Login</a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">

                                            </div>
                                        </div>
                                    </div>   
                                    
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Register Here</a>
                                            </h4>
                                        </div>

                                        <div id="collapseTwo" class="panel-collapse collapse in panel-body">
                                            <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                                <form action="<?php echo base_url() . 'shop/register'; ?>" method="post" class="form-horizontal" role="form">
                                                    <?php if (validation_errors()): ?>
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                            <?php echo validation_errors(); ?>
                                                        </div>
                                                    <?php endif; ?> 
                                                    <div class="form-group">
                                                        <br><br>
                                                        <label class="col-sm-2 control-label">First Name</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" placeholder="Enter First Name" name="fname" value="<?php echo set_value('fname'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Last Name</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" placeholder="Enter Last Name" name="lname" value="<?php echo set_value('lname'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Email Address</label>
                                                        <div class="col-sm-6">
                                                            <input type="email" class="form-control" placeholder="Enter Email Address" name="email" value="<?php echo set_value('email'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Home Address</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" placeholder="Enter Address" name="address" value="<?php echo set_value('address'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Birthday</label>
                                                        <div class="col-sm-6">
                                                            <input type="date" class="form-control" name="birthday" value="<?php echo set_value('birthday'); ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Mobile Number</label>
                                                        <div class="col-sm-6">
                                                            <input type="number" class="form-control" placeholder="(e.g. 0926567891011)" name="mobileno" value="<?php echo set_value('mobileno'); ?>">
                                                        </div>
                                                    </div>

                                                    <!--                                                        <div class="col-sm-2">
                                                                                                                <select name="mm" class="form-control">
                                                                                                                    <option>MM</option>
                                                                                                                    <option disabled>---------</option>
                                                                                                                    <option value="1">January</option>
                                                                                                                    <option value="2">February</option>
                                                                                                                    <option value="3">March</option>
                                                                                                                    <option value="4">April</option>
                                                                                                                    <option value="5">May</option>
                                                                                                                    <option value="6">June</option>
                                                                                                                    <option value="7">July</option>
                                                                                                                    <option value="8">August</option>
                                                                                                                    <option value="9">September</option>
                                                                                                                    <option value="10">October</option>
                                                                                                                    <option value="11">November</option>
                                                                                                                    <option value="12">December</option>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <div class="col-xs-2">
                                                                                                                <select name="dd" class="form-control">
                                                                                                                    <option>DD</option>
                                                                                                                    <option disabled>---------</option>
                                                    <?php
//                                                                for ($i = 1; $i <= 31; $i++) {
//                                                                    echo '<option value="$i">' . $i . "</option>";
//                                                                }
                                                    ?>
                                                                                                                </select>
                                                                                                            </div>
                                                                                                            <div class="col-xs-2">
                                                                                                                <select name="yy" class="form-control">
                                                                                                                    <option>YY</option>
                                                                                                                    <option disabled>---------</option>
                                                    <?php
//                                                                for ($i = 1980; $i <= 2015; $i++) {
//                                                                    echo '<option value="$i">' . $i . "</option>";
//                                                                }
                                                    ?>
                                                                                                                </select>
                                                                                                            </div>-->

                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Gender</label>
                                                        <div class="col-sm-6">
                                                            <label class="radio-inline">
                                                                <input type="radio" checked="checked" name="gender" value="Male"> Male
                                                            </label>
                                                            <label class="radio-inline">
                                                                <input type="radio" name="gender" value="Female"> Female
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <br><br>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Username</label>
                                                        <div class="col-sm-6">
                                                            <input type="text" class="form-control" placeholder="Enter Username" name="username" value="<?php echo set_value('username'); ?>" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Password</label>
                                                        <div class="col-sm-6">
                                                            <input type="password" class="form-control" placeholder="Password" name="password" value="" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label">Re-enter Password</label>
                                                        <div class="col-sm-6">
                                                            <input type="password" class="form-control" placeholder="Password" name="password2" value="" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-2 control-label"></label>
                                                        <div class="col-sm-10">
                                                            <input type="checkbox" name="notifs" value="yes"><label>&nbsp;&nbsp;Signin for Email Notification</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-success">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
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
        <!--end-prize-->
        <!--footer-->
        <div class="full-footer" style="margin-top: 250px">

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
        <script type="text/javascript">
            $(function() {
                $('#datetimepicker1').datetimepicker();
            });

        </script>
        <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap-datetimepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.min.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/bootstrap.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/script.js' ?>"></script>
        <script src="<?php echo base_url() . 'js/modernizr.js' ?>"></script>
        <script type="text/javascript" src="<?php echo base_url() . 'js/jquery.nouislider.min.js' ?>"></script>
    </body>
</html>