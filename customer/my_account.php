<?php
session_start();

if (!isset($_SESSION['customer_email'])) {
    echo "<script>alert('Please Login to go to your account. If you have not user account Please register and it is more fun to buy here. Thank you!')</script>";
    echo "<script>window.open('../checkout.php', '_self')</script>";
} else {


    include("../includes/connection.php");

    include("../functions/functions.php");
    /*include("includes/config.php");
    $redirectURL = "http://localhost/shopcart/customer/fb-callback.php"
        $permissions = ['email'];
    $loginURL = $helper->getLoginUrl($redirectURL, $permissions);*/


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/logo-small.PNG">

        <title>ShopCart ! My Account</title>


        <link href="https://fonts.googleapis.com/css?family=Roboto:400, 500, 700, 300, 100" rel="stylesheet">
        <link rel="stylesheet" href="../styles/bootstrap.min.css">
        <link rel="stylesheet" href="../font-awesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" type="text/css" href="../styles/style.css">
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

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

                            if (!isset($_SESSION['customer_email'])) {
                                echo 'Welcome: ' . $ip;
                            } else {
                                echo "Hello! " . $_SESSION['customer_email'] . "";
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
                                if (!isset($_SESSION['customer_email'])) {
                                    echo "<a href='customer_register.php'>Register</a>";
                                } else {
                                    echo "<a href='my_account.php?profile'>Profile</a>";
                                }
                                ?>
                            </li>
                            <li>
                                <?php
                                if (!isset($_SESSION['customer_email'])) {
                                    echo "<a href='checkout.php'>My Account</a>";
                                } else {
                                    echo "<a href='my_account.php?my_orders'>CheckOut</a>";
                                }
                                ?></li>
                            <li><a href="../cart.php">Go to Cart</a></li>
                            <li>
                                <?php
                                if (!isset($_SESSION['customer_email'])) {
                                    echo "<a href='../checkout.php'>Sign in</a>";
                                } else {
                                    echo "<a href='../logout.php'>Sign out</a>";
                                }

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


                    <a class="navbar-brand home" href="../index.php">


                        <img src="../images/logo-large.PNG" class="hidden-xs" alt="shopcart logo">
                        <img src="../images/logo-small.PNG" class="visible-xs" alt="shopcart logo">

                    </a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                        <span class="sr-only">Toggle Navigation </span>

                        <i class="fa fa-align-justify"></i>

                    </button>
                    <!--
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

                <span class="sr-only" >Toggle Search</span>

                <i class="fa fa-search" ></i>

            </button>
-->

                </div>


                <div class="navbar-collapse collapse" id="navigation">


                    <div class="padding-nav">


                        <ul class="nav navbar-nav navbar-left">


                            <li>
                                <a href="../index.php"> Home </a>
                            </li>

                            <li>
                                <a href="../shop.php"> Shop </a>
                            </li>

                            <li class="active">
                                <a href="my_account.php?profile"> My Account </a>
                            </li>
                            <li>


                                <?php
                                include("../additional_info.php");

                                ?>

                            </li>
                            <li>
                                <a href="../contact.php"> Contact Us</a>
                            </li>


                        </ul>




                    </div>

                    <a class="btn btn-primary navbar-btn right" href="../cart.php">


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
                        <li>My Account</li>

                    </ul>

                </div>

                <div class="col-md-12">
                    <?php
                    $c_email = $_SESSION['customer_email'];
                    $get_customer = "SELECT * FROM customers WHERE  customer_email = '$c_email'";
                    $run_customer = mysqli_query($con, $get_customer);
                    $row_customer = mysqli_fetch_array($run_customer);
                    $customer_confirm_code = $row_customer['customer_confirm_code'];
                    if (!empty($customer_confirm_code)) {

                    ?>

                        <div class="alert alert-danger">
                            <strong>Warning! </strong> Please Confirm Through Your Email. If you have not recieved your confirmation email
                            <a href="my_account.php?send_email" class="alert-link">Send E-mail Again</a>

                        </div>
                    <?php } ?>


                </div>


                <div class="col-md-3">

                    <?php

                    include("includes/sidebar.php");

                    ?>


                </div>



                <div class="col-md-9">

                    <div class="box">





                        <?php

                        if (isset($_GET[$customer_confirm_code])) {
                            $update_customer = "update customers set customer_confirm_code='' where customer_confirm_code = '$customer_confirm_code'";
                            $run_confirm = mysqli_query($con, $update_customer);
                            echo "<script>alert('Your Email has been confirm')</script>";
                            echo "<script>window.open('my_account.php?my_orders', '_self')</script>";
                        }

                        if (isset($_GET['send_email'])) {

                            $subject = "Shopcart Email Confirmation Message";
                            $from = "sumitkumardas080@gmail.com";
                            $message = "
<h2>
Hey $c_name,
</h2>


We received a request to set your email to $c_email. If this is correct, please confirm by clicking the button below. If you don’t know why you got this email, please tell us straight away so we can fix this for you.

<p>
Information That save in our database
</p>

<table style='border:2px solid black;'>
  <tr>
    <th>Name</th>
    <td>$c_name</td>
    </tr>
    <tr>
    <th>E-mail</th> 
    <td>$c_email</td> 
    </tr>
    <tr>
    <th>Pass</th>
     <td>$c_pass</td> 
    </tr>
    <tr>
    <th>Country</th>
    <td>$c_country</td>
    </tr>
    <tr>
    <th>City</th>
    <td>$c_city</td>
    </tr>
    <tr>
    <th>Contact</th>
    <td>$c_contact</td>
    </tr>
    <tr>
    <th>Zipcode</th>
    <td>$c_zipcode</td>
    </tr>
    <tr>
    <th>Gender</th>
    <td>$c_gender</td>
    </tr>
    <tr>
    <th>Address</th>
    <td>$c_address</td>
    </tr>
    </tr>
    

</table>
<br>
<br>

<a style='background-color: #af0c42; text-decoration: none; padding: 10px; font-size: 130%; color: white; margin-top:20px;' href='http://shopcartbd.cf/customer/my_account.php?$customer_confirm_code'>
Click Here To Confirm Email
</a>
";
                            $headers = "From: $from \r\n";
                            $headers .= "Content-type: text/html\r\n";
                            mail($c_email, $subject, $message, $headers);

                            echo "<script>alert('Your Confirmation Email Has Been sent to you, check your inbox')</script>";
                            echo "<script>window.open('my_account.php?my_orders','_self')</script>";
                        }


                        if (isset($_GET['my_orders'])) {

                            include("my_orders.php");
                        }


                        if (isset($_GET['edit_account'])) {

                            include("edit_account.php");
                        }

                        if (isset($_GET['pay_offline'])) {

                            include("pay_offline.php");
                        }

                        if (isset($_GET['change_pass'])) {

                            include("change_pass.php");
                        }

                        if (isset($_GET['delete_account'])) {

                            include("delete_account.php");
                        }

                        if (isset($_GET['chat'])) {

                            include("chat/chat.php");
                        }

                        if (isset($_GET['profile'])) {

                            include("profile.php");
                        }




                        ?>


                    </div>

                </div>

            </div>
        </div>



        <?php

        include("../includes/footer.php");

        ?>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.min.js"></script>

    </body>

    </html>

<?php } ?>