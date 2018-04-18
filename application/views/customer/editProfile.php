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
                                <li><a href="<?php echo base_url() . 'shop/indexCust'; ?>"><font style="color: #fff; font-size: 16px;">Home</font></a></li>
                                <li><a href="<?php echo base_url() . 'shop/aboutCust'; ?>"><font style="color: #fff; font-size: 16px;">about us</font></a></li>
                                <li><a href="<?php echo base_url() . 'shop/menuCust' ?>"><font style="color: #fff; font-size: 16px;">Menu</font></a></li>
                                <li><a href="<?php echo base_url() . 'shop/contactUser' ?>"><font style="color: #fff; font-size: 16px;">Contacts</font></a></li>

                                <li class="dropdown active">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"><font style="color: #fff; font-size: 16px;">My Account <span class="caret"></span></font></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url() . 'shop/profilecust' ?>">View Profile</a></li>
                                        <li><a href="#">Cart</a></li>
                                        <li><a href="<?php echo base_url() . 'shop/logout' ?>">Logout</a></li>
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

                            <div class="panel-body">

                                <div class="">
                                    <div class="panel-group" id="accordion">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a ><center>Edit Account Profile</center></a>
                                                </h4>
                                            </div>
                                            
                                             <?php if (validation_errors()): ?>
                                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                            <?php echo validation_errors(); ?>
                                                        </div>

                                                    <?php endif; ?>  
                                                                                        
                                            <div id="collapseTwo" class="panel-collapse collapse in panel-body">
                                                <div class="panel-body pb2">
                                                    <div class="accordion-list-content" style="overflow: hidden; display: block;">
                                                        <section id="about-us">
                                                            <div class="container">

                                                                <div class="team">
                                                                    <div class="row clearfix">
                                                                        <div class="col-md-12 col-sm-3">	
                                                                            <div class="single-profile-bottom wow fadeInDown">
                                                                                <form action="<?php echo base_url() . 'shop/updateProf/' . $detail->id ?>" method="post">
                                                                                    <div class="col-sm-4">First Name:
                                                                                        <input autofocus type="text" name="fname" class="form-control" value="<?php echo $detail->fname ?>">
                                                                                    </div><br><br><br><br><br>
                                                                                    <div class="col-sm-4">Last Name:
                                                                                        <input type="text" name="lname" class="form-control" value="<?php echo $detail->lname ?>">
                                                                                    </div><br><br><br><br><br>
                                                                                    <div class="col-sm-4">Email:
                                                                                        <input type="email" name="email" class="form-control" value="<?php echo $detail->email ?>">
                                                                                    </div><br><br><br><br><br>
                                                                                    <div class="col-sm-4">Address:
                                                                                        <input type="text" name="address" class="form-control" value="<?php echo $detail->address ?>">
                                                                                    </div><br><br><br><br><br>
                                                                                    <div class="col-sm-4">Current Password:
                                                                                        <input type="password" name="currpass" class="form-control">
                                                                                        <input type="hidden" name="password1" value="<?php echo $detail->password?>" class="form-control">
                                                                                    </div><br><br><br><br><br>
                                                                                    <div class="col-sm-4">New Password
                                                                                        <input type="password" name="newpass" class="form-control">
                                                                                    </div><br><br><br><br><br>
                                                                                    <div class="col-sm-4">Retype New Password
                                                                                        <input type="password" name="repass" class="form-control">
                                                                                    </div><br><br><br><br><br>
                                                                                    
                                                                                    <div class="col-sm-4">
                                                                                        <a type="button" href="<?php echo base_url() . 'shop/profileCust' ?>" class="btn btn-info">Back</a>
                                                                                        <button type="submit" class="btn btn-success">Save</button>
                                                                                    </div><br><br>
                                                                                </form>                                                                        </div>



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