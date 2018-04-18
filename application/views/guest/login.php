<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <title>Login | Dorissimo</title>
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
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Login</a>
                                            </h4>

                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in panel-body">
                                        <?php
            if (isset($success)) {
                echo "<h1>" . $success . "</h1>";
            }
        ?>
                                            <div class="panel-body">
                                                <div class="col-md-4 check-name">

                                                    <div>
                                                        <h4>Username</h4>
                                                        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url() . 'shop/validate_credentials' ?>">
                                                            <?php if (validation_errors()): ?>
                                                                <div class="alert alert-danger alert-dismissible" role="alert">
                                                                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                                    <?php echo validation_errors(); ?>
                                                                </div>

                                                            <?php endif; ?> 
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input autofocus type="text" required name="username" class="form-control" placeholder="Username or Email">
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <h4>Password</h4>
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <input type="password" required name="password" class="form-control" placeholder="Password">
                                                                </div>
                                                            </div>

                                                            <a href="#" class="forgotPwd" style='color: #000;'>forgot your password ?</a>
                                                            <br>
                                                            <button type="submit" class="btn btn-success">LOGIN</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a href="signup">Register Here</a>
                                            </h4>
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
        <script>
            $(document).ready(function(){
                $(".forgotPwd").click(function(){
                    var email = prompt("Enter your email address:");
                    
                    if (email != "") {
                        window.location.href = "<?php echo base_url(); ?>shop/forgotpassword/" + encodeURIComponent(email);
                    }
                });
            });
        </script>
    </body>
</html>