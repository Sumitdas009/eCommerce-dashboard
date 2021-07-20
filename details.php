<?php
session_start();
include("includes/connection.php");

include("functions/functions.php");
?>

<?php
    
    if(isset($_GET['pro_id'])){
        $product_id = $_GET['pro_id'];
        $get_product = "select * from products where product_id='$product_id'";
        $run_product = mysqli_query($con,$get_product);
        $row_product = mysqli_fetch_array($run_product);
        
        $p_cat_id = $row_product['p_cat_id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];
        
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con,$get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];    
    }
    
?>



    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/logo-small.PNG">

        <title>ShopCart |
            <?php echo $pro_title; ?>
        </title>


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

                    <!--                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

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

                            <li class="active">
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

                    <!--                    <div class="navbar-collapse collapse right">


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
                        <li><a href="shop.php">Shop</a></li>
                        <li>

                            <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>">
                                <?php echo $p_cat_title; ?> </a>

                        </li>

                        <li>
                            <?php echo $pro_title; ?>
                        </li>
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

                <div class="col-md-3">

                    <?php
                
                include("includes/sidebar.php");
                
                ?>


                </div>



                <div class="col-md-9">

                    <div class="row" id="productMain">

                        <div class="col-sm-6">
                            <div id="mainImage">

                                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                    <ol class="carousel-indicators">

                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>

                                    </ol>

                                    <div class="carousel-inner">

                                        <div class="item active">

                                            <center>
                                                <img src="admin/product_images/<?php echo $pro_img1 ?>" class="img-responsive">

                                            </center>


                                        </div>

                                        <div class="item">

                                            <center><img src="admin/product_images/<?php echo $pro_img2 ?>" class="img-responsive"></center>


                                        </div>

                                        <div class="item">

                                            <center><img src="admin/product_images/<?php echo $pro_img3 ?>" class="img-responsive"></center>


                                        </div>

                                    </div>

                                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                   <span class="glyphicon glyphicon-chevron-left"></span>
                                   <span class="sr-only">Previous</span>
                                   
                               </a>

                                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                   <span class="glyphicon glyphicon-chevron-right"></span>
                                   <span class="sr-only">Next</span>
                                   
                               </a>


                                </div>

                            </div>

                        </div>


                        <div class="col-sm-6">

                            <div class="box">

                                <h1 class="text-center">
                                    <?php echo $pro_title; ?>
                                </h1>

                                <?php
                                
                                add_cart();
                                
                                ?>

                                    <form action="details.php?add_cart=<?php echo $product_id;?>" method="post" class="form-horizontal">

                                        <div class="form-group">

                                            <label class="col-md-5 control-label">Product Quantity</label>

                                            <div class="col-md-7">

                                                <select name="product_qty" class="form-control">
                                        
                                        
                                        <option >1</option>
                                        <option >2</option>
                                        <option >3</option>
                                        <option >4</option>
                                        <option >5</option>
                                        
                                    </select>


                                            </div>
                                        </div>

                                        <div class="form-group">


                                            <label class="col-md-5" control-label>Product Size</label>
                                            <div class="col-md-7">

                                                <select name="product_size" class="form-control">
                                        
                                        
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                               
                                        
                                    </select>


                                            </div>



                                        </div>

                                        <div class="form-group">


                                            <!--<label class="col-md-5" control-label>Product Price</label>-->
                                            <div class="col-md-7">

                                                <input type="hidden" name="product_price" value="<?php echo $pro_price;  ?>">


                                            </div>



                                        </div>

                                        <p class="price">
                                            <?php echo $pro_price;  ?> BDT
                                        </p>
                                        <p class="text-center buttons">

                                            <button class="btn btn-primary" type="submit">
                                     <i class="fa fa-shopping-cart"></i>
                                     Add To Cart
                                     
                                 </button>

                                        </p>

                                    </form>

                            </div>

                            <div class="row" id="thumbs">


                                <div class="col-xs-4">

                                    <a href="#" class="thumb">
                             
                             <img src="admin/product_images/<?php echo $pro_img1 ?>" class="img-responsive">
                             
                         </a>
                                </div>

                                <div class="col-xs-4">

                                    <a href="" class="thumb">
                             
                             <img src="admin/product_images/<?php echo $pro_img2 ?>" class="img-responsive">
                             
                         </a>
                                </div>

                                <div class="col-xs-4">

                                    <a href="" class="thumb">
                             
                             <img src="admin/product_images/<?php echo $pro_img3 ?>" class="img-responsive">
                             
                         </a>
                                </div>

                            </div>


                        </div>


                    </div>

                    <div class="box" id="details">

                        <p>
                            <h4>Product Details</h4>

                            <p>
                                <?php echo $pro_desc; ?>
                            </p>

                            <h4>Size</h4>
                            <ul>
                                <li>Small</li>
                                <li>Medium</li>
                                <li>Large</li>

                            </ul>
                            <hr>
                    </div>

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

            </div>
        </div>



        <?php
    
    include("includes/footer.php");
    
    ?>

            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.min.js"></script>

    </body>

    </html>
