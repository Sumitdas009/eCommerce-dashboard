<?php
session_start();
include("includes/connection.php");

include("functions/functions.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/logo-small.PNG">

    <title>ShopCart ! Cart</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:400, 500, 700, 300, 100" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

    <script>
        ! function() {
            var t;
            if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void(window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
                t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                t.factory = function(e) {
                    return function() {
                        var n;
                        return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
                    };
                }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e, n, o, i;
                    e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
                        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
                        n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
                });
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('n4dhvzxke8hv');

    </script>


</head>

<body>

    <div id="top">
        <!--top starts-->

        <div class="container">
            <!--container starts-->

            <div class="row">
                <!--row starts-->

                <div class="col-md-6 login-details">
                    <!-- col-md-6 login-details starts-->
                    <a href="#" class="btn btn-primary btn-sm">

                        <?php
                        $ip = getRealUserIp();
    
    if(!isset($_SESSION['customer_email'])){
        echo 'Welcome: '.$ip ;
    }
else
{
    echo "Hello! ".$_SESSION['customer_email']."";
}
                            ?>
                    </a>


                </div>
                <!-- col-md-6 login-details ends-->

                <div class="col-md-6">
                    <!-- col-md-6  starts-->

                    <ul class="menu">
                        <!--menu starts-->

                        <li>
                            <?php
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='customer_register.php'>Register</a>";
                            }
                            else
                            {
                                echo "<a href='customer/my_account.php?profile'>Profile</a>";
                            }
                            ?>

                        </li>
                        <li>
                            <?php
                            if(!isset($_SESSION['customer_email'])){
                                echo "<a href='checkout.php'>My Account</a>";
                            }
                            else
                            {
                                echo "<a href='customer/my_account.php?my_orders'>CheckOut</a>";
                            }
                            ?></li>
                        <li><a href="cart.php">Go to Cart</a></li>
                        <li>
                            <?php
                            if(!isset($_SESSION['customer_email'])){ echo "<a href='checkout.php'>Sign in</a>"; } else{ echo "<a href='logout.php'>Sign out</a>"; }
                            
                            ?>


                        </li>

                    </ul>
                    <!--menu ends-->
                </div>
                <!-- col-md-6 ends-->
            </div>
            <!-- row ends-->

        </div>
        <!--container ends-->

    </div>
    <!--top ends-->

    <div class="navbar navbar-default" id="navbar">

        <div class="container">


            <div class="navbar-header">


                <a class="navbar-brand home" href="index.php">
                   

                    <img src="images/logo-large.PNG" class="hidden-xs" alt="shopcart logo">
                    <img src="images/logo-small.PNG" class="visible-xs" alt="shopcart logo">

                </a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                <span class="sr-only" >Toggle Navigation </span>

                <i class="fa fa-align-justify"></i>

            </button>

                <!--                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

                <span class="sr-only" >Toggle Search</span>

                <i class="fa fa-search" ></i>

            </button>-->



            </div>


            <div class="navbar-collapse collapse" id="navigation">


                <div class="padding-nav">


                    <ul class="nav navbar-nav navbar-left">


                        <li>
                            <a href="index.php"> Home </a>
                        </li>

                        <li>
                            <a href="shop.php"> Shop </a>
                        </li>

                        <li>
                            <a href="customer/my_account.php?profile"> My Account </a>
                        </li>
                        <li>



                            <?php
                          include("additional_info.php");

                          ?>

                        </li>
                        <li>
                            <a href="contact.php"> Contact Us</a>
                        </li>


                    </ul>




                </div>

                <a class="btn btn-primary navbar-btn right" href="cart.php">
                   

                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> items in Cart</span>
                </a>
                <!--
                <div class="navbar-collapse collapse right">


                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>

                </div>


                <div class="collapse clearfix" id="search">


                    <form class="navbar-form" method="get" action="results.php">


                        <div class="input-group">


                            <input class="form-control" type="text" placeholder="Search" name="user_query" required>

                            <span class="input-group-btn">

<button type="submit" value="Search" name="search" class="btn btn-primary">

<i class="fa fa-search"></i>

