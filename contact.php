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

    <title>ShopCart ! Contact-Us</title>


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
                        <li class="active">
                            <a href="contact.php"> Contact Us</a>
                        </li>


                    </ul>




                </div>

                <a class="btn btn-primary navbar-btn right" href="cart.php">


                    <i class="fa fa-shopping-cart"></i>
                    <span><?php items(); ?> items in Cart</span>
                </a>

                <!--            <div class="navbar-collapse collapse right">


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
                    <li>Contact</li>

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




            <!--  <div class="col-md-9">

                    





                </div>
                -->



            <div class="col-md-9">



                <div class="box">

                    <div class="box-header">

                        <center>

                            <h2>Contact Us</h2>

                            <p class="text-muted">
                                If You have any Question please share with us. we will catch you as soon as possible

                            </p>
                        </center>

                    </div>

                    <form method="post" action="contact.php">

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" required>

                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" required>

                        </div>

                        <div class="form-group">
                            <label for="">Subject</label>
                            <input type="text" class="form-control" name="subject" required>

                        </div>

                        <div class="form-group">
                            <label for="">Message</label>

                            <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>

                        </div>

                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fas fa-user-md"></i> Send Message

                            </button>


                        </div>

                    </form>

                    <?php

                    if (isset($_POST['submit'])) {
                        $sender_name = $_POST['name'];
                        $sender_email = $_POST['email'];
                        $sender_subject = $_POST['subject'];
                        $sender_message = $_POST['message'];
                        $receiver_email = "mahbubur.riad@gmail.com";
                        mail($receiver_email, $sender_name, $sender_subject, $sender_message, $sender_email);

                        $email = $_POST['email'];
                        $subject = "Welcome to Shopcart";
                        $msg = "I shall get you soon, thanks for sending us email";
                        $sendmail_from = "mahbubur.riad@gmail.com";
                        mail($email, $subject, $msg, $sendmail_from);

                        echo "<h2 align='center'>Your Message has been sent successfully</h2>";
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