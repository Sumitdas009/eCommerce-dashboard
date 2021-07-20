<?php



include("../includes/connection.php");

if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
}

else{
?>


    <nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
       
       <span class="sr-only">Toggle Navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       
        
        
    </button>

            <a href="index.php?dashboard" class="navbar-brand">Admin Panel</a>



        </div>

        <ul class="nav navbar-right top-nav">

            <li class="dropbox">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
               <i class="fa fa-user"></i>
               <?php echo $admin_name; ?> <b class="caret"></b>
               <ul class="dropdown-menu">
                   <li><a href="index.php?admin_profile=<?php echo $admin_id; ?>"><i class="fa fa-fw fa-user"></i> Profile</a></li>
            <li><a href="index.php?view_product"><i class="fa fa-fw fa-envelope"></i> Products <span class="badge"></span></a></li>
            <li><a href="index.php?view_customers"><i class="fa fa-fw fa-edit"></i> Customer <span class="badge"></span></a></li>
            <li><a href="index.php?view_p_cat"><i class="fas fa-clone"></i> Product Category<span class="badge"></span>
        </a></li>
            <li><a href="index.php?view_cat"><i class="fas fa-clone"></i> Category<span class="badge"></span>
        </a></li>

            <li class="divider"></li>
            <li><a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Sign Out</a></li>


        </ul>


        </a>

        </li>




        </ul>

        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav side-nav">

                <li>

                    <a href="index.php?dashboard">

<i class="fas fa-crown"></i> Dashboard

</a>

                </li>


                <li>


                    <a href="#" data-toggle="collapse" data-target="#products">

<i class="fas fa-receipt"></i> Products

<i class="fa fa-fw fa-caret-down"></i>


</a>

                    <ul id="products" class="collapse">

                        <li><a href="index.php?insert_product"> Insert Products</a></li>

                        <li><a href="index.php?view_product"> View Products</a></li>
                        <li><a href="index.php?product_request"> View Product Request</a></li>


                    </ul>

                </li>

                <li>


                    <a href="#" data-toggle="collapse" data-target="#p_cat">

<i class="fas fa-arrows-alt"></i> Products Categories

<i class="fa fa-fw fa-caret-down"></i>


</a>

                    <ul id="p_cat" class="collapse">

                        <li><a href="index.php?insert_p_cat"> Insert Products Category</a></li>

                        <li><a href="index.php?view_p_cat"> View Products Category</a></li>


                    </ul>

                </li>

                <li>


                    <a href="#" data-toggle="collapse" data-target="#cat">

<i class="fas fa-clone"></i> Categories

<i class="fa fa-fw fa-caret-down"></i>


</a>

                    <ul id="cat" class="collapse">

                        <li><a href="index.php?insert_cat"> Insert Category</a></li>

                        <li><a href="index.php?view_cat"> View Category</a></li>


                    </ul>

                </li>

                <li>

                    <a href="#" data-toggle="collapse" data-target="#coupons">
   
                        <i class="fas fa-gift"></i> Coupons

                        <i class="fa fa-fw fa-caret-down"></i>

                    </a>


                    <ul id="coupons" class="collapse">


                        <li>
                            <a href="index.php?insert_coupon"> Insert Coupon </a>
                        </li>

                        <li>
                            <a href="index.php?view_coupons"> View Coupons </a>
                        </li>

                    </ul>


                </li>


                <li>


                    <a href="#" data-toggle="collapse" data-target="#slides">

<i class="fab fa-audible"></i> Slides

<i class="fa fa-fw fa-caret-down"></i>


</a>

                    <ul id="slides" class="collapse">

                        <li><a href="index.php?insert_slide">Insert Slides</a></li>

                        <li><a href="index.php?view_slides">View Slides</a></li>


                    </ul>

                </li>

                <li>
                    <a href="index.php?view_customers"><i class="fa fa-fw fa-edit"></i> View Customers</a>

                </li>

                <li>
                    <a href="index.php?view_orders"><i class="fa fa-fw fa-list"></i> View Orders</a>

                </li>

                <li>
                    <a href="index.php?view_payments"><i class="fas fa-money-check-alt"></i> View Payments</a>

                </li>

                <li>
                    <a href="index.php?chat"><i class="far fa-comments"></i> Chat</a>

                </li>


                <li>


                    <a href="#" data-toggle="collapse" data-target="#users">

                    <i class="fas fa-users"></i> Users

<i class="fa fa-fw fa-caret-down"></i>


</a>

                    <ul id="users" class="collapse">

                        <li><a href="index.php?insert_user">Insert Users</a></li>

                        <li><a href="index.php?view_users">View Users</a></li>

                        <li><a href="index.php?user_profile=<?php echo $admin_id; ?>">Edit Profile</a></li>



                    </ul>

                </li>


                <li>
                    <a href="logout.php"><i class="fas fa-power-off"></i> Sign Out</a>


                </li>


            </ul>



        </div>




    </nav>
    <?php } ?>
