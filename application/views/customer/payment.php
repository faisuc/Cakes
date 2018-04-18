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
            <div class="checking-area">

                <div>
                    <div class="col-md-18 checkout-accordion">
                        <div class="col-md-12 white-bg">

                            <div class="panel-body">

                                <div class="">
                                    <div class="panel-group" id="accordion">

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a ><center>Payment</center></a>
                                                </h4>
                                            </div>
                                             <?php
                                                echo form_open_multipart('shop/add_cart2');
                                            ?>
                                            <div id="collapseTwo" class="panel-collapse collapse in panel-body">
                                                <div class="panel-body pb2">
                                                    <div class="accordion-list-content" style="overflow: hidden; display: block;">

                                                        
                                                        <table class="table cart-table responsive-table">
                                                            <tr>
                                                                <th colspan="6" style="font-weight: 700;"><center>Transaction Details</center></th>
                                                            </tr>
                                                            <td>
                                                                <div class="col-md-12 col-sm-3">	
                                                                    <div class="single-profile-bottom wow fadeInDown">
                                                                        <div class="media">
                                                                            <div class="verticalLine2">
                                                                                <div>
                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-7">
                                                                                            <br><p class='bigg'>Please select if Shipping or Pickup Method will be used</p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="radio col-sm-9">
                                                                                        <label>
                                                                                            <input id="ship" type="radio" checked name="shipping" onChange="disablefield();" value="ship">
                                                                                            Shipping </label><br><br>
                                                                                        Complete Shipping Address<br><br>
                                                                                        <input id="shipaddress" name="shipadd" type="text" class="form-control"
                                                                                               placeholder="Street Name, House/Lot#,Building Name, Unit/Floor#, Village/Compound/Subdivision"><br>
                                                                                        Mobile Number<br><br>
                                                                                        <input id="number" name="mobnum" type="number" class="form-control" placeholder="(e.g. 09267891011)"><br><br>
                                                                                        <p id="note"class="pp">* Note  <br>-Shipping will be delivered 2 - 3 days
                                                                                            <br>-Shipping cost extra 100PHP if inside Metro Manila</p>
                                                                                    </div>
                                                                                    <div class="radio col-sm-9">
                                                                                        <label>
                                                                                            <input id="pickup" type="radio" name="shipping" onChange="disablefield();" value="pickup">
                                                                                            Pick up </label><br><br>
                                                                                            <input id="pickadd" disabled="" name="pickadd" type="text" class="form-control" value="#122 Maginhawa St."><br>