</button>
        </span>

                        </div>

                    </form>

                </div>-->

            </div>


        </div>
    </div>



    <div id="content">

        <div class="container">

            <div class="col-md-12">

                <ul class="breadcrumb">

                    <li><a href="index.php">Home</a></li>
                    <li>Cart</li>

                </ul>

            </div>

            <div class="col-md-12">
                <?php
        
        if(!isset($_SESSION['customer_email'])){
        
    }
        else{
            
        
    $c_email = $_SESSION['customer_email'];
    $get_customer = "SELECT * FROM customers WHERE  customer_email = '$c_email'";
    $run_customer = mysqli_query($con, $get_customer);
    $row_customer = mysqli_fetch_array($run_customer);
    $customer_confirm_code = $row_customer['customer_confirm_code'];
    if(!empty($customer_confirm_code)){
    
    ?>

                    <div class="alert alert-danger">
                        <center>
                            <strong>Warning! </strong> Please Confirm Through Your Email. If you have not recieved your confirmation email
                            <a href="customer/my_account.php?send_email" class="alert-link">Send E-mail Again</a>

                        </center>


                    </div>
                    <?php } }?>


            </div>








            <div class="col-md-9" id="cart">
                <div class="box">

                    <form action="cart.php" method="post" enctype="multipart-form-data">

                        <h1>Shopping Cart</h1>

                        <?php
                        
                        $ip_add = getRealUserIp();
                        $select_cart = "SELECT * FROM cart WHERE ip_add='$ip_add'";
                        $run_cart = mysqli_query($con, $select_cart);
                        $count = mysqli_num_rows($run_cart);
                        
                        
                        ?>



                            <p class="text-muted"> You Currently have
                                <?php items(); ?> item(s) in you cart </p>

                            <div class="table-responsive">

                                <table class="table">

                                    <thead>

                                        <tr>
                                            <th colspan="2"> Product </th>
                                            <th>Quantity</th>

                                            <th>Unit Price</th>

                                            <th> Size </th>

                                            <th colspan="1"> Delete </th>

                                            <th colspan="2"> Sub Total</th>
                                        </tr>

                                    </thead>


                                    <tbody>

                                        <?php
                                        
                                        
                                        $total = 0;
                                        while($row_cart = mysqli_fetch_array($run_cart)){
                                                $pro_id = $row_cart['p_id'];
                                                $pro_size = $row_cart['size'];
                                                $pro_qty = $row_cart['qty'];
                                                $only_price = $row_cart['p_price'];
                                            
                                                $get_products = "select * from products where product_id='$pro_id'";
                                                $run_products = mysqli_query($con,$get_products);
                                                while($row_products = mysqli_fetch_array($run_products)){
                                                    $product_title = $row_products['product_title'];
                                                    $product_img1 = $row_products['product_img1'];
                                                    #$only_price = $row_products['product_price'];
                                                    $sub_total = $only_price*$pro_qty;
                                                    $_SESSION['pro_qty'] = $pro_qty;
                                                    $total += $sub_total;
                                                    
                                                    $per_product = ($sub_total*2.25)/100;
                                                    $per_product_price = $per_product+50+$sub_total;
                                                    $tax = ($total*2.25)/100;
                                                    $total_charge = $tax+50+$total;
                                            
                                        
                                        ?>


                                            <tr>


                                                <td>

                                                    <img src="admin/product_images/<?php echo $product_img1; ?>">

                                                </td>

                                                <td>

                                                    <a href="#">
                                                        <?php echo $product_title; ?> </a>

                                                </td>

                                                <td>
                                                    <input type="text" name="quantity" value="<?php echo $_SESSION['pro_qty']; ?>" data-product_id="<?php echo $pro_id; ?>" class="quantity form-control">
                                                </td>

                                                <td>


                                                ₹ <?php echo $only_price; ?>

                                                </td>

                                                <td>

                                                    <?php echo $pro_size; ?>

                                                </td>

                                                <td>
                                                    <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">
                                                </td>

                                                <td>


                                                ₹ <?php echo $sub_total; ?>

                                                </td>

                                            </tr>


                                            <?php } } ?>



                                    </tbody>

                                    <tfoot>

                                        <tr>
                                            <th colspan="5"> Total </th>
                                            <th colspan="2">
                                                <?php echo $total; ?> BDT</th>


                                        </tr>

                                    </tfoot>



                                </table>
                                <div class="form-inline pull-right">
                                    <div class="form-group">
                                        <label>Coupon Code : </label>

                                        <input type="text" name="code" class="form-control">

                                    </div>


                                    <input class="btn btn-primary" type="submit" name="apply_coupon" value="Apply Coupon Code">

                                </div>


                            </div>

                            <div class="box-footer">

                                <div class="pull-left">
                                    <a href="index.php" class="btn btn-default"><i class="fas fa-chevron-circle-left"></i> Continue Shopping</a>

                                </div>

                                <div class="pull-right">
                                    <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                  <i class="fas fa-retweet"></i> Update Cart
                                   
                               </button>

                                    <a href="checkout.php" class="btn btn-primary">Proceed to Checkout <i class="fas fa-chevron-circle-right"></i></a>



                                </div>

                            </div>


                    </form>
                </div>

                <?php

            if(isset($_POST['apply_coupon'])){
             $code = $_POST['code'];
            if($code == ""){
            }
            else{
            $get_coupons = "select * from coupons where coupon_code='$code'";
            $run_coupons = mysqli_query($con,$get_coupons);
            $check_coupons = mysqli_num_rows($run_coupons);
            if($check_coupons == 1){
            $row_coupons = mysqli_fetch_array($run_coupons);
            $coupon_pro = $row_coupons['product_id'];
            $coupon_price = $row_coupons['coupon_price'];
            $coupon_limit = $row_coupons['coupon_limit'];
            $coupon_used = $row_coupons['coupon_used'];
            if($coupon_limit == $coupon_used){
            echo "<script>alert('Your Coupon Code Has Been Expired')</script>";
            }
            else{
            $get_cart = "select * from cart where p_id='$coupon_pro' AND ip_add='$ip_add'";
            $run_cart = mysqli_query($con,$get_cart);
            $check_cart = mysqli_num_rows($run_cart);
            if($check_cart == 1){
            $add_used = "update coupons set coupon_used=coupon_used+1 where coupon_code='$code'";
            $run_used = mysqli_query($con,$add_used);
            $update_cart = "update cart set p_price='$coupon_price' where p_id='$coupon_pro' AND ip_add='$ip_add'";
            $run_update = mysqli_query($con,$update_cart);
            echo "<script>alert('Your Coupon Code Has Been Applied')</script>";
            echo "<script>window.open('cart.php','_self')</script>";
            }
            else{
            echo "<script>alert('Product Does Not Exist In Cart')</script>";
            }
            }
            }
            else{
            echo "<script> alert('Your Coupon Code Is Not Valid') </script>";
            }
            }
            }
