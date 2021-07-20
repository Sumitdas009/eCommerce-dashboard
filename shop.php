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

    <title>ShopCart | Shop</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:400, 500, 700, 300, 100" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>


</head>

<body>

    <div id="top">

        <div class="container">

            <div class="row">

                <div class="col-md-6 login-details">
                    <a href="#" class="btn btn-primary btn-sm">
                        <?php
                        $ip = getRealUserIp();

                        if (!isset($_SESSION['customer_email'])) {
                            echo 'Welcome: ' . $ip;
                        } else {
                            echo "Hello! " . $_SESSION['customer_email'] . "";
                        }
                        ?>

                    </a>


                </div>

                <div class="col-md-6">


                    <ul class="menu">


                        <li>
                            <?php
                            if (!isset($_SESSION['customer_email'])) {
                                echo "<a href='customer_register.php'>Register</a>";
                            } else {
                                echo "<a href='customer/my_account.php?profile'>Profile</a>";
                            }
                            ?>

                        </li>
                        <li>
                            <?php
                            if (!isset($_SESSION['customer_email'])) {
                                echo "<a href='checkout.php'>My Account</a>";
                            } else {
                                echo "<a href='customer/my_account.php?my_orders'>CheckOut</a>";
                            }
                            ?></li>
                        <li><a href="cart.php">Go to Cart</a></li>
                        <li>
                            <?php
                            if (!isset($_SESSION['customer_email'])) {
                                echo "<a href='checkout.php'>Sign in</a>";
                            } else {
                                echo "<a href='logout.php'>Sign out</a>";
                            }

                            ?>


                        </li>

                    </ul>

                </div>

            </div>


        </div>


    </div>


    <div class="navbar navbar-default" id="navbar">

        <div class="container">


            <div class="navbar-header">


                <a class="navbar-brand home" href="index.php">


                    <img src="images/logo-large.PNG" class="hidden-xs" alt="shopcart logo">
                    <img src="images/logo-small.PNG" class="visible-xs" alt="shopcart logo">

                </a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                    <span class="sr-only">Toggle Navigation </span>

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

                        <li class="active dropdown">
                            <a href="shop.php" class="dropdown-toggle" data-toggle="dropdown"> Shop </a>
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

                <!--                <div class="navbar-collapse collapse right">


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
                    <li>Shop</li>

                </ul>

            </div>
            <div class="col-md-12">
                <?php

                if (!isset($_SESSION['customer_email'])) {
                } else {


                    $c_email = $_SESSION['customer_email'];
                    $get_customer = "SELECT * FROM customers WHERE  customer_email = '$c_email'";
                    $run_customer = mysqli_query($con, $get_customer);
                    $row_customer = mysqli_fetch_array($run_customer);
                    $customer_confirm_code = $row_customer['customer_confirm_code'];
                    if (!empty($customer_confirm_code)) {

                ?>

                        <div class="alert alert-danger">
                            <center>
                                <strong>Warning! </strong> Please Confirm Through Your Email. If you have not recieved your confirmation email
                                <a href="customer/my_account.php?send_email" class="alert-link">Send E-mail Again</a>

                            </center>


                        </div>
                <?php }
                } ?>


            </div>

            <div class="col-md-3">

                <?php

                include("includes/sidebar.php");

                ?>


            </div>

            <div class="col-md-9">

                <?php

                if (!isset($_GET['p_cat'])) {
                    if (!isset($_GET['cat'])) {

                        echo "
                        
                        <div class='box'>
                        
                        <h1>Shop</h1>
                        
                        <p>Shopping with fun and Trust. Every product condition is good. we keep the value of customer's trust</p>
                        
                        </div>
                        
                        ";
                    }
                }


                ?>

                <div class="row">

                    <?php
                    if (!isset($_GET['p_cat'])) {
                        if (!isset($_GET['cat'])) {

                            $per_page = 6;
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            } else {
                                $page = 1;
                            }

                            $start_from = ($page - 1) * $per_page;
                            $get_products = "SELECT * FROM products order by 1 DESC LIMIT $start_from,$per_page";

                            $run_products = mysqli_query($con, $get_products);

                            while ($row_products = mysqli_fetch_array($run_products)) {
                                $pro_id = $row_products['product_id'];
                                $pro_title = $row_products['product_title'];
                                $pro_price = $row_products['product_price'];
                                $pro_img1 = $row_products['product_img1'];


                                echo "
                                
                                
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

                <a href='details.php?pro_id=$pro_id' class='btn btn-default'>View Details</a>
                <a href='details.php?pro_id=$pro_id' class='btn btn-primary'><i class='fa fa-shopping-cart'></i> Add To Cart</a>
            </p>
        </div>

    </div>

</div>
 
                                
                                ";
                            }
                        }
                    }
                    ?>



                </div>

                <div class="row">

                    <?php
                    getpcatpro();
                    getcatpro();

                    ?>

                </div>

                <center>

                    <ul class="pagination">

                        <?php

                        if (!isset($_GET['p_cat'])) {
                            if (!isset($_GET['cat'])) {
                                $per_page = 6;

                                $query = "SELECT * FROM products";
                                $result = mysqli_query($con, $query);
                                $total_records = mysqli_num_rows($result);
                                $total_pages = ceil($total_records / $per_page);

                                echo "
                        
                        <li><a href='shop.php?page=1'>" . 'First Page' . "</a></li>
                        
                        ";


                                for ($i = 1; $i <= $total_pages; $i++) {

                                    echo "
                                
                                <li><a href='shop.php?page=" . $i . "'>" . $i . "</a></li>
                                
                                ";
                                };


                                echo "
                            
                            <li><a href='shop.php?page=$total_pages'>" . 'Last Page' . "</a></li>
                            
                            ";
                            }
                        }

                        ?>


                    </ul>

                </center>


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