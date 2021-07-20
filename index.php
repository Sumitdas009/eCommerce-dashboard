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

    <title>ShopCart | E-Commerce Store</title>


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
                            ?>
                        </li>
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
                        <li><a href="./admin/index.php" target="_blank">Admin Login</a></li>

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

                    <span class="sr-only">Toggle Navigation </span>

                    <i class="fa fa-align-justify"></i>

                </button>

                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

                <span class="sr-only" >Toggle Search</span>

                <i class="fa fa-search" ></i>

            </button>-->


            </div>


            <div class="navbar-collapse collapse" id="navigation">


                <div class="padding-nav">


                    <ul class="nav navbar-nav navbar-left">


                        <li class="active">
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
                    <span><?php items(); ?></span>
                </a>

                <div class="navbar-collapse collapse right">


                    <!--<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>-->

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

                </div>

            </div>


        </div>
    </div>

    <!--    closing-->

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

    <div class="container" id="slider">

        <div class="col-md-12">
            <div id="slideimage">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"> </li>
                        <li data-target="#myCarousel" data-slide-to="1"> </li>
                        <li data-target="#myCarousel" data-slide-to="2"> </li>
                        <li data-target="#myCarousel" data-slide-to="3"> </li>
                    </ol>

                    <div class="carousel-inner image-slide-size">
                        <?php

                        $get_slides = "SELECT slide_id, slide_name, slide_image FROM slider LIMIT 0,1";
                        $run_slides = mysqli_query($con, $get_slides);
                        while ($row_slides = mysqli_fetch_array($run_slides)) {
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];


                            echo "
                        <div class='item active img-responsive'>

    <img src='admin/slides_images/$slide_image'></a>
    <div class='carousel-caption'>
    <h1 style='color: blue;'>Shopping with Trust </h1>
    <button class='btn btn-primary' style='color: white;'><a href='shop.php'>Go to Shop</a></button>
    <p style='color: blue;'>Find The best option for shopping </p>
   
  </div>

</div>
                        


";
                        }



                        ?>


                        <?php

                        $get_slides = "SELECT slide_id, slide_name, slide_image FROM slider LIMIT 1,3";
                        $run_slides = mysqli_query($con, $get_slides);
                        while ($row_slides = mysqli_fetch_array($run_slides)) {
                            $slide_name = $row_slides['slide_name'];
                            $slide_image = $row_slides['slide_image'];


                            echo "
                        <div class='item img-responsive'>

    <img src='admin/slides_images/$slide_image'></a>

</div>
                        


";
                        }

                        ?>








                    </div>
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span> <span class="sr-only">Previous</span> </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span><span class="sr-only">Next</span> </a>
                </div>

            </div>


        </div>

    </div>


    <div id="advantages">
        <div class="container">

            <div class="same-height-row">


                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">
                            <i class="fa fa-heart"></i>

                        </div>

                        <h3><a href="#">We Love Our Customers</a></h3>
                        <p>
                            We are known to provide best possible service ever

                        </p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">
                            <i class="fa fa-tags"></i>

                        </div>

                        <h3><a href="#">Resonable Price</a></h3>
                        <p>
                            Every products has included with MRP. and many products has already discounted by company.
                        </p>

                    </div>

                </div>

                <div class="col-sm-4">

                    <div class="box same-height">

                        <div class="icon">
                            <i class="fas fa-calendar-check"></i>

                        </div>

                        <h3><a href="#">100% safety</a></h3>
                        <p>
                            Guaranteed price with better quality and money back guarantee if have problem with product

                        </p>

                    </div>

                </div>



            </div>

        </div>


    </div>



    <div id="hot">

        <div class="box">

            <div class="container">
                <div class="col-md-12">

                    <h2 style="color: purple">Latest This week</h2>

                </div>

            </div>

        </div>


    </div>



    <div id="content" class="container">



        <?php

        getProducts();

        ?>




    </div>


    <!--    <div class="row">
        <div class="col-md-6">

            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>-->



    <?php

    include("includes/footer.php")

    ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>

</body>

</html>