<!--                                                                                            <p id="note2" style="visibility: hidden;" class="pp">* Note:<br>
                                                                                            -Pick up is free, no shipping will be charged<br>
                                                                                            -Pickup will only be at our store
                                                                                            </p>-->
                                                                                        <br>
                                                                                    </div>
                                                                                </div>                                                                                


                                                                                <br><br><br><br><br><br><br>
                                                                                <div class="form-group">
                                                                                    <div class="col-sm-7">
                                                                                        <br><p class='bigg'>Please select the preferred payment method to use on this order.</p>

                                                                                    </div>
                                                                                </div>

                                                                                <div>
                                                                                    <div class="radio col-sm-7">
                                                                                        <label>
                                                                                            <input id="paypal" type="radio" name="method" onChange="disablefield1();" value="paypal">
                                                                                            Paypal </label><br><br>
                                                                                    </div>
                                                                                    <div class="radio col-sm-7">
                                                                                        <label>
                                                                                            <input checked id="bank" type="radio" name="method" onChange="disablefield1();" value="bank">
                                                                                            Bank Deposit </label><br><br>
                                                                                        <br>
                                                                                        Bank Type<br><br>
                                                                                        <select name="selectt" id="select" class="form-control">
                                                                                            <option></option>
                                                                                            <option disabled>-----------</option>
                                                                                            <option value="BPI">BPI</option>
                                                                                            <option value="BDO">BDO</option>
                                                                                        </select><br>
                                                                                        Transaction Number
                                                                                        <br><br>
                                                                                        <input name="transno" id="transaction" type="text" placeholder="Enter Transaction number" class="form-control"/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </table>

                                                        <table class="table cart-table responsive-table">
                                                            <tr>
                                                                <th  colspan="6" style="border-bottom: 2px solid #d27089; font-weight: 700;"><center>ITEM Review</center></th>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Item
                                                                </th>
                                                                <th>
                                                                    Description
                                                                </th>
                                                                <th>
                                                                    Price
                                                                </th>
                                                                <th>
                                                                    Quantity
                                                                </th>
                                                                <th>
                                                                    Total
                                                                </th>
                                                                <th>

                                                                </th>
                                                            </tr>
                                                            <!-- Item #2 -->
                                                            <?php foreach ($orders as $order): ?>
                                                                <tr>
                                                                <input type="hidden" name="ordr_id" value="<?php echo $order->order_id2;?>">
                                                                <input type="hidden" name="user_id" value="<?php echo $detail->id;?>">
                                                                    <td>
                                                                        <img src="<?php echo base_url() . 'images/product2-small.jpg' ?> " alt=""/>
                                                                    </td>
                                                                    <td class="cart-title">
                                                                        <?php echo $order->prod_name ?>
                                                                    </td>
                                                                    <td>
                                                                        <?php
                                                                        if ($order->type2 == "whole") {
                                                                            echo $order->prod_price;
                                                                        } else if ($order->type2 == "piece") {
                                                                            echo $order->prod_price2;
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td>
                                                                        <form action='#'>
                                                                            <div class="qtyminus">
                                                                            </div>
                                                                            <input type='text' disabled name="quantity" value='<?php echo $order->qty2 ?>' class="qty"/><br>
                                                                            <div class="qtyplus">
                                                                            </div>
                                                                        </form>
                                                                    </td>
                                                                    <td class="cart-total">
                                                                        <?php
                                                                        if ($order->type2 == "piece") {
                                                                            echo $total = $order->prod_price2 * $order->qty2;
                                                                        } else if ($order->type2 == "whole") {
                                                                            echo $total = $order->prod_price * $order->qty2;
                                                                        }
                                                                        ?>
                                                                    </td>
                                                                    <td><a><i class="fa fa-times reddddd"></i> REMOVE</a></td>
                                                                </tr>
                                                            <?php endforeach; ?>       
                                                        </table>
                                                        <p class="phhh">TOTAL: <?php
                                                            $this->db->select('SUM(total2) as tot');
                                                            $this->db->where('user_id2', $detail->id);
                                                            $this->db->where('status2', 'cart');
                                                            $q = $this->db->get('cart');
                                                            $row = $q->row();
                                                            $sum = $row->tot;
                                                            $sum2 = '₱ ' . number_format($sum, 2);
                                                            echo $sum2;
                                                            echo '<input type="hidden" name="quan" value="'. $sum2.'">';
                                                            ?>
                                                            
                                                        </p>
                                                        

                                                    </div>
                                                </div>
                                                <a href="<?php echo base_url() . 'CartList' ?>" class="backnext btn btn-default">Update Cart</a>
                                                <button type="submit" class="backnext2 btn btnred">Purchase</button>
                                            </div>
                                            </form>
                                            <!-- Sidebar -->

                                        </div>


                                    </div>
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


<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypalform">
<input type="hidden" name="cmd" value="_cart">
    <input type="hidden" name="upload" value="1">
    <input type="hidden" name="business" value="sales-facilitator@dorissimopastries.com">
    <input type="hidden" name="currency_code" value="PHP">

<?php 
    
    $i = 1;
    foreach ($orders as $order):
$value = 0;
        if ($order->type2 == "piece") {
                                                                             $value = $order->prod_price2 * $order->qty2;
                                                                        } else if ($order->type2 == "whole") {
                                                                             $value = $order->prod_price * $order->qty2;
                                                                        }
 ?>
    

    <input type="hidden" name="item_name_<?=$i?>" value="<?=$order->prod_name?>">
    <input type="hidden" name="amount_<?=$i?>" value="<?=$value?>">

    

   
<?php 

    $i++;
    endforeach;

 ?>
</form>


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
<script type="text/javascript">
                                                                                            function disablefield1() {
                                                                                                if (document.getElementById('paypal').checked == 1) {
                                                                                                    document.getElementById('select').disabled = 'disabled';
                                                                                                    document.getElementById('upload').disabled = 'disabled';
                                                                                                    document.getElementById('transaction').disabled = 'disabled';
                                                                                                }
                                                                                                else if (document.getElementById('bank').checked == 1) {
                                                                                                    document.getElementById('select').disabled = '';
                                                                                                    document.getElementById('upload').disabled = '';
                                                                                                    document.getElementById('transaction').disabled = '';
                                                                                                }
                                                                                            }</script>

<script type="text/javascript">
    function disablefield() {
        if (document.getElementById('pickup').checked == 1) {
            document.getElementById('shipaddress').disabled = 'disabled';
            document.getElementById('number').disabled = "disabled";
            document.getElementById('pickadd').style.visibility = "";
            document.getElementById('pickadd').disabled = '';
            document.getElementById('note2').style.visibility = "";
            document.getElementById('note').style.visibility = "hidden";
        }
        else if (document.getElementById('ship').checked == 1) {
            document.getElementById('shipaddress').disabled = '';
            document.getElementById('pickadd').disabled = 'disabled';
            document.getElementById('number').disabled = '';
            document.getElementById('note2').style.visibility = "hidden";
            document.getElementById('note').style.visibility = "";
        }
    }

    $(document).ready(function(){
        $(".backnext2").click(function(){
            
            if ($("#paypal").is(":checked")) {
                /*
               $.ajax({
                    type: "post",
                    url: "<?php echo base_url(); ?>/shop/setPaypal",
                    cache: false,
                    data:
               });
*/
                

                if ($("#ship").is(":checked")) {
                    var shipaddress = $("#shipaddress").val();
                    var number = $("#number").val();

                    var dataString = "method=ship&number=" + number + "&shipaddress=" + shipaddress;
                } else if ($("#pickup").is(":checked")) {
                    var pickadd = $("#pickadd").val();
                    var dataString = "method=pickup&address=" + pickadd;
                }

                $.ajax({
                    type: "post",
                    url: "<?php echo base_url(); ?>shop/setPaypal",
                    cache: false,
                    data: dataString,
                    success: function(data) {
                       //$("#paypalform").submit();
                       if (data != "") {
                            $("#paypalform").submit();
                       }
                    }
               });
               // $("#paypalform").submit();
              return false;
            } else {
                return true;
            }
        });
    });
    </script>

</body>
</html>