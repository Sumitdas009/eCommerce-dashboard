<?php
session_start();
include("../includes/connection.php");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php', '_self')</script>";
}
else{
?>
<?php
$admin_session = $_SESSION['admin_email']; 
$get_admin = "select * from admins  where admin_email='$admin_session'";
$run_admin = mysqli_query($con,$get_admin);
$row_admin = mysqli_fetch_array($run_admin);
$admin_id = $row_admin['admin_id'];
$admin_name = $row_admin['admin_name'];
$admin_email = $row_admin['admin_email'];
$admin_image = $row_admin['admin_image'];
$admin_country = $row_admin['admin_country'];
$admin_job = $row_admin['admin_job'];
$admin_contact = $row_admin['admin_contact'];
$admin_about = $row_admin['admin_about'];
?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Admin Panel</title>


            <link rel="stylesheet" type="text/css" href="../styles/bootstrap.min.css">
            <link rel="stylesheet" href="../font-awesome/css/fontawesome-all.min.css">
            <link rel="stylesheet" type="text/css" href="../styles/admin-style.css">
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.min.js"></script>
        </head>

        <body>

            <div id="wrapper">

                <?php
        
        
        include("includes/sidebar.php");
         
        
        ?>

                    <div id="page-wrapper">
                        <div class="container-fluid">

                            <?php
                    
                    if(isset($_GET['dashboard'])){
                        include("dashboard.php");
                    }
    
    if(isset($_GET['insert_product'])){
        include("insert_product.php");
    }
    
    if(isset($_GET['view_product'])){
        include("view_product.php");
    }
    
    if(isset($_GET['delete_product'])){
        include("delete_product.php");
    }
    
    if(isset($_GET['edit_product'])){
        include("edit_product.php");
    }
    
    if(isset($_GET['edit_product'])){
        include("edit_product.php");
    }
    
    if(isset($_GET['insert_p_cat'])){

    include("insert_p_cat.php");
    }

    if(isset($_GET['view_p_cat'])){
    include("view_p_cat.php");
    }

    if(isset($_GET['delete_p_cat'])){
    include("delete_p_cat.php");
    }

    if(isset($_GET['edit_p_cat'])){
    include("edit_p_cat.php");
    }

    if(isset($_GET['insert_cat'])){
    include("insert_cat.php");
    }

    if(isset($_GET['view_cat'])){
    include("view_cats.php");
    }

    if(isset($_GET['delete_cat'])){
    include("delete_cat.php");
    }

    if(isset($_GET['edit_cat'])){
    include("edit_cat.php");
    }

    if(isset($_GET['insert_slide'])){
    include("insert_slide.php");
    }


    if(isset($_GET['view_slides'])){
    include("view_slides.php");
    }

    if(isset($_GET['delete_slide'])){
    include("delete_slide.php");
    }
    if(isset($_GET['delete_p_request'])){
    include("delete_p_request.php");
    }


    if(isset($_GET['edit_slide'])){
    include("edit_slide.php");
    }


    if(isset($_GET['view_customers'])){
    include("view_customers.php");
    }

    if(isset($_GET['customer_delete'])){
    include("customer_delete.php");
    }


    if(isset($_GET['view_orders'])){
    include("view_orders.php");
    }

    if(isset($_GET['order_delete'])){
    include("order_delete.php");
    }


    if(isset($_GET['view_payments'])){
    include("view_payments.php");
    }

    if(isset($_GET['payment_delete'])){
    include("payment_delete.php");
    }

    if(isset($_GET['insert_user'])){
    include("insert_user.php");
    }

    if(isset($_GET['view_users'])){
    include("view_users.php");
    }


    if(isset($_GET['user_delete'])){
    include("user_delete.php");
    }
    
    if(isset($_GET['insert_coupon'])){
    include("insert_coupon.php");
    }

    if(isset($_GET['view_coupons'])){
    include("view_coupons.php");
    }

    if(isset($_GET['delete_coupon'])){
    include("delete_coupon.php");
    }

    if(isset($_GET['edit_coupon'])){
    include("edit_coupon.php");

    }
    if(isset($_GET['user_profile'])){
    include("user_profile.php");
    }
    if(isset($_GET['admin_profile'])){
    include("admin_profile.php");
    }
    
    if(isset($_GET['product_request'])){
    include("view_product_request.php");
    }
    
    if(isset($_GET['chat'])){
    include("chat.php");
    }
    
                    ?>


                        </div>
                    </div>
            </div>
            <script src="../js/bootstrap.min.js"></script>
            <script src="../js/jquery.min.js"></script>
        </body>
        </html>
        <?php } ?>