?>


                    <?php
                
                function update_cart(){
                    global $con;
                    
                    if(isset($_POST['update'])){
                        
                        foreach($_POST['remove'] as $remove_id){
                            $delete_product = "delete from cart where p_id='$remove_id'";
                            $run_delete = mysqli_query($con, $delete_product);
                            if($run_delete){
                                echo"
                                <script>window.open('cart.php', '_self')</script>
                                ";
                            }
                            
                            
                        }
                        
                    }
                    
                }
                
                echo @$up_cart = update_cart();
                
                ?>

                        <div id="row same-height-row">

                            <div class="col-md-3 col-sm-6">

                                <div class="box same-height headline">
                                    <h3 class="text-center">You also like these Products</h3>


                                </div>

                            </div>

                            <?php
                        
                        $get_products = "SELECT * FROM products order by rand() LIMIT 0,2";
                        
                        $run_products = mysqli_query($con, $get_products);
                        
                        while($row_products = mysqli_fetch_array($run_products)){
                            $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];
                                
                                
                                echo"
                                
                                
                                <div class='col-md-4 col-sm-6 center-responsive'>

                        <div class='product'>

                            <a href='details.php?pro_id=$pro_id'>
                               <img src='admin/product_images/$pro_img1' alt='product_image' class='img-responsive'>
                               
                           </a>

                            <div class='text'>

                                <h3>
                                    <a href='details.php?pro_id=$pro_id'>$pro_title</a>
                                </h3>

                                <p class='price'>₹ $pro_price</p>
                                <p class='button'>

<a href='details.php?pro_id=$pro_id' class='btn btn-default'>Details</a>
                                    <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Add To Cart</a>
                                </p>
                            </div>


                        </div>

                    </div>
                                ";
                        }
                        
                        ?>





                        </div>



            </div>



            <div class="col-md-3">

                <div class="box" id="order-summary">

                    <div class="box-header">

                        <h3>Order Summary</h3>

                    </div>

                    <p class="text-muted">

                        Shipping and additional costs are calculated based on the values you have entered
                    </p>

                    <div class="table-responsive">

                        <table class="table">

                            <tbody>

                                <tr>
                                    <td>Order Subtotal</td>

                                    <th>
                                        <?php echo $total; ?>
                                    </th>

                                </tr>

                                <tr>
                                    <td>Shipping Charge</td>

                                    <td>50.00</td>

                                </tr>

                                <tr>

                                    <td>Tax(2.25%)</td>
                                    <th>
                                        <?php echo $tax; ?>
                                    </th>


                                </tr>

                                <tr class="total">

                                    <td>Total</td>
                                    <th>
                                        <?php echo $total_charge; ?>
                                    </th>

                                </tr>

                            </tbody>

                        </table>


                    </div>


                </div>


            </div>










        </div>
    </div>



    <?php
    
    include("includes/footer.php");
    
    ?>






        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>

        <script>
            $(document).ready(function(data) {
                $(document).on('keyup', '.quantity', function() {
                    var id = $(this).data("product_id");
                    var quantity = $(this).val();
                    if (quantity != '') {
                        $.ajax({
                            url: "change.php",
                            method: "POST",
                            data: {
                                id: id,
                                quantity: quantity
                            },
                            success: function(data) {
                                $("body").load('cart_body.php');
                            }
                        });
                    }
                });
            });

        </script>

</body>

</html>
