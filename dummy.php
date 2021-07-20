<!-- 
     All work done by Mahbubur Rahman and Mysha Rahman
     North South University
     For cse482
 -->

<?php
include("includes/connection.php");

include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/logo-small.PNG">

    <title>ShopCart ! E-Commerce Store</title>


    <link href="https://fonts.googleapis.com/css?family=Roboto:400, 500, 700, 300, 100" rel="stylesheet">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>


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
                    <a href="#" class="btn btn-success btn-sm">Welcome :Guest</a>

                    <a href="#">Shopping Cart Total Price: ₹ 100, Total Items 2</a>

                </div>
                <!-- col-md-6 login-details ends-->

                <div class="col-md-6">
                    <!-- col-md-6  starts-->

                    <ul class="menu">
                        <!--menu starts-->

                        <li><a href="customer_register.php">Registers</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                        <li><a href="cart.php">Go to Cart</a></li>
                        <li><a href="checkout.php">Login</a></li>

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
                   

                    <img src="images/logo-large.PNG" alt="computerfever logo" class="hidden-xs">
                    <img src="images/logo-small.png" alt="computerfever logo" class="visible-xs">

                </a>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                <span class="sr-only" >Toggle Navigation </span>

                <i class="fa fa-align-justify"></i>

            </button>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">

                <span class="sr-only" >Toggle Search</span>

                <i class="fa fa-search" ></i>

            </button>


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
                            <a href="checkout.php"> My Account </a>
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
                    <span>4 items in Cart</span>
                </a>

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

                </div>

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










        </div>
    </div>



    <?php
    
    include("includes/footer.php");
    
    ?>






        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>

</body>

</html>


<div class="profilename">
    <center>
        <h1>
            <?php echo $customer_name; ?>'s Profiles</h1>
    </center>

</div>

<hr>

<div class="usersection">

    <div class="col-sm-4">
        <img src="<?php echo $customer_image; ?>" alt="">

    </div>

    <div class="col-sm-8">

        <table>
            <tr>
                <th>Name</th>
                <td>
                    <?php echo $customer_name; ?>
                </td>
            </tr>

            <tr>
                <th>E-mail</th>
                <td>
                    <?php echo $customer_email; ?>
                </td>
            </tr>

            <tr>
                <th>Country</th>
                <td>
                    <?php echo $customer_country; ?>
                </td>
            </tr>

            <tr>
                <th>City</th>
                <td>
                    <?php echo $customer_city; ?>
                </td>
            </tr>

            <tr>
                <th>contact</th>
                <td>
                    <?php echo $customer_contact; ?>
                </td>
            </tr>

            <tr>
                <th>Address</th>
                <td>
                    <?php echo $customer_address; ?>
                </td>
            </tr>


        </table>

    </div>

</div>
