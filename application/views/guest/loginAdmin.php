<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Administrator Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('admin/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('admin/css/bootstrap-reset.css') ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('admin/assets/font-awesome/css/font-awesome.css')?>" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('admin/css/style.css')?>" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <link href="<?php echo base_url('admin/css/style.css') ?>" rel="stylesheet">
        <link href="<?php echo base_url('admin/css/style-responsive.css') ?>" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body" >

    <div class="container">

        <form role="form" class="form-signin" method="post" action="<?php echo base_url() . 'shop/validate_admin'?>">
        <h2 class="form-signin-heading">Administrator Login</h2>
        <div class="login-wrap">
            <input type="text" name="username" class="form-control" placeholder="Admin Username" autofocus>
            <input type="password" name="password" class="form-control" placeholder="Password">
            <label class="checkbox">
                

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            

        </div>
<!--           Modal 
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
           modal -->

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
