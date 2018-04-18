<!doctype html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">
<title>About | Dorissimo</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/bootstrap.css'?>" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/style.css'?>" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'css/font-awesome.css'?>" media="screen">
<link rel="stylesheet" href="<?php echo base_url() . 'css/responsive.css" type="text/css'?>" media="screen"/>
<link href='<?php echo "http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,800italic,400,300,600,700,800"?>' rel='stylesheet' type='text/css'>
<link href='<?php echo "http://fonts.googleapis.com/css?family=Lobster"?> 'rel='stylesheet' type='text/css'>
</head>
<body>
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
                   <?php foreach($details as $detail): ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div style="margin-right: 37px;" align="right">
        <font style="color: #fff; ">Welcome, <?php echo $detail->fname . " " . $detail->lname; ?></font>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url() . 'Home'; ?>"><font style="color: #fff; font-size: 16px;">Home</font></a></li>
                <li class="active"><a href="<?php echo base_url() . 'About'; ?>"><font style="color: #fff; font-size: 16px;">about us</font></a></li>
                <li><a href="<?php echo base_url() . 'Menu' ?>"><font style="color: #fff; font-size: 16px;">Menu</font></a></li>
                <li><a href="<?php echo base_url() . 'Contacts' ?>"><font style="color: #fff; font-size: 16px;">Contacts</font></a></li>
                
               <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle"><font style="color: #fff; font-size: 16px;">My Account <span class="caret"></span></font></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo base_url() . 'Profile' ?>">View Profile</a></li>
                    <li><a href="<?php echo base_url() . 'CartList' ?>">Cart</a></li>
                    <li><a href="<?php echo base_url() . 'logout'?>">Logout</a></li>
                </ul>
                </li>
            </ul>
        </div>
        <?php endforeach; ?>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
<!--end-navbar-->

<!--Icon Blocks-->

<!--end Icon Blocks-->
<!-- Team Members -->
<div class="container">
    <div class="row members">
        <div class="">
            <img src="<?php echo base_url() . 'images/member1.jpg'?>" alt="img">
            <div class="text">
            <?php
                $query = $this->db->query("SELECT * FROM `content_management` WHERE `field` = 'About Us'");
                $title = $query->row()->title;
                $content = $query->row()->content;
            ?>
                <p>
                     <?php echo $title; ?>
                </p>
                <span>
                    <?php echo $content; ?>
                </span>
                <div class="members-socials">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</div>
<!--end-articles-->
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
<script type="text/javascript" src="<?php echo base_url() . 'js/jquery.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'js/script.js'?>"></script>
<script src="<?php echo base_url() . 'js/modernizr.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'js/jquery.nouislider.min.js'?>"></script>
</body>
</html